/**
 * Explain words
 */
document.addEventListener('DOMContentLoaded', () => {
    const tooltips = document.querySelectorAll('.memoir-tooltip');
    tooltips.forEach(item => {
        item.addEventListener('click', (e) => {
            e.stopPropagation();
            const box = item.querySelector('.memoir-tooltip-box');
            if (!box) return;

            const visible = box.style.visibility === 'visible';
            document
                .querySelectorAll('.memoir-tooltip-box')
                .forEach(el => {
                    el.style.opacity = '0';
                    el.style.visibility = 'hidden';
                });
            if (!visible) {
                box.style.opacity = '1';
                box.style.visibility = 'visible';
            }
        });

    });
    document.addEventListener('click', () => {
        document
            .querySelectorAll('.memoir-tooltip-box')
            .forEach(el => {
                el.style.opacity = '0';
                el.style.visibility = 'hidden';
            });

    });

});


