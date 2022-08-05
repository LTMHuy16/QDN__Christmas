
export default function music() {

  $('.music-list .slider-info').owlCarousel({
    items: 1,
    dotsEach: false,
    loop: true,
    nav: true,
    smartSpeed: 1000,
    mouseDrag: false,
    navText: ['<i class="fal fa-angle-left"></i>','<i class="fal fa-angle-right"></i>']
  });

  $('.music-list .slider-image').owlCarousel({
    items: 1,
    dotsEach: false,
    loop: true,
    nav: false,
    smartSpeed: 1000,
    mouseDrag: false
  });

  $('.music-list .slider-info .owl-nav .owl-prev').click(function(){
    console.log('prev');
    $('.music-list .slider-image').trigger('prev.owl.carousel', [1000]);
  });

  $('.music-list .slider-info .owl-nav .owl-next').click(function(){
    console.log('next');
    $('.music-list .slider-image').trigger('next.owl.carousel', [1000]);
  });

}