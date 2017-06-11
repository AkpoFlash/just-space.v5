<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--services">
    <div class="header__mask"></div>
    <h1 class="header__title header__title--slice">Услуги</h1>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="logo">Just <span class="logo__border">Space</span></a>
      <span class="navigation__section">Услуги</span>
    </nav>
  </header>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/sidebar.php");
  ?>
  <main class="main">
    <article class="services">
      <div class="services__text">
        Специализируемся на применении современных технологий в бизнес сфере и предоставляем следующие цифровые услуги: создание сайтов (лендинги, визитки, корпоративные порталы, интернет-магазины и др.); аудит, SEO оптимизация и продвижение сайтов; настройка и ведение контекстных рекламных кампаний; SMM продвижение в социальных сетях; разработка дизайнерских решений; создание мобильных приложений под IOS и Android.
      </div>
      <section class="service">
        <svg class="service__svg" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-services.svg#mobile"></use>
        </svg>
        <h3 class="service__title">Мобильная разработка</h3>
        Разрабатываем нативные приложения под iOS и Android. Интегрируем мобильные приложения с сайтом.
        <div class="service__button-block">
          <a href="/services/mobile_develop.php" class="service__button">Подробнее</a>
          </div>
      </section>
      <section class="service">
        <svg class="service__svg" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-services.svg#web"></use>
        </svg>
        <h3 class="service__title">Создание сайтов</h3>
        Специализируемся на создании сайтов на 1С-Битрикс, также создаем сайты используя другие популярные CMS.
        <div class="service__button-block">
          <a href="/services/web_develop.php" class="service__button">Подробнее</a>
          <a href="/docs/kp-razrabotka-saitov.pdf" target="_black" class="service__button">Скачать КП</a>
        </div>
      </section>
      <section class="service">
        <svg class="service__svg" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-services.svg#seo"></use>
        </svg>
        <h3 class="service__title">Продвижение сайтов</h3>
        Комплексный аудит сайта, SEO оптимизация, копирайт и рерайт текстов, увеличение ссылочной массы.
        <div class="service__button-block">
          <a href="/services/seo.php" class="service__button">Подробнее</a>
          <a href="/docs/kp-prodvizhenie-saitov.pdf" target="_black" class="service__button">Скачать КП</a>
        </div>
      </section>
    </article>
    <article class="services">
      <section class="service">
        <svg class="service__svg" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-services.svg#design"></use>
        </svg>
        <h3 class="service__title">Дизайн</h3>
        Разрабатываем дизайн сайтов и мобильных приложений, редизайн и переосмысление существующих решений.
        <div class="service__button-block">
          <a href="/services/design.php" class="service__button">Подробнее</a>
        </div>
      </section>
      <section class="service">
        <svg class="service__svg" aria-hidden="true">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites-services.svg#advering"></use>
        </svg>
        <h3 class="service__title">Реклама</h3>
        Ведем рекламные кампании в Яндекс.Директ и Google AdWords, SMM в Instagram, Facebook и ВКонтакте.
        <div class="service__button-block">
          <a href="/services/advertising.php" class="service__button">Подробнее</a>
        </div>
      </section>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
