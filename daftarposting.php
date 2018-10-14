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
      <td width=400px > <center><H3>Postingan</H3></center></td>
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
        <table border="0">
            <?php
            include 'koneksi.php';
            $sql = mysqli_query($conn, "SELECT * from postingan WHERE username = '$user'");
            $no=1;
                  foreach ($sql as $row){
                  echo "  <td>
                  <a href='detail.php?id=".$row['id']."'><img src='".$row['foto']."' width='140' height='130'></a>
                  </td>";
                  echo "  <td>
                  <a href='detail.php?id=".$row['id']."'><b>".$row['judul']."</b><br><small><i>".$row['status']."&nbsp".$row['tanggal']."</i></small><br><br></a>".substr($row['caption'],0,210)."...<a href='detail.php?id=".$row['id']."'>Lihat Selengkapnya</a><br>
                  </td>";
                  $no++;
                    if ($no>1) {
                      echo "<tr></tr>";
                      $no = 1;
                    }
                  }
            ?>
        </table>
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
