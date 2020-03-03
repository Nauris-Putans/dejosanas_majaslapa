$(window).on("load",function() {
    function fade() {
        const animation_height = $(window).innerHeight() * 0.25;
        const ratio = Math.round((1 / animation_height) * 10000) / 10000;

        $('.fade-in').each(function() {

            const objectTop = $(this).offset().top;
            const windowBottom = $(window).scrollTop() + $(window).innerHeight();

            if ( objectTop < windowBottom ) {
                if ( objectTop < windowBottom - animation_height ) {
                    $(this).css( {  // Fully visible //
                        transition: 'opacity 2.5s linear',
                        opacity: 1
                    } );

                } else {    // Fading in/out //
                    $(this).css( {
                        transition: 'opacity .75s linear',
                        opacity: (windowBottom - objectTop) * ratio
                    } );
                }
            }
        });
    }
    $(`.fade-in`).css( 'opacity', 0 );
    fade();
    $(window).scroll(function() {fade();});

});

