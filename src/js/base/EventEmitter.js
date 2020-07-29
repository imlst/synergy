export default class EventEmitter {
    constructor() {
        this.eventListeners = {};
    }

    emit(eventName) {
        let i, listeners, length, args = [].slice.call(arguments, 1);

        if (typeof this.eventListeners[eventName] === 'object') {
            listeners = this.eventListeners[eventName].slice();
            length = listeners.length;

            for (i = 0; i < length; i++) {
                listeners[i].apply(this, args);
            }
        }
    };

    on(eventName, listener) {
        if (typeof this.eventListeners[eventName] !== 'object') {
            this.eventListeners[eventName] = [];
        }

        this.eventListeners[eventName].push(listener);
    }
}