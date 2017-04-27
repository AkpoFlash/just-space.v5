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
      <a href="/index.php" class="logo">Just <span class="logo__border">Space</span></a>
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
        Агентство "Тульский центр недвижимости" предоставляет риэлторские услуги уже более 20 лет. Многолетний опыт работы и высокая квалификация специалистов компании позволяют профессионально проводить любые операции с недвижимостью со стопроцентной гарантией для всех участников сделки.
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Результат:</h2>
        Результаты из Яндекс.Директ за отчетный период, представлены ниже.
        <br>
        <picture>
          <source srcset="/img/clients/tcn/tcn_metrik_mobile.jpg" media="(max-width: 1000px)">
          <img class="image" src="/img/clients/tcn/tcn_metrik.jpg" alt="Показатели Яндекс.Директ - Тульский Центр Недвижимости">
        </picture>
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Перечень работ:</h2>
        <ul>
          <li>
            - Подбор релевантных ключевых фраз
          </li>
          <li>
            - Создание и первоначальная настройка рекламной кампании
          </li>
          <li>
            - Подготовка объявлений для показа
          </li>
          <li>
            - Подбор минус-фраз и минус-слов для всей кампании и отдельно для каждой фразы соответственно
          </li>
            - Дальнейшая поддержка, настройка и расширение контекстных объявлений
          </li>
        </ul>
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Описание работ:</h2>
        Клиент решил создать контекстную рекламу в Яндекс.Директ с целью привлечения дополнительных клиентов на продающие страницы сайта. Для этого было составленно необходимое семантическое ядро, состоящее из 1000 ключевых фраз, позволяющее обхватить требуемые поисковые запросы. Далее был подобран список минус-фраз для всей рекламной кампании в целом, а также прописаны минус-слова отедельно для ключевых фраз. Составив под каждую ключевую фразу отдельное объявление, мы запустили контекстную рекламу.
      </section>
    </article>
  </main>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
  ?>
