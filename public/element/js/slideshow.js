/**
 * We'll use a simple lirbary for our slider
 * Library used is : Splider
 * We wait for the DOM to load and we mount a slider with the correct images.
 * Then we set it with different options
 */


document.addEventListener( 'DOMContentLoaded', function () {
    let splide = new Splide( '.splide', {
        type : 'loop',
        drag: true,
        autoplay: true,
        pauseOnHover: false,
        interval: 5000,
        speed: 400,
        heightRatio: 0.45,
        cover : true,
        rewind: true,
        arrows: true,
        classes: {
            arrows: 'splide__arrows your-class-arrows',
            arrow : 'splide__arrow your-class-arrow',
            prev  : 'splide__arrow--prev prev__arrow',
            next  : 'splide__arrow--next next__arrow',
        },

    });

    splide.mount();
    
});



