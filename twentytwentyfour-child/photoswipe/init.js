/*
import Lightbox from '/photoswipe/photoswipe-lightbox.esm.js';
const lightbox = new Lightbox({
    gallery: '#my-gallery',
    children: 'a',
    pswpModule: () => import('/photoswipe/photoswipe.esm.js')
});
lightbox.init();
    */

const lightbox = new PhotoSwipeLightbox({
    gallery: '.entry-content',
    children: 'a',
    pswpModule: PhotoSwipe
});

lightbox.init();
