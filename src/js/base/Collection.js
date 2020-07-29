import EventEmitter from './EventEmitter';

export default class Collection extends EventEmitter {
    constructor() {
        super();

        this.items = {};
    }

    /**
     * Возвращает количество item'ов
     * @return {Number}
     */
    get itemsCount() {
        return Object.keys(this.items).length;
    }

    /**
     * Добавляет в коллекцию
     * @param {Object} item
     */
    add(item) {
        if (Object.keys(item).length === 0) {
            return;
        }

        this.items[this.itemsCount] = item;
    }

    /**
     * Возвращает все элементы коллекции
     * @return {Object}
     */
    all() {
        return this.items;
    }

    /**
     * Мапит коллекцию по полю
     * @param {String} field
     * @return {(* | Null)[]}
     */
    map(field) {
        return Object.values(this.items).map((row) => row[field] || null);
    }

    /**
     * Возвращает первый элемент коллекции
     * @return {* | Null}
     */
    first() {
        return this.itemsCount > 0 ? this.items[0] : null;
    }

    /**
     * Возвращает последний элемент коллекции
     * @return {* | Null}
     */
    last() {
        return this.itemsCount > 0 ? this.items[this.itemsCount - 1] : null;
    }

    /**
     * Возвращает элемент коллекции по индексу
     * @return {* | Null}
     */
    get(index) {
        return this.items[index] || null;
    }

    /**
     * Возвращает элемент коллекции по ноде
     * @param {Node} elem
     * @returns {* | Null}
     */
    getByElement(elem) {
        return Object.values(this.items).find((row) => row.element === elem) || null;
    }

    /**
     * Возвращает элементы коллекции из контейнера
     * @param {Node} container
     * @returns {* | Null}
     */
    getByContainer(container = document.body) {
        return Object.values(this.items).filter((row) => container.contains(row.element));
    }

    /**
     * Проверяет наличие элемента по индексу в коллекции
     * @return {Boolean}
     */
    has(index) {
        return !!this.items[index];
    }

    /**
     * Вызывает метод update у элементов внутри контейнера
     * @param {Node} container
     */
    update(container = document.body) {
        let items = Object.values(this.items).filter((row) => container.contains(row.element));

        try {
            Object.values(items).forEach((row) => row.update());
        } catch (e) {
            throw new Error(`Method "update" does not exists in this collection.`);
        }
    }

    /**
     * Вызывает метод у всем элементов
     * @param {String} name
     * @param {Arguments | Array} args
     */
    execute(name, ...args) {
        Object.values(this.items).forEach((row) => {
            try {
                row[name](...args);
            } catch (e) {
                throw new Error(`Method "${name}" execute failed.`);
            }
        });
    }
}
