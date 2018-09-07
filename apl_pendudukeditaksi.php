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
  $query = "UPDATE `apl_penduduk` SET `Nama` = '".$nama."', `Jenis_kelamin` = '".$jeniskelamin."', `Tempat_lahir` = '".$tempatlahir."', `Tanggal_lahir` = '".$tanggallahir."', `Agama` = '".$agama."', `Pendidikan` = '".$pendidikan."', `Pekerjaan` = '".$pekerjaan."', `Status_pernikahan` = '".$statusnikah."', `Id_dawis` = '".$dawis."', `Foto` = '".$fotobaru."' WHERE `apl_penduduk`.`NIK` = '".$nik."'";
  $sql = mysqli_query($conn, $query); 

  if($sql){ 
    header("location: apl_penduduk.php?Id_RT=$kodeRT"); 
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk memperbaharui data ke database.";
    echo "<br><a href='apl_penduduk.php?Id_RT=$kodeRT'>Kembali</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='apl_penduduk.php?Id_RT=$kodeRT'>Kembali</a>";
}


	
?>