<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header">
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="index.php" class="navigation__logo">Just Space</a>
    </nav>
    <section class="header-services">
      <section class="header-service">
        <svg class="header-service__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 55"><circle cx="45" cy="26" r="1"/><circle cx="9" cy="26" r="1"/><circle cx="12" cy="29" r="1"/><circle cx="18" cy="29" r="1"/><circle cx="15" cy="32" r="1"/><circle cx="21" cy="32" r="1"/><circle cx="24" cy="35" r="1"/><circle cx="30" cy="35" r="1"/><circle cx="33" cy="32" r="1"/><circle cx="27" cy="38" r="1"/><circle cx="36" cy="29" r="1"/><circle cx="42" cy="29" r="1"/><circle cx="39" cy="32" r="1"/><path d="M45.6 32.8l9.4-5.4 -9.7-5.5 9.7-5.5L27.5 0.8 0 16.4l9.7 5.5L0 27.4l9.7 5.5L0 38.4l27.5 15.7 27.5-15.7 -9.7-5.5 0.1 0C45.4 32.9 45.5 32.8 45.6 32.8zM27.5 3.1l23.4 13.3 -7.6 4.4 0 0 -15.8 9L4 16.4 27.5 3.1zM11.1 23.4c0.2 0.3 0.5 0.6 0.9 0.6 0.3 0 0.5-0.1 0.7-0.3l2.3 1.3c-0.5 0-1 0.5-1 1 0 0.6 0.4 1 1 1s1-0.4 1-1c0-0.2-0.1-0.3-0.1-0.5l10.3 5.9c-0.1 0.2-0.2 0.4-0.2 0.6 0 0.6 0.4 1 1 1s1-0.4 1-1c0-0.1 0-0.1 0-0.1l10.1-5.7c0.1 0.5 0.5 0.9 1 0.9 0.6 0 1-0.4 1-1 0-0.3-0.2-0.6-0.4-0.8l2.2-1.3c0.1 0 0.1 0 0.2 0 0.4 0 0.8-0.3 0.9-0.7l0.3-0.2 7.6 4.3 -2 1.1c-0.2-0.3-0.5-0.6-0.9-0.6 -0.6 0-1 0.4-1 1 0 0.2 0.1 0.4 0.2 0.6l-3.9 2.3 0 0 -6.4 3.7c0.1-0.1 0.1-0.3 0.1-0.5 0-0.6-0.4-1-1-1s-1 0.4-1 1c0 0.5 0.4 1 1 1l-2.3 1.3c-0.2-0.2-0.4-0.3-0.7-0.3 -0.6 0-1 0.4-1 1 0 0.1 0 0.2 0 0.2l-4.6 2.6 -5.5-3.2c-0.1-0.4-0.5-0.7-0.9-0.7 -0.1 0-0.1 0-0.2 0l-2.2-1.3c0.2-0.2 0.4-0.5 0.4-0.8 0-0.6-0.4-1-1-1 -0.5 0-0.9 0.4-1 0.9L7 29.1c0 0 0-0.1 0-0.1 0-0.6-0.4-1-1-1 -0.2 0-0.4 0.1-0.6 0.2l-1.4-0.8L11.1 23.4zM50.9 38.4l-23.4 13.4L4 38.4l7.6-4.3 15.8 9 15.8-9L50.9 38.4z"/></svg>
        <h2>Дизайн</h2>
      </section>
      <section class="header-service">
        <svg class="header-service__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 490 490"><path d="M245 314c-5.9 0-10.7 4.8-10.7 10.7s4.8 10.8 10.7 10.8c5.9 0 10.8-4.8 10.8-10.8S250.9 314 245 314z"/><path d="M480 21H10c-5.5 0-10 4.5-10 10v327.5c0 5.5 4.5 10 10 10h174.7l-17.5 42.4h-32.9c-5.5 0-10 4.5-10 10v38.1c0 5.5 4.5 10 10 10h221.3c5.5 0 10-4.5 10-10v-38.1c0-5.5-4.5-10-10-10h-32.9l-17.5-42.4H480c5.5 0 10-4.5 10-10V31C490 25.5 485.5 21 480 21zM470 41v240.9H20V41H470zM345.7 449H144.3v-18.1h201.3V449zM301.1 410.9H188.9l17.5-42.4h77.3L301.1 410.9zM20 348.5v-46.6h450v46.6H20z"/><path d="M323.2 161.1L323.2 161.1 323.2 161.1c0-5.5-4.5-10-10-10l-10.7 0c-0.6-3.5-1.5-6.8-2.7-10.1l9.2-5.3c4.8-2.8 6.4-8.9 3.7-13.7 -2.8-4.8-8.9-6.4-13.7-3.7l-9.2 5.3c-2.2-2.7-4.7-5.1-7.4-7.4l5.3-9.2c2.8-4.8 1.1-10.9-3.7-13.7 -4.8-2.8-10.9-1.1-13.7 3.7l-5.3 9.2c-3.2-1.2-6.6-2.1-10.1-2.7V93c0-5.5-4.5-10-10-10 0 0-0.1 0-0.1 0s-0.1 0-0.1 0c-5.5 0-10 4.5-10 10v10.7c-3.5 0.6-6.8 1.5-10.1 2.7l-5.3-9.2c-2.8-4.8-8.9-6.4-13.7-3.7 -4.8 2.8-6.4 8.9-3.7 13.7l5.3 9.2c-2.7 2.2-5.1 4.7-7.4 7.4l-9.2-5.3c-4.8-2.8-10.9-1.1-13.7 3.7 -2.8 4.8-1.1 10.9 3.7 13.7l9.2 5.3c-1.2 3.2-2.1 6.6-2.7 10.1l-10.7 0c-5.5 0-10 4.5-10 10l0 0 0 0 0 0 0 0c0 5.5 4.5 10 10 10l10.7 0c0.6 3.5 1.5 6.8 2.7 10.1l-9.2 5.3c-4.8 2.8-6.4 8.9-3.7 13.7 2.8 4.8 8.9 6.4 13.7 3.7l9.2-5.3c2.2 2.7 4.7 5.1 7.4 7.4l-5.3 9.2c-2.8 4.8-1.1 10.9 3.7 13.7 4.8 2.8 10.9 1.1 13.7-3.7l5.3-9.2c3.2 1.2 6.6 2.1 10.1 2.7v10.7c0 5.5 4.5 10 10 10 0 0 0.1 0 0.1 0s0.1 0 0.1 0c5.5 0 10-4.5 10-10v-10.7c3.5-0.6 6.8-1.5 10.1-2.7l5.3 9.2c2.8 4.8 8.9 6.4 13.7 3.7 4.8-2.8 6.4-8.9 3.7-13.7l-5.3-9.2c2.7-2.2 5.1-4.7 7.4-7.4l9.2 5.3c4.8 2.8 10.9 1.1 13.7-3.7 2.8-4.8 1.1-10.9-3.7-13.7l-9.2-5.3c1.2-3.2 2.1-6.6 2.7-10.1l10.7 0C318.7 171.1 323.2 166.6 323.2 161.1L323.2 161.1 323.2 161.1zM245.1 199.4c0 0-0.1 0-0.1 0s-0.1 0-0.1 0c-21.1 0-38.3-17.2-38.3-38.3 0-21.1 17.2-38.3 38.3-38.3 0 0 0.1 0 0.1 0s0.1 0 0.1 0c21.1 0 38.3 17.2 38.3 38.3C283.4 182.2 266.2 199.4 245.1 199.4z"/></svg>
        <h2>Разработка</h2>
      </section>
      <section class="header-service">
        <svg class="header-service__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 470 470"><path d="m257.6 360.5h-45c-4.1 0-7.5 3.4-7.5 7.5s3.4 7.5 7.5 7.5h45c4.1 0 7.5-3.4 7.5-7.5s-3.4-7.5-7.5-7.5z"/><path d="m470 397.3c0-0.3-0.1-0.6-0.1-0.9 0-0.1 0-0.1-0.1-0.2-0.1-0.2-0.1-0.5-0.2-0.7 0-0.1 0-0.1-0.1-0.2-0.1-0.3-0.2-0.5-0.3-0.8 0 0 0 0 0-0.1 0-0.1-41.6-78.3-41.6-78.3v-204.3c0-4.1-3.4-7.5-7.5-7.5s-7.5 3.4-7.5 7.5v198.6h-355v-211.1c0-12.4 10.1-22.5 22.5-22.5h297.6c4.1 0 7.5-3.4 7.5-7.5s-3.4-7.5-7.5-7.5h-297.6c-20.7 0-37.5 16.8-37.5 37.5v216.7l-41.6 78.3c0 0.1-0.1 0.1-0.1 0.1-0.1 0.2-0.2 0.5-0.3 0.8 0 0.1-0.1 0.1-0.1 0.2-0.1 0.2-0.1 0.4-0.2 0.7 0 0.1 0 0.1 0 0.2-0.1 0.3-0.1 0.6-0.1 0.9 0 0.3 0 0.5 0 0.8v15c0 20.7 16.8 37.5 37.5 37.5h395c20.7 0 37.5-16.8 37.5-37.5v-15c0-0.3 0-0.5 0-0.8zm-415.5-71.7h361l34.5 65h-430l34.5-65zm378 110h-395c-12.4 0-22.5-10.1-22.5-22.5v-7.5h440v7.5c0 12.4-10.1 22.5-22.5 22.5z"/><path d="m422.5 34.5h21.9l-179 179-55.4-55.4c-2.9-2.9-7.7-2.9-10.6 0l-124.7 124.7c-2.9 2.9-2.9 7.7 0 10.6 1.5 1.5 3.4 2.2 5.3 2.2s3.8-0.7 5.3-2.2l119.4-119.4 55.4 55.4c2.9 2.9 7.7 2.9 10.6 0l184.3-184.3v21.9c0 4.1 3.4 7.5 7.5 7.5s7.5-3.4 7.5-7.5v-40c0-4.1-3.4-7.5-7.5-7.5h-40c-4.1 0-7.5 3.4-7.5 7.5s3.4 7.5 7.5 7.5z"/></svg>
        <h2>Продвижение</h2>
      </section>
    </section>
  </header>
<?php
  require_once("templates/sidebar.php");
?>
  <main class="main">
    <section class="about">
      <h1>Digital-агентство Just Space</h1>
      <div class="about__text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum maxime iure nemo pariatur corrupti eius distinctio repellat mollitia rerum iusto, earum, perspiciatis id libero, dolores asperiores quae recusandae. Similique recusandae asperiores quas, excepturi alias fugit quae quia natus veritatis. Veritatis corporis saepe, cupiditate illum quidem sit fugiat alias ducimus amet quisquam fugit in deleniti illo labore consectetur adipisci tenetur assumenda, repellendus placeat quos quod nihil. A reiciendis, sed sequi, vero at nesciunt tempora sunt repudiandae quisquam necessitatibus iusto iste ipsam esse omnis ad architecto quas mollitia nobis error natus, quasi. Eveniet aperiam recusandae hic a laudantium doloribus distinctio labore tempora.
      </div>
    </section>
    <section class="order">
      <form class="order__form" action="index.php" method="post">
        <table class="order__table">
          <tr>
            <td colspan="2">
              <h2 class="order__title">Заказать проект</h2>
            </td>
          </tr>
          <tr>
            <td class="order__cell">
              <label class="order__label" for="fio">Ваше имя</label>
            </td>
            <td>
              <input class="order__input" type="text" name="fio" id="fio" placeholder="Ваше имя">
            </td>
          </tr>
          <tr>
            <td class="order__cell">
              <label class="order__label" for="tel">Телефон</label>
            </td>
            <td>
              <input class="order__input" type="text" name="tel" id="tel" placeholder="Телефон">
            </td>
          </tr>
          <tr>
            <td class="order__cell">
              <label class="order__label" for="email">Email</label>
            </td>
            <td>
              <input class="order__input" type="email" name="email" id="email" placeholder="Email">
            </td>
          </tr>
          <tr>
            <td class="order__cell">
              <label class="order__label" for="project">Расскажите о вашем проекте</label>
            </td>
            <td>
              <textarea class="order__textarea" name="project" id="project" placeholder="Расскажите о вашем проекте"></textarea>
            </td>
          </tr>
          <tr>
            <td>

            </td>
            <td>
              <div class="buttons">
                <button class="order__button order__button--file" id="file__front" type="button">
                  <span>
                    <svg class="order__button-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M97.3 482.2c-23.3 0-45.2-9.1-61.7-25.6 -34-34-34-89.4 0-123.4L305.3 63.5c21.7-21.7 50.6-33.7 81.4-33.7 30.8 0 59.7 12 81.4 33.7 21.7 21.7 33.7 50.6 33.7 81.4 0 30.8-12 59.7-33.7 81.4L255.8 438.6c-6.4 6.4-16.7 6.4-23.1 0 -6.4-6.4-6.4-16.7 0-23.1l212.3-212.3c15.6-15.6 24.2-36.3 24.2-58.3 0-22-8.6-42.7-24.2-58.3 -15.6-15.6-36.3-24.2-58.3-24.2 -22 0-42.7 8.6-58.3 24.2L58.7 356.3c-21.3 21.3-21.3 55.9 0 77.2 20.6 20.6 56.6 20.6 77.2 0l181.1-181.1c4.9-4.9 7.7-11.7 7.7-18.7 0-7-2.8-13.7-7.8-18.7 -10.3-10.3-27.1-10.3-37.4 0L156 338.8c-6.4 6.4-16.7 6.4-23.1 0 -6.4-6.4-6.4-16.7 0-23.1l123.7-123.7c23-23 60.5-23 83.5 0 11.2 11.2 17.3 26 17.3 41.8 0 15.5-6.3 30.8-17.3 41.8L159 456.6C142.6 473.1 120.7 482.2 97.3 482.2z"/></svg>
                  </span>
                  <span>
                    Прикрепить файл
                  </span>
                </button>
                <input class="order__file" id="file__back" type="file" name="file">
                <input class="order__button order__submit" type="submit" name="order_sub" value="Заказать">
              </div>
            </td>
          </tr>
        </table>
      </form>
    </section>
  </main>
  <footer class="footer">

  </footer>
  <script src="/js/scripts.min.js"></script>
</body>
</html>
