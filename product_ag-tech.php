
<?php 
  $page_title = 'Автохимия AG-Tech';
  $header_style = 'section-grey-about';
  $breadcrumbs_three = 'href="./own_product.php">Собственные торговые марки';
  $breadcrumbs_for_ag_tech = "breadcrumbs-for-ag-tech";
  $header_grey_spray = 'class="header-image-avtohim" src="/img/avto-him-header.png" alt="avtohim"';
 include_once('header-page.php');?>


<section class="section experts">
    <div class="container">
      <div class="experts-content-wrapper avtohim-ag-tech-wrapper">
        <picture class="avtohim-ag-tech-photo">
          <source type="image/webp" srcset="img/avtohim-AG-tech.webp">
          <source type="image/png" srcset="img/avtohim-AG-tech.png">
          <img src="img/avtohim-AG-tech.png" alt="avtohim-ag-tech" class="avtohim-ag-tech-photo">
        </picture>
        
        <div class="experts-content avtohim-ag-tech-content">
          <div class="seporator"></div>
          <h2 class="section-title experts-title avtohim-ag-tech-title">Собственное производство автохимия AG-Tech</h2>
          <p class="avtohim-ag-tech-text">
           Прежде всего, начало повседневной работы по формированию позиции однозначно фиксирует необходимость приоритизации разума 
            над эмоциями. Кстати, представители современных социальных резервов неоднозначны и будут описаны максимально подробно.
          </p>
          <p class="avtohim-ag-tech-text avtohim-ag-tech-text-two">
            Но социально-экономическое развитие напрямую зависит от поставленных обществом задач! Безусловно, постоянный количественный 
            рост и сфера нашей активности предоставляет широкие возможности для системы обучения кадров, соответствующей насущным 
            потребностям. В целом, конечно, выбранный нами инновационный путь обеспечивает широкому кругу (специалистов) участие в 
            формировании своевременного выполнения сверхзадачи. А ещё элементы политического процесса представлены в исключительно 
            положительном свете. Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого 
            факта: высокотехнологичная концепция общественного уклада создаёт предпосылки для глубокомысленных рассуждений. В своём 
            стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд 
            на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.
          </p>
        </div>
      </div>
    </div>
  </section>


<?php 
$swiper_text = "black-text-features";
$swiper_border = "grey-border-features";
$swiper_border_about = "border-about-arrow";
$about_company_seporator = "about-company-seporator";
$arrow_next = "arrow-next-grey";
$arrow_prev = "arrow-prev-grey";

  include_once('./template-parts/swiper-features.php')
?>

<section class="section section-product-ag-tech">
  
  <div class="container">
    <div class="production-content-wrapper product-ag-tech-content-wrp">
      <div class="product-ag-tech-content">
        <div class="seporator production-title-bottom-seporator"></div>
        <h2 class="section-title product-ag-tech-title">Генеральный дистрибьютор премиальной
          автохимии
        </h2>
        <p class="product-ag-tech-text">
          Внезапно, активно развивающиеся страны третьего мира могут быть объявлены нарушающими общечеловеческие нормы этики и морали.
        </p>
        <ul class="clients-list clients-list-product">
            <li class="clients-list-item clients-item-product-avtohim">
              <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#him1"></use>
              </svg>
              Полное описание товаров
            </li>
            <li class="clients-list-item clients-item-product-avtohim">
              <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#car2"></use>
              </svg>
              Актуальные цены
            </li>
            
            <li class="clients-list-item clients-item-product-avtohim">
              <svg width="30" height="30" class="clients-list-icon">
                <use href="/img/sprite.svg#paint"></use>
              </svg>
              Лаки и краски
            </li>
            <li class="clients-list-item clients-item-product-avtohim">
              <svg width="30" height="30" class="clients-list-icon">
                <use href="img/sprite.svg#him1"></use>
              </svg>
              Химические производства
            </li>
        </ul>
        <button type="submit" class="button button-ag-tech">
          <svg width="24" height="24" class="clients-list-icon download-icon-ag-tech">
            <use href="img/sprite.svg#download"></use>
          </svg>Скачать каталог
        </button>
      </div>
    </div>
  </div>
  <picture class="distributor-photo">
    <source type="image/webp" srcset="img/distributor.webp">
    <source type="image/png" srcset="img/distributor.png">
    <img src="img/distributor.png" alt="distributor" class="distributor-photo">
  </picture>
  
</section>


<?php 
 include_once('./template-parts/section-explorer.php');?> 

<?php 
$section_product_ag_tech_light = "section-product-ag-tech-light";
 include_once('./template-parts/section-light.php');?> 

<?php 
 $section_clients = "section-clients-mt";
 include_once('./template-parts/section-clients.php');?> 

<?php 
 include_once('footer.php');?>