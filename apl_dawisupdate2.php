<?php 
 
include "../apl_koneksi.php"; 
 
$id= $_POST['Id_dawis']; 
$nama= $_POST['nama']; 

$query = "UPDATE `apl_dawis` SET `Nama_dawis` = '".$nama."' WHERE `apl_dawis`.`Id_dawis` = '".$id."'"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Anda berhasil mengupdate data dawis !"); document.location="apl_dawis.php";</script>';

?>