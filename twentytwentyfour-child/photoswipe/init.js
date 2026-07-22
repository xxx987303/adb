import PhotoSwipeLightbox from './photoswipe-lightbox.esm.js';

const lightbox = new PhotoSwipeLightbox({
    gallery: '.entry-content',
    children: 'a:has(img)',
    pswpModule: () => import('./photoswipe.esm.js')
});

lightbox.init();
