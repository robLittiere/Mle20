
/**
 * This is where we handle our scrolling effects
 * Library used is : Scroll Reveal
 */

//Reset:true allows us to repeat the effect even it already happened once
ScrollReveal({reset: true});

//Add scrolling effect on home images
ScrollReveal().reveal('.scrollImage__anchor', { delay: 70, distance: '25%',
origin: 'bottom',
});

//Add scrolling effect on home text placed on the left
ScrollReveal().reveal('.scrollContent__anchor', { delay: 70, distance: '40%',
origin: 'left', scale: '0.8'
});

//Add scrolling effect on home text placed on the right
ScrollReveal().reveal('.scrollContent__anchorInverted', { delay: 70, distance: '40%',
origin: 'right', scale: '0.8'
});

//Add scrolling effect on footer
ScrollReveal().reveal('.footer__banner', { delay: 50, distance: '10%',
origin: 'bottom',
});

//Add scrolling effect on store items
ScrollReveal().reveal('.storeElement', { delay: 40, distance: '15%',
origin: 'bottom',
});