<?php

	if (isset($_POST['ubah_pesanan'])) {
		include '../koneksi.php';

		$kode_pesanan = $_POST['kode_pesanan'];
		$nama_barang = $_POST['nama_barang'];
		$tanggal_pesanan = $_POST['tanggal_pesanan'];
		$jumlah_barang = $_POST['jumlah_barang'];
		$nama_supplier = $_POST['nama_supplier'];
		$total = $_POST['total'];
		$ket_bayar = $_POST['ket_bayar'];

		if (empty($_POST['kode_pesanan']) || empty($_POST['nama_barang']) || empty($_POST['tanggal_pesanan']) || empty($_POST['jumlah_barang']) || empty($_POST['nama_supplier'])) {
			?>
			<script language="" ="JavaScript">
				alert('Lengkapi Data!');
				document.location='ubah_pesanan.php';
			</script>
			<?php
		}else {
			$sql = "update pesanan set nama_barang='$nama_barang',tanggal_pesanan='$tanggal_pesanan',jumlah_barang='$jumlah_barang',nama_supplier='$nama_supplier' where kode_pesanan='$kode_pesanan'";
			$query = mysqli_query($connect,$sql);
			if ($query) {
				?>
					<script language="JavaScript">
						alert('Ubah Data Pesanan Berhasil');
						document.location='lihat_pesanan.php';
					</script>
				<?php
			} else {
				?>
					<script language="JavaScript">
						alert('Ubah Data Pesanan GAGAL');
						document.location='ubah_pesanan.php';
					</script>
				<?php
			}
		}
	}

?>