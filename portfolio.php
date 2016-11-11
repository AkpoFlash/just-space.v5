<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/doc_head.php");
?>
<body>
  <header class="header header__portfolio">
    <nav class="navigation">
      <a href="javascript:void(0)" class="hamburger">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </a>
      <a href="index.php" class="navigation__logo">Just Space</a>
      <span class="navigation__section">Портфолио</span>
    </nav>
  </header>
  <?php
    require_once("templates/sidebar.php");
  ?>
  <main class="main">

  </main>
<?php
  require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.php");
?>