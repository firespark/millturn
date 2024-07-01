console.log("Slick inited");
$(document).ready(() => {
  $(".slider-any__container").slick({
    arrows: false,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: false,
    responsive: [
      {
        breakpoint: 1520,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          dots: true,
          variableWidth: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
        },
      },
    ],
  });

  $(".front-fornt__slider").slick({
    arrows: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    nextArrow: $(".front-fornt__slider__controlls .arrow-slider__right"),
    prevArrow: $(".front-fornt__slider__controlls .arrow-slider__left"),
    dots: true,
    appendDots: $(".front-fornt__slider__controlls"),
  });

  $("#slider-popular__container").slick({
    arrows: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    nextArrow: $(
      "div#popular_slider > button.arrow-slider.arrow-slider__right"
    ),
    prevArrow: $("div#popular_slider > button.arrow-slider.arrow-slider__left"),
    dots: true,
    responsive: [
      {
        breakpoint: 1520,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          variableWidth: true,
        },
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          variableWidth: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $("#slider-popular-products__container").slick({
    arrows: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    nextArrow: $(
      "div#popular-products_slider > button.arrow-slider.arrow-slider__right"
    ),
    prevArrow: $(
      "div#popular-products_slider > button.arrow-slider.arrow-slider__left"
    ),
    dots: true,
    responsive: [
      {
        breakpoint: 1520,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          variableWidth: true,
        },
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          variableWidth: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $("#slider-partners__container").slick({
    arrows: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    nextArrow: $("div#partners-slider button.arrow-slider.arrow-slider__right"),
    prevArrow: $("div#partners-slider button.arrow-slider.arrow-slider__left"),
    dots: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $("#slider-manufacturers__container").slick({
    arrows: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    nextArrow: $("div#manufacturers-slider button.arrow-slider.arrow-slider__right"),
    prevArrow: $("div#manufacturers-slider button.arrow-slider.arrow-slider__left"),
    dots: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $("#slider-category__container").slick({
    arrows: true,
    infinite: true,
    slidesToShow: 7,
    slidesToScroll: 1,
    nextArrow: $("div#slider-category button.arrow-slider.arrow-slider__right"),
    prevArrow: $("div#slider-category button.arrow-slider.arrow-slider__left"),
    dots: false,
    responsive: [
      {
        breakpoint: 1520,
        settings: {
          slidesToShow: 7,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $("#slider-related__container").slick({
    arrows: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    nextArrow: $(
      "div#related_slider > button.arrow-slider.arrow-slider__right"
    ),
    prevArrow: $("div#related_slider > button.arrow-slider.arrow-slider__left"),
    dots: true,
    responsive: [
      {
        breakpoint: 1520,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          variableWidth: true,
        },
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          variableWidth: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  if (document.querySelector(".product-main") != null) {
    if (
      document.querySelectorAll(
        ".product-gallery__thumbs .product-gallery__thumb"
      ).length > 4
    ) {
      $(".product-gallery__thumbs").slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        vertical: true,
        arrows: true,
        nextArrow: $(".arrow-slider__bot"),
        prevArrow: $(".arrow-slider__top"),
      });
    }
  }
});
