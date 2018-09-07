<?php 
 
include "../apl_koneksi.php"; 
 
$id= $_GET['Id_kelurahan']; 

$query = "DELETE FROM apl_kelurahan WHERE Id_kelurahan='".$id."'"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Anda berhasil menghapus data !"); document.location="apl_kelurahan.php";</script>';

?>