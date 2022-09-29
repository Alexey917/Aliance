const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
}

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
}

const changeNavHeight = (height) => {
  navbar.style.height = height;
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
 this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
 if (isFront) {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
 }
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

const blog = new Swiper('.blog-slider', {
  speed: 400,
  slidesPerView: 2,
  spaceBetween: 30,
  navigation: {
    nextEl: '.blog-button-next',
    prevEl: '.blog-button-prev',
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    1080: {
      slidesPerView: 2,
    }
  }
});

const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");

document.addEventListener("click", (event) => {
  if(event.target.dataset.toggle == "modal" || 
  event.target.parentNode.dataset.toggle == "modal" || 
  !event.composedPath().includes(modalDialog) && modal.classList.contains("modal-is-open")) { //если элемент содержит модал или родитель содержит модал, или содержит ли путь до элемента модал диалог, то ....
    event.preventDefault();
    modal.classList.toggle("modal-is-open");
  }
});

document.addEventListener("keyup", (event) => {
  if(event.key == "Escape" && modal.classList.contains("modal-is-open")) {
    modal.classList.toggle("modal-is-open");
  }
});







