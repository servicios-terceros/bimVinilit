document.addEventListener("scroll", function() {
  var scrollPos = window.scrollY;
  var nav = document.querySelector(".header");
  var mainWrapp = document.querySelector(".main-wrap");
  if (scrollPos > 50) {
    nav.classList.add("active");
    mainWrapp.classList.add("fixed-top");
  } else {
    nav.classList.remove("active");
    mainWrapp.classList.remove("fixed-top");
  }
}

);

// document,addEventListener("DOMContentLoaded", function() {


// let buttons = document.querySelectorAll('.nav-item');

// buttons.forEach(button => {
//     button.addEventListener('click', function () {
        
//         //buttons.forEach(btn => btn.classList.remove('active'));
//         this.classList.toggle('active');        
//     });
// });

// });