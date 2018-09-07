<?php 
 
include "../apl_koneksi.php"; 
 
$Dateadd= $_GET['Dateadd']; 
$kelurahan = $_GET['Id_kelurahan'];

$query = "DELETE FROM apl_rw WHERE Dateadd='".$Dateadd."'"; 
$hasil = mysqli_query($conn,$query);

header("location: apl_rw.php?Id_kelurahan=$kelurahan"); 
//echo '<script language="javascript">alert("Anda berhasil menghapus data !"); document.location="apl_rw.php?Id_kelurahan=$kelurahan";</script>';

?>