<section class="section-blog">
      <div class="container">
      <?php 
        if (!empty($block_title)) {
          echo '<div class="seporator"></div>' . '<h2 class="section-title title-blog">' . $block_title . '</h2>';
        }
        ?>
        <!-- Slider main container -->
        <div class="swiper blog-slider">
         <!-- Additional required wrapper -->
         <div class="swiper-wrapper">
            <!-- Slides -->
            <a href="blogmodern.php" class="swiper-slide blog-card">
            <picture>
              <source type="image/webp" srcset="img/founder.webp">
              <source type="image/jpeg" srcset="img/founder.jpg">
              <img  class="blog-card-image" src="img/founder.jpg" alt="blog-2">
            </picture>
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