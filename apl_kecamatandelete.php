<?php 
 
include "../apl_koneksi.php"; 
 
$id= $_GET['Id_kecamatan']; 

$query = "DELETE FROM apl_kecamatan WHERE Id_kecamatan='".$id."'"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Anda berhasil menghapus data !"); document.location="apl_kecamatan.php";</script>';

?>