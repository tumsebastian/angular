<?php 
$hostname = 'localhost';
$username = 'root';
$password = 'limaenam2010';
$database = 'krs';

$conn = mysql_connect($hostname, $username, $password);
if (!$conn) die("Gagal koneksi ke database");
mysql_select_db($database, $conn) or die('Database tidak ditemukan');

if (isset($_GET['action'])) {
	if ($_GET['action'] == 'getsiswa') {
		$query = "SELECT * FROM tbl_mahasiswa";
		$result = mysql_query($query);
		$data = array();
		while ($r = mysql_fetch_array($result)) {
			$data[] = $r;
		}
		echo json_encode($data);
	}
}
?>