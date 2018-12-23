<?php 
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='login.php';</script>";
}
include "+koneksi.php";

$params = [
    "id"        => $_POST['id'],
    "jenis"     => $_POST['jenis'],
    "merk"      => $_POST['merk'],
    "warna"     => $_POST['warna'],
    "tahun"     => $_POST['tahun'],
    "bbm"       => $_POST['bbm'],
    "nopol"     => $_POST['nopol'],
    "norangka"  => $_POST['norangka'],
    "nomesin"   => $_POST['nomesin'],
    "pemilik"   => $_POST['pemilik'],
    "alamat"    => $_POST['alamat']
  ];

$sql = "UPDATE kendaraan SET
            jenis = :jenis,
            merk = :merk,
            warna = :warna,
            tahun = :tahun,
            bbm = :bbm,
            nopol = :nopol,
            norangka = :norangka,
            nomesin = :nomesin,
            pemilik = :pemilik,
            alamat = :alamat
        WHERE id = :id";
$query = $con->prepare($sql);
if($query->execute($params)) { // prepare > execute menggunakan parameter array
    echo "<script>alert('Data berhasil diedit'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

/*
Code by YukCoding Tutor
www.yukcoding.id
*/
?>