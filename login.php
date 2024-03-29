<?php
session_start();
?>
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
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


  <main id="main">
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
<div class="login-form">
    <form action="/examples/actions/confirmation.php" method="post">
        <h2 class="text-center">Sign in</h2>
        <p class="text-center">Login PMB</p>       
        <div class="form-group" >
            <input type="text" class="form-control" placeholder="Masukan NIK" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Masukan Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
                
    </form>
</div>
    </section>
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <?php
  include_once 'script.php';
  ?>
</body>

</html>