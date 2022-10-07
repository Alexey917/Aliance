<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Aliance Production</title>
  </head>

  <body class="front-page">
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="about.php" class="mobile-menu-nav-link">О компании</a></li>
        <li class="mobile-menu-nav-item">
          <a href="production.php" class="mobile-menu-nav-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="autohim.php">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Дезинфицирующие средства</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Косметическая продукция</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="marks.php" class="mobile-menu-nav-link">Собственные торговые марки</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="ag-tech.php">Автохимия AG-Tech</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автохимия AP</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item"><a href="news.php" class="mobile-menu-nav-link">Новости</a></li>
        <li class="mobile-menu-nav-item"><a href="contacts.php" class="mobile-menu-nav-link">Контакты</a></li>
      </ul>

      <a class="mobile-phone" href="tel:+74996861014">+7 (499) 686-10-14</a>

      <div class="mobile-info">
        <svg class="phone-icon" width="24" height="24">
          <use href="img/sprite.svg#mark"></use>
        </svg>
        <address class="mobile-info-address">г. Мосвка, Холодильный пер. 4к1с8</address>
      </div>
      <!-- /.mobile-info -->

      <div class="mobile-info">
        <svg class="phone-icon" width="24" height="24">
          <use href="img/sprite.svg#mail"></use>
        </svg>
        <a class="mobile-info-email" href="mailto:a.dragunov@tdaliance.ru">a.dragunov@tdaliance.ru</a>
      </div>
      <!-- /.mobile-info -->

      <div class="mobile-info-social">
        <a class="mobile-info-vk" href="#">
          <svg class="phone-icon" width="24" height="24">
            <use href="img/sprite.svg#vk"></use>
          </svg>
        </a>
        <a class="mobile-info-inst" href="#">
          <svg class="phone-icon" width="24" height="24">
            <use href="img/sprite.svg#inst"></use>
          </svg>
        </a>
      </div>
       <!-- /.mobile-info-social -->
    </div>
    <!-- /.mobile-menu -->

    <nav class="navbar">
      <a class="mobile-menu-toggle" href="#">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>

      <a class="header-logo" href="./">
        <svg class="logo-svg logo-light">
          <use href="img/sprite.svg#logo-light"></use>
        </svg>
        <svg class="logo-svg logo-dark">
          <use href="img/sprite.svg#logo"></use>
        </svg>
      </a>

      <ul class="header-nav">
        <li class="header-nav-item"><a href="about.php" class="header-nav-link">О компании</a></li>
        <li class="header-nav-item"><a href="production.php" class="header-nav-link">Контрактное производство</a></li>
        <li class="header-nav-item"><a href="marks.php" class="header-nav-link">Собственные торговые марки</a></li>
        <li class="header-nav-item"><a href="news.php" class="header-nav-link">Новости</a></li>
        <li class="header-nav-item"><a href="contacts.php" class="header-nav-link">Контакты</a></li>
      </ul>

      <div class="header-phone">
        <svg class="phone-icon" width="24" height="24">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <a class="header-phone-link" href="tel:+74996861014">+7 (499) 686-10-14</a>
      </div>
      <!-- /.header-phone -->

      <button class="nav-button button" data-toggle="modal" data-target="#feedback-modal">
        <svg class="button-icon" width="24" height="24">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
      <!-- /.header-button button -->
    </nav>
    <!-- /.navbar -->
    <header class="header header-image">
      

      <div class="container">
        <div class="header-content">
          <div class="seporator"></div>
          <h1 class="header-title">Комплексное обеспечение товарами и расходными материалами бизнеса</h1>
          <p class="header-text">Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит от анализа существующих паттернов поведения.</p>
          <button class="button header-button" data-toggle="modal" data-target="#feedback-modal">Подробнее о компании</button>
        </div>
        <!-- /.header-content -->

        <!-- основной блок слайдера -->
        <div class="swiper" id="swiper">
          <!-- обертка слайдера -->
          <ul class="swiper-wrapper header-features">
            <!-- слайды -->
            <li class="swiper-slide  header-features-item">
              <svg class="features-icon-1 features-mobile-icons">
                <use href="img/sprite.svg#time"></use>
              </svg>
              <p class="header-features-text">Непрерывная работа c 2017 года</p>
            </li>
            <li class="swiper-slide  header-features-item">
              <svg class="features-icon-2 features-mobile-icons">
                <use href="img/sprite.svg#cetificate"></use>
              </svg>
              <p class="header-features-text">Вся продукция сертифицирована</p>
            </li>
            <li class="swiper-slide  header-features-item">
              <svg class="features-icon-3 features-mobile-icons">
                <use href="img/sprite.svg#control"></use>
              </svg>
              <p class="header-features-text">Контроль качества на всех этапах</p>
            </li>
            <li class="swiper-slide  header-features-item">
              <svg class="features-icon-4 features-mobile-icons">
                <use href="img/sprite.svg#delivery"></use>
              </svg>
              <p class="header-features-text">Возможны поставки по всей России</p>
            </li>
            <li class="swiper-slide  header-features-item">
              <svg class="features-icon-5 features-mobile-icons">
                <use href="img/sprite.svg#speed"></use>
              </svg>
              <p class="header-features-text">Оперативное производство</p>
            </li>
          </ul>
         
          <!-- кнопки навигации вперед/назад -->
          <div class="sliders-buttons">
            <div class="slider-button-prev">
              <svg class="arrow-prev">
                <use href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="slider-button-next">
              <svg class="arrow-next">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div> 
          </div>
          <!-- /.sliders-buttons -->
        </div>
      </div>
      <!-- /.container -->
    </header>
    <!-- /.header -->

    <section class="section sectio-light">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title title-work">схема работы</h2>

        <div class="swiper" id="swiper-step">
          <ol class="swiper-wrapper steps">
            <li class="swiper-slide steps-item">
              <span class="steps-num">01</span>
              <h3 class="steps-title">Знакомство</h3>
              <p class="steps-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</p>
              <a href="#" class="steps-link">Оставить заявку</a>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">02</span>
              <h3 class="steps-title-with">Заключение <br>договора</h3>
              <h3 class="steps-title-without">Заключение договора</h3>
              <p class="steps-text">Лишь интерактивные прототипы призваны к ответу.</p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">03</span>
              <h3 class="steps-title">Производство</h3>
              <p class="steps-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые<br>элементы.</p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">04</span>
              <h3 class="steps-title">Доставка</h3>
              <p class="steps-text">В частности, экономическая повестка сегодняшнего дня говорит о возможностях приоритизации <br> разума над эмоциями.</p>
            </li>
          </ol>

          <!-- кнопки навигации вперед/назад -->
          <div class="sliders-buttons-steps">
            <div class="slider-button-prev-step">
              <svg class="arrow-prev-step">
                <use href="img/sprite.svg#arrow-prev-step"></use>
              </svg>
            </div>
            <div class="slider-button-next-step">
              <svg class="arrow-next-step">
                <use href="img/sprite.svg#arrow-next-step"></use>
              </svg>
            </div> 
          </div>
          <!-- /.sliders-buttons -->
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section sectio-light -->

    <section class="section-production">
      <div class="container">
        <div class="seporator seporator-product"></div>
        <h2 class="section-title title-production">Контрактное производство</h2>
        <div class="cards">
          <a class="card" href="autohim.php">
            <div class="card-content" id="card-content-1">
              <h3 class="card-title">Автомобильная химия</h3>
              <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить<br>значение форм воздействия.</p>
            </div>
            <img src="img/automotive-chemicals.png" alt="Автомобильная химия" class="card-image">
          </a>
          <a class="card" href="#">
            <div class="card-content" id="card-content-2">
              <h3 class="card-title">Бытовая химия</h3>
              <p class="card-text text-chemicals">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p> 
            </div>
            <img src="img/household-chemicals.png" alt="Бытовая химия" class="card-image">
          </a>
          <a class="card" href="#">
            <div class="card-content" id="card-content-3">
              <h3 class="card-title title-desinfectants">Дезинфицирующие средства</h3>
              <h3 class="card-title title-desinfectants-without">Дезинфицирующие <br>средства</h3>
              <p class="card-text text-desinfectants">Лишь интерактивные прототипы <br>призваны к ответу.</p>
            </div>
            <img src="img/disinfectants.png" alt="Дезинфицирующие средства" class="card-image scale-image">
          </a>
          <a class="card" href="#">
            <div class="card-content" id="card-content-4">
              <h3 class="card-title">Пищевые аэрозоли</h3>
              <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</p>
            </div>
            <img src="img/food-aerosols.png" alt="Пищевые аэрозоли" class="card-image scale-image">
          </a>
          <a class="card" href="#">
            <div class="card-content" id="card-content-5">
              <h3 class="card-title title-cosmetic">Косметическая продукция</h3>
              <p class="card-text text-cosmetic">Лишь интерактивные прототипы <br>призваны к ответу.</p>
            </div>
            <img src="img/cosmetic-products.png" alt="Косметическая продукция" class="card-image">
          </a>
          <a class="card" href="#">
            <div class="card-content" id="card-content-6">
              <h3 class="card-title">Краски аэрозольные</h3>
              <p class="card-text text-paints">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p>
            </div>
            <img src="img/aerosol-paints.png" alt="Краски аэрозольные" class="card-image">
          </a>
        </div>
        <!-- /.cards -->
      </div>
    </section>

    <section class="section-trade-marks">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title title-marks">собственные торговые марки</h2>
        <h2 class="section-title title-marks-without">собственные  марки</h2>
        <div class="marks">
          <a class="card-mark" href="ag-tect.php">
            <svg class="ag-tech">
              <use href="img/sprite.svg#ag-tech"></use>
            </svg>
            <h3 class="mark-title">Автохимия AG-Tech</h3>
            <p class="mark-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.</p>
          </a>

          <a class="card-mark" href="#">
            <svg class="ap">
              <use href="img/sprite.svg#ap"></use>
            </svg>
            <h3 class="mark-title title-ap">Автохимия AP</h3>
            <p class="mark-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.</p>
          </a>
        </div>
      </div>
    </section>
    <!-- /.section-trade-marks -->

    <section class="section-founder">
      <img class="founder-photo" src="img/founder.jpg" alt="founder">
      <div class="container">
        <div class="founder-content-wrapper">
          <div class="founder-content">
            <div class="seporator"></div>
            <h2 class="section-title title-founder">Отношение к делу <br> и к клиентам</h2>
            <p class="founder-text founder-text-1">Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика показывает, что укрепление и развитие внутренней структуры говорит о возможностях соответствующих условий активизации. Внезапно, независимые государства, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут подвергнуты целой серии независимых исследований. С учётом сложившейся международной обстановки, синтетическое тестирование выявляет срочную потребность системы массового участия.</p>
            <p class="founder-text">А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный путь в значительной степени обусловливает важность дальнейших направлений развития.</p>
            <a href="about.php" class="steps-link founder-link">Подробнее о компании</a>
            <a href="about.php" class="steps-link founder-link-mobile">О нашей миссии</a>
          </div>
          <!-- /.founder-content -->
        </div>
        <!-- /.founder-content-wrapper -->
      </div>
      <!-- /.container -->
    </section>

    <section class="section-clients">
      <div class="container">
        <div class="seporator"></div>
        <div class="clients-wrapper">
          <div class="clients-content">
            <h2 class="section-title title-clients">Производим аэрозольную продукцию для разных сфер 
            </h2>
            <ul class="clients-list">
              <li class="clients-list-item him">
                <svg class="client-logo">
                  <use href="img/sprite.svg#him"></use>
                </svg>
                Химические производства
              </li>
              <li class="clients-list-item car">
                <svg class="client-logo">
                  <use href="img/sprite.svg#car"></use>
                </svg>
                Автомойки
              </li>
              <li class="clients-list-item eat">
                <svg class="client-logo">
                  <use href="img/sprite.svg#eat"></use>
                </svg>
                Пищевая продукция
              </li>
              <li class="clients-list-item brush">
                <svg class="client-logo">
                  <use href="img/sprite.svg#brush"></use>
                </svg>
                Лаки и краски
              </li>
              <li class="clients-list-item cosmetic">
                <svg class="client-logo cosmetic-logo">
                  <use href="img/sprite.svg#cosmetic"></use>
                </svg>
                <svg class="client-logo cosmetic-mobile-logo">
                  <use href="img/sprite.svg#cosmetic-mobile"></use>
                </svg>
                Косметические средства
              </li>
              <li class="clients-list-item car-cosm">
                <svg class="client-logo">
                  <use href="img/sprite.svg#car-cosm"></use>
                </svg>
                Автомобильная косметика
              </li>
              <li class="clients-list-item shirt">
                <svg class="client-logo">
                  <use href="img/sprite.svg#shirt"></use>
                </svg>
                Косметика по уходу за одеждой
              </li>
              <li class="clients-list-item boots">
                <svg class="client-logo">
                  <use href="img/sprite.svg#boots"></use>
                </svg>
                Косметика по уходу за обувью
              </li>
              <li class="clients-list-item bricks">
                <svg class="client-logo">
                  <use href="img/sprite.svg#bricks"></use>
                </svg>
                Строительные материалы
              </li>
              <li class="clients-list-item more">
                <svg class="client-logo">
                  <use href="img/sprite.svg#more"></use>
                </svg>
                И многих других
              </li>
            </ul>
          </div>
          <div class="clients-images-list">
            <a href="#" class="client-img-item"><img src="img/client.png" alt="client" class="clients-img"></a>
            <a href="#" class="client-img-item"><img src="img/client.png" alt="client" class="clients-img"></a>
            <a href="#" class="client-img-item"><img src="img/client.png" alt="client" class="clients-img"></a>
            <a href="#" class="client-img-item"><img src="img/client.png" alt="client" class="clients-img"></a>
            <a href="#" class="client-img-item"><img src="img/client.png" alt="client" class="clients-img"></a>
            <a href="#" class="client-img-item"><img src="img/client.png" alt="client" class="clients-img"></a>
            <a href="#" class="client-img-item"><img src="img/client.png" alt="client" class="clients-img"></a>
            <a href="#" class="client-img-item"><img src="img/client.png" alt="client" class="clients-img"></a>
            <a href="#" class="client-img-item ninth-item"><img src="img/client.png" alt="client" class="clients-img"></a>
          </div>
        </div>
        <!-- /.clients-wrapper -->
      </div>
    </section>

    <section class="section-blog">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title title-blog">Блог экспертов в области производства</h2>
        <!-- Slider main container -->
        <div class="swiper blog-slider">
         <!-- Additional required wrapper -->
         <div class="swiper-wrapper">
            <!-- Slides -->
            <a href="blogmodern.php" class="swiper-slide blog-card">
              <img src="img/blog/blog-2.jpg" alt="blog-2" class="blog-card-image">
              <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
              <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <img src="img/blog/blog-1.jpg" alt="blog-1" class="blog-card-image">
              <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
              <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <img src="img/blog/blog-1.jpg" alt="blog-1" class="blog-card-image">
              <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
              <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
            </a>
          </div>

          <div class="blog-slider-footer">
            <a href="#" class="steps-link founder-link blog-link">Весь блог</a>
            <div class="blog-buttons">
              <div class="blog-button-prev primary-blog-button">
                <svg class="arrow-prev-step  blog-arrow-left">
                  <use href="img/sprite.svg#arrow-prev-step"></use>
                </svg>
              </div>
              <div class="blog-button-next primary-blog-button">
                <svg class="arrow-next-step blog-arrow-right">
                  <use href="img/sprite.svg#arrow-next-step"></use>
                </svg>
              </div> 
            </div>
          </div>
          <!-- /.blog-slider-footer -->
        </div>

      </div>
    </section>

    <?php include_once('footer.php');?>

  </body>
</html>