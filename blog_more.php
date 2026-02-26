<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Blog_more</title>
</head>

<body>
  <div class="mobile-menu">
    <ul class="mobile-menu-nav">
      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">О компании</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Контрактное производство</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
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
        <a href="#" class="mobile-menu-link">Собственные марки</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Автохимия AG-Tech</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Автохимия AP</a>
          </li>
        </ul>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Новости</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a href="#" class="mobile-menu-link">Контакты</a>
      </li>
    </ul>
    <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
    <div class="mobile-info">
      <svg class="icon-mobile" width="24" height="24">
        <use href="img/sprite.svg#mark"></use>
      </svg>
      <address class="mobile-info-address">г. Москва, Холодильный пер. 4к1с8</address>
    </div>
    <!-- /.mobile-info -->
    <div class="mobile-info-email">
      <svg class="icon-mobile" width="24" height="24">
        <use href="img/sprite.svg#mail"></use>
      </svg>
      <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
        a.dragunov@tdaliance.ru
      </a>
    </div>

    <div class="icon-mobile">
      <a href="#">
        <svg class="icon-mobile" width="24" height="24">
          <use href="img/sprite.svg#inst"></use>
        </svg>
      </a>
      <a href="#">
        <svg class="icon-mobile" width="24" height="24">
          <use href="img/sprite.svg#vk"></use>
        </svg>
      </a>
    </div>
  </div>
  <!-- /.mobile-info -->
  <nav class="navbar navbar-light">
    <a href="#" class="mobile-menu-toggle">
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
    </a>
    <a href="./" class="header-logo">
      <svg class="logo-svg logo-light">
        <use href="img/sprite.svg#logo-light"></use>
      </svg>

      <svg class="logo-svg logo-dark">
        <use href="img/sprite.svg#logo-dark"></use>
      </svg>
    </a>
    <ul class="header-nav">
      <li class="header-nav-item">
        <a href="/about.php" class="header-nav-link">О компании</a>
      </li>
      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Контрактное производство</a>
      </li>
      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Собственные торговые марки</a>
      </li>
      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Новости</a>
      </li>
      <li class="header-nav-item">
        <a href="#" class="header-nav-link">Контакты</a>
      </li>
    </ul>

    <div class="header-phone">
      <svg class="phone-icon" width="24" height="24">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>

    </div>
    <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
      <svg class="button-icon" width="24" height="24">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <span class="button-text">Получить консультацию</span>
    </button>

  </nav>
  <!-- /.navbar -->
  <header class="header header-blog-image <?= $header_bloge_image_mt;?>">
  <?php 
       $header_bloge_image_mt = "header-bloge-image-mt"?> 
    <div class="section section-blog-image">
      <div class="container">
        <div class="header-content header-blog-content">
          <div class="seporator"></div>
          <h1 class="header-title header-title-image">
            Современная методология разработки одухотворила всех причастных
          </h1>

          <ol class="breadcrumbs breadcrumbs-blog">
            <li><a href="./">Главная</a></li>
            <li><a href="#">Блог</a></li>
            <li>Современная методология разработки одухотворила всех причастных</li>
          </ol>
        </div>

      </div>
    </div>
  </header>


<section class="section blog-more-section">
    <div class="container blog-more-container">
      <div class="blog-share-wrapper">
        <div class="blog-share-text">
           Поделиться:
        </div>
        <div class="blog-share-icon-wrapper">
          <a href="#" class="blog-more-link">
            <svg class="button-icon blog-share-icon" width="24" height="24">
              <use href="img/sprite.svg#vk"></use>
            </svg>
          </a>
       
          <a href="#" class="blog-more-link">
            <svg class="button-icon blog-share-icon" width="24" height="24">
              <use href="img/sprite.svg#fb"></use>
            </svg>
          </a>
       
          <a href="#" class="blog-more-link">
            <svg class="button-icon blog-share-icon" width="24" height="24">
              <use href="img/sprite.svg#twitter"></use>
            </svg>
          </a>
        
          <a href="#" class="blog-more-link">
            <svg class="button-icon blog-share-icon" width="24" height="24">
              <use href="img/sprite.svg#google"></use>
            </svg>
          </a>
        </div>
      
      </div>
      <div class="experts-content-wrapper blog-more-content-wrapper">
        <div class="experts-content blog-more-content">
          
          <h1 class="blog-more-title">Реализация намеченных плановых заданий</h1>
          <p class="experts-text blog-more-text">
           Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности 
           позволяет оценить значение системы обучения кадров, соответствует насущным потребностям. Задача организации, в особенности 
           же укрепление и развитие структуры в значительной степени обуславливает создание форм развития. С другой стороны укрепление и 
           развитие структуры способствует подготовки и реализации системы обучения кадров, соответствует насущным потребностям. 
           Повседневная практика показывает, что укрепление и развитие структуры требуют определения и уточнения систем массового участия. 
           Таким образом начало повседневной работы по формированию позиции позволяет выполнять важные задания по разработке позиций, 
           занимаемых участниками в отношении поставленных задач.
          </p>
          <h2 class="blog-more-title-two">Равным образом консультация с широким активом</h2>
          <p class="experts-text blog-more-text-two">
            Таким образом постоянный количественный рост и сфера нашей активности позволяет оценить значение дальнейших направлений 
            развития. Разнообразный и богатый опыт реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации 
            направлений прогрессивного развития. С другой стороны консультация с широким активом позволяет оценить значение форм развития. 
            Идейные соображения высшего порядка, а также постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет 
            выполнять важные задания по разработке соответствующий условий активизации. Разнообразный и богатый опыт дальнейшее развитие 
            различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании соответствующий условий активизации.
          </p>
          <p class="experts-text blog-more-text-two">
            С другой стороны рамки и место обучения кадров влечет за собой процесс внедрения и модернизации систем массового участия. Равным 
            образом консультация с широким активом в значительной степени обуславливает создание дальнейших направлений развития. Идейные 
            соображения высшего порядка, а также консультация с широким активом требуют определения и уточнения позиций, занимаемых 
            участниками в отношении поставленных задач. Равным образом дальнейшее развитие различных форм деятельности влечет за собой 
            процесс внедрения и модернизации дальнейших направлений развития.
          </p>
          <p class="experts-text blog-more-text-two">
            Разнообразный и богатый опыт начало повседневной работы по формированию позиции позволяет оценить значение позиций, занимаемых 
            участниками в отношении поставленных задач. Разнообразный и богатый опыт реализация намеченных плановых заданий позволяет 
            выполнять важные задания по разработке форм развития. Задача организации, в особенности же постоянный <a href="#" class="blog-more-text-link">количественный рост</a> и 
            сфера нашей активности обеспечивает широкому кругу (специалистов) участие в формировании форм развития.
          </p>
          <img src="img/blog-more-image.png" alt="product-avtohim" class="product-blog-more-photo">
            <div class="consultation">
            <h4 class="blog-more-title-three">Равным образом консультация с широким активом:</h4>
             <ul class="footer-menu-list menu-list-blog-more">
              <li class="footer-menu-item menu-item-blog-more">
                Идейные соображения высшего порядка, а также консультация с широким активом требуют определения и уточнения позиций.
              </li>
              <li class="footer-menu-item menu-item-blog-more">
                С другой стороны консультация с широким активом позволяет оценить значение форм развития.
              </li>
              <li class="footer-menu-item menu-item-blog-more">
                Разнообразный и богатый опыт реализация намеченных плановых заданий позволяет выполнять важные задания.
              </li>
             </ul>
            </div>
          <h2 class=" blog-more-title-two">Равным образом консультация с широким активом</h2>
          <p class="experts-text blog-more-text-three">
            С другой стороны рамки и место обучения кадров влечет за собой процесс внедрения и модернизации систем массового участия. 
            <b>Равным образом консультация</b> с широким активом в значительной степени обуславливает создание дальнейших направлений развития. 
            Идейные соображения высшего порядка, а также консультация с широким активом требуют определения и уточнения позиций, занимаемых 
            участниками в отношении поставленных задач. Равным образом дальнейшее развитие различных форм деятельности влечет за собой 
            процесс внедрения и модернизации дальнейших направлений развития.
          </p>
          <ol class="menu-blog-more-two">
              <li class="footer-menu-item menu-item-blog-more-two">
                Идейные соображения высшего порядка, а также консультация с широким активом требуют определения и уточнения позиций.
              </li>
              <li class="footer-menu-item menu-item-blog-more-two">
                С другой стороны консультация с широким активом позволяет оценить значение форм развития.
              </li>
              <li class="footer-menu-item menu-item-blog-more-two">
                Разнообразный и богатый опыт реализация намеченных плановых заданий позволяет выполнять важные задания.
              </li>
          </ol>
        </div>
      </div>
    </div>
  </section>

   <section class="section blog">
    <div class="container">
      <div class="seporator">
      </div>
      <h2 class="section-title section-blog-title">Так же вас может заинтересовать:</h2>
      <!-- Swiper -->
      <div class="swiper blog-slider">
        <div class="swiper-wrapper">
          <a href="blog_more.php" class="swiper-slide blog-card">
            <img src="img/blog/blog-image1.png" alt="" class="blog-card-image">
            <h3 class="blog-card-title">
              Современная методология разработки одухотворила всех причастных
            </h3>
            <p class="blog-card-text">
              Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной
              степени предоставлены...
            </p>
          </a>
          <a href="blog_more.php" class="swiper-slide blog-card">
            <img src="img/blog/blog-image2.png" alt="" class="blog-card-image">
            <h3 class="blog-card-title">
              Сложно сказать, почему жизнь прекрасна
            </h3>
            <p class="blog-card-text">
              Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы.
              Безусловно, высокотехнологичная...
            </p>
          </a>
          <a href="blog_more.php" class="swiper-slide blog-card">
            <img src="img/blog/blog-image1.png" alt="" class="blog-card-image">
            <h3 class="blog-card-title">
              Современная методология разработки одухотворила всех причастных
            </h3>
            <p class="blog-card-text">
              Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной
              степени предоставлены...
            </p>
          </a>
          <a href="blog_more.php" class="swiper-slide blog-card">
            <img src="img/blog/blog-image2.png" alt="" class="blog-card-image">
            <h3 class="blog-card-title">
              Сложно сказать, почему жизнь прекрасна
            </h3>
            <p class="blog-card-text">
              Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы.
              Безусловно, высокотехнологичная...
            </p>
          </a>
        </div>
      </div>
      <div class="blog-slider-footer blog-slider-footer-more">
        <div class="primary-buttons-wrapper blog-buttons">
          <div class="primary-button-prev blog-button-prev">
            <svg class="arrow-icon" width="36" height="24">
              <use href="img/sprite.svg#arrow-prev"></use>
            </svg>
          </div>
          <div class="primary-button-next blog-button-next">
            <svg class="arrow-icon" width="36" height="24">
              <use href="img/sprite.svg#arrow-next"></use>
            </svg>
          </div>
        </div>
      </div>
  </section>


  <?php 
  $for_section_blog_more = "for-section-blog-more";
  include_once('footer.php')?>