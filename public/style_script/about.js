$( "#image1" ).hover(
    function() {
        $('#image1').css( "transform", "scale(1.04)" );

        $('#image2').css( "filter", "grayscale(70%)" );
    }, function() {
        $('#image1').css( "transform", "scale(1)" );
        $('#image2').css( "filter", "grayscale(0)" );

    }
);

$( "#image2" ).hover(
    function() {
        $('#image2').css( "transform", "scale(1.04)" );

        $('#image1').css( "filter", "grayscale(70%)" );
    }, function() {
        $('#image2').css( "transform", "scale(1)" );
        $('#image1').css( "filter", "grayscale(0)" );

    }
);