<?php 
 
include "../apl_koneksi.php"; 
 
$id= $_GET['Id_RT'];
$kelurahan = $_GET['Id_rw']; 

$query = "DELETE FROM apl_RT WHERE Id_RT='".$id."'"; 
$hasil = mysqli_query($conn,$query);
 
header("location: apl_rt.php?Id_RW=$kelurahan"); 

?>