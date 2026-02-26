<?php 
$page_title = 'Контакты';
$header_style = 'section-grey-about';?>
<?php include_once('header-page.php')?>
<section class="section-contacts">
  <div class="container">
      <div class="footer-top-contacts">
        <a href="tel:+79996861014" class="footer-phone-number-contacts">+7 (499) 686-10-14</a>
        <div class="footer-info footer-info-add-contacts">
          <svg class="phone-icon-contacts" width="36" height="36">
            <use href="img/sprite.svg#mark"></use>
          </svg>
          <address class="footer-info-address-contacts">г. Москва, Холодильный пер. 4к1с8</address>
        </div>
        <!-- /.footer-info -->
        <div class="footer-info footer-info-mail-contacts">
          <svg class="mail-icon-contacts" width="36" height="36">
            <use href="img/sprite.svg#mail"></use>
          </svg>
          <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email-contacts">
            a.dragunov@tdaliance.ru
          </a>
        </div>
        <div class="footer-social-contacts">
          <a href="#" class="footer-social-link footer-icon-link-contacts">
            <svg class="footer-social-icon footer-icon-vk-contacts" width="36" height="36">
              <use href="img/sprite.svg#vk"></use>
            </svg>
          </a>
          <a href="#" class="footer-social-link footer-icon-link-contacts">
            <svg class="footer-social-icon footer-icon-inst-contacts" width="36" height="36">
              <use href="img/sprite.svg#inst"></use>
            </svg>
          </a>
        </div>
      </div>
      <img src="img/map.png" alt="map" class="map-contacts-image">
  </div>
</section>




<?php include_once('footer.php')?>