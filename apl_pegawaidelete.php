<?php 
 
include "../apl_koneksi.php"; 
 
$id= $_GET['nip']; 

$query = "DELETE FROM apl_pegawai WHERE NIP='".$id."'"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Anda berhasil menghapus data !"); document.location="apl_pegawai.php";</script>';

?>