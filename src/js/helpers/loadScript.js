export  default function loadScript(url) {
    const script = document.createElement('script');
    const firstScriptTag = document.getElementsByTagName('script')[0];

    script.src = url;
    firstScriptTag.parentNode.insertBefore(script, firstScriptTag);

    return new Promise((resolve, reject) => {
        script.onload = () => {
            resolve();
        };

        script.onerror = () => {
            reject();
        };
    });
}
