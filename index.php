<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>PMB I Universitas Copas x</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <?php
      include_once 'link.php';
      ?>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-scrolled">
      <?php
      include_once 'navbar.php';
      ?>
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <?php
  include_once 'beranda.php';
  ?>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= About Us Section ======= -->
    <?php
    include_once 'alur.php';
    include_once 'pendaftaran.php';
    include_once 'fakultas.php';
    include_once 'fasilitas.php';

    ?>
    <?php
    ?>

    <!-- End Contact Section -->
  </main>
  <!-- End #main -->
  <?php
  include_once 'footer.php';
  ?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <?php
  include_once 'script.php';
  ?>
</body>

</html>