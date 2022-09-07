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

