$(document).ready(function () {
  //owl carousel slider plugin
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: true,
    autoplay: false,
    responsive: {
      0: {
        items: 1
      },
      774: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  })
  
// $('.owl-item .col-sm-4 h1,.owl-item.cloned .col-sm-4 h1').removeClass("asda")
// $('.owl-item.active .col-sm-4 h1,.owl-item.cloned.active .col-sm-4 h1').addClass("asda")

});    // Go to the next item
