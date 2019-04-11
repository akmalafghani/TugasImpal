<?php

	if (isset($_POST['ubah_pegawai'])) {
		include '../koneksi.php';

		$kode_pegawai = $_POST['kode_pegawai'];
		$nama_pegawai = $_POST['nama_pegawai'];
		$gaji = $_POST['gaji'];

		if (empty($_POST['kode_pegawai']) || empty($_POST['nama_pegawai']) || empty($_POST['gaji'])) {
			?>
			<script language="" ="JavaScript">
				alert('Lengkapi Data!');
				document.location='ubah_pegawai.php';
			</script>
			<?php
		}else {
			$sql = "update pegawai set kode_pegawai='$kode_pegawai',nama_pegawai='$nama_pegawai',gaji='$gaji' where kode_pegawai='$kode_pegawai'";
			$query = mysqli_query($connect,$sql);
			if ($query) {
				?>
					<script language="JavaScript">
						alert('Ubah Data Pegawai Berhasil');
						document.location='lihat_pegawai.php';
					</script>
				<?php
			} else {
				?>
					<script language="JavaScript">
						alert('Ubah Data Pegawai GAGAL');
						document.location='ubah_pegawai.php';
					</script>
				<?php
			}
		}
	}

?>