<?php 
  $page_title = '';
  $header_style = '';
  $not_found = "not-found";
include_once('header-page.php');
?>
<section class="section-not-found">
  <div class="container-not-found">
      <div class="not-found-wrapper"> 
        <p class="not-found-number">
          404
        </p>
        <div class="not-found-text-wrp">
          <div class="not-found-txt">Страница не найдена</div>
          <p class="not-found-text">
          Мы не смогли найти страницу с таким адресом, попробуйте перейти на главную или напишите нам.
          </p>
          <button type="button" class="button not-found-button">
              <a href="./" class="button return-main">
                Вернуться на главную
              </a>
            </button>
      </div>
  </div>
</section>







<?php include_once('footer-no-cta.php')?>