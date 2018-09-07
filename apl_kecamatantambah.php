<?php
include "../apl_koneksi.php";
$kota=$_POST['kota'];

$query2="select * from apl_kota WHERE Nama_kota='$kota'";
$hasil2=mysqli_query($conn, $query2);
while ($data2=mysqli_fetch_array($hasil2))
{
	$kota = $data2['Id_kota'];
}

$nama=$_POST['nama'];

$query = "INSERT INTO `apl_kecamatan` (`Id_kecamatan`, `Id_kota`, `Nama_kecamatan`) VALUES (NULL, '$kota', '$nama')";
$sql = mysqli_query($conn, $query); 

if($sql){ 
    header("location: apl_kecamatan.php"); 
}else{
    echo '<script language="javascript">alert("Maaf Terjadi Kesalahan Silakan Ulangi !"); document.location="apl_kecamatan.php";</script>';
}
?>