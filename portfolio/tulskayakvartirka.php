<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--tulskayakvartirka">
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
        Создание типового корпоративного сайта
      </h1>
      <section class="about__text">
        <h2 class="about__subtitle">О Клиенте:</h2>
        "Тульская квартирка" - это фирма предоставляющая услуги по сдаче квартир в аренду в Туле. В постоянном наличии десятки квартир территориально расположенные по всему городу, так что любой желающий сможет подобрать подходящий для себя вариант.
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Результат:</h2>
        <img src="/img/clients/tulskayakvartirka/tulskayakvartirka_site.jpg" class="image image--site" alt="Внешний вид сайта - Тульская квартирка">
        Был разработан корпоративный сайт с представленным ассортиментом сдаваемых квартир. Каждая квартира имеет свою "карточку" с подробным описанием и прилагаемыми фотографиями. Также на главной странице расположена большая интерактивная карта, позволяющая выбрать квартиры в необходимом районе.
        Итоговый внешний вид сайта представлен на приведенном изображении.
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Перечень работ:</h2>
        <ul>
          <li>
            - Подбор и утверждение подходящего типового решения
          </li>
          <li>
            - Настройка и необходимый редизайн типового решения
          </li>
          <li>
            - Копирайтинг текста для страниц сайта
          </li>
          <li>
            - Наполнение сайта основным контентом (квартиры с описанием и фотографиями)
          </li>
          <li>
            - Настройка домена и хостинга
          </li>
        </ul>
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Описание работ:</h2>
        Оффлайн рынок не позволяет задействовать всего многообразия различных рычагов, имеющихся в интернете, поэтому клиент пришел к выводу что необходимо представить его фирму в сети. Для этого был разработан бюджетный вариант корпоративного сайта, с использованием настроенного типового решения.
        На первых встречах велись долгие переговоры по утверждению шаблона сайта, после утверждения одного из предоставленных макетов, дизайнер стал кастомизировать типовое решение под нужды заказчика. Также наша компания взяла на себя обязательства по контент наполнению. Были подобраны и обработаны множество тематических изображений и проведен копирайт текста. Дальнейшим шагом было размещение готового сайта на хостинге с последующей настройкой.
      </section>
    </article>
  </main>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
  ?>
