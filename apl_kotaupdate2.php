<?php 
 
include "../apl_koneksi.php"; 
 
$id= $_POST['Id_kota']; 
$nama= $_POST['nama']; 

$query = "UPDATE `apl_kota` SET `Nama_kota` = '".$nama."' WHERE `apl_kota`.`Id_kota` = '".$id."'"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Anda berhasil mengupdate data kota !"); document.location="apl_kota.php";</script>';

?>