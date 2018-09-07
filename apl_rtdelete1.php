<?php 
 
include "../apl_koneksi.php"; 
 
$Dateadd= $_GET['Dateadd']; 
$kelurahan = $_GET['Id_rw'];

$query = "DELETE FROM apl_RT WHERE Dateadd='".$Dateadd."'"; 
$hasil = mysqli_query($conn,$query);

header("location: apl_rt.php?Id_RW=$kelurahan"); 
//echo '<script language="javascript">alert("Anda berhasil menghapus data !"); document.location="apl_rw.php?Id_kelurahan=$kelurahan";</script>';

?>