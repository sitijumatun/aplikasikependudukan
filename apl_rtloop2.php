<?php
include "../apl_koneksi.php";
$kelurahan=$_POST['rw'];

$query2="select * from apl_rw WHERE Nama_RW='$kelurahan'";
$hasil2=mysqli_query($conn, $query2);
while ($data2=mysqli_fetch_array($hasil2))
{
	$kelurahan = $data2['Id_RW'];
}

$jumlah=$_POST['jumlah'];
$rt="RT"; 

for($i=1;$i<=$jumlah;$i++){
	$query = "INSERT INTO `apl_RT` (`Id_RT`, `Id_RW`, `Nama_RT`,`dateadd`) VALUES (NULL, '$kelurahan', '$rt$i',NOW())";
	$sql = mysqli_query($conn, $query); 
 }

if($sql){ 
    header("location: apl_rt.php?Id_RW=$kelurahan"); 
}else{
    echo '<script language="javascript">alert("Maaf Terjadi Kesalahan Silakan Ulangi !"); document.location="apl_rt.php?Id_RW=$kelurahan";</script>';
}
?>