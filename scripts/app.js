$(document).ready(function () {
  $(".slider-inner").slick({
    autoplay: true,
    autoplaySpeed: 2000,
    dots: false,
    arrows: true,
    slidesToShow: 5,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});

$(document).ready(function () {
  $("#swiper-wrapper").slick({
    autoplaySpeed: 2000,
    dots: true,
    arrows: false,
    slidesToShow: 1,
  });
});

function buttonClick1() {
  redirectToPrice('http://mtec.by/ru/главная/service');
}
function redirectToPrice(url) {
  window.location.href = url;
}

function buttonClick4() {
  redirectToResidents('residents.html');
}
function redirectToResidents(url) {
  window.location.href = url;
}




$(document).ready(function(){
  window.buttonClick3 = function() {
    $('html, body').animate({
      scrollTop: $('.news').offset().top
    }, 2000);
  }
});
