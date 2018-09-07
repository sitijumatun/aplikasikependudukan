<?php
include "../apl_koneksi.php";
$kecamatan=$_POST['kecamatan'];

$query2="select * from apl_kecamatan WHERE Nama_kecamatan='$kecamatan'";
$hasil2=mysqli_query($conn, $query2);
while ($data2=mysqli_fetch_array($hasil2))
{
	$kecamatan = $data2['Id_kecamatan'];
}

$nama=$_POST['nama'];

$query = "INSERT INTO `apl_kelurahan` (`Id_kelurahan`, `Id_kecamatan`, `Nama_kelurahan`) VALUES (NULL, '$kecamatan', '$nama')";
$sql = mysqli_query($conn, $query); 

if($sql){ 
    header("location: apl_kelurahan.php"); 
}else{
    echo '<script language="javascript">alert("Maaf Terjadi Kesalahan Silakan Ulangi !"); document.location="apl_kelurahan.php";</script>';
}
?>