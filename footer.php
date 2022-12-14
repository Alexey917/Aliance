    <section class="cta">
      <div class="bg-grey section-cta">
        <picture>
          <source type="image/webp" srcset="img/cta.webp">
          <source type="image/jpeg" srcset="img/cta.png">
          <img  class="cta-img" src="img/cta.png" alt="call to action">
        </picture>
        <div class="container">
          <div class="cta-form-wrapper">
            <form action="handler.php" method="POST" class="cta-form">
            <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
            <p class="cta-form-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input id="user-name" type="text" class="input"  name="username" placeholder=" " maxlength="100" required>
                <label class="input-group-label name-label" for="user-name">Имя</label>
              </div>
              <div class="input-group">
                <input id="user-phone" type="tel" class="input phone-mask" name="userphone" placeholder=" " maxlength="30" required>
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
        </div>
        <!-- /.cta-form-wrapper -->
      </div>
    </section>

    <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <a class="footer-logo" href="./">
            <svg class="logo-svg footer-logo">
              <use href="img/sprite.svg#logo"></use>
            </svg>
          </a>
          <a href="tel:+74996861014" class="footer-phone">+7 (499) 686-10-14</a>
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
      <hr class="footer-seporator">
      <div class="container">
        <div class="footer-bottom">
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Контрактное производство</h2>
            <ul class="footer-menu-list footer-menu-column">
              <li class="footer-menu-item">
                <a href="autohim.php" class="footer-menu-link">Автомобильная химия</a>
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
            </ul>
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
  </ul>
        </div>
        
        </div>
      </div>
      <hr class="footer-seporator footer-seporator-2">
        <div class="container">
          <div class="footer-wrapper">
            <div class="footer-legal">
              <p class="footer-copyright">&copy; <?php echo date('Y');?> «Aliance Production». Все права защищены.</p>
              <a href="policy.php" class="footer-policy">Политики конфиденциальности</a>
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

    <div class="modal" id="feedback-modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
          <svg class="close-icon">
            <use href="img/sprite.svg#close"></use>
          </svg>
        </a>
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
        <form action="handler.php" method="POST" class="modal-form">
          <div class="input-group-wrapper input-group-vertical">
            <div class="input-group modal-input-group">
              <input id="modal-user-name" type="text" class="input modal-input" name="username" placeholder=" ">
              <label class="input-group-label name-label modal-input-label" for="modal-user-name">Имя</label>
            </div>
            <div class="input-group modal-input-group">
              <input id="modal-user-phone" type="tel" class="input modal-input phone-mask" name="userphone" placeholder=" ">
              <label class="input-group-label phone-label modal-input-label modal-input-label-2" for="modal-user-phone">+_(___)___-__-__</label>
              <label class="input-group-label phone-label label-phone-number modal-input-label" for="user-phone">Номер телефона</label>
            </div>
          </div>

          <div class="modal-form-footer">
            <button type="submit" class="button modal-form-button">Отправить заявку</button>
            <div class="notify">
              <svg class="notify-icon modal-notify-icon">
                <use href="img/sprite.svg#shield"></use>
              </svg>
              <p class="notify-text modal-notify-text">Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!</p>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="modal" id="alert-modal">
      <div class="modal-dialog">
        <picture>
          <source type="image/webp" srcset="img/thanks_illu.webp">
          <source type="image/jpeg" srcset="img/thanks_illu.png">
          <img  class="thanks" src="img/thanks_illu.png" alt="Спасибо за заявку!">
        </picture>
        <h2 class="modal-title">Спасибо за заявку!</h2>
        <a href="#" class="modal-close" data-toggle="modal" data-target="#alert-modal">
          <svg class="close-icon">
            <use href="img/sprite.svg#close"></use>
          </svg>
        </a>
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
          <button type="submit" class="button modal-form-button" onclick="document.location='./'">Вернуться на главную</button>

        
      </div>
    </div>

    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/just-validate.production.min.js"></script>
    <script src="js/main.js" ></script>

    </body>
</html>
