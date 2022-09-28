$( document ).ready(function() {
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
  
  
  const selectCountries = document.getElementById("countries");
  
  async function getContries() {
    let obj;
  
    const res = await fetch('./assets/json/countries.json')
  
    obj = await res.json();
  
   return obj;
  
  
  }
  
  
    
    getContries().then((obj) =>{
     
    obj.forEach(element => {
  
      $(selectCountries).append($('<option>', { 
        value: element.name,
        text : element.name 
    }));
      
    });
  })
  
  });
  
  // document,addEventListener("DOMContentLoaded", function() {
  
  
  // let buttons = document.querySelectorAll('.nav-item');
  
  // buttons.forEach(button => {
  //     button.addEventListener('click', function () {
          
  //         //buttons.forEach(btn => btn.classList.remove('active'));
  //         this.classList.toggle('active');        
  //     });
  // });
  
  // });