<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--tsu">
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
        Продвижение курсов повышения квалификации ТулГУ
      </h1>
      <section class="about__text">
        <h2 class="about__subtitle">О Клиенте:</h2>
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Результат:</h2>
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Перечень работ:</h2>
        <ul>
          <li>
            - SEO-оптимизация каталогов и карточек товаров
          </li>
          <li>
            - Глубокий рерайтинг описания каталогов и карточек товаров
          </li>
          <li>
            - Оптимизация изображений и ускорение загрузки страниц
          </li>
          <li>
            - Консультирование по различным вопросам
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
