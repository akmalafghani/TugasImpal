<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header("location:../form_login.php");
	}
	
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Pegawai</title>
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
								<h1><a href="ubah_pegawai.php">Ubah Pegawai</a></h1>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a href="../index.php">Home</a></li>
									<li>
										<a href="#" class="icon fa-caret-down">Drop Down Menu</a>
										<ul>
											<li>
                                                <a href="kelolaAkun.php">Kelola Akun</a>
                                                </li>
											<li>
                                                <a href="pesanan">Pesanan</a>
                                                </li>
											<li>
                                                <a href="barang.php">Barang</a>
                                                </li>
											<li class="active">
                                                <a href="pegawai.php">Pegawai</a>
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
							<p>Ubah data pegawai berdasarkan kode pegawai.<br>
							Masukkan Kode Pegawai yang akan diubah :</p>
								<form method="post">
								  <div class="form_settings">
									<p><span>Pencarian</span><input type="text" name="input_cari" value=""> </p>

									<p style="padding-top: 8px"><span>&nbsp;</span><input class="submit" type="submit" name="cari_pegawai" value="Cari" /></p>
								  </div>
								</form>
									
									<?php
										include '../koneksi.php';
										if ((isset($_POST['cari_pegawai'])) and ($_POST['input_cari']<>"")) {
											$input_cari=$_POST['input_cari'];
											$sql = "select * from pegawai where kode_pegawai='$input_cari'";
											$query = mysqli_query($connect,$sql);
											$jml = mysqli_num_rows($query);
											if ($jml>0) {
												while ($hasil = mysqli_fetch_array($query)) {
													$kode_pegawai=stripslashes($hasil['kode_pegawai']);
									?>
												<p>Kode Pegawai : <?php echo $kode_pegawai;?></p>
												<p>Masukkan Data Pegawai yang baru</p>
												<form action="ubah_pegawai_proses.php" method="post">
								  					<div class="form_settings">
								  						<input type="hidden" name="kode_pegawai" value="<?php echo $kode_pegawai;?>"></input>
														<p><span>Nama Pegawai</span><input type="text" name="nama_pegawai" value=""></p>
														<p><span>Gaji</span><input type="text" name="gaji" value="" ></p>
														<p style="padding-top: 8px"><span>&nbsp;</span><input class="submit" type="submit" name="ubah_pegawai" value="Ubah"></p>
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