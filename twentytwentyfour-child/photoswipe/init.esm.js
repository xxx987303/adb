/**
 * AI fantasms
 */

import PhotoSwipeLightbox from './photoswipe-lightbox.esm.js';
import PhotoSwipe         from './photoswipe.esm.js';

const images = document.querySelectorAll('.entry-content figure.wp-block-image');

/*
  Why width and height equal to 1?
  - PhotoSwipe wants dimensions.
  - WordPress usually doesn’t provide them.
  We’ll calculate them dynamically.
*/
images.forEach((figure)=>{
    const link = figure.querySelector('a');
    if(!link) return;
    link.dataset.pswpWidth  = 1;
    link.dataset.pswpHeight = 1;
});

/*
  We never created a gallery.
  The page itself is the gallery.
*/
const lightbox = new PhotoSwipeLightbox({
    gallery: '.entry-content',
    children: 'figure.wp-block-image > a',
    pswpModule: PhotoSwipe
});

/*
  PhotoSwipe lets us modify every slide before it is shown.
  We’ll calculate the image size.
  This means you don’t have to enter dimensions manually.
*/

lightbox.on('contentLoad',    
	    ({content})=>{
		const img = new Image();
		img.onload = ()=>{
		    content.width  = img.naturalWidth;
		    content.height = img.naturalHeight;
		};
		img.src = content.data.src;});

/*
  Captions.
*/
lightbox.on('uiRegister',
	    ()=>{
		lightbox.pswp.ui.registerElement({
		    name:'caption',
		    order:9,
		    appendTo:'root',
		    html:'',
		    onInit:(el,pswp)=>{
			pswp.on('change',			    
				()=>{
				    const fig = pswp.currSlide.data.element.closest('figure');
				    const cap = fig.querySelector('figcaption');
				    el.innerHTML = cap ? cap.innerHTML : '';
				});
		    }
		});
	    });

/*
  Finally
*/
lightbox.init();
