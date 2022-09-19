const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  logo.style.display = "block";
  logoLight.style.display = "none";
}

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logo.style.display = "none";
  logoLight.style.display = "block";
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

const swiper = new Swiper('#swiper', {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: '.slider-button-next',
    prevEl: '.slider-button-prev',
  },
   // Responsive breakpoints
   breakpoints: {
  // when window width is >= 412px
   375: {
    slidesPerView: 2,
  },
   // when window width is >= 412px
   412: {
     slidesPerView: 1,
     width: 370,
   }, 
   // when window width is >= 414px
    414: {
      slidesPerView: 1,
      width: 372,
    }, 
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
      width: 480,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
      width: 720,
    },
    // when window width is >= 900px
    900: {
      slidesPerView: 3,
      width: 840,
    },
    // when window width is >= 1080px
    1080: {
      slidesPerView: 4,
      width: 909,
    },
    // when window width is >= 1260px
    1260: {
      slidesPerView: 5,
    }
  }
});

const steps = new Swiper('#swiper-step', {
  speed: 400,
  autoHeight: true,
  loop: true,
  slidesPerView: 1,
  navigation: {
    nextEl: '.slider-button-next-step',
    prevEl: '.slider-button-prev-step',
  },
   // Responsive breakpoints
   breakpoints: {
    320: {
      slidesPerView: 2,
      width: 600,
      spaceBetween: 50,
    },
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
    },
    1260: {
      slidesPerView: 4,
    },
  }
});


