<?php

	if (isset($_POST['tambah_pesanan'])) {
		include '../koneksi.php';

		//$kode_barang = $_POST['kode_pesanan'];
		$nama_barang = $_POST['nama_barang'];
		$tanggal_pesanan = $_POST['tanggal_pesanan'];
		$jumlah_barang = $_POST['jumlah_barang'];
		$nama_supplier = $_POST['nama_supplier'];
		$total = $_POST['total'];
		$ket_bayar = $_POST['ket_bayar'];


		if (empty($_POST['nama_barang']) || empty($_POST['tanggal_pesanan']) || empty($_POST['jumlah_barang']) || empty($_POST['nama_supplier'])) {
			?>
			<script language="" ="JavaScript">
				alert('Lengkapi Data!');
				document.location='tambah_pesanan.php';
			</script>
			<?php
		}else {
			$sql = "insert into pesanan
				(nama_barang,tanggal_pesanan,jumlah_barang,nama_supplier) values('$nama_barang','$tanggal_pesanan','$jumlah_barang','$nama_supplier')";
			$query = mysqli_query($connect,$sql);
			if ($query) {
				?>
					<script language="JavaScript">
						alert('Input Data Pesanan Berhasil');
						document.location='lihat_pesanan.php';
					</script>
				<?php
			} else {
				?>
					<script language="JavaScript">
						alert('Input Data Pesanan GAGAL');
						document.location='tambah_pesanan.php';
					</script>
				<?php
			}
		}
	}

?>