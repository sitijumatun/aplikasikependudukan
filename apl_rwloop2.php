<?php
include "../apl_koneksi.php";
$kelurahan=$_POST['kelurahan'];

$query2="select * from apl_kelurahan WHERE Nama_kelurahan='$kelurahan'";
$hasil2=mysqli_query($conn, $query2);
while ($data2=mysqli_fetch_array($hasil2))
{
	$kelurahan = $data2['Id_kelurahan'];
}

$jumlah=$_POST['jumlah'];
$rw="RW"; 

for($i=1;$i<=$jumlah;$i++){
	$query = "INSERT INTO `apl_rw` (`Id_rw`, `Id_kelurahan`, `Nama_rw`,`dateadd`) VALUES (NULL, '$kelurahan', '$rw$i',NOW())";
	$sql = mysqli_query($conn, $query); 
 }

if($sql){ 
    header("location: apl_rw.php?Id_kelurahan=$kelurahan"); 
}else{
    echo '<script language="javascript">alert("Maaf Terjadi Kesalahan Silakan Ulangi !"); document.location="apl_rw.php?Id_kelurahan=$kelurahan";</script>';
}
?>