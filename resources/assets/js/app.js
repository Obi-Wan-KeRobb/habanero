import jquery from 'jquery';
window.jQuery = jquery;
window.$ = jquery;

// import './owl.carousel/dist/assets/owl.carousel.css';
import owlCarousel from 'owl.carousel';

console.log("main js")

$('#showcase-food').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
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