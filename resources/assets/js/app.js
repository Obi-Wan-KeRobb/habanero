import jquery from 'jquery';
window.jQuery = jquery;
window.$ = jquery;

import owlCarousel from 'owl.carousel';

console.log("main js")

$('#showcase-food').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  navText: ["<div class='carousel-back'></div>","<div class='carousel-next'></div>"],
//   autoplay: true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
})

class Site {
  constructor(mainDiv) {
    this.classDiv = mainDiv;
    this.initHamburger();
  }

  initHamburger() {
    let toggler = document.querySelector('.toggler-navigation'),
        divToAddClass = this.classDiv

    toggler.onclick = function() {
      // console.log(divToAddClass);
      divToAddClass.classList.toggle('navigation-open')
    }
  }
}

let appMain = document.querySelector('.app');

let app = new Site(appMain);