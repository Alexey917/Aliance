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
    <title> Новости - Aliance Production</title>
  </head>

  <body class="news">
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
              <a class="mobile-submenu-link" href="ag-tect.php">Автохимия AG-Tech</a>
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

    <nav class="navbar navbar-light">
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

      <button class="nav-button button" data-toggle="modal">
        <svg class="button-icon" width="24" height="24">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
      <!-- /.header-button button -->
    </nav>

    <header class="header">
        <div class="header-section">
          <div class="container">
            <div class="seporator"></div>
            
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="./" class="breadcrumb-link">Главная</a></li>      
            </ul>
          </div>
        </div>
    </header>

    <?php include_once('footer.php');?>
    
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js" ></script>
  </body>
</html>