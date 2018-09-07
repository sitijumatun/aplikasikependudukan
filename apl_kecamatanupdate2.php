<?php 
 
include "../apl_koneksi.php"; 
$kota=$_POST['kota'];

$query2="select * from apl_kota WHERE Nama_kota='$kota'";
$hasil2=mysqli_query($conn, $query2);
while ($data2=mysqli_fetch_array($hasil2))
{
	$kota = $data2['Id_kota'];
}


$id= $_POST['Id_kecamatan']; 
$nama= $_POST['nama']; 

$query = "UPDATE `apl_kecamatan` SET `Nama_kecamatan` = '".$nama."' , `Id_kota` = '".$kota."' WHERE `apl_kecamatan`.`Id_kecamatan` = '".$id."'"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Anda berhasil mengupdate data kota !"); document.location="apl_kecamatan.php";</script>';

?>