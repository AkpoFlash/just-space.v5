<footer class="footer" itemscope itemtype="http://schema.org/Organization">
  <table class="footer__contact">
    <tr class="footer__element">
      <td>
        <h3 class="footer__title">Телефон</h3>
      </td>
      <td>
        <h3 class="footer__title">Адрес</h3>
      </td>
    </tr>
    <tr class="footer__element">
      <td>
        <a class="footer__link" href="tel:+79202762950" itemprop="telephone">+7 (920) 276-29-50</a>
      </td>
      <td>
        <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
          <span itemprop="addressLocality">Россия, г. Тула</span>,
          <span itemprop="streetAddress">пр. Ленина, д. 77, оф. 404</span>
        </span>
      </td>
    </tr>
    <tr class="footer__element">
      <td>
        <h3 class="footer__title">Email</h3>
      </td>
      <td rowspan="2">
        <a class="footer__social-link" href="https://vk.com/justspaceweb">
          <svg class="footer__icon footer__icon--vk" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#vk"></use>
          </svg>
        </a>
        <a class="footer__social-link" href="https://www.instagram.com/justspaceweb">
          <svg class="footer__icon footer__icon--instagram" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#instagram"></use>
          </svg>
        </a>
        <a class="footer__social-link" href="https://www.facebook.com/justspaceweb">
          <svg class="footer__icon footer__icon--facebook" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#facebook"></use>
          </svg>
        </a>
        <a class="footer__social-link" href="https://www.twitter.com/justspaceweb">
          <svg class="footer__icon footer__icon--twitter" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#twitter"></use>
          </svg>
        </a>
        <a class="footer__social-link" href="https://telegram.me/justspaceweb">
          <svg class="footer__icon footer__icon--telegram" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/sprites/sprites.svg#telegram"></use>
          </svg>
        </a>
      </td>
    </tr>
    <tr class="footer__element">
      <td>
        <a class="footer__link" href="mailto:info@just-space.ru" itemprop="email">info@just-space.ru</a>
      </td>
    </tr>
  </table>
  <div class="footer__copyright">
    Copyright &copy; <?php echo date("Y");?> <span itemprop="name">Just Space</span>
  </div>
</footer>
<script src="/js/functions.min.js" defer></script>
<script src="/js/ajax.min.js" defer></script>
<script src="/js/scripts.min.js" defer></script>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/metrika-yandex.php");
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/metrika-google.php");
?>
</body>
</html>
