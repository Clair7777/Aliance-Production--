  <div class="container">
   <div class="swiper swiper-features swiper-experts">
        <!-- обертка слайдера -->
        <ul class="swiper-wrapper header-features <?= $swiper_text ?>">
          <!-- Slides -->
          <li class="swiper-slide header-features-item <?= $swiper_border ?>"><svg class="logo-icon" width="36" height="36">
              <use href="img/sprite.svg#time"></use>
            </svg>
            <p class="header-features-text header-about-text">
              Непрерывная работа c 2017 года
            </p>
          </li>
          <li class="swiper-slide header-features-item <?= $swiper_border ?>"><svg class="logo-icon" width="36" height="36">
              <use href="img/sprite.svg#sertificate"></use>
            </svg>
            <p class="header-features-text header-about-text">
              Вся продукция сертифицирована
            </p>
          </li>
          <li class="swiper-slide header-features-item <?= $swiper_border ?>"><svg class="logo-icon" width="36" height="36">
              <use href="img/sprite.svg#man"></use>
            </svg>
            <p class="header-features-text header-about-text">
              Контроль качества на всех этапах
            </p>
          </li>
          <li class="swiper-slide header-features-item <?= $swiper_border ?>"><svg class="logo-icon" width="36" height="36">
              <use href="img/sprite.svg#car"></use>
            </svg>
            <p class="header-features-text header-about-text">
              Возможны поставки по всей России
            </p>
          </li>
          <li class="swiper-slide header-features-item <?= $swiper_border ?>"><svg class="logo-icon" width="36" height="36">
              <use href="img/sprite.svg#speed"></use>
            </svg>
            <p class="header-features-text header-about-text">
              Оперативное производство
            </p>
          </li>
        </ul>

        <!-- кнопки навигации вперед-назад -->
        <div class="slider-buttons">
          <div class="slider-button-prev <?= $swiper_border_about ?>">
            <svg class="arrow-icon" width="36" height="24">
              <use href="img/sprite.svg#<?= $arrow_prev ?>"></use>
            </svg>
          </div>
          <div class="slider-button-next <?= $swiper_border_about ?>">
            <svg class="arrow-icon" width="36" height="24">
              <use href="img/sprite.svg#<?= $arrow_next ?>"></use>
            </svg>
          </div>
        </div>
        <!-- /.slider-buttons -->
       </div>
  </div>