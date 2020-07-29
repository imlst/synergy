import shave from 'shave';

export default function shaving({ element, lines, height }) {
    return new Promise(resolve => {
        if (element instanceof Element) {
            if (typeof lines === 'number') {
                const limit = Math.ceil(parseFloat(window.getComputedStyle(element).lineHeight)) * lines;
                shave(element, limit, { spaces: false });
                resolve();
            } else if (typeof height === 'number') {
                shave(element, height, { spaces: false });
                resolve();
            }
        }
    });
};
