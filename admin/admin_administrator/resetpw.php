<?php 
require_once "../../database/config.php";
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="wrapper" style="zoom:90%" !important>
  <?php
  $id = @$_GET['id'];
  $username = @$_GET['username'];
  $encpass = 'pass'.$username;
  $pass = sha1($encpass);
  echo $id.'-'.$username.'-'.$encpass.'-'.$pass;
      mysqli_query($con, "UPDATE tbl_pengguna SET pass='$pass' WHERE id='$id'") or die (mysqli_eror($con));

    ?>
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  swal("Berhasil", "Reset Password Data Admin telah berhasil", "success");
  
  setTimeout(function(){ 
   window.location.href = "../admin_administrator";

  }, 1000);
</script>  -->
</body>
</html>
