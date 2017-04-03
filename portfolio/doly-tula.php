<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--doly-tula">
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
        Создание сайта визитки под ключ
      </h1>
      <section class="about__text">
        <h2 class="about__subtitle">О Клиенте:</h2>
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Результат:</h2>
        <img src="/img/clients/doly-tula/doly-tula_site.jpg" class="image image--site" alt="">
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
        Необходимо было разработать сайт для представления компании в сети и продажи определенного вида услуг. Лендинг не смог бы с той же долей успеха разместить на себе весь контент и столь успешно продвигаться в естественной выдаче, поэтому было принято решение о создание сайта-визитки. Такой сайт одновременно может являться лицом компании в интернете и продавать товар или услуги, а невысокая стоимость позволяет достаточно сильно сэкономить бюджет фирмы. Необходимость создания сайта в сжатые сроки также способствовала выбору именно разработке сайта-визитки.
        <br>
        Пообщавшись с заказчиком и выбрав примерный вектор разработки дизайна, веб-дизайнер подготовил несколько макетов сайта. Утвержденный макет и обработанные изображения поступили верстальщику и начался этап разработки. Из-за сжатых сроков было принято решение использовать фреймворк Bootstrap, он позволяет быстро создать адаптивный и отзывчивый сайт. После разработки сайта был проведен аудит и сделана сео-оптимизация сайта, которая позволила подняться визитке в поисковой выдаче на необходимые позиции. Также было решено давать контекстную рекламу в Яндекс.Директ с целью привлечения дополнительных клиентов на продающие страницы сайта.
      </section>
    </article>
  </main>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
  ?>
