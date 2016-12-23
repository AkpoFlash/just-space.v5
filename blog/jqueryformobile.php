<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header--2div3 header--jqueryformobile">
    <div class="header__mask"></div>
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="/index.php" class="navigation__logo">Just Space</a>
      <a href="/blog.php" class="navigation__section navigation__section--link">Блог</a>
    </nav>
  </header>
  <?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/templates/sidebar.php");
  ?>
  <main class="main">
    <article class="article">
      <h2 class="article__title">
        Стоит ли в 2017 году использовать jQuery?
      </h2>
      <div class="article__paragraph">
        Более двух лет назад я уже обращал внимание на эту проблему в <a href="https://habrahabr.ru/post/247029/">переводе статьи "Is jQuery Too Big For Mobile?"</a> за авторством VanToll'а.
        <br>
        Прошло два года, мобильный интернет стал гораздо доступней, даже в провинциальных российских городах почти везде можно включить 3G и не ждать загрузки сайта по 2-3 минуты (при условии конечно, что это не костыльное single page application с подключаемым скриптом на несколько мегабайт, но это уже тема для другой статьи). Значит ли все это, что можно использовать jQquery для любых проектов без оглядки?
      </div>
      <div class="article__paragraph">
        Раньше практически все использовали jQuery и если у них спрашивали о преимуществах которые дает библиотека по сравнению с использованием нативного JavaScript'а, то они перечисляли примерно следующее:
        <ul>
          <li>- Быстрый доступ к DOM</li>
          <li>- Кросбраузерность</li>
          <li>- Удобная обработка событий</li>
          <li>- Простая работа с AJAX</li>
          <li>- Встроенные визуальные эффекты</li>
        </ul>
        Но давайте проанализируем что из этого на данный момент действительно является настолько актуальным и дает хороший буст по сравнение с нативными возможностями. И почему при решение большинства ваших задач jQuery подключать не только не нужно, но и является моветоном.
      </div>
      <div class="article__paragraph">
        <i>Сразу оговорюсь, я не агитирую поголовный отказ от jQuery везде и всюду, но когда вы создаете новый лендинг или небольшой сайт, подумайте действительно ли необходимо подключать для этого целую библиотеку?</i>
      </div>
      <div class="article__paragraph">
        Перед началом разбора хочу еще раз привести некоторые статистические данные. Обратимся к одному из крупнейших интернет-сервисов - Amazon. Они утверждают, что за каждые 100 мс задержки они теряют 1% продаж. Думаю нет смысла объяснять насколько это значимая сумма в валютном эквиваленте, так что начнем анализ.
      </div>
      <div class="article__paragraph">
        <strong>Встроенные визуальные эффекты</strong>
        <br>
        Первое мое знакомство с jQuery привело меня в восторг отчасти из-за наличия множества эффектов которые воспроизводились одной строчкой, вместо тонны кода на CSS и JavaScript, причем все было кросбраузерно из коробки! Но в дальнейшем я стал все меньше и меньше использовать встроенные эффекты, они мне надоели или не давили необходимых возможностей. Кросбраузерность стала менее актуальна (но об этом ниже) и даже если приходилось использовать несколько функций, большинство из них лежали мертвым грузом, тем самым занимая память и увеличивая время загрузки.
        <br>
        Возможно для быстрого прототипирования шаблона или для панели администратора, которую будут видеть только узкий круг людей, можно использовать jQuery и особо не париться. Но стоит учесть, что в этом случае вы увеличиваете загружаемый контент, в прошлой статье мы узнали что это может стоить вам от 100 до 1500 мс, есть над чем подумать.
      </div>
      <div class="article__paragraph">
        <strong>Простая работа с AJAX</strong>
        <br>
        Можно особо не углубляться в дискуссии, а просто сказать, что на данный момент сложность в обработки AJAX запросов с помощью jQuery и с помощью нативного JavaScript - одинаковая. Тянуть для этого целую библиотеку - бессмысленно.
      </div>
      <div class="article__paragraph">
        <strong>Удобная обработка событий</strong>
        <br>
        Можно особо не углубляться в дискуссии, а просто сказать, что на данный момент сложность в обработки AJAX запросов с помощью jQuery и с помощью нативного JavaScript - одинаковая. Тянуть для этого целую библиотеку - бессмысленно.
      </div>
      <div class="article__paragraph">
        Расскажу личный пример побудивший меня отказаться от использования jQuery в большом количестве проектов. Разрабатывая очередной лендинг в котором присутствовала только асинхронная отправка формы и несколько стилей подгружаемые через JavaScript, я задумался зачем мне ради кода размером в 4 Кб тянуть зависимость в виде библиотеки на почти 80 Кб? Я переписал весь код на нативный JavaScript, потратив на это почти столько же времени, сколько на написание этого кода на jQuery, но при этом сократил размер подгружаемых скриптов в 16 раз!
      </div>
      <div class="article__paragraph">
        В конце хотелось бы выразить свое мнение: jQyery если не тот, и должен уйти на покой. Библиотека несомненно помогла развивающемуся вебу, но сейчас уже не предоставляет те преимущества по сравнению с нативным JavaScript, как раньше. Поэтому пишите нативно и будет вам счастье.
      </div>
      <div class="article__footer">
        <div class="article__date">
          20 декабря, 2016
        </div>
        <div class="article__author">
          Анисимов Кирилл
        </div>
        <div class="clear"></div>
      </div>
    </article>
  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>
