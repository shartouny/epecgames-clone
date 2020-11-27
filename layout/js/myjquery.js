$(document).ready(function(){
//owl carousel slider plugin
$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  dots:true,
  autoplay:500,
  responsive:{
      0:{
          items:1
      },
      774:{
          items:1
      },
      1000:{
          items:1
      }
  }
})
// Go to the next item
$('.customNextBtn').click(function() {
  $('.owl-carousel').trigger('next.owl.carousel');
})
// Go to the previous item
$('.customPrevBtn').click(function() {
  // With optional speed parameter
  // Parameters has to be in square bracket '[]'
  $('.owl-carousel').trigger('prev.owl.carousel', [300]);
})
});    // Go to the next item
