import Collection from '../../base/Collection';
import loadScript from '../../helpers/loadScript';

const defaultOptions = Object.freeze({
    width: '100%',
    height: '100%',
    host: 'vimeo',
});

const VIMEO_HOST = 'https://player.vimeo.com';
const YOUTUBE_HOST = 'https://www.youtube.com';

const VideoModalCollection = new class VideoModalCollection extends Collection {
    constructor(options = {}) {
        super();

        document.addEventListener('DOMContentLoaded', () => {
            this.fill(options);
        });
    }

    fill(options = {}) {
        let container = options.container || document.body;

        container.querySelectorAll('[data-video-modal]').forEach((item) => {
            if (!this.getByElement(item)) {
                this.add(new VideoModal({ element: item, ...options }));
            }
        });
    }
};

export default window.VideoModalCollection = VideoModalCollection;

class VideoModal {
    constructor({ element, ...options }) {
        this.element = element;
        this.options = options;
        this.currentVideo = {};
        this.videos = {};
        this.opened = false;
        this.frame = this.element.querySelector('[data-video-modal-frame]');

        if (!this.frame) {
            return;
        }

        this.element.querySelector('[data-video-modal-close]').addEventListener('click', () => this.close());
        this.element.addEventListener('click', event => this.onClick(event));
        document.addEventListener('keydown', event => this.onKeydown(event));

        this.handleVideos();
    }

    handleVideos() {
        document.querySelectorAll('[data-video-modal-show]').forEach((item, index) => {
            let dataParams = item.getAttribute('data-video-modal-show');

            try {
                dataParams = JSON.parse(dataParams);
            } catch (error) {
                dataParams = {};
            }

            let params = { ...defaultOptions, ...dataParams };

            this.videos[index] = params;
            this.videos[index].element = item;

            // switch (params.host) {
            //     case 'vimeo': {
            //         //
            //         break;
            //     }
            //
            //     case 'youtube': {
            //         const poster = item.querySelector('[data-youtube-poster]');
            //
            //         if (poster) {
            //             const size = poster.getAttribute('data-youtube-poster') === 'max'
            //                 ? 'maxresdefault'
            //                 : 'mqdefault';
            //
            //             if (window.getComputedStyle(poster).getPropertyValue('background-image') === 'none') {
            //                 const url = `https://i1.ytimg.com/vi/${this.videos[index].id}/${size}.jpg`;
            //
            //                 poster.style.setProperty('background-image', `url('${url}')`);
            //
            //                 this.videos[index].poster = url;
            //             } else {
            //                 this.videos[index].poster = window.getComputedStyle(poster)
            //                     .getPropertyValue('background-image')
            //                     .slice(4, -1)
            //                     .replace(/['"]/g, '');
            //             }
            //         }
            //
            //         break;
            //     }
            // }

            item.addEventListener('click', () => this.open(params));
        });
    }

    YTinit() {
        this.currentVideo.player = new YT.Player(this.element.querySelector('[data-video-modal-frame]').getAttribute('id'), {
            host: YOUTUBE_HOST,
            height: this.currentVideo.height,
            width: this.currentVideo.width,
            videoId: this.currentVideo.id,
            playerVars: {
                'autoplay': true,
            },
            events: {
                'onStateChange': ({ data }) => {
                    this.currentVideo.state = data;
                }
            }
        });
    }

    Vimeoinit() {
        this.currentVideo.player = new Vimeo.Player(this.element.querySelector('[data-video-modal-frame]').getAttribute('id'), {
            url: `${VIMEO_HOST}/video/${this.currentVideo.id}`,
            id: this.currentVideo.id,
            autoplay: true,
            width: this.currentVideo.width,
            height: this.currentVideo.height,
            responsive: true,
        });
    }

    play(params = {}) {
        params = { ...defaultOptions, ...params };

        switch (params.host) {
            case 'vimeo': {
                if (typeof Vimeo === 'undefined') {
                    loadScript(`${ VIMEO_HOST }/api/player.js`).then(() => {
                        this.play(params);
                    });
                    return;
                }

                if (typeof this.currentVideo.player === 'undefined') {
                    this.currentVideo = params;
                    this.Vimeoinit();
                } else {
                    if (this.currentVideo.id !== params.id) {
                        this.currentVideo.player.destroy();
                        this.currentVideo = params;
                        this.Vimeoinit();
                    }
                }

                this.currentVideo.player.play();
                break;
            }

            case 'youtube': {
                if (typeof YT === 'undefined') {
                    loadScript(`${YOUTUBE_HOST}/iframe_api`).then(() => {
                        window.onYouTubeIframeAPIReady = () => this.play(params);
                    });
                    return;
                }

                if (typeof this.currentVideo.player === 'undefined') {
                    this.currentVideo = params;
                    this.YTinit();
                } else {
                    if (this.currentVideo.id !== params.id) {
                        this.currentVideo.player.destroy();
                        this.currentVideo = params;
                        this.YTinit();
                    }
                }

                this.currentVideo.state && this.currentVideo.player.playVideo();
                break;
            }
        }
    }

    pause() {
        switch (this.currentVideo.host) {
            case 'vimeo': {
                this.currentVideo.player.pause();
                break;
            }

            case 'youtube': {
                this.currentVideo.player.pauseVideo();
                break;
            }
        }
    }

    open(params) {
        this.element.classList.add('--shown');
        this.opened = true;

        this.play(params);
    }

    close() {
        this.pause();

        this.element.classList.remove('--shown');
        this.opened = false;
    }

    onClick(event) {
        this.element === event.target && this.close();
    }

    onKeydown(event) {
        event.keyCode === 27 && this.opened && this.close();
    }
}
