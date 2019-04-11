<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header("location:../form_login.php");
	}
	
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Pesanan</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<style type="text/css">
        	table, td, th {
            	border: 1px solid #C6C6C6;
        	}
    	</style>
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">
					<div class="container">

						<!-- Logo -->
							<div id="logo">
								<span class="pennant"><img src="../images/b.png" alt="" /></span></span>
								<h1><a href="cari_pesanan.php">Cari Pesanan</a></h1>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a href="../index_supplier.php">Home</a></li>
									<li>
										<a href="#" class="icon fa-caret-down">Pesanan</a>
										<ul>
											<li>
                                                <a href="lihat_pesanan.php">Lihat Pesanan</a>
                                                </li>
											<li>
                                                <a href="ubah_pesanan.php">Ubah Pesanan</a>
                                                </li>
											<li>
                                                <a href="cari_pesanan.php">Cari Pesanan</a>
                                                </li>
										</ul>
									</li>
									<li><a href="../logout.php">Logout</a></li>
								</ul>
							</nav>

					</div>
				</div>

			<!-- Main -->
				<div id="main">
					<section class="container">
						<div class="row">
							<section class="8u 12u(mobile)">
								<form method="post">
								  <div class="form_settings">
									<p><span>Pencarian</span><input type="text" name="input_cari" value=""> *cari berdasarkan kode pesanan</p>

									<p style="padding-top: 8px"><span>&nbsp;</span><input class="submit" type="submit" name="cari_pesanan" value="Cari" /></p>
								  </div>
								</form>
									
									<?php
										include '../koneksi.php';
										if ((isset($_POST['cari_pesanan'])) and ($_POST['input_cari']<>"")) {
											$input_cari=$_POST['input_cari'];
											$sql = "select * from pesanan where kode_pesanan='$input_cari'";
											$query = mysqli_query($connect,$sql);
											$jml = mysqli_num_rows($query);
											if ($jml>0) {
												echo '<p>Ada '.$jml.' data yang sesuai</p>';
												$no=1;
												while ($hasil = mysqli_fetch_array($query)) {
													$kode_pesanan=stripslashes($hasil['kode_pesanan']);
													$nama_barang=stripslashes($hasil['nama_barang']);
													$tanggal_pesanan=stripslashes($hasil['tanggal_pesanan']);
													$jumlah_barang=stripslashes($hasil['jumlah_barang']);
													$nama_supplier=stripslashes($hasil['nama_supplier']);
													$total=stripslashes($hasil['total']);
													$ket_bayar=stripslashes($hasil['ket_bayar']);
													
												}
											
									?>
									
									<table>
									<tr>
										<th>NO</th>
										<th>Kode Pesanan</th>
										<th>Nama Barang</th>
										<th>Tanggal Pesanan</th>
										<th>Jumlah Barang</th>
										<th>Nama Supplier</th>
										<th>Total</th>
										<th>Ket. Bayar</th>
									</tr>
									<tr>
										<th><?php echo $no;?></th>
										<th><?php echo $kode_pesanan;?></th>
										<th><?php echo $nama_barang;?></th>
										<th><?php echo $tanggal_pesanan;?></th>
										<th><?php echo $jumlah_barang;?></th>
										<th><?php echo $nama_supplier;?></th>
										<th><?php echo $total;?></th>
										<th><?php echo $ket_bayar;?></th>
										<?php
											$no++;
										?>
									</tr>

									</table>

									<?php
											}else {
												echo "Pencarian tidak ditemukan";
											}
										}

									?>
							</section>
						</div>
					</section>
				</div>
                

		</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.dropotron.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>

	</body>
</html>