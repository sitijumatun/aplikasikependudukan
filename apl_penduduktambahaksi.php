<?php
include "../apl_koneksi.php";
$kodeRT= $_POST['rt']; 
$query = "SELECT * FROM `apl_rt` WHERE Nama_RT='".$kodeRT."'";
$sql = mysqli_query($conn,$query);
while($data = mysqli_fetch_array($sql)){
		$kodeRT = $data['Id_RT'];
}

$dawis= $_POST['dawis']; 
$query1 = "SELECT * FROM `apl_dawis` WHERE Nama_dawis='".$dawis."'";
$sql1 = mysqli_query($conn,$query1);
while($data1 = mysqli_fetch_array($sql1)){
		$dawis = $data1['Id_dawis'];
}

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempatlahir = $_POST['tempatlahir'];
$tanggallahir = $_POST['tanggallahir'];
$jeniskelamin = $_POST['jeniskelamin'];
$agama = $_POST['agama'];
$pendidikan = $_POST['pendidikan'];
$pekerjaan = $_POST['pekerjaan'];
$statusnikah = $_POST['statusnikah'];

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
  
$fotobaru = date('dmYHis').$foto;
$path = "images/".$fotobaru;

if(move_uploaded_file($tmp, $path)){ 
  $query = "INSERT INTO `apl_penduduk` (`NIK`, `Nama`, `Jenis_kelamin`, `Tempat_lahir`, `Tanggal_lahir`, `Agama`, `Pendidikan`, `Pekerjaan`, `Status_pernikahan`, `Id_dawis`, `Id_Status`, `Tanggal_pindah`, `Alamat_baru`, `Foto`, `Id_rt`) VALUES ('".$nik."', '".$nama."', '".$jeniskelamin."', '".$tempatlahir."', '".$tanggallahir."', '".$agama."', '".$pendidikan."', '".$pekerjaan."', '".$statusnikah."', '".$dawis."', '1', '', '', '".$fotobaru."', '".$kodeRT."')";
  $sql = mysqli_query($conn, $query); 

  if($sql){ 
    header("location: apl_penduduk.php?Id_RT=$kodeRT"); 
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='apl_penduduk.php?Id_RT=$kodeRT'>Kembali</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='apl_penduduk.php?Id_RT=$kodeRT'>Kembali</a>";
}


	
?>