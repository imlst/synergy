import Collection from '../../base/Collection';
import EventEmitter from '../../base/EventEmitter';
import shaving from '../../helpers/shaving';

const SpeakerCardCollection = new class SpeakerCardCollection extends Collection {
    constructor(options = {}) {
        super();

        document.addEventListener('DOMContentLoaded', () => {
            this.fill(options);
        });
    }

    fill(options = {}) {
        let container = options.container || document.body;

        container.querySelectorAll('[data-speaker-card]').forEach((item) => {
            if (!this.getByElement(item)) {
                this.add(new SpeakerCard({ element: item, ...options }));
            }
        });

        this.emit('filled');
    }
};

export default window.SpeakerCardCollection = SpeakerCardCollection;

class SpeakerCard extends EventEmitter {
    constructor({ element, ...options }) {
        super();

        this.element = element;
        this.options = options;
        this.name = this.element.querySelector('[data-speaker-card-name]');
        this.description = this.element.querySelector('[data-speaker-card-description]');

        shaving({ element: this.name, lines: 2 }).then(() => {
            if (this.name.offsetHeight < 30) {
                shaving({ element: this.description, lines: 3 });
            } else {
                shaving({ element: this.description, lines: 2 });
            }
        });
    }

}
