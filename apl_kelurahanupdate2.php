<?php 
 
include "../apl_koneksi.php"; 
$kecamatan=$_POST['kecamatan'];

$query2="select * from apl_kecamatan WHERE Nama_kecamatan='$kecamatan'";
$hasil2=mysqli_query($conn, $query2);
while ($data2=mysqli_fetch_array($hasil2))
{
	$kecamatan = $data2['Id_kecamatan'];
}


$id= $_POST['Id_kelurahan']; 
$nama= $_POST['nama']; 

$query = "UPDATE `apl_kelurahan` SET `Nama_kelurahan` = '".$nama."' , `Id_kecamatan` = '".$kecamatan."' WHERE `apl_kelurahan`.`Id_kelurahan` = '".$id."'"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Anda berhasil mengupdate data !"); document.location="apl_kelurahan.php";</script>';

?>