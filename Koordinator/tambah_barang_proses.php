<?php

	if (isset($_POST['tambah_barang'])) {
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
				document.location='tambah_barang.php';
			</script>
			<?php
		}else {
			$sql = "insert into barang
				(kode_barang,kode_pegawai,nama_barang,tipe_barang,stok,harga) values('$kode_barang','$kode_pegawai','$nama_barang','$tipe_barang','$stok','$harga')";
			$query = mysqli_query($connect,$sql);
			if ($query) {
				?>
					<script language="JavaScript">
						alert('Input Data Barang Berhasil');
						document.location='lihat_barang.php';
					</script>
				<?php
			} else {
				?>
					<script language="JavaScript">
						alert('Input Data Barang GAGAL');
						document.location='tambah_barang.php';
					</script>
				<?php
			}
		}
	}

?>