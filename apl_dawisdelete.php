<?php 
 
include "../apl_koneksi.php"; 
 
$id= $_GET['Id_dawis']; 

$query = "DELETE FROM apl_dawis WHERE Id_dawis='".$id."'"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Anda berhasil menghapus data !"); document.location="apl_dawis.php";</script>';

?>