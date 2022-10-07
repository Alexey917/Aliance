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

let currentModal;  //текущее модальное окно
let modalDialog;   //белое диалоговое окно
let alertModal = document.querySelector("#alert-modal"); //окно с благодарностью

const modalButtons = document.querySelectorAll("[data-toggle=modal]"); //переключатели модальных окон
modalButtons.forEach((button) => {
  /*клик по переключателю*/
  button.addEventListener("click", (event) => {  
    event.preventDefault();
    /*определяем текущее открытое окно*/ 
    console.log(currentModal = document.querySelector(button.dataset.target));
    currentModal = document.querySelector(button.dataset.target);
    /*открываем текущее окно*/
    // currentModal.classList.toggle("modal-is-open");
    // /*назначаем диалоговое окно*/ 
    // modalDialog = currentModal.querySelector(".modal-dialog");
    // /*отслеживаем клик по окну и по пустым областям*/ 
    // currentModal.addEventListener("click", (event) => {
    //   /*если клик в пустую область (не диалог)*/ 
    //   if(!event.composedPath().includes(modalDialog)) {
    //     /*закрываем окно*/ 
    //     currentModal.classList.remove("modal-is-open");
    //   }
    // });
  });
});

/*document.addEventListener("click", (event) => {
  if(event.target.dataset.toggle == "modal" || 
  event.target.parentNode.dataset.toggle == "modal" || 
  !event.composedPath().includes(modalDialog) && currentModal.classList.contains("modal-is-open")) { //если элемент содержит модал или родитель содержит модал, или содержит ли путь до элемента модал диалог, то ....
    event.preventDefault();
    currentModal.classList.toggle("modal-is-open");
  }
});*/

/*ловим событие нажатия на кнопку*/ 
document.addEventListener("keyup", (event) => {
  /*проверяем, что это кнопка esc и текущее окно открыто*/ 
  if(event.key == "Escape" && currentModal.classList.contains("modal-is-open")) {
    /*закрываем текущее окно*/ 
    currentModal.classList.toggle("modal-is-open");
  }
});

const forms = document.querySelectorAll("form");  //собираем все формы
  forms.forEach((form) => {
    const validation = new JustValidate(form, {
      errorFieldCssClass: 'is-invalid',
  }); 
  validation
  .addField("[name=username]", [
    {
      rule: 'required',
      errorMessage: "Укажите имя",
    },
    {
      rule: 'maxLength',
      value: 50,
      errorMessage: "Много букав",
    },
  ])
  .addField("[name=userphone]", [
    {
      rule: 'required',
      errorMessage: 'Укажите телефон',
    },
  ])
  .onSuccess((event) => {
    const thisForm = event.target;  //определяем нашу форму
    const formData = new FormData(thisForm); //данные из нашей формы
    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute("action"), {
        method: thisForm.getAttribute("method"),
        body: formData,
      }).then((response) => {
        if (response.ok) {
        thisForm.reset();
        currentModal.classList.remove("modal-is-open");
        alertModal.classList.add("modal-is-open");
        currentModal = alertModal;
        modalDialog = currentModal.querySelector(".modal-dialog");
        /*отслеживаем клик по окну и по пустым областям*/ 
        currentModal.addEventListener("click", (event) => {
          /*если клик в пустую область (не диалог)*/ 
          if(!event.composedPath().includes(modalDialog)) {
           /*закрываем окно*/ 
           currentModal.classList.remove("modal-is-open");
          }
        });
        } else {
          alert("Ошибка. Текст ошибки: ".response.statusText);
        }
      });
    };
    ajaxSend(formData);
  });
});

/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});







