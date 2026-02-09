 <section class="section trademark <?= $container_own_product;?>">
    <div class="container">
      
      <?php 
      if (!empty($block_title)) {
        echo '<div class="seporator"></div>';
        echo '<h2 class="section-title section-marks section-marks-one">'. $block_title .'</h2>';
        echo '<h2 class="section-title section-marks section-marks-two">'. $block_title_two .'</h2>';
      }
      ?>
      <!-- <h2 class="section-title section-marks section-marks-one">собственные торговые марки</h2> -->
      <!-- <h2 class="section-title section-marks section-marks-two">собственные марки</h2> -->
      <div class="trademark-cards">
        <a href="./product_ag-tech.php" class="trademark-card">
          <svg class="trademark-card-logo">
            <use href="img/sprite.svg#AGTECH"></use>
          </svg>
          <h3 class="trademark-card-title">Автохимия AG-Tech</h3>
          <p class="trademark-card-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное
            мышление создаёт предпосылки для поставленных обществом задач.</p>
        </a>
        <a  href="./product_avtohim.php" class="trademark-card">
          <svg class="trademark-card-logo">
            <use href="img/sprite.svg#AP"></use>
          </svg>
          <h3 class="trademark-card-title">Автохимия AP</h3>
          <p class="trademark-card-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное
            мышление создаёт предпосылки для поставленных обществом задач.</p>
        </a>
      </div>
      <!-- /.trademark-cards -->
    </div>
  </section>
  <!-- /.section trademark -->