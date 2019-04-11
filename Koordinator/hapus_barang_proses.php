<?php
	ob_start();
	include "../koneksi.php";
	$kode_barang = $_GET['kode_barang'];
	$query=mysqli_query($connect, "delete from barang where kode_barang='$kode_barang'");

	if ($query) {
		?>
			<script language="JavaScript">
				alert('Hapus Data Barang berhasil');
				document.location='lihat_barang.php';
			</script>

		<?php
	} else {
		?>
			<script language="JavaScript">
				alert('Hapus Data Barang GAGAL');
				document.location='hapus_barang.php';
			</script>
		<?php
	}
?>