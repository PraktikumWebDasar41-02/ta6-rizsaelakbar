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
      <td width=150px height=50px><img src="<?php echo $data['foto'] ?>" width="40"  height="40"></img><?php echo '@'.$user; ?></td>
      <td width=400px > <center><H3>Edit Profil</H3></center></td>
    </tr>
    <tr>
      <td height=100px style="background-color: yellow;"><ul>
        <li><a href="halamanawal.php">Halaman Awal</a></li><br>
        <li><a href="editprofile.php">Edit Profil</a></li><br>
        <li><a href="posting.php">Buat Postingan</a></li><br>
        <li><a href="daftarposting.php">Postingan</a></li><br>
        <li><a href="semuaposting.php">Lihat Postingan</a></li>
        <br>
        <input type="submit" name="keluar" value="KELUAR">
      </ul></td>
      <td width=600px rowspan="2"><center><H1>Biodata</H1>
          <img src="<?php echo $data['foto'] ?>" width="100"></img>
          <br>
          Ganti Foto Profil<br> <input type="file" name="profil">
          <br><br>
          Nama : <input type="text" name="nama" value="<?php echo $data['nama']; ?>" placeholder="Nama">
          <br>
          NIM : <input type="text" name="nim" value="<?php echo $data['nim']; ?>" placeholder="NIM">
          <br>
          Kelas : <br>
          	 <input type="radio" name="kelas" <?php if (strpos(' '.$data['kelas'],'D3MI4101') > 0) {
               echo 'checked';
             } ?> value="D3MI4101">D3MI4101<br/>
          	 <input type="radio" name="kelas" <?php if (strpos(' '.$data['kelas'],'D3MI4102') > 0) {
               echo 'checked';
             } ?> value="D3MI4102">D3MI4102<br/>
          	 <input type="radio" name="kelas" <?php if (strpos(' '.$data['kelas'],'D3MI4103') > 0) {
               echo 'checked';
             } ?> value="D3MI4103">D3MI4103<br/>
          Jenis Kelamin : <br>
          	<input type="radio" name="jk" <?php if (strpos(' '.$data['jk'],'Laki') > 0) {
              echo 'checked';
            } ?> value="Laki-Laki"> Laki-Laki<br>
          	<input type="radio" name="jk" <?php if (strpos(' '.$data['jk'],'Perempuan') > 0) {
              echo 'checked';
            } ?> value="Perempuan"> Perempuan<br>
          Hobi : <br>
          	<input type="checkbox" name="hobi[]" <?php if (strpos(' '.$data['hobi'],'Makan') > 0) {
              echo 'checked';
            } ?> value="Makan">Makan<br>
          	<input type="checkbox" name="hobi[]" <?php if (strpos(' '.$data['hobi'],'Tidur') > 0) {
              echo 'checked';
            } ?> value="Tidur">Tidur<br>
          	<input type="checkbox" name="hobi[]" <?php if (strpos(' '.$data['hobi'],'Nonton') > 0) {
              echo 'checked';
            } ?> value="Nonton">Nonton<br>
          	<input type="checkbox" name="hobi[]" <?php if (strpos(' '.$data['hobi'],'Kuliah') > 0) {
              echo 'checked';
            } ?> value="Kuliah">Kuliah<br>
          	<br>
          	Masukkan Fakultas
          	<select name="fakultas">
          		  <option value="FIT" <?php if (strpos(' '.$data['fakultas'],'FIT') > 0) {
                  echo 'selected';
                } ?>>FIT</option>
          		  <option value="FEB" <?php if (strpos(' '.$data['fakultas'],'FEB') > 0) {
                  echo 'selected';
                } ?>>FEB</option>
          		  <option value="FKB" <?php if (strpos(' '.$data['fakultas'],'FKB') > 0) {
                  echo 'selected';
                } ?>>FKB</option>
          		  <option value="FIK" <?php if (strpos(' '.$data['fakultas'],'FIK') > 0) {
                  echo 'selected';
                } ?>>FIK</option>
          	</select>
          	<br>
          <input type="textarea" name="alamat" value="<?php echo $data['alamat']; ?>" placeholder="Alamat...">
          <br><br>
          <input type="submit" name="edit" value="Perbarui">
          <br><br>
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
//input pembaruan
if (isset($_POST['edit'])) {
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $kelas = $_POST['kelas'];
  $jk = $_POST['jk'];
  $fakultas = $_POST['fakultas'];
  $alamat = $_POST['alamat'];
  $profil = $_FILES['profil']['name'];

  //Validasi
    echo "<br>";
        if (strlen($nama)>=35) {
				echo "<br>";
				$val_err4 = "f";
				echo "Nama Maksimal 35 Karakter";
			}else{$val_err4 = "t";}

			if(empty($nama)){
			echo "Nama masih kosong.<br>";
			$val_err5 = "f";
    }else{$val_err5 = "t";}

			if (strlen($nim)==10) {
				echo "<br>";
				$val_err6 = "t";
			}else{$val_err6 = "f";
				echo "NIM Maksimal Minimal 10 Karakter";
			}

			if (!is_numeric($nim)) {
				echo "<br>";
				$val_err7 = "f";
				echo "NIM Harus Angka";
			}else{$val_err7 = "t";}

			if (isset($_POST['hobi'])) {
        $hobi = $_POST['hobi'];
        $tampung = "";
		      for ($i=0; $i < count($hobi) ; $i++) {
            $tampung .= "$hobi[$i] ";
          }
      }

  		if(empty($tampung)){
  			echo "Nama masih kosong.<br>";
  			$val_err8 = "f";
      }else{$val_err8 = "t";}

  		if(empty($alamat)){
  			echo "Alamat masih kosong.<br>";
  			$val_err9 = "f";
      }else{$val_err9 = "t";}

  		if ($fakultas == 'null') {
  			$val_err10 = "f";
  			echo "Isilah Fakultas";
  		}else{$val_err10 = "t";}

  		if ($kelas == 'null') {
  			echo "<br>";
  			$val_err11 = "f";
  			echo "Isilah Kelas";
  		}else{$val_err11 = "t";}

  		if ($jk == 'null') {
  			echo "<br>";
  			$val_err12 = "f";
  			echo "Isilah Jenis Kelamin";
  		}else{$val_err12 = "t";}
//pindah Foto
$folder = 'gambar/';
$path = $folder.basename($profil);
move_uploaded_file($_FILES['profil']['tmp_name'], $path);
//input
    include('koneksi.php');
    if ($val_err4 == 't' && $val_err5 == 't' && $val_err6 == 't'
    && $val_err7 == 't' && $val_err8 == 't' && $val_err9 == 't' && $val_err10 == 't'  && $val_err11 == 't'  && $val_err12 == 't') {
      if (empty($profil)) {
        $sql="UPDATE user set nama='$nama',nim='$nim',kelas='$kelas',jk='$jk',hobi='$tampung',fakultas='$fakultas',alamat='$alamat' WHERE username='$user'";
      }else {
        $sql="UPDATE user set nama='$nama',nim='$nim',kelas='$kelas',jk='$jk',hobi='$tampung',fakultas='$fakultas',alamat='$alamat',foto='$path' WHERE username='$user'";
      }
      if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('Update Berhasil');
        </script>";
        header('Location:halamanawal.php');
      }else {
        echo "Ada Error : $sql<br>$conn->error";
      }
    }
}

?>
