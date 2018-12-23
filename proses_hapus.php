<?php 
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='login.php';</script>";
}
include "+koneksi.php";

$id = $_GET['id'];
$param = array(':id' => $id);

$query = $con->prepare("DELETE FROM kendaraan WHERE id = :id");

if($query->execute($param)) {
    echo "<script>alert('Data berhasil dihapus'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='index.php';</script>";
}

/*
Code by YukCoding Tutor
www.yukcoding.id
*/
?>