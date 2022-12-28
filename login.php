<?
include 'libs/load.php';
?>
<!doctype html>
<html lang="en">

<head>
  <?
  load_template('_head');
  ?>
</head>

<body>
  <header>
    <?
    load_template('_about');
    ?>
    <?
    load_template('_header');
    ?>
  </header>

  <main>
    <?
    load_template('_login');
    ?>
  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="lead text-muted text-center">
        Kraken Limited &copy; 2022
      </p>
    </div>
  </footer>

  <script src="/photogram/assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>