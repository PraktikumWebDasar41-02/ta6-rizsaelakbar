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
    <form action="" method="post" enctype="multipart/form-data">
    <table border="0">


    <tr style="background-color: yellow;">
      <td width=150px height=50px><img src="<?php echo $data['foto'] ?>" width="40" height="40"></img><?php echo '@'.$user; ?></td>
      <td width=400px > <center><H3>Buat Postingan</H3></center></td>
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
        <input type="text" name="judul" value="" placeholder="Judul Postingan" size="50">
        <textarea name="caption" rows="20" cols="80" placeholder="Tulis deskripsi postingan..."></textarea><br>
        Masukkan Foto Postingan<br>
        <input type="file" name="fotopost">
        <br><br>
        <input type="submit" name="submit" value="KIRIM">
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
if (isset($_POST['submit'])) {
  $judul = $_POST['judul'];
  $capt = $_POST['caption'];
  $caption = str_replace("'"," ",$capt);
  $fotopost = $_FILES['fotopost']['name'];

//validasi
if (str_word_count($capt)>=30) {
  $err = "t";
}else{
    echo "<br>";
    $err = "f";
    echo "Nama Minimal 30 Kata";
}
if (empty($judul)) {
    echo "Judul Belum Terisi";
    $val_err1 = 'f';
}else {$val_err1 = 't';}
if (empty($fotopost)) {
    echo "Foto Belum Terisi";
    $val_err = 'f';
}else {$val_err = 't';}

//pindah foto
$folder = 'gambar/';
$path = $folder.basename($fotopost);
move_uploaded_file($_FILES['fotopost']['tmp_name'], $path);

//input data
if ($val_err=='t' && $err == 't' && $val_err1 == 't') {
$sql = "INSERT INTO postingan (judul,caption,foto,tanggal,status,username) VALUES ('$judul','$caption','$path', DATE_FORMAT(now(), '%d-%M-%Y %H:%i:%s'),'Dibuat','$user')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('TERKIRIM');
        </script>";
    } else {echo "<br>UPLOAD ERROR: " . $conn->error;}
  }else {
    echo "GAGAL";
  }
}
?>
<?php
//keluar
if (isset($_POST['keluar'])) {
  session_destroy();
  header('Location:login.php');
}
?>
