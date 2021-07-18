$(document).ready(function () {
  // banner owl carousel
  $('#banner-area .owl-carousel').owlCarousel({
    dots: true,
    loop: true,
    items: 1,
    autoplay: true,
    slideTransition: '1',
    autoplayTimeout: 2000,
    autoplaySpeed: 7000,
    autoplayHoverPause: true,
  })

  // top sale owl carousel
  $('#Shelf .owl-carousel').owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    autoplay: true,
    slideTransition: 'linear',
    autoplayTimeout: 2000,
    autoplaySpeed: 6000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 4,
      },
    },
  })

  $('#testimonial .owl-carousel').owlCarousel({
    dots: true,
    loop: true,
    items: 1,
    autoplay: true,
    slideTransition: '1',
    autoplayTimeout: 2000,
    autoplaySpeed: 7000,
    autoplayHoverPause: true,
  })

  // isotope filter
  var $grid = $('.grid').isotope({
    itemSelector: '.grid-item',
    layoutMode: 'fitRows',
  })

  // filter items on button click
  $('.button-group').on('click', 'button', function () {
    var filterValue = $(this).attr('data-filter')
    $grid.isotope({ filter: filterValue })
  })
})

// login page
const signUpButton = document.getElementById('signUp')
const signInButton = document.getElementById('signIn')
const container = document.getElementById('container')

signUpButton.addEventListener('click', () => {
  container.classList.add('right-panel-active')
})

signInButton.addEventListener('click', () => {
  container.classList.remove('right-panel-active')
})
