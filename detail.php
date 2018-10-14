<?php
session_start();
$user = $_SESSION['user'];
$id = $_GET['id'];
//tampilkan database
include 'koneksi.php';
$sql = mysqli_query($conn,"SELECT * FROM user WHERE username='$user'");
$data = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head><center>
  <body>
    <form action="" method="post">
    <table border="0">


    <tr style="background-color: yellow;">
      <td width=150px height=50px><img src="<?php echo $data['foto'] ?>" width="40"  height="40"></img><?php echo '@'.$user; ?></td>
      <td width=400px > <center><H3>Detail Postingan</H3></center></td>
    </tr>
    <tr>
      <td height=100px style="background-color: yellow;">
      <ul>
        <li><a href="halamanawal.php">Halaman Awal</a></li><br>
        <li><a href="editprofile.php">Edit Profil</a></li><br>
        <li><a href="posting.php">Buat Postingan</a></li><br>
        <li><a href="daftarposting.php">Postingan</a></li><br>
        <li><a href="semuaposting.php">Lihat Postingan</a></li>
        <br>
        <input type="submit" name="keluar" value="KELUAR">
      </ul>
      </td>
      <td width=600px rowspan="2"><center>
        <?php
          $sql = mysqli_query($conn,"SELECT * FROM postingan WHERE id='$id'");
          $data = mysqli_fetch_array($sql);
          echo "<b>".$data['judul']."</b><br>";
          echo "<i><small>".$data['status']."&nbsp @".$data['tanggal']."</small></i><br>";
          echo "<img src='".$data['foto']."' width='140' height='130'>"."<br>";
          echo $data['caption']."<br>";
        ?>
        <br>
        <input type="submit" name="hapus" value="HAPUS">
        <a href='editan.php?id=<?php echo $data['id']?>'><input type="button" name="update" value="EDIT"></a>
    </center></td>
    </tr>
    <tr>
      <td></td>
    </tr>
    </table>
    </form>
  </body></center>
</html>

<?php
//keluar
if (isset($_POST['hapus'])) {
  $sql = mysqli_query($conn, "DELETE FROM postingan WHERE id = '$id'");
  $conn->query($sql) === TRUE;
      header("Location:daftarposting.php");
}
if (isset($_POST['keluar'])) {
  session_destroy();
  header('Location:login.php');
}
?>
