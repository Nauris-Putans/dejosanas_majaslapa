
const faders = document.querySelectorAll(".fade-in");
const faders_navbar = document.querySelectorAll(".fade-in-navbar");

// ============== Appear function for all things ============== //

let appearOptions = {
    threshold: 0,
    rootMargin: "0px 0px -250px 0px"
};

let appearOnScroll = new IntersectionObserver(function(
    entries,
    appearOnScroll
    ) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {

            } else {
                entry.target.classList.add("appear");
                appearOnScroll.unobserve(entry.target);
            }
        });
    },
    appearOptions);

faders.forEach(fader => {
    appearOnScroll.observe(fader);
});


 // ============== Appear function for navbar and (Text with image in center) ============== //

 const appearOptions_navbar = {
     threshold: 0,
     rootMargin: "0px 0px -250px 0px"
 };

 const appearOnScroll_navbar = new IntersectionObserver(function (
     entries,
     appearOnScroll_navbar
     ) {
         entries.forEach(entry => {
             if (!entry.isIntersecting) {

             } else {
                 entry.target.classList.add("appear");
                 appearOnScroll_navbar.unobserve(entry.target);
             }
         });
     },
     appearOptions);

 faders_navbar.forEach(fader => {
     appearOnScroll.observe(fader);
 });






// $(function(){  // $(document).ready shorthand
//     $('.monster').fadeIn('slow');
// });
//
// $(document).ready(function() {
//
//     /* Every time the window is scrolled ... */
//     $(window).scroll( function(){
//
//         /* Check the location of each desired element */
//         $('.hide').each( function(i){
//
//             var bottom_of_object = $(this).position().top + $(this).outerHeight();
//             var bottom_of_window = $(window).scrollTop() + $(window).height();
//
//             /* If the object is completely visible in the window, fade it it */
//             if( bottom_of_window > bottom_of_object ){
//
//                 $(this).animate({'opacity':'1'},3000);
//
//             }
//
//             else {
//                 $(this).animate({'opacity':'0'},3000);
//             }
//
//         });
//
//     });
//
// });





// $(window).on("load",function() {
//     $(window).scroll(function() {
//         var windowBottom = $(this).scrollTop() + $(this).innerHeight();
//         $(".fade-in").each(function() {
//             /* Check the location of each desired element */
//             var objectBottom = $(this).offset().top + $(this).outerHeight();
//
//             /* If the element is completely within bounds of the window, fade it in */
//             if (objectBottom < windowBottom) { //object comes into view (scrolling down)
//                 if ($(this).css("opacity")==0) {$(this).fadeTo(1,1);}
//             } else { //object goes out of view (scrolling up)
//                 if ($(this).css("opacity")==1) {$(this).fadeTo(1,0);}
//             }
//         });
//     }).scroll(); //invoke scroll-handler on page-load
// });
