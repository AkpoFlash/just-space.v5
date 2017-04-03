<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--volonter71">
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
        Техническая поддержка и продвижение сайта тульского волонтерского корпуса
      </h1>
      <section class="about__text">
        <h2 class="about__subtitle">О Клиенте:</h2>
        Тульский волонтёрский корпус был образован для организации праздничных мероприятий в честь 70-летия победы в Великой Отечественной Войне. На данный момент является самостоятельной организацией включающей в себя более 200 волонтеров и регулярно поддерживающей благотворительные акции. Активно принимает участие в проведении мероприятий («Стань первым», «Вместе против рака», «Улыбнись, Россия!», «Спортивный марафон» и др), а также является победителем регионального конкурса «Доброволец года».
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Результат:</h2>
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Перечень работ:</h2>
        <ul>
          <li>
            - Внесение визуальных и функциональных правок в дизайн страниц
          </li>
          <li>
            - Изменение внешнего вида и структуры меню
          </li>
          <li>
            - Изменение внутренней стуктуры разделов
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
