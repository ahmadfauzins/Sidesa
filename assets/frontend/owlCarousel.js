$('.owl-carousel').owlCarousel({
    stagePadding: 0,
    loop:false,
    margin:330,
    nav:true,
    responsive:{
        0:{
            items:0.25
        },
        600:{
            items:0.25
        },
        1000:{
            items:4
        }
    }
});

const hapus = document.querySelector('.owl-dots');
hapus.removeAttribute('class', 'owl-dots');

const ganti = document.querySelector('.owl-nav');
ganti.setAttribute('class','owl-btn');
