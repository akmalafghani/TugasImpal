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
								<h1><a href="ubah_pesanan.php">Cari Pesanan</a></h1>
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
							<p>Ubah barang berdasarkan kode pesanan.<br>
							Masukkan Kode Pesanan yang akan diubah :</p>
								<form method="post">
								  <div class="form_settings">
									<p><span>Pencarian</span><input type="text" name="input_cari" value=""> </p>

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
												while ($hasil = mysqli_fetch_array($query)) {
													$kode_pesanan=stripslashes($hasil['kode_pesanan']);
									?>
												<p>Kode Pesanan : <?php echo $kode_pesanan;?></p>
												<p>Masukkan Data Pesanan yang baru</p>
												<form action="ubah_pesanan_proses.php" method="post">
								  					<div class="form_settings">
								  						<input type="hidden" name="kode_pesanan" value="<?php echo $kode_pesanan;?>"></input>
														<p><span>Total</span><input type="text" name="total" value=""></p>
														<p><span>Ket. Bayar</span><input type="text" name="ket_bayar" value=""></p>
														<p style="padding-top: 8px"><span>&nbsp;</span><input class="submit" type="submit" name="ubah_pesanan" value="Ubah"></p>
								  					</div>
												</form>
									<?php
												}
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