<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--justspaceshoot">
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
        Создание казуальной мобильной игры под iOS
      </h1>
      <section class="about__text">
        <h2 class="about__subtitle">О Клиенте:</h2>
        Обычные люди в свободное время отдыхают, а мы пишем игрушки. И это приложение мы разрабатывали сами для себя.
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Результат:</h2>
        <img src="/img/clients/justspaceshoot/justspaceshoot_app.jpg" class="image image--site" alt="Внешний вид приложения - Just Space Shoot">
        На данный момент аркадные игры занимают одну из лидирующих позиций в App Store, поэтому и мы решили попробовать свои силы в данном направлении.
        Итоговый внешний вид приложения представлен на приведенном изображении.
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Перечень работ:</h2>
        <ul>
          <li>
            - Дизайн объектов для наполнения игровой сцены
          </li>
          <li>
            - Поиск звуков
          </li>
          <li>
            - Проектирование интерфейса пользователя
          </li>
          <li>
            - Разработка игровой физики на основе Sprite Kit
          </li>
          <li>
            - Наполнение сцены объектами, подготовленными дизайнером
          </li>
          <li>
            - Дизайн иконки приложения, соответствующие скриншоты для App Store
          </li>
          <li>
            - Подбор ключевых слов для поиска по App Store
          </li>
        </ul>
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Описание работ:</h2>
        Основной идеей было воплотить классический шутер в стиле 8-bit на экране современного мобильного устройства. В игре вам предлагается управлять различными космическими кораблями с целью убить наибольшее количество противников за неограниченное время, при этом противники в свою очередь препятствуют вашему продвижению.
        При разработке интерфейса и игровых объектов дизайнер подготовил множество различных решений. Выбрав наиболее удачные из них, мы выполнили прототипирование интерфейса.
        Утвержденный макет был представлен iOS разработчику для верстки и дальнейшей разработке функционала. В качестве движка был выбран Sprite Kit. Поскольку разработчики создавали его заточенным специально для устройств Apple, он существенно выигрывает в скорости у конкурентов.
        Параллельно работе разработчика, дизайнер подготовил звуковые эффекты, иконку для приложения и скриншоты
        для App Store.
        После завершения этапа разработки оставалось лишь подобрать ключевые слова для продвижения, с чем мы успешно справились и приложение занимает лидирующие позиции по выбранным ключевикам.
      </section>
    </article>
  </main>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
  ?>
