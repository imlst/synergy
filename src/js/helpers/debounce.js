export default function debounce(func, ms, immediate) {
    let timeout;

    return function() {
        let context = this, args = arguments;

        let later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };

        let callNow = immediate && !timeout;

        clearTimeout(timeout);

        timeout = setTimeout(later, ms);

        if (callNow) func.apply(context, args);
    };
};