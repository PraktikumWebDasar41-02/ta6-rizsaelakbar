<?php
session_start();
$user = $_SESSION['user'];
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
      <td width=400px > <center><H3>Home</H3></center></td>
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
      <td width=600px rowspan="2"><center><H1>Biodata</H1>
        <img src="<?php echo $data['foto'] ?>" width="100"></img>
        <br>
        <b>Nama :</b> <?php echo $data['nama']; ?><br>
        <b>NIM :</b> <?php echo $data['nim']; ?><br>
        <b>Kelas :</b> <?php echo $data['kelas']; ?><br>
        <b>Jenis Kelamin :</b> <?php echo $data['jk']; ?><br>
        <b>Hobi :</b> <?php echo $data['hobi']; ?><br>
        <b>Fakultas :</b> <?php echo $data['fakultas']; ?><br>
        <b>Alamat :</b> <?php echo $data['alamat']; ?><br>
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
if (isset($_POST['keluar'])) {
  session_destroy();
  header('Location:login.php');
}
?>
