<?php
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='login.php';</script>";
}

include "+koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Kendaraan | Web Pendataan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://yukcoding.blogspot.com/favicon.ico' rel='icon' type='image/x-icon'/>
</head>
<body>
	<div class="judul">		
		<h2>Web Pendataan Kehilangan Kendaraan Bermotor</h2>
		<h3>Polrestabes Semarang</h3>
	</div>

	<br />
	<div align="right">
		(Selamat datang, <?=$_SESSION['username']?>) |   
		<a href="logout.php">
			<span style="color:#ff3333">Logout</span>
		</a>
	</div>
	<div align="left">
		<a href="form_tambah.php">
			<button>+ Tambah Data Baru</button>
		</a>
	</div>

	<h3>Data Kendaraan</h3>
	<div style="overflow: auto;">
		<table border="1" class="table">
			<tr>
				<th>No.</th>
				<th>Jenis Kendaraan</th>
				<th>Merk/Type</th>
				<th>Warna Kendaran</th>
				<th>Tahun Kendaraan</th>
				<th>Bahan Bakar</th>
				<th>Nomor Polisi</th>
				<th>Nomor Rangka</th>
				<th>Nomor Mesin</th>
				<th>Pemilik</th>
				<th>Alamat Pemilik</th>
				<th>Opsi</th>		
			</tr>
			<?php 
			$query = $con->query("SELECT * FROM kendaraan"); // tampil menggunakan method query
			$nomor = 1;
			while($data = $query->fetch(PDO::FETCH_ASSOC)) { ?>
				<tr>
					<td align="center"><?php echo $nomor++; ?>.</td>
					<td><?php echo $data['jenis']; ?></td>
					<td><?php echo $data['merk']; ?></td>
					<td><?php echo $data['warna']; ?></td>
					<td><?php echo $data['tahun']; ?></td>
					<td><?php echo $data['bbm']; ?></td>
					<td><?php echo $data['nopol']; ?></td>
					<td><?php echo $data['norangka']; ?></td>
					<td><?php echo $data['nomesin']; ?></td>
					<td><?php echo $data['pemilik']; ?></td>
					<td><?php echo $data['alamat']; ?></td>
					<td width="90px" align="center">
						<a href="form_edit.php?id=<?php echo $data['id']; ?>"><button>Edit</button></a> 
						<a href="proses_hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin hapus data?')"><button>Hapus</button></a>					
					</td>
				</tr>
			<?php
			} ?>
		</table>
	</div>
</body>
</html>

<!--
Code by YukCoding Tutor
www.yukcoding.id
-->