<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "db_penduduk";


$conn = mysqli_connect($host, $user, $password, $dbname);
if ($conn) {
	mysqli_select_db($conn, $dbname);
}
else{
	echo "gagal konek";
}
?>