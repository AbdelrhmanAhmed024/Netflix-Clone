$(document).ready(() => {

     let navText = ["<i class='bx bx-chevron-left'></i>", "<i class='bx bx-chevron-right'></i>"]
 
     $('#hero-carousel').owlCarousel({
         items: 1,
         dots: false,
         loop: true,
         nav:true,
         navText: navText,
         autoplay: true,
         autoplayHoverPause: true
     })
 
     $('#top-movies-slide').owlCarousel({
         items: 2,
         dots: false,
         loop: true,
         autoplay: true,
         autoplayHoverPause: true,
         responsive: {
             500: {
                 items: 3
             },
             1280: {
                 items: 4
             },
             1600: {
                 items: 6
             }
         }
     })
 
     $('.movies-slide').owlCarousel({
         items: 2,
         dots: false,
         nav:true,
         navText: navText,
         margin: 15,
         responsive: {
             500: {
                 items: 2
             },
             1280: {
                 items: 4
             },
             1600: {
                 items: 6
             }
         }
     })
 })

 const movieItem = document.querySelector('.movie-item');
const modal = document.querySelector('.modal');
const modalBody = document.querySelector('.modal-body');
const closeBtn = document.querySelector('.close');

movieItem.addEventListener('click', () => {
    modal.style.display = 'block';
    modalBody.innerHTML = movieItem.querySelector('.movie-item-info').innerHTML;
});

closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
});

window.addEventListener('click', (event) => {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
});

