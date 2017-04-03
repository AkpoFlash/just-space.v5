<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--tcn">
    <div class="header__mask"></div>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="navigation__logo">Just Space</a>
      <a href="/portfolio.php" class="navigation__section navigation__section--link">Портфолио</a>
    </nav>
  </header>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/sidebar.php");
  ?>
  <main class="main">
    <article class="about">
      <h1>
        Организация контекстной рекламы для корпоративного сайта
      </h1>
      <section class="about__text">
        <h2 class="about__subtitle">О Клиенте:</h2>
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Результат:</h2>
        <picture>
          <source srcset="/img/clients/tcn/tcn_metrik_mobile.jpg" media="(max-width: 1000px)">
          <img class="image" src="/img/clients/tcn/tcn_metrik.jpg" alt="Показатели Яндекс.Директ - Тульский Центр Недвижимости">
        </picture>
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Перечень работ:</h2>
        <ul>
          <li>
            - Разработка дизайна, подбор цветовой темы и создание макета
          </li>
          <li>
            - Копирайтинг текста для каждой страницы на сайте
          </li>
          <li>
            - Подбор и обработка изображений
          </li>
          <li>
            - Разработка отзывчивого и адаптивного сайта с использованием Bootstrap
          </li>
          <li>
            - SEO-оптимизация страниц сайта
          </li>
          <li>
            - Настройка и ведение рекламной кампании в Яндекс.Директ
          </li>
        </ul>
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Описание работ:</h2>
      </section>
    </article>
  </main>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
  ?>
