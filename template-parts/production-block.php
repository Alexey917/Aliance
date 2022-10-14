<section class="section-production <?= $section_class_production;?>">
      <div class="container">
      <?php 
        if (!empty($block_title)) {
          echo '<div class="seporator seporator-product"></div>' . '<h2 class="section-title title-production">' . $block_title . '</h2>';
        }
        ?>
        <div class="cards">
          <a class="card" href="autohim.php">
            <div class="card-content" id="card-content-1">
              <h3 class="card-title">Автомобильная химия</h3>
              <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить<br>значение форм воздействия.</p>
            </div>
            <picture>
              <source type="image/webp" srcset="img/automotive-chemicals.webp">
              <source type="image/jpeg" srcset="img/automotive-chemicals.png">
              <img  class="card-image" src="img/automotive-chemicals.png" alt="Автомобильная химия">
            </picture>
          </a>
          <a class="card" href="#">
            <div class="card-content" id="card-content-2">
              <h3 class="card-title">Бытовая химия</h3>
              <p class="card-text text-chemicals">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p> 
            </div>
            <picture>
              <source type="image/webp" srcset="img/household-chemicals.webp">
              <source type="image/jpeg" srcset="img/household-chemicals.png">
              <img  class="card-image" src="img/household-chemicals.png" alt="Бытовая химия">
            </picture>
          </a>
          <a class="card" href="#">
            <div class="card-content" id="card-content-3">
              <h3 class="card-title title-desinfectants">Дезинфицирующие средства</h3>
              <h3 class="card-title title-desinfectants-without">Дезинфицирующие <br>средства</h3>
              <p class="card-text text-desinfectants">Лишь интерактивные прототипы <br>призваны к ответу.</p>
            </div>
            <picture>
              <source type="image/webp" srcset="img/disinfectants.webp">
              <source type="image/jpeg" srcset="img/disinfectants.png">
              <img  class="card-image scale-image" src="img/disinfectants.png" alt="Дезинфицирующие средства">
            </picture>
          </a>
          <a class="card" href="#">
            <div class="card-content" id="card-content-4">
              <h3 class="card-title">Пищевые аэрозоли</h3>
              <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</p>
            </div>
            <picture>
              <source type="image/webp" srcset="img/food-aerosols.webp">
              <source type="image/jpeg" srcset="img/food-aerosols.png">
              <img  class="card-image scale-image" src="img/food-aerosols.png" alt="Пищевые аэрозоли">
            </picture>
          </a>
          <a class="card" href="#">
            <div class="card-content" id="card-content-5">
              <h3 class="card-title title-cosmetic">Косметическая продукция</h3>
              <p class="card-text text-cosmetic">Лишь интерактивные прототипы <br>призваны к ответу.</p>
            </div>
            <picture>
              <source type="image/webp" srcset="img/cosmetic-products.webp">
              <source type="image/jpeg" srcset="img/cosmetic-products.png">
              <img  class="card-image" src="img/cosmetic-products.png" alt="Косметическая продукция">
            </picture>
          </a>
          <a class="card" href="#">
            <div class="card-content" id="card-content-6">
              <h3 class="card-title">Краски аэрозольные</h3>
              <p class="card-text text-paints">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p>
            </div>
            <picture>
              <source type="image/webp" srcset="img/aerosol-paints.webp">
              <source type="image/jpeg" srcset="img/aerosol-paints.png">
              <img  class="card-image" src="img/aerosol-paints.png" alt="Краски аэрозольные">
            </picture>
          </a>
        </div>
        <!-- /.cards -->
      </div>
    </section>