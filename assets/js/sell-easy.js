document.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('.sell-easy__item');
    const desktopImage = document.getElementById('sellEasyDesktopImage');

    if (!items.length || !desktopImage) return;

    items.forEach(item => {
        item.addEventListener('click', () => {
            items.forEach(i => i.classList.remove('is-active'));
            item.classList.add('is-active');

            const newImage = item.dataset.image;
            const newAlt = item.dataset.alt || '';
            if (newImage) {
                desktopImage.src = newImage;
                desktopImage.alt = newAlt;
            }
        });
    });
});
