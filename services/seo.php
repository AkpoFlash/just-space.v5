<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--1div3">
    <h1 class="header__title header__title--slice header__title--right">Продвижение сайтов</h1>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="logo">Just <span class="logo__border">Space</span></a>
      <a href="/services.php" class="navigation__section navigation__section--link">Услуги</a>
    </nav>
  </header>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/sidebar.php");
?>
  <main class="main">
    <article class="main-services">
      <h2>Стоимость продвижения сайта</h2>
      Все цены указаны примерно, опираясь на среднее время разработки данного вида сайта в нашем агентстве. Реальная Стоимость может отличаться как в большую так и в меньшую сторону в зависимости от сложности выполнения работ и наличия того или иного функционала.
      <br>
      Стоимость разработки вашего проекта вычисляется исходя из предпологаемых затрат человеко-часов. В нашем агентстве 1 час стоит 500 рублей.
      <div class="table-wrapper">
        <table class="main-services-table">
          <tr>
            <td>Этапы</td>
            <td>Период</td>
            <td>Работы</td>
            <td>Минимальный тариф <br> (60-100 запросов)</td>
            <td>Расширенный тариф <br> (100-150 запросов)</td>
            <td>Максимальный тариф <br> (от 150-200 запросов)</td>
          </tr>
          <tr>
            <td>1</td>
            <td>1 месяц работ</td>
            <td>Первичная оптимизация, SEO- и тех- аудиты сайта</td>
            <td>10 000 руб. однократно</td>
            <td>15 000 руб. однократно</td>
            <td>20 000 руб. однократно</td>
          </tr>
          <tr>
            <td>2</td>
            <td>2-3 месяца работ</td>
            <td>Модернизация сайта</td>
            <td colspan="3">Определяется на первом этапе работ*</td>
          </tr>
          <tr>
            <td>3</td>
            <td>2-5 месяцев работ</td>
            <td>Продвижение и оптимизация сайта</td>
            <td>15 000 руб. в месяц</td>
            <td>20 000 руб. в месяц</td>
            <td>30 000 руб. в месяц</td>
          </tr>
          <tr>
            <td>4</td>
            <td>с 6 месяцев работ</td>
            <td>Продвижение, укрепление и поддержка позиций сайта</td>
            <td>15 000 руб. в месяц</td>
            <td>20 000 руб. в месяц</td>
            <td>30 000 руб. в месяц</td>
          </tr>
        </table>
      </div>
    <article class="other-services">
      <h2>Другие услуги</h2>
      <section class="other-services__block other-services__block--1">
        <h3 class="other-services__title">
          SEO-оптимизация
        </h3>
        <hr class="other-services__line">
        <div class="other-services__text">
          Проводим первоначальный аудит сайта и выявляем слабые места которые необходимо доработать. Составляем семантическое ядро (подбираем релевантные ключевые фразы для каждой страницы). Проводим внутреннюю оптимизацию сайта - создание заголовков в соответствие с подобранными ключевыми словами, настройка meta-тегов, оптимизация скорости загрузки, оптимизация изображений и рерайтинг. Проводим внешнюю оптимизацию - закупаем ссылки, создаем рекламные статьи в блогах, добавляем сайт в основные интернет-каталоги.
        </div>
      </section>
      <section class="other-services__block other-services__block--2">
        <h3 class="other-services__title">
          Копирайт и рерайт текстов
        </h3>
        <hr class="other-services__line">
        <div class="other-services__text">
          Занимаемся глубоким рерайтингом уже написанных текстов, с учетом сео-оптимизации и подобранных ключевых слов. Пишем на 100% уникальные тексты и статьи для размещения на ваших сайтах или сайтах и блогах ваших партнеров.
        </div>
      </section>
      <section class="other-services__block other-services__block--3">
        <h3 class="other-services__title">
          Увеличение ссылочной массы
        </h3>
        <hr class="other-services__line">
        <div class="other-services__text">
          Настраиваем и ведем сервис Rookee для наращивание ссылочной массы. По своим каналам производим подбор площадок для размещения постоянных ссылок и рекламных статей.
        </div>
      </section>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
