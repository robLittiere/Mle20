
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()
    console.log(window.pageYOffset)
    console.log(sticky)};

// Get the navbar
var navbar = document.getElementsByClassName("navbar")[0];

// Get the offset position of the navbar
var sticky = navbar.offsetTop;


// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
    $( "#store__popup" ).css('margin-top', '0px');
    $( "#experience__popup" ).css('margin-top', '0px');
    $( "#company__popup" ).css('margin-top', '0px');
    $( "#conciergerie__popup" ).css('margin-top', '0px');
    $( "#partner__popup" ).css('margin-top', '0px');
    $( "#contact__popup" ).css('margin-top', '0px');
    $( "#infos__popup" ).css('margin-top', '0px');
    



  } else {
    navbar.classList.remove("sticky");
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
    /* For every button, if we hover on them, we hide popups except the popup linked to the button we're hovering */
    $( "#store__popup" ).css('display', 'none');
    $( "#experience__popup" ).css('display', 'none');
    $( "#company__popup" ).css('display', 'none');
    $( "#conciergerie__popup" ).css('display', 'none');
    $( "#partner__popup" ).css('display', 'none');
    $( "#contact__popup" ).css('display', 'none');
    $( "#infos__popup" ).css('display', 'none');
  });

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


$( ".header__top" ).mouseover(function() {
    /* If we hover the store container, we hide navbar popups*/
  $( "#store__popup" ).css('display', 'none');
  $( "#experience__popup" ).css('display', 'none');
  $( "#company__popup" ).css('display', 'none');
  $( "#conciergerie__popup" ).css('display', 'none');
  $( "#partner__popup" ).css('display', 'none');
  $( "#contact__popup" ).css('display', 'none');
  $( "#infos__popup" ).css('display', 'none');
  $('.header_bottom').css('border-bottom', '1px solid gray')

});
/* Store button // Bouton boutique */

$('#store__button').hover(
    function() {
        /* First we get the position offset of our navbar since its sticky, it will change */
        var topPos = $(".header_bottom")[0].getBoundingClientRect().top + $(window)['scrollTop']();

        let position = $('#store__button').position();
        
        $('#store__popup').css('display', 'flex')
        $('#store__popup').css('left', position.left )
        $('#store__popup').css('top', position.top + 47)

        $('.header_bottom').css('border-bottom', '0px')
        
    }
);

/* Experience button // Bouton Dégustations et expérience */
$('#experience__button').hover(
    function() {
        var topPos = $(".header_bottom")[0].getBoundingClientRect().top + $(window)['scrollTop']();
        let position = $('#experience__button').position();
        $('#experience__popup').css('display', 'flex')
        $('#experience__popup').css('left', position.left)
        $('#experience__popup').css('top', position.top + 47)
        $('.header_bottom').css('border-bottom', '0px')
        
    }
);

/* Company button // Bouton Espace Entreprise */
$('#company__button').hover(
    function() {
        var topPos = $(".header_bottom")[0].getBoundingClientRect().top + $(window)['scrollTop']();
        let position = $('#company__button').position();
        $('#company__popup').css('display', 'flex')
        $('#company__popup').css('left', position.left)
        $('#company__popup').css('top', position.top + 47)
        $('.header_bottom').css('border-bottom', '0px')
        
    }
);

/* Conciergerie button // Bouton Conciergerie */
$('#conciergerie__button').hover(
    function() {
        var topPos = $(".header_bottom")[0].getBoundingClientRect().top + $(window)['scrollTop']();

        let position = $('#conciergerie__button').position();
        $('#conciergerie__popup').css('display', 'flex')
        $('#conciergerie__popup').css('left', position.left)
        $('#conciergerie__popup').css('top', position.top + 47)
        $('.header_bottom').css('border-bottom', '0px')
        
    }
);

/* Partner button // Bouton Partenaires */
$('#partner__button').hover(
    function() {
        var topPos = $(".header_bottom")[0].getBoundingClientRect().top + $(window)['scrollTop']();

        let position = $('#partner__button').position();
        $('#partner__popup').css('display', 'flex')
        $('#partner__popup').css('left', position.left)
        $('#partner__popup').css('top', position.top + 47)
        $('.header_bottom').css('border-bottom', '0px')
        
    }
);

/* Contact button // Bouton Contact */
$('#contact__button').hover(
    function() {
        var topPos = $(".header_bottom")[0].getBoundingClientRect().top + $(window)['scrollTop']();

        let position = $('#contact__button').position();
        $('#contact__popup').css('display', 'flex')
        $('#contact__popup').css('left', position.left)
        $('#contact__popup').css('top', position.top + 47)
        $('.header_bottom').css('border-bottom', '0px')
        
    }
);

/* Infos button // Bouton Qui Sommes-nous */
$('#infos__button').hover(
    function() {
        var topPos = $(".header_bottom")[0].getBoundingClientRect().top + $(window)['scrollTop']();

        let position = $('#infos__button').position();
        $('#infos__popup').css('display', 'flex')
        $('#infos__popup').css('left', position.left)
        $('#infos__popup').css('top', position.top + 47)
        $('.header_bottom').css('border-bottom', '0px')
        
    }
);
