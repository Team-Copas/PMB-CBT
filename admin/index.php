<?php
require_once '../database/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Admin PMB</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="assets_adminlte/dist/css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

</head>
<body>
<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Sign in</h2>
        <p class="text-center">Sign in and start for Admin</p>       
        <div class="form-group" >
            <input type="text" class="form-control" placeholder="Username" required="required" name="username">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required" name="password">
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="login">Log in</button>
        </div>
                
    </form>
</div>
</body>
</html>                                		

<?php
if(isset($_POST['login']))
{
 $username = trim(mysqli_real_escape_string($con, $_POST['username']));
 $password = sha1(trim(mysqli_real_escape_string($con, $_POST['password'])));
 $sql_login = mysqli_query($con, "SELECT * FROM tbl_pengguna WHERE username = '$username' AND pass = '$password'") or die(mysqli_error($con));

   if(mysqli_num_rows($sql_login) > 0 )
   {
      $datanya = mysqli_fetch_assoc($sql_login);
      if($datanya['peran']=="Admin" )
      {
        $_SESSION['user'] = $username;
        $_SESSION['id'] = $datanya['id'];
        $_SESSION['peran'] = $datanya['peran'];
        $_SESSION['nama'] = $datanya['nama'];
        echo '
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
          swal("Berhasil", "Silahkan Tungu...", "success");
          
          setTimeout(function(){ 
          window.location.href = "./admin_dashboard";

          }, 1000);
        </script>
        ';
      }
   }
   else
   {
    echo '
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal("Gagal Login", "Akun Tidak Ditemukan!", "error");
        setTimeout(function(){ 
        window.location.href = "./";
        }, 2000);
    </script>
    ';
   }
}

?>