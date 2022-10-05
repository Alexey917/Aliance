const navbar = document.querySelector(".navbar");
const headerSection = document.querySelector(".header-section");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");
const company = document.body.classList.contains("about-company");
const production = document.body.classList.contains("production");
const mark = document.body.classList.contains("own-marks");
const newsBlog = document.body.classList.contains("news");
const contact = document.body.classList.contains("contacts");
const agTech = document.body.classList.contains("agtech");
const autohim = document.body.classList.contains("autohim");
const blogModern = document.body.classList.contains("blogmodern");
const listContacts = document.querySelector(".breadcrumb");
const colorBreadcrumb = document.querySelector(".breadcrumb-link");
const colorBreadcrumbNext = document.querySelector(".breadcrumb-next-link");


const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
}

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
}

const changeNavHeight = (height) => {
  navbar.style.height = height;
}

const headerBackground = (event) => {
  headerSection.classList.add("header-background");
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

 if (scrollY > 1) {
  mMenuToggle.classList.add("mobile-menu-toggle-scroll");
 } else {
  mMenuToggle.classList.remove("mobile-menu-toggle-scroll");
 }

 if (isFront) {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
 }
});

mMenuToggle.addEventListener('click', (event) => {
  event.preventDefault();
  if(menu.classList.contains("is-open")) {
    closeMenu();
    if(this.scrollY > 1) {
      lightModeOn();
    } else {
      lightModeOff();
    }

  } else {
    openMenu();
  }
});

/* функции добавляющие элемент списка */
const addBreadcrumbAbout = (event) => {
  listContacts.insertAdjacentHTML('beforeend', '<a href="about.html" class="breadcrumb-link breadcrumb-next-link">О компании</a>');
  listContacts.insertAdjacentHTML('beforebegin', '<h1 class="header-title header-title-all">о компании</h1>');
}

const addBreadcrumbProduction = (event) => {
  listContacts.insertAdjacentHTML('beforeend', '<a href="production.html" class="breadcrumb-link breadcrumb-next-link">Контрактное производство</a>');
  listContacts.insertAdjacentHTML('beforebegin', '<h1 class="header-title header-title-all">Контрактное производство</h1>');
}


const addBreadcrumbMarks = (event) => {
  listContacts.insertAdjacentHTML('beforeend', '<a href="marks.html" class="breadcrumb-link breadcrumb-next-link">Собственные марки</a>');
  listContacts.insertAdjacentHTML('beforebegin', '<h1 class="header-title header-title-all">Собственные марки</h1>');
}

const addBreadcrumbBlog = (event) => {
  listContacts.insertAdjacentHTML('beforeend', '<a href="news.html" class="breadcrumb-link breadcrumb-next-link">Блог</a>');
  listContacts.insertAdjacentHTML('beforebegin', '<h1 class="header-title header-title-all">Блог</h1>');
}

const addBreadcrumbContats = (event) => {
  listContacts.insertAdjacentHTML('beforeend', '<a href="contacts.html" class="breadcrumb-link breadcrumb-next-link">Контакты</a>');
  listContacts.insertAdjacentHTML('beforebegin', '<h1 class="header-title header-title-all">Контакты</h1>');
}

const addBreadcrumbAutohim = (event) => {
  listContacts.insertAdjacentHTML('beforeend', '<a href="autohim.html" class="breadcrumb-link breadcrumb-next-link">Автомобильная химия</a>');
  listContacts.insertAdjacentHTML('beforebegin', '<h1 class="header-title header-title-all">Автомобильная химия</h1>');
  listContacts.insertAdjacentHTML('beforebegin', '<img class="avto-him-header-image" src="img/avto-him.png" alt="автомобильная химия"></img>');
}

const addBreadcrumbAgTech = (event) => {
  listContacts.insertAdjacentHTML('beforeend', '<a href="autohim.html" class="breadcrumb-link breadcrumb-next-link">Автохимия AG-Tech</a>');
  listContacts.insertAdjacentHTML('beforebegin', '<h1 class="header-title header-title-all">Автохимия AG-Tech</h1>');
  listContacts.insertAdjacentHTML('beforebegin', '<img class="avto-him-header-image" src="img/avto-him.png" alt="автомобильная химия"></img>');
}

const addBreadcrumbBlogModern = (event) => {
  listContacts.insertAdjacentHTML('beforeend', '<a href="autohim.html" class="breadcrumb-link breadcrumb-next-link breadcrumb-last-link">Современная методология разработки одухотворила всех причастных</a>');
  listContacts.insertAdjacentHTML('beforebegin', '<h1 class="header-title header-title-all header-title-all-fix">Современная методология разработки одухотворила всех причастных</h1>');
  headerBackground();
}

/* условия для добавления списков */
const headerCondition = (event) => {
  if (company) {
    addBreadcrumbAbout();
  }  
  
  if (production) {
    addBreadcrumbProduction();
  }
  
  if (mark) {
    addBreadcrumbMarks();
  }
  
  if (newsBlog) {
    addBreadcrumbBlog();
  }
  
  if (contact) {
    addBreadcrumbContats();
  }
  
  if (autohim) {
    addBreadcrumbAutohim();
  }
  
  if (agTech) {
    addBreadcrumbAgTech();
  }
  
  if (blogModern) {
    addBreadcrumbBlogModern();
    colorBreadcrumb.style.color = "#FFFFFF";
    colorBreadcrumbNext.style.color = "#FFFFFF";
  }
}

headerCondition();

/* слайдер с шагами */ 
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







