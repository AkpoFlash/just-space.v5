<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--vacancies">
    <div class="header__mask"></div>
    <h1 class="header__title header__title--slice">Вакансии</h1>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="logo">Just <span class="logo__border">Space</span></a>
      <span class="navigation__section">Вакансии</span>
    </nav>
  </header>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/sidebar.php");
  ?>
  <main class="main">
    <article class="vacancies">
      <section class="vacancies__text">
        Для создания еще более качественных сайтов и мобильных приложений нам нужны способные сотрудники, именно поэтому мы заинтересованы в организации сильной, амбициозной и креативной команды.
        Если вы уверенны в своих силах и желаете развивать ваши профессиональные навыки - присоединяйтесь к нам!
      </section>
      <section class="vacancies__line">
        <div class="vacancy">
          <h2 class="vacancy__title">Back-End developer</h2>
          <div class="vacancy__description">
            <span>Мы предлагаем</span>
            <ul class="vacancy__list">
              <li class="vacancy__list-element">- Заработная плата по результатам собеседования</li>
              <li class="vacancy__list-element">- Свободный график</li>
            </ul>
          </div>
          <div class="vacancy__requirements">
            <span>Наши требования</span>
            <ul class="vacancy__list">
              <li class="vacancy__list-element">- Git</li>
              <li class="vacancy__list-element">- Базовые знания HTML/CSS/JavaScript</li>
              <li class="vacancy__list-element">- PHP/MySQL</li>
              <li class="vacancy__list-element">- Опыт работы с CMS (1С-Битрикс, Joomla, WordPress, ModX)</li>
            </ul>
          </div>
        </div>
        <div class="vacancy">
          <h2 class="vacancy__title">Дизайнер</h2>
          <div class="vacancy__description">
            <span>Мы предлагаем</span>
            <ul class="vacancy__list">
              <li class="vacancy__list-element">- Заработная плата по результатам собеседования</li>
              <li class="vacancy__list-element">- Свободный график</li>
            </ul>
          </div>
          <div class="vacancy__requirements">
            <span>Наши требования</span>
            <ul class="vacancy__list">
              <li class="vacancy__list-element">- Photoshop/Illustrator/Sketch</li>
              <li class="vacancy__list-element">- Разработка макетов сайтов и приложений</li>
            </ul>
          </div>
        </div>
        <div class="vacancy">
          <h2 class="vacancy__title">Junior Android developer</h2>
          <div class="vacancy__description">
            <span>Мы предлагаем</span>
            <ul class="vacancy__list">
              <li class="vacancy__list-element">- Заработная плата по результатам собеседования</li>
              <li class="vacancy__list-element">- Свободный график</li>
            </ul>
          </div>
          <div class="vacancy__requirements">
            <span>Наши требования</span>
            <ul class="vacancy__list">
              <li class="vacancy__list-element">- Базовые знания Java и Android SDK</li>
              <li class="vacancy__list-element">- Умение работать с Git, Android Studio, Gradle</li>
              <li class="vacancy__list-element">- Базовые знания основных алгоритмов и структур данных</li>
            </ul>
          </div>
        </div>
      </section>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
