<?php

	if (isset($_POST['ubah_pesanan'])) {
		include '../koneksi.php';

		$kode_pesanan = $_POST['kode_pesanan'];
		$total = $_POST['total'];
		$ket_bayar = $_POST['ket_bayar'];

		if (empty($_POST['kode_pesanan'])) {
			?>
			<script language="" ="JavaScript">
				alert('Lengkapi Data!');
				document.location='ubah_pesanan.php';
			</script>
			<?php
		}else {
			$sql = "update pesanan set total='$total',ket_bayar='ket_bayar' where kode_pesanan='$kode_pesanan'";
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