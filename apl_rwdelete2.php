<?php 
 
include "../apl_koneksi.php"; 
 
$id= $_GET['Id_RW'];
$kelurahan = $_GET['Id_kelurahan']; 

$query = "DELETE FROM apl_RW WHERE Id_RW='".$id."'"; 
$hasil = mysqli_query($conn,$query);
 
header("location: apl_rw.php?Id_kelurahan=$kelurahan"); 

?>