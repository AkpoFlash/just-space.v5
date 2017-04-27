<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--wunder">
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
        Создание флаера для мероприятия Tusman Moscow
      </h1>
      <section class="about__text">
        <h2 class="about__subtitle">О Клиенте:</h2>
        Клуб Wunder расположен в центре Москвы, каждый вечер они проводят концерты живой музыки, а ночью и утром играют диджеи. Как раз для одного такого мероприятия мы и изготовили листовку.
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Результат:</h2>
        <img src="/img/clients/wunder/wunder_list.jpg" class="image image--site" alt="Внешний вид сайта -  Волонтер 71">
        Итоговый внешний вид флаера представлен на приведенном изображении.
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Перечень работ:</h2>
        <ul>
          <li>
            - Выбор общего стиля, подбор фонового изображения
          </li>
          <li>
            - Подбор цветовой палитры и шрифтов
          </li>
          <li>
            - Непосредственная компоновка и верстка
          </li>
          <li>
            - Обработка, наложение эффектов
          </li>
        </ul>
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Описание работ:</h2>
        Выбор визуального решения в первую очередь основывается на тематической составляющей проводимого мероприятия. В связи с этими параметрами подбирался общий стиль, а также основное фоновое изображение. Затем осуществлялся подбор цветовой палитры для флаера соответствующий фоновому изображению, а также выбор подходящего шрифта, обеспечивающего должный уровень читабельности. Последним этапом является верстка итогового макета и последующая визуальная обработка.
      </section>
    </article>
  </main>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
  ?>
