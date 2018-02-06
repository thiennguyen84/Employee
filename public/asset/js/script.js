$(document).ready(function() {
  let owl = $('.our-customers');
    owl.owlCarousel({
      padding: 10,
      loop: true,
      responsive: {
        0: {
          items: 1
           },
      480: {
          items: 4
            },
      768: {
          items: 6
            },
    1000: {
          items: 8
          }
      }
      })
  let outrec = $('.our-rectangle3');
    outrec.owlCarousel({
      padding: 10,
      // loop: true,
      responsive: {
        0: {
          items: 3
           },
      768: {
          items: 5
            },  
    1000: {
          items: 5
          }
      }
    })
})