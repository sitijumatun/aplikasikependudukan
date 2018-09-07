<?php 
 
include "../apl_koneksi.php"; 
 
$id= $_GET['Id_kota']; 

$query = "DELETE FROM apl_kota WHERE Id_kota='".$id."'"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Anda berhasil menghapus data !"); document.location="apl_kota.php";</script>';

?>