<section class="section production <?= $section_product;?>">
    <div class="container">
      <!-- <div class="seporator">
      </div>
      <h2 class="section-title">Контрактное производство</h2> -->
      <?php 
      if (!empty($production_title)) {
        echo '<div class="seporator"></div>';
        echo '<h2 class="section-title">'. $production_title .'</h2>';
      }
      ?>
      <div class="cards">
        <a href="product_avtohim.php" class="card cards-prodaction">
          <div class="card-content">
            <h3 class="card-title">Автомобильная химия</h3>
            <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
              воздействия.
            </p>
          </div>
          <picture class="card-image">
              <source type="image/webp" srcset="img/avto-him1.webp">
              <source type="image/png" srcset="img/avto-him1.png">
              <img src="img/avto-him1.png" alt="Автомобильная химия" class="card-image">
            </picture>
        </a>

        <a href="#" class="card cards-prodaction">
          <div class="card-content">
            <h3 class="card-title">Бытовая химия</h3>
            <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально
              разнесены на независимые элементы.
            </p>
          </div>
          <picture class="card-image">
              <source type="image/webp" srcset="img/bit-him2.webp">
              <source type="image/png" srcset="img/bit-him2.png">
              <img src="img/bit-him2.png" alt="Бытовая химия" class="card-image">
          </picture>
        </a>

        <a href="#" class="card cards-prodaction">
          <div class="card-content">
            <h3 class="card-title">Дезинфицирующие средства</h3>
            <p class="card-text">Лишь интерактивные прототипы призваны к ответу.
            </p>
          </div>
          <picture class="card-image">
              <source type="image/webp" srcset="img/dezinfect3.webp">
              <source type="image/png" srcset="img/dezinfect3.png">
              <img src="img/dezinfect3.png" alt="Дезинфицирующие средства" class="card-image">
          </picture>
        </a>

        <a href="#" class="card cards-prodaction">
          <div class="card-content">
            <h3 class="card-title">Пищевые аэрозоли</h3>
            <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм
              воздействия.
            </p>
          </div>
          <picture class="card-image">
              <source type="image/webp" srcset="img/dezinfect3.webp">
              <source type="image/png" srcset="img/dezinfect3.png">
              <img src="img/dezinfect3.png" alt="Пищевые аэрозоли" class="card-image">
          </picture>
        </a>

        <a href="#" class="card cards-prodaction">
          <div class="card-content">
            <h3 class="card-title">Косметическая продукция</h3>
            <p class="card-text">Лишь интерактивные прототипы призваны к ответу.
            </p>
          </div>
          <picture class="card-image">
              <source type="image/webp" srcset="img/avto-him1.webp">
              <source type="image/png" srcset="img/avto-him1.png">
              <img src="img/avto-him1.png" alt="Косметическая продукция" class="card-image">
          </picture>
        </a>

        <a href="#" class="card cards-prodaction">
          <div class="card-content">
            <h3 class="card-title">Краски аэрозольные</h3>
            <p class="card-text"> А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально
              разнесены на независимые элементы.
            </p>
          </div>
          <picture class="card-image">
              <source type="image/webp" srcset="img/bit-him2.webp">
              <source type="image/png" srcset="img/bit-him2.png">
              <img src="img/bit-him2.png" alt="Краски аэрозольные" class="card-image">
          </picture>
          
        </a>
      </div>
      <!-- /.cards -->
    </div>
  </section>