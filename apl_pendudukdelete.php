<?php 
 
include "../apl_koneksi.php"; 
 
$id= $_GET['nik'];
$id2= $_GET['Id_RT'];  

$query = "DELETE FROM apl_penduduk WHERE NIK='".$id."'"; 
$hasil = mysqli_query($conn,$query);

header("location: apl_penduduk.php?Id_RT=$id2"); 
?>