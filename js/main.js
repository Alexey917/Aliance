const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo";
}

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo-light";
}

const openMenu = (event) => {   //функция открывания меню
  menu.classList.add("is-open");  //вешает класс is-open
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden";  //запрещаем прокрутку сайта под меню
  lightModeOn();
}

const closeMenu = (event) => {   //функция закрывает меню
  menu.classList.remove("is-open");  //удаляет класс is-open
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = "";  //запрещаем прокрутку сайта под меню
  lightModeOff();
}

window.addEventListener('scroll', () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
  
});

mMenuToggle.addEventListener('click', (event) => {
  event.preventDefault();
  if(menu.classList.contains("is-open")) {
    closeMenu()
    if(this.scrollY > 1) {
      lightModeOn()
    } else {
      lightModeOff();
    }
  } else {
    openMenu();
  }
});

const swiper = new Swiper('.swiper', {
  speed: 400,
  autoHeight: true,
  slidesPerView: 1,
  navigation: {
    nextEl: '.slider-button-next',
    prevEl: '.slider-button-prev',
  },
   // Responsive breakpoints
   breakpoints: {  
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
     /* centeredSlides: true,
      slidesOffsetBefore: -120,*/
      width: 480,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
    /*  centeredSlides: true,
      slidesOffsetBefore: -240,*/
      width: 720,
    },
    // when window width is >= 900px
    900: {
      slidesPerView: 3,
     /* centeredSlides: true,
      slidesOffsetBefore: -280,*/
      width: 840,
    },
    // when window width is >= 1080px
    1080: {
      slidesPerView: 4,
      width: 909,
     /* centeredSlides: true,
      slidesOffsetBefore: -341.5,*/
    },
    // when window width is >= 1200px
    1260: {
      slidesPerView: 5,
      width: 1100,
    }
  }
});

const swiper2 = new Swiper('.swiper', {
  speed: 400,
  autoHeight: true,
  slidesPerView: 1,
  navigation: {
    nextEl: '.slider-button-next-step',
    prevEl: '.slider-button-prev-step',
  },
   // Responsive breakpoints
   breakpoints: {

    // when window width is >= 576px
    320: {
      slidesPerView: 1,
     /* centeredSlides: true,
      slidesOffsetBefore: -120,*/
    },
    
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
     /* centeredSlides: true,
      slidesOffsetBefore: -120,*/
      width: 480,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
    /*  centeredSlides: true,
      slidesOffsetBefore: -240,*/
      width: 720,
    },
    // when window width is >= 900px
    900: {
      slidesPerView: 3,
     /* centeredSlides: true,
      slidesOffsetBefore: -280,*/
      width: 840,
    },
    // when window width is >= 1080px
    1080: {
      slidesPerView: 4,
      width: 909,
     /* centeredSlides: true,
      slidesOffsetBefore: -341.5,*/
    },
  }
});


