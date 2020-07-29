(function () {
    document.addEventListener('DOMContentLoaded', () => {
        const iconsContainer = document.createElement('div');

        iconsContainer.style.height = '0';
        iconsContainer.style.width = '0';
        iconsContainer.style.position = 'fixed';
        iconsContainer.style.visibility = 'hidden';

        document.body.appendChild(iconsContainer);

        fetch('/dist/img/icons/_icons-16x16.svg').then(response => {
            const pack = document.createElement('div');
            pack.setAttribute('id', 'svg-icons-16x16');

            response.text().then(data => {
                pack.innerHTML = data;
                iconsContainer.append(pack);
            });
        });

        fetch('/dist/img/icons/_icons-24x24.svg').then(response => {
            const pack = document.createElement('div');
            pack.setAttribute('id', 'svg-icons-24x24');

            response.text().then(data => {
                pack.innerHTML = data;
                iconsContainer.append(pack);
            });
        });

        fetch('/dist/img/icons/_icons-48x48.svg').then(response => {
            const pack = document.createElement('div');
            pack.setAttribute('id', 'svg-icons-48x48');

            response.text().then(data => {
                pack.innerHTML = data;
                iconsContainer.append(pack);
            });
        });
    });
})();
