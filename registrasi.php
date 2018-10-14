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
      <input type="password" name="password1" placeholder="Password">
      <br>
      <input type="password" name="password2" placeholder="Konfirmasi Password">
      <br>
      <input type="text" name="nama" placeholder="Nama">
      <br>
      <input type="text" name="nim" placeholder="NIM">
      <br>
      Kelas : <br>
      	 <input type="radio" name="kelas" value="D3MI4101">D3MI4101<br/>
      	 <input type="radio" name="kelas" value="D3MI4102">D3MI4102<br/>
      	 <input type="radio" name="kelas" value="D3MI4103">D3MI4103<br/>
      	 <input type="radio" name="kelas" value="null" checked hidden><br/>
      Jenis Kelamin : <br>
      	<input type="radio" name="jk" value="Laki-Laki"> Laki-Laki<br>
      	<input type="radio" name="jk" value="Perempuan"> Perempuan<br>
      	<input type="radio" name="jk" value="null" checked hidden><br>
      Hobi : <br>
      	<input type="checkbox" name="hobi[]" value="Makan">Makan<br>
      	<input type="checkbox" name="hobi[]" value="Tidur">Tidur<br>
      	<input type="checkbox" name="hobi[]" value="Nonton">Nonton<br>
      	<input type="checkbox" name="hobi[]" value="Kuliah">Kuliah<br>
      	<br>
      	Masukkan Fakultas
      	<select name="fakultas">
      		  <option value="null">Pilih..</option>
      		  <option value="FIT">FIT</option>
      		  <option value="FEB">FEB</option>
      		  <option value="FKB">FKB</option>
      		  <option value="FIK">FIK</option>
      	</select>
      	<br>
      <input type="textarea" name="alamat" placeholder="Alamat...">
      <br>
      <input type="submit" name="submit" value="Daftar">
      <br><br>
      Sudah Memiliki Akun?
      <a href="login.php">Masuk</a>
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];
    $nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$kelas = $_POST['kelas'];
		$jk = $_POST['jk'];
		$fakultas = $_POST['fakultas'];
		$alamat = $_POST['alamat'];

  //Validasi
    echo "<br>";
        if (empty($user)) {
            echo "Username Belum Terisi<br>";
            $val_err1 = 'f';
        }else {$val_err1 = 't';}

        if (empty($pass1)) {
            echo "Password Belum Terisi<br>";
            $val_err2 = 'f';
        }else {$val_err2 = 't';}

        if (empty($pass2)) {
            echo "Password Belum Terisi<br>";
            $val_err3 = 'f';
        }else {$val_err3 = 't';}

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

    //input ke database
    include('koneksi.php');
    if (($pass1 == $pass2) && $val_err1 == 't' && $val_err2 == 't' && $val_err3 == 't' && $val_err4 == 't' && $val_err5 == 't' && $val_err6 == 't'
    && $val_err7 == 't' && $val_err8 == 't' && $val_err9 == 't' && $val_err10 == 't'  && $val_err11 == 't'  && $val_err12 == 't') {
      $pass = md5($pass1);
      $sql="INSERT INTO user (username, password, nama, nim, kelas, jk, hobi, fakultas, alamat, foto) VALUES ('$user','$pass','$nama','$nim','$kelas','$jk','$tampung','$fakultas','$alamat','gambar/profil.png')";
      if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('Registrasi Berhasil');
        </script>";
        // header('Location:login.php');
      }else {
        echo "Ada Error : $sql<br><b>$conn->error</b>";
      }
    }else {
      echo "<script>
      alert('Registrasi Gagal');
      </script>";
    }
}
?>
