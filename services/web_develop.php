<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--1div3">
    <h1 class="header__title header__title--slice header__title--right">Разработка сайтов</h1>
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
      <h2>Стоимость разработки сайта</h2>
      Все цены указаны примерно, опираясь на среднее время разработки данного вида сайта в нашем агентстве. Реальная стоимость может отличаться как в большую так и в меньшую сторону в зависимости от сложности выполнения работ и наличия того или иного функционала.
      <br>
      Стоимость разработки вашего проекта вычисляется исходя из предпологаемых затрат человеко-часов. В нашем агентстве 1 час стоит 500 рублей.
      <section class="main-services-block">
        <h3 class="main-services-block__title">
          Промо-сайт (Лендинг, Визитка)
        </h3>
        <div class="main-services-block__text">
          Это небольшой (1-3 страницы) сайт, основная задача которого вывести на рынок новый бренд, товар или услугу. Также это подходящий инструмент для создания хорошего имиджа компании.
          <hr>
          <div class="main-services-block__days">
            Сроки: от 14 до 30 дней
          </div>
          <div class="main-services-block__cost">
            Стоимость: 10 000 - 20 000 рублей
          </div>
        </div>
      </section>
      <section class="main-services-block">
        <h3 class="main-services-block__title">
          Корпоративный сайт
        </h3>
        <div class="main-services-block__text">
          Это сайт в котором указывается вся основная информация о вашей компании, услугах, сотрудниках и товарах. Также здесь может быть размещен каталог производимой продукции, тематический форму или блог.
          <hr>
          <div class="main-services-block__days">
            Сроки: от 21 до 60 дней
          </div>
          <div class="main-services-block__cost">
            Стоимость: 20 000 - 50 000 рублей
          </div>
        </div>
      </section>
      <section class="main-services-block">
        <h3 class="main-services-block__title">
          Интернет-магазин
        </h3>
        <div class="main-services-block__text">
          Это крупный сайт предназначенный для продажи товаров онлайн. Помимо информации о компании, на сайте присутствует отдельная страница описания для каждого товара, так называемая карточка товара.
          <hr>
          <div class="main-services-block__days">
            Сроки: от 30 до 90 дней
          </div>
          <div class="main-services-block__cost">
            Стоимость: 40 000 - 100 000 рублей
          </div>
        </div>
      </section>
      <section class="main-services-block">
        <h3 class="main-services-block__title">
          Порталы и сервисы
        </h3>
        <div class="main-services-block__text">
          Это сайт служащий для предоставления или агрегирования больших объемов информации (сайты СМИ, каталоги и справочники) и способный выдержать наплыв большого числа пользователей.
          <hr>
          <div class="main-services-block__days">
            Сроки: от 40 до 120 дней
          </div>
          <div class="main-services-block__cost">
            Стоимость: 60 000 - 150 000 рублей
          </div>
        </div>
      </section>
    </article>
    <article class="other-services">
      <h2>Другие услуги</h2>
      <section class="other-services__block other-services__block--1">
        <h3 class="other-services__title">
          Создание сайтов любой сложности
        </h3>
        <hr class="other-services__line">
        <div class="other-services__text">
          Используем современные технологии и подходы при создании сайтов, наличие настроенных менеджеров задач и системы контроля версий - позволяет быстрей проводить модернизацию сайта.
          Разрабатываем отзывчивые, адаптивные и доступные сайты. Работаем со множеством CMS: 1C Bitrix, WordPress, Joomla, Drupal, ModX, PrestaShop и другие. В зависимости от сложности проекта (лендинг, сайт-визитка, корпоративный портал, интернет-магазин) подбираем оптимальную CMS систему, а также при необходимости создаем собственные решения.
        </div>
      </section>
      <section class="other-services__block other-services__block--2">
        <h3 class="other-services__title">
          Написание кастомных модулей под CMS
        </h3>
        <hr class="other-services__line">
        <div class="other-services__text">
          При возникновении потребности в расширение функционала встроенных возможностей CMS или подключенных модулей - пишем собственные модули, которые решают возникшие проблемы.
        </div>
      </section>
      <section class="other-services__block other-services__block--3">
        <h3 class="other-services__title">
          Техническая поддержка и модернизация сайта
        </h3>
        <hr class="other-services__line">
        <div class="other-services__text">
          Оказываем техническую поддержку, консультацию и внедрение новых технологий и модулей для модернизации сайта - на постоянной основе по выгодной часовой ставке.
        </div>
      </section>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
