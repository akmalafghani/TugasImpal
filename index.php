<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header("location:form_login.php");
	}
	
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>CMART MINI MARKET</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">
					<div class="container">

						<!-- Logo -->
							<div id="logo">
								<span class="pennant"><img src="images/b.png" alt="" /></span></span>
								<h1><a href="index.php"> CMART</a></h1>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="active"><a href="index.php">Home</a></li>
									<li>
										<a href="#" class="icon fa-caret-down">Drop Down Menu</a>
										<ul>
											<li>
                                                <a href="Koordinator/kelolaAkun.php">Kelola Akun</a>
                                                </li>
											<li>
                                                <a href="Koordinator/pesanan.php">Pesanan</a>
                                                </li>
											<li>
                                                <a href="Koordinator/barang.php">Barang</a>
                                                </li>
											<li>
                                                <a href="Koordinator/pegawai.php">Pegawai</a>
                                                </li>
										</ul>
									</li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
							</nav>

					</div>
				</div>

			<!-- Banner -->
				<div id="banner">
					<div class="container">						
						<div class="row">
							<div class="9u 12u(mobile)">
								<section>
									<a class="image full"><img src="images/cmart.jpg" alt="" /></a>
								</section>
							</div>
							<div class="3u 12u(mobile)">
								<section>
									<div class="bannerbox">
										<h2>CMART</h2>
										<p>CMART Merupakan Mini Market modern di telkom university tercinta.
										<br>Jalan Telekomunikasi No. 1</p>
									</div>
								</section>
							</div>							
						</div>
					</div>
				</div>

				


		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>