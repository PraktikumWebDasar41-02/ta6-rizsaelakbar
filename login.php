<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <input type="text" name="username" placeholder="Username">
      <br>
      <input type="password" name="password" placeholder="Password">
      <br>
      <input type="submit" name="submit" value="Daftar">
      <br><br>
      Belum Memiliki Akun?
      <a href="registrasi.php">Daftar</a>
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
  $user = $_POST['username'];
  $pass = md5($_POST['password']);

  //Validasi
        if (empty($user)) {
            echo "<br>";
            echo "Username Belum Terisi";
            $val_err1 = 'f';
        }else {
            $val_err1 = 't';
        }
        if (empty($pass)) {
            echo "<br>";
            echo "Password Belum Terisi";
            $val_err2 = 'f';
        }else {
            $val_err2 = 't';
        }
    //input ke database
    include('koneksi.php');
    if ($val_err1 == 't' && $val_err2 == 't') {
      $sql=mysqli_query($conn, "SELECT * FROM user WHERE username = '$user' AND password = '$pass'");
      $cek = mysqli_num_rows($sql);
          if ($cek > 0) {
            session_start();
            $_SESSION['user'] = $user;
            echo "<script>
            alert('Login Berhasil');
            </script>";
            header('Location:halamanawal.php');
          }else {
            echo "<script>
            alert('Login Gagal');
            </script>";
          }
    }else {
      echo "<script>
      alert('Login Gagal');
      </script>";
    }
}
?>
