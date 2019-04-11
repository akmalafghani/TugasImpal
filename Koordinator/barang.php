<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header("location:../form_login.php");
	}
	
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Barang</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">
					<div class="container">

						<!-- Logo -->
							<div id="logo">
								<span class="pennant"><img src="../images/b.png" alt="" /></span></span>
								<h1><a href="barang.php">Barang</a></h1>
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
                                                <a href="pesanan.php">Pesanan</a>
                                                </li>
											<li class="active">
                                                <a href="barang.php">Barang</a>
                                                </li>
											<li>
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
								<h2>Pilih Menu</h2>
								<h3><a href = "lihat_barang.php">Lihat Barang</a></h3>
								<h3><a href = "cari_barang.php">Cari Barang</a></h3>
								<h3><a href = "tambah_barang.php">Tambah Barang</a></h3>
								<h3><a href = "ubah_barang.php">Ubah Barang</a></h3>
								<h3><a href = "hapus_barang.php">Hapus Barang</a></h3>
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