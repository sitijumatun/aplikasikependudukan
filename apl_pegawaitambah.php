<?php
include "../apl_koneksi.php";

$nip= $_POST['nip'];
$nama = $_POST['nama'];
//$jeniskelamin = $_POST['jeniskelamin'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];



$nip1= "1";
$nama1 = "jhe";
$jeniskelamin1 =$_POST['jenis'];
$jabatan1 = "J";
$alamat1 = "J";


$kelurahan = $_POST['kelurahan'];

$query2="select * from apl_kelurahan WHERE Nama_kelurahan='$kelurahan'";
$hasil2=mysqli_query($conn, $query2);
while ($data2=mysqli_fetch_array($hasil2))
{
	$idkelurahan = $data2['Id_kelurahan'];
}

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
  
$fotobaru = date('dmYHis').$foto;
$path = "images/".$fotobaru;

if(move_uploaded_file($tmp, $path)){ 
  $query = "INSERT INTO apl_pegawai VALUES('".$nip."', '".$nama."', '".$jeniskelamin1."', '".$jabatan."','".$alamat."','".$idkelurahan."','".$fotobaru."')";
  $sql = mysqli_query($conn, $query); 

  if($sql){ 
    header("location: apl_pegawai.php"); 
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='apl_pegawai.php'>Kembali</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='apl_pegawai.php'>Kembali</a>";
}
?>