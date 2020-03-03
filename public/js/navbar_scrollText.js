
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
