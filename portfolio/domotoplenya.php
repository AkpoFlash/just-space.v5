<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--domotoplenya">
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
        Контекстная реклама для лендинга
      </h1>
      <section class="about__text">
        <h2 class="about__subtitle">О Клиенте:</h2>
        Работает на рынке отопительных систем с 2008 года. Для более чем 2 000 домов организовал отопление под ключ: от выезда инженера на объект до сдачи проектной документации и помощи в эксплуатации.
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Результат:</h2>
        Результаты из Яндекс.Директ за отчетный период, представлены ниже.
        <br>
        <picture>
          <source srcset="/img/clients/cis/cis_metrik_mobile.jpg" media="(max-width: 1000px)">
          <img class="image" src="/img/clients/cis/cis_metrik.jpg" alt="Показатели Яндекс.Директ - Центр Инженерных систем">
        </picture>
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Перечень работ:</h2>
        <ul>
          <li>
            - Выбор более 2000 релевантных ключевых фраз
          </li>
          <li>
            - Согласование и утверждение фраз по которым будет проходить кампания
          </li>
          <li>
            - Создание и первоначальная настройка таргетинга рекламной кампании
          </li>
          <li>
            - Копирайт тематических объявлений под утвержденные ключевые слова
          </li>
          <li>
            - Дальнейшая поддержка, настройка и расширение контекстных объявлений
          </li>
        </ul>
      </section>
      <section class="about__text">
        <h2 class="about__subtitle">Описание работ:</h2>
        Контекстная реклама, за счет своей возможности задать определенный таргетинг, позволяет привлекать только целевую аудиторию. В совокупности с лендингом, направленным на продажу товара или услуг, можно получить высокий процент конверсии. Ниже о том что мы сделали, чтобы воплотить эту идею на практике.
        <br>
        В первую очередь необходимо было создать рекламную кампанию в Яндекс.Директ, грамотно настроить таргетинг, подобрать ключевые слова и написать качественные тематические рекламные объявления. Мы подобрали более 2000 ключевых фраз из которых в дальнейшем утвердили около 700 релевантных ключевиков. Составили под каждый продвигаемый запрос объявление и запустили рекламную кампанию. Следующей целью было увеличения качества аккаунта до возможного максимума и понижением цены клика до приемлемого значения. Дальнейшая работа сводилась к рерайту объявлений и регулированию ключевых фраз, что способствовало повышению конверсии и экономии бюджета рекламной кампании.
      </section>
    </article>
  </main>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
  ?>
