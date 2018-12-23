<?php 
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='login.php';</script>";
}
include "+koneksi.php";

$jenis_kendaraan = $_POST['jenis'];
$merk_kendaraan = $_POST['merk'];
$warna_kendaraan = $_POST['warna'];
$tahun = $_POST['tahun'];
$bahan_bakar = $_POST['bbm'];
$nomor_polisi = $_POST['nopol'];
$nomor_rangka = $_POST['norangka'];
$nomor_mesin = $_POST['nomesin'];
$pemilik = $_POST['pemilik'];
$alamat_pemilik = $_POST['alamat'];

$query = $con->prepare("INSERT INTO kendaraan (jenis, merk, warna, tahun, bbm, nopol, norangka, nomesin, pemilik, alamat) 
                        VALUES (:jenis, :merk, :warna, :tahun, :bbm, :nopol, :norangka, :nomesin, :pemilik, :alamat)");

$query->bindparam(':jenis', $jenis_kendaraan); // menggunakan bindparam
$query->bindparam(':merk', $merk_kendaraan);
$query->bindparam(':warna', $warna_kendaraan);
$query->bindparam(':tahun', $tahun);
$query->bindparam(':bbm', $bahan_bakar);
$query->bindparam(':nopol', $nomor_polisi);
$query->bindparam(':norangka', $nomor_rangka);
$query->bindparam(':nomesin', $nomor_mesin);
$query->bindparam(':pemilik', $pemilik);
$query->bindparam(':alamat', $alamat_pemilik);

if($query->execute()) {
    echo "<script>alert('Data berhasil ditambahkan'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

/*
Code by YukCoding Tutor
www.yukcoding.id
*/
?>