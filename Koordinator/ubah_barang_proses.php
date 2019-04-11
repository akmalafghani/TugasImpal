<?php

	if (isset($_POST['ubah_barang'])) {
		include '../koneksi.php';

		$kode_barang = $_POST['kode_barang'];
		$kode_pegawai = $_POST['kode_pegawai'];
		$nama_barang = $_POST['nama_barang'];
		$tipe_barang = $_POST['tipe_barang'];
		$stok = $_POST['stok'];
		$harga = $_POST['harga'];

		if (empty($_POST['kode_barang']) || empty($_POST['nama_barang']) || empty($_POST['tipe_barang']) || empty($_POST['stok']) || empty($_POST['harga'])) {
			?>
			<script language="" ="JavaScript">
				alert('Lengkapi Data!');
				document.location='ubah_barang.php';
			</script>
			<?php
		}else {
			$sql = "update barang set kode_pegawai='$kode_pegawai',nama_barang='$nama_barang',tipe_barang='$tipe_barang',stok='$stok',harga='$harga' where kode_barang='$kode_barang'";
			$query = mysqli_query($connect,$sql);
			if ($query) {
				?>
					<script language="JavaScript">
						alert('Ubah Data Barang Berhasil');
						document.location='lihat_barang.php';
					</script>
				<?php
			} else {
				?>
					<script language="JavaScript">
						alert('Ubah Data Barang GAGAL');
						document.location='ubah_barang.php';
					</script>
				<?php
			}
		}
	}

?>