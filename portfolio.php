<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--portfolio">
    <div class="header__mask"></div>
    <h1 class="header__title header__title--slice">Портфолио</h1>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="logo">Just <span class="logo__border">Space</span></a>
      <span class="navigation__section">Портфолио</span>
    </nav>
  </header>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/sidebar.php");
  ?>
  <main class="main">
    <article class="portfolio">
      <article class="portfolio__text">
        Ко всем проектам мы подходим с большим вниманием и ответственностью.
        Наши сотрудники специализируются на создании сайтов под ключ. При необходимости внедряем CMS (1С-Битрикс, ModX, WordPress).
        Перед началом продвижения сайта мы выполняем детальный аудит, выявляем все узкие места и предлагаем различные решения и варианты оптимизации сайта.
        Также занимаемся разработкой мобильных приложений и интеграцией приложений с сайтами.
        На этой странице вы можете ознакомиться с подробным описанием реальных кейсов встречаемых в нашей практике при создании сайтов и приложений для наших клиентов.
      </article>
      <section class="portfolio__line">
        <a href="/portfolio/tusman.php" class="portfolio__project">
          <img src="/img/clients/tusman/tusman_logo_white.png" class="portfolio__logo" alt="Логотип - SportLifting">
          <div class="portfolio__mask portfolio__mask--6">
            <div class="portfolio__categories">
              <span class="portfolio__category">Реклама</span>
              <span class="portfolio__category">Дизайн</span>
            </div>
          </div>
          <img src="/img/clients/tusman/tusman_clip.jpg" class="portfolio__image" alt="Сайт - SportLifting">
        </a>
        <a href="/portfolio/tsu.php" class="portfolio__project">
          <img src="/img/clients/tsu/tsu_logo_white.png" class="portfolio__logo" alt="Логотип - Тульская квартирка">
          <div class="portfolio__mask portfolio__mask--1">
            <div class="portfolio__categories">
              <span class="portfolio__category">Тех. поддержка</span>
              <span class="portfolio__category">Продвижение</span>
            </div>
          </div>
          <img src="/img/clients/tsu/tsu_clip.jpg" class="portfolio__image" alt="Сайт - Тульский государственный университет">
        </a>
        <a href="/portfolio/volonter71.php" class="portfolio__project">
          <img src="/img/clients/volonter71/volonter71_logo_white.png" class="portfolio__logo" alt="Логотип - Тульский Центр Недвижимости">
          <div class="portfolio__mask portfolio__mask--2">
            <div class="portfolio__categories">
              <span class="portfolio__category">Тех. поддержка</span>
              <span class="portfolio__category">Продвижение</span>
            </div>
          </div>
          <img src="/img/clients/volonter71/volonter71_clip.jpg" class="portfolio__image" alt="Сайт - Волонтер 71">
        </a>
        <a href="/portfolio/tcn.php" class="portfolio__project">
          <img src="/img/clients/tcn/tcn_logo_white.png" class="portfolio__logo" alt="Логотип - Тульский Центр Недвижимости">
          <div class="portfolio__mask portfolio__mask--3">
            <div class="portfolio__categories">
              <span class="portfolio__category">Контекстная реклама</span>
            </div>
          </div>
          <img src="/img/clients/tcn/tcn_clip.jpg" class="portfolio__image" alt="Сайт - Тульский Центр Недвижимости">
        </a>
        <a href="/portfolio/domotoplenya.php" class="portfolio__project">
          <img src="/img/clients/cis/cis_logo_white.png" class="portfolio__logo" alt="Логотип - Центр Инженерных Систем">
          <div class="portfolio__mask portfolio__mask--4">
            <div class="portfolio__categories">
              <span class="portfolio__category">Контекстная реклама</span>
            </div>
          </div>
          <img src="/img/clients/cis/cis_clip.png" class="portfolio__image" alt="Сайт - Центр Инженерных Систем">
        </a>
        <a href="/portfolio/gazeltraffic.php" class="portfolio__project">
          <img src="/img/clients/gazel-traffic/gazel-traffic_logo_white.png" class="portfolio__logo" alt="Логотип - Gazel-Traffic">
          <div class="portfolio__mask portfolio__mask--5">
            <div class="portfolio__categories">
              <span class="portfolio__category">Разработка под ключ</span>
              <span class="portfolio__category">Тех. поддержка</span>
              <span class="portfolio__category">Продвижение</span>
              <span class="portfolio__category">Контекстная реклама</span>
            </div>
          </div>
          <img src="/img/clients/gazel-traffic/gazel-traffic_clip.png" class="portfolio__image" alt="Сайт - Gazel-Traffic">
        </a>
        <a href="/portfolio/sportlifting.php" class="portfolio__project">
          <img src="/img/clients/sportlifting/sportlifting_logo_white.png" class="portfolio__logo" alt="Логотип - SportLifting">
          <div class="portfolio__mask portfolio__mask--6">
            <div class="portfolio__categories">
              <span class="portfolio__category">Тех. поддержка</span>
              <span class="portfolio__category">Продвижение</span>
            </div>
          </div>
          <img src="/img/clients/sportlifting/sportlifting_clip.png" class="portfolio__image" alt="Сайт - SportLifting">
        </a>
        <a href="/portfolio/justspaceshoot.php" class="portfolio__project">
          <img src="/img/clients/justspaceshoot/justspaceshoot_logo_white.png" class="portfolio__logo" alt="Логотип - Just Space Shoot">
          <div class="portfolio__mask portfolio__mask--7">
            <div class="portfolio__categories">
              <span class="portfolio__category">Разработка под ключ</span>
              <span class="portfolio__category">Тех. поддержка</span>
            </div>
          </div>
          <img src="/img/clients/justspaceshoot/justspaceshoot_clip.png" class="portfolio__image" alt="Мобильное приложение - Just Space Shoot">
        </a>
        <a href="/portfolio/doly-tula.php" class="portfolio__project">
          <img src="/img/clients/doly-tula/doly-tula_logo_white.png" class="portfolio__logo" alt="Логотип - ТЦН">
          <div class="portfolio__mask portfolio__mask--8">
            <div class="portfolio__categories">
              <span class="portfolio__category">Разработка под ключ</span>
              <span class="portfolio__category">Тех. поддержка</span>
              <span class="portfolio__category">Продвижение</span>
            </div>
          </div>
          <img src="/img/clients/doly-tula/doly-tula_clip.jpg" class="portfolio__image" alt="Сайт - Тульский Центр Недвижимости">
        </a>
        <a href="/portfolio/tulskayakvartirka.php" class="portfolio__project">
          <img src="/img/clients/tulskayakvartirka/tulskayakvartirka_logo_white.png" class="portfolio__logo" alt="Логотип - Тульская квартирка">
          <div class="portfolio__mask portfolio__mask--9">
            <div class="portfolio__categories">
              <span class="portfolio__category">Разработка под ключ</span>
            </div>
          </div>
          <img src="/img/clients/tulskayakvartirka/tulskayakvartirka_clip.jpg" class="portfolio__image" alt="Сайт - Тульская квартирка">
        </a>
      </section>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
