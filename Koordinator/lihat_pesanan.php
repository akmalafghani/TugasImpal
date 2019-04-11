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
								<h1><a href="lihat_pesanan.php">Lihat Pesanan</a></h1>
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
											<li class="active">
                                                <a href="pesanan.php">Pesanan</a>
                                                </li>
											<li>
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
								<h2>List Pesanan</h2>
								<table>
									<tr>
										<th>NO</th>
										<th>Kode Pesan</th>
										<th>Nama Barang</th>
										<th>Tanggal Pesanan</th>
										<th>Jumlah Barang</th>
										<th>Nama Supplier</th>
										<th>Total</th>
										<th>Ket. Bayar</th>
									</tr>
									<?php
										include '../koneksi.php';
										$query=mysqli_query($connect, "select * from pesanan");
										$no=1;
										foreach ($query as $row) {
											echo "<tr>
												<td>$no</td>
												<td>".$row['kode_pesanan']."</td>
												<td>".$row['nama_barang']."</td>
												<td>".$row['tanggal_pesanan']."</td>
												<td>".$row['jumlah_barang']."</td>
												<td>".$row['nama_supplier']."</td>
												<td>".$row['total']."</td>
												<td>".$row['ket_bayar']."</td>
											</tr>";
											$no++;
										}
									?>
								</table>
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