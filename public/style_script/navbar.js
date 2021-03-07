
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {fix_navbar()};
    

// Get the navbar
var navbar = document.getElementsByClassName("navbar")[0];

// Get the offset position of the navbar, we'll modify this to choose manually when we want the navbar to get sticky
var sticky = navbar.offsetTop + 88;




/**
 * Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
 **/
function fix_navbar() {
    //If we reach our sticky position
    if (window.pageYOffset >= sticky) {
        //We change manually some navbar items styles, specificall the margins.
        navbar.classList.add("sticky")
        $('.navbar').css('width', '100%');
        $( "#store__popup" ).css('margin-top', '-2px');
        $( "#experience__popup" ).css('margin-top', '-2px');
        $( "#company__popup" ).css('margin-top', '-2px');
        $( "#conciergerie__popup" ).css('margin-top', '-2px');
        $( "#partner__popup" ).css('margin-top', '-2px');
        $( "#contact__popup" ).css('margin-top', '-2px');
        $( "#infos__popup" ).css('margin-top', '-2px');

    


    //If we dont we correct the styles. We add margin simply to make it more beautiful
  } else {
    navbar.classList.remove("sticky");
    $('.navbar').css('width', '80%');

    $( "#store__popup" ).css('margin-top', '15px');
    $( "#experience__popup" ).css('margin-top', '15px');
    $( "#company__popup" ).css('margin-top', '15px');
    $( "#conciergerie__popup" ).css('margin-top', '15px');
    $( "#partner__popup" ).css('margin-top', '15px');
    $( "#contact__popup" ).css('margin-top', '15px');
    $( "#infos__popup" ).css('margin-top', '15px');

  }
}



/* Buttons mouseovers */
$( ".header__button" ).mouseover(function() {
    /* For every button, if we hover on them, we hide popups except the popup linked to the button we're hovering 
    * We'll repeat this code for every button on the navbar
    * We put a display none on all the buttons so when we hover them nothing shows but the one we're hovering. 
    * We know this because the "display: none" will be overrided by the other mouseovers.
    */
    $( "#store__popup" ).css('display', 'none');
    $( "#experience__popup" ).css('display', 'none');
    $( "#company__popup" ).css('display', 'none');
    $( "#conciergerie__popup" ).css('display', 'none');
    $( "#partner__popup" ).css('display', 'none');
    $( "#contact__popup" ).css('display', 'none');
    $( "#infos__popup" ).css('display', 'none');
  });


    //We hide the popup displays whenever we hover another container that is not the navbar on the page
    //This is basically how we get our navbar effect
$( ".store__container" ).mouseover(function() {
    $( "#store__popup" ).css('display', 'none');
    $( "#experience__popup" ).css('display', 'none');
    $( "#company__popup" ).css('display', 'none');
    $( "#conciergerie__popup" ).css('display', 'none');
    $( "#partner__popup" ).css('display', 'none');
    $( "#contact__popup" ).css('display', 'none');
    $( "#infos__popup" ).css('display', 'none');
    $('.header_bottom').css('border-bottom', '1px solid gray')

});

$( ".logo__container" ).mouseover(function() {
    $( "#store__popup" ).css('display', 'none');
    $( "#experience__popup" ).css('display', 'none');
    $( "#company__popup" ).css('display', 'none');
    $( "#conciergerie__popup" ).css('display', 'none');
    $( "#partner__popup" ).css('display', 'none');
    $( "#contact__popup" ).css('display', 'none');
    $( "#infos__popup" ).css('display', 'none');
    $('.header_bottom').css('border-bottom', '1px solid gray')
  
  });


$( ".home__container" ).mouseover(function() {
    $( "#store__popup" ).css('display', 'none');
    $( "#experience__popup" ).css('display', 'none');
    $( "#company__popup" ).css('display', 'none');
    $( "#conciergerie__popup" ).css('display', 'none');
    $( "#partner__popup" ).css('display', 'none');
    $( "#contact__popup" ).css('display', 'none');
    $( "#infos__popup" ).css('display', 'none');
    $('.header_bottom').css('border-bottom', '1px solid gray')
  
  });


$( ".global__container" ).mouseover(function() {
    $( "#store__popup" ).css('display', 'none');
    $( "#experience__popup" ).css('display', 'none');
    $( "#company__popup" ).css('display', 'none');
    $( "#conciergerie__popup" ).css('display', 'none');
    $( "#partner__popup" ).css('display', 'none');
    $( "#contact__popup" ).css('display', 'none');
    $( "#infos__popup" ).css('display', 'none');
    $('.header_bottom').css('border-bottom', '1px solid gray')

});

/**
 * Right here, we'll have all our button hover effects
 * When we hover a button; we'll change the display of its according popup
 * We will get the button position to display perfectly the popup right under the button
 */

/* Store button // Bouton boutique */
$('#store__button').hover(
    function() {
        //We get the position of one button
        let position = $('#store__button').position();
        //We change the popup display and we set its position
        $('#store__popup').css('display', 'flex')
        $('#store__popup').css('left', position.left )
        $('#store__popup').css('top', position.top + 53)
        //We changer our header border to create smooth effect
        $('.header_bottom').css('border-bottom', '1px solid white')
        
    }
);


$('#store__button').hover(
    function() {
        //We get the position of one button
        let position = $('#store__button').position();
        //We change the popup display and we set its position
        $('#store__popup').css('display', 'flex')
        $('#store__popup').css('left', position.left )
        $('#store__popup').css('top', position.top + 53)
        //We changer our header border to create smooth effect
        $('.header_bottom').css('border-bottom', '1px solid white')
        
    }
);

/* Experience button // Bouton Dégustations et expérience */
$('#experience__button').hover(
    function() {
        let position = $('#experience__button').position();
        $('#experience__popup').css('display', 'flex')
        $('#experience__popup').css('left', position.left)
        $('#experience__popup').css('top', position.top + 53)
        $('.header_bottom').css('border-bottom', '1px solid white')
        
    }
);

/* Company button // Bouton Espace Entreprise */
$('#company__button').hover(
    function() {
        let position = $('#company__button').position();
        $('#company__popup').css('display', 'flex')
        $('#company__popup').css('left', position.left)
        $('#company__popup').css('top', position.top + 53)
        $('.header_bottom').css('border-bottom', '1px solid white')
        
    }
);

/* Conciergerie button // Bouton Conciergerie */
$('#conciergerie__button').hover(
    function() {
        let position = $('#conciergerie__button').position();
        $('#conciergerie__popup').css('display', 'flex')
        $('#conciergerie__popup').css('left', position.left)
        $('#conciergerie__popup').css('top', position.top + 53)
        $('.header_bottom').css('border-bottom', '1px solid white')
        
    }
);

/* Partner button // Bouton Partenaires */
$('#partner__button').hover(
    function() {
        let position = $('#partner__button').position();
        $('#partner__popup').css('display', 'flex')
        $('#partner__popup').css('left', position.left)
        $('#partner__popup').css('top', position.top + 53)
        $('.header_bottom').css('border-bottom', '1px solid white')
        
    }
);

/* Contact button // Bouton Contact */
$('#contact__button').hover(
    function() {
        let position = $('#contact__button').position();
        $('#contact__popup').css('display', 'flex')
        $('#contact__popup').css('left', position.left)
        $('#contact__popup').css('top', position.top + 53)
        $('.header_bottom').css('border-bottom', '1px solid white')
        
    }
);

/* Infos button // Bouton Qui Sommes-nous */
$('#infos__button').hover(
    function() {
        let position = $('#infos__button').position();
        $('#infos__popup').css('display', 'flex')
        $('#infos__popup').css('left', position.left)
        $('#infos__popup').css('top', position.top + 53)
        $('.header_bottom').css('border-bottom', '1px solid white')
        
    }
);
