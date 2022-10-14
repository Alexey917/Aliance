<section class="section-trade-marks <?= $section_class_trademarks;?>">
      <div class="container">
        <?php 
        if (!empty($block_title)) {
          echo '<div class="seporator"></div>' . '<h2 class="section-title title-marks">' . $block_title . '</h2>'
          . '<h2 class="section-title title-marks-without">' . $block_title . '</h2>';
        }
        ?>
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