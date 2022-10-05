<section class="cta">
      <div class="bg-grey section-cta">
        <img src="img/cta.png" alt="call to action" class="cta-img">
        <div class="cta-form-wrapper container">
          <form action="handler.php" method="POST" class="cta-form">
            <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
            <p class="cta-form-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input id="user-name" type="text" class="input"  name="username" placeholder=" " maxlength="100" required>
                <label class="input-group-label name-label" for="user-name">Имя</label>
              </div>
              <div class="input-group">
                <input id="user-phone" type="tel" class="input" name="userphone" placeholder=" " maxlength="30" required>
                <label class="input-group-label phone-label" for="user-phone">+_(___)___-__-__</label>
                <label class="input-group-label phone-label label-phone-number" for="user-phone">Номер телефона</label>
              </div>
            </div>

            <div class="cta-form-footer">
              <button type="submit" class="button cta-form-button">Отправить заявку</button>
              <div class="notify">
                <svg class="notify-icon">
                  <use href="img/sprite.svg#shield"></use>
                </svg>
                <p class="notify-text">Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!</p>
              </div>
            </div>
            <!-- /.cta-form-footer -->
          </form>
        </div>
        <!-- /.cta-form-wrapper -->
      </div>
    </section>

    <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <svg class="logo-svg footer-logo">
            <use href="img/sprite.svg#logo"></use>
          </svg>
          <a href="tel:+74996861014" class="footer-phone">+7 (999) 686-10-14</a>
          <div class="footer-info">
            <svg class="phone-icon" width="24" height="24">
              <use href="img/sprite.svg#mark"></use>
            </svg>
            <address class="footer-info-address">г. Мосвка, Холодильный пер. 4к1с8</address>
          </div>
          <!-- /.footer-info -->
    
          <div class="footer-info footer-info-2">
            <svg class="phone-icon" width="24" height="24">
              <use href="img/sprite.svg#mail"></use>
            </svg>
            <a class="footer-info-email" href="mailto:a.dragunov@tdaliance.ru">a.dragunov@tdaliance.ru</a>
          </div>
          <!-- /.mobile-info -->
    
          <div class="footer-info-social">
            <a class="footer-info-vk" href="#">
              <svg class="phone-icon" width="24" height="24">
                <use href="img/sprite.svg#vk"></use>
              </svg>
            </a>
            <a class="footer-info-inst" href="#">
              <svg class="phone-icon" width="24" height="24">
                <use href="img/sprite.svg#inst"></use>
              </svg>
            </a>
          </div>
           <!-- /.footer-info-social -->
        </div>
        
      </div>
      <hr color="#ebebf0" class="footer-seporator">
      <div class="container">
        <div class="footer-bottom">
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Контрактное производство</h2>
            <ul class="footer-menu-list footer-menu-column">
              <li class="footer-menu-item">
                <a href="autohim.html" class="footer-menu-link">Автомобильная химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Бытовая химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Косметическая продукция</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Краски аэрозольные</a>
              </li>
            </ul>
          </div>

          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Собственные марки</h2>
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="ag-tect.html" class="footer-menu-link">Автохимия AG-Tech</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AP</a>
              </li>
          </div>

        <div class="footer-menu-wrapper">
          <ul class="footer-menu-list">
            <li class="footer-menu-item">
              <a href="about.html" class="footer-menu-link footer-menu-link-bold">О компании</a>
            </li>
            <li class="footer-menu-item">
              <a href="news.html" class="footer-menu-link footer-menu-link-bold">Новости</a>
            </li>
            <li class="footer-menu-item">
              <a href="contacts.html" class="footer-menu-link footer-menu-link-bold">Контакты</a>
            </li>
        </div>
        
        </div>
      </div>
      <hr color="#ebebf0" class="footer-seporator footer-seporator-2">
        <div class="container">
          <div class="footer-wrapper">
            <div class="footer-legal">
              <p class="footer-copyright">&copy; <?php echo date('Y');?> «Aliance Production». Все права защищены.</p>
              <a href="#" class="footer-policy">Политики конфиденциальности</a>
            </div>
            <div class="footer-author">
              <span class="made-in">Сделано в</span>
              <span class="stupid-designer">Дизайн и разработка:</span>
              <svg class="ruso-logo" width="24" height="24">
                <use href="img/sprite.svg#ruso"></use>
              </svg>
            </div>
          </div>
        </div>
    </footer>
    <!-- /.footer -->
