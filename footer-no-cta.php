
<footer class="footer" role="contentinfo">
  <hr color="#ebebf0" class="footer-seporator footer-seporator-one">
    <div class="container">
      <div class="footer-top">
        <svg class="logo-svg footer-logo">
          <use href="img/sprite.svg#logo-dark"></use>
        </svg>
        <a href="tel:+79996861014" class="footer-phone footer-phone-number">+7 (499) 686-10-14</a>
        <div class="footer-info footer-info-add">
          <svg class="phone-icon" width="24" height="24">
            <use href="img/sprite.svg#mark"></use>
          </svg>
          <address class="footer-info-address">г. Москва, Холодильный пер. 4к1с8</address>
        </div>
        <!-- /.footer-info -->
        <div class="footer-info footer-info-mail">
          <svg class="mail-icon" width="24" height="24">
            <use href="img/sprite.svg#mail"></use>
          </svg>
          <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">
            a.dragunov@tdaliance.ru
          </a>
        </div>
        <div class="footer-social">
          <a href="#" class="footer-social-link footer-icon-vk">
            <svg class="footer-social-icon footer-icon-vk" width="24" height="24">
              <use href="img/sprite.svg#vk"></use>
            </svg>
          </a>
          <a href="#" class="footer-social-link">
            <svg class="footer-social-icon footer-icon-inst" width="24" height="24">
              <use href="img/sprite.svg#inst"></use>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <hr color="#ebebf0" class="footer-seporator footer-seporator-one" />
    <div class="container">
      <div class="footer-bottom footer-bottom-about">
        <div class="footer-menu-wrapper">
          <h2 class="footer-menu-title footer-title-prodaction">Контрактное производство</h2>
          <ul class="footer-menu-list footer-menu-column-2">
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Автомобильная химия</a>
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

        <div class="footer-menu-wrapper footer-wrapper-marks">
          <h2 class="footer-menu-title footer-title-avtochem">Собственные марки</h2>
          <ul class="footer-menu-list">
            <li class="footer-menu-item">
              <a href="./product_ag-tech.php" class="footer-menu-link">Автохимия AG-Tech</a>
            </li>
            <li class="footer-menu-item">
              <a href="./product_avtohim.php" class="footer-menu-link">Автохимия AP</a>
            </li>

          </ul>

        </div>
        <div class="footer-menu-wrapper">
          <ul class="footer-menu-list footer-list-bold">
            <li class="footer-menu-item">
              <a href="./about.php" class="footer-menu-link footer-menu-link-bold">О компании</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a>
            </li>
            <li class="footer-menu-item">
              <a href="./contacts.php" class="footer-menu-link footer-menu-link-bold">Контакты</a>
            </li>

          </ul>

        </div>
      </div>
    </div>
    <hr color="#ebebf0" class="footer-seporator" />
    <div class="container">
      <div class="footer-wrapper footer-wrapper-production">
        <div class="footer-legal">
          <p class="footer-copyright">
            &copy; <?php echo date('Y')?> «Aliance Production». Все права защищены.
          </p>
          <a href="./politics.php" class="footer-policy">Политики конфиденциальности</a>
        </div>
        <div class="footer-author">
          <span class="made-in">Сделано в</span>
          <span class="made-in-mobile">Дизайн и разработка:</span>

          <svg width="52" height="11">
            <use href="img/sprite.svg#ruso"></use>
          </svg>
        </div>
      </div>
    </div>
  </footer>
  <div class="modal" id="feedback-modal">
    <div class="modal-dialog">
      <h2 class="modal-title">Есть вопросы?</h2>
      <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
        <svg class="close-icon" width="24" height="24">
          <use href="img/sprite.svg#close"></use>
        </svg>
      </a>
      <p class="modal-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие
        вопросы и поможем даже в самых сложных случаях!
      </p>
      <form action="handler.php" method="POST"class="modal-form">
        <div class="input-group-wrapper input-group-vertical">
          <div class="input-group modal-input-group">
            <input id="modal-user-name" type="text" class="input modal-input" placeholder=" " name="username"/>
            <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
          </div>
          <!-- /.input-group -->
          <div class="input-group modal-input-group">
            <!-- <input id="modal-user-phone" type="tel" class="input modal-input" name="userphone" placeholder=" ">
            <label class="input-group-label modal-input-label" for="modal-user-phone">Номер телефона</label> -->
             <input 
                class="input input-phone-number" 
                type="tel" 
                id="user-phone" 
                name="userphone"
                maxlenght="30"
                pattern="^\+\d \(\d{3}\) \d{3}-\d{2}-\d{2}$"
                required placeholder="+_ (___) ___-__-__" 
               >
              <label class="input-group-label-phone" for="user-phone">Номер телефона</label>
          </div>
          <!-- /.input-group -->
        </div>
        <!-- /.input-group-wrapper -->
        <div class="modal-form-footer">
          <button type="submit" class="button cta-form-button modal-form-button">
            Отправить заявку
          </button>
          <div class="notify">
            <svg class="notify-icon" width="14" height="14">
              <use href="img/sprite.svg#shield"></use>
            </svg>
            <p class="notify-text">
              Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность
              информации!
            </p>
          </div>
        </div>
      </form>
    </div>
  </div>




  <div class="modal" id="alert-modal">
    <div class="modal-dialog">
      <picture class="image-thanks">
        <source type="image/webp" srcset="img/thanks.webp">
        <source type="image/png" srcset="img/thanks.png">
        <img src="img/thanks.png" alt="thanks" class="image-thanks">
      </picture>
      
      <a href="#" class="modal-close-thanks" data-toggle="modal-thanks" data-target="#alert-modal">
        <svg class="close-icon" width="24" height="24">
          <use href="img/sprite.svg#close"></use>
        </svg>
      </a>
      <h2 class="modal-title-thanks">Спасибо за заявку</h2>
      
      <p class="modal-text-thanks">Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие 
        вопросы и поможем даже в самых сложных случаях!
      </p>
      <button type="button" class="button cta-form-button modal-form-button-thanks" 
      >
            Вернуться на главную
      </button>

    </div>
  </div>

  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/just-validate.production.min.js"></script>
  <script src="js/imask.js"></script>
  <script src="js/main.js"></script>
</body>

</html>