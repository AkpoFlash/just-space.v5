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
        Создание и продвижение портала курсов повышения квалификации ТулГУ
      </h1>
      <section class="about__text">
        <h2 class="about__subtitle">О Клиенте:</h2>
        Институту прикладной математики и компьютерных наук тульского государственного университета потребовалось создать и продвинуть портал для обучающихся на курса повышения квалификации в ИТ и информационной безопасности.
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Результат:</h2>
        <img src="/img/clients/tsu/tsu_site.jpg" class="image image--site" alt="Внешний вид портала - Тульский государственный университет">
        Итоговый внешний вид сайта представлен на приведенном изображении.
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Перечень работ:</h2>
        <ul>
          <li>
            - Проектирование архитектуры проекта
          </li>
          <li>
            - Создание общей структуры базы данных портала
          </li>
          <li>
            - Проектирование групп пользователей и прав для них (администратор, преподаватель, студент)
          </li>
          <li>
            - Непосредственное программирование серверной стороны
          </li>
          <li>
            - Разработка интерфейса портала
          </li>
          <li>
            - Глубокий рерайтинг предоставленного контента
          </li>
          <li>
            - SEO-оптимизация страниц
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
        Наиболее трудоемкой работой по данному проекту являлось проектирование архитектуры базы данных и последующее программирование серверной стороны для взаимодействий с организованной БД. Также производилось SEO продвижение портала с целью поднятия позиций по высокочастотным поисковым запросам в топ поисковой выдачи Яндекс и Google.
      </section>
    </article>
  </main>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
  ?>
