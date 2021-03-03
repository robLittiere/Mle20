document.addEventListener( 'DOMContentLoaded', function () {
    let splide = new Splide( '.splide', {
        type : 'loop',
        drag: true,
        autoplay: true,
        pauseOnHover: false,
        interval: 5000,
        speed: 400,
        heightRatio: 0.4,
        cover      : true,
        rewind: true,
        classes: {
            arrows: 'splide__arrows your-class-arrows',
            arrow : 'splide__arrow your-class-arrow',
            prev  : 'splide__arrow--prev prev__arrow',
            next  : 'splide__arrow--next next__arrow',
        },

    });

    splide.mount();
    
});



