<?php

	if (isset($_POST['tambah_pegawai'])) {
		include '../koneksi.php';

		$kode_pegawai = $_POST['kode_pegawai'];
		$nama_pegawai = $_POST['nama_pegawai'];
		$gaji = $_POST['gaji'];

		if (empty($_POST['kode_pegawai']) || empty($_POST['nama_pegawai'])) {
			?>
			<script language ="JavaScript">
				alert('Lengkapi Data!');
				document.location='tambah_pegawai.php';
			</script>
			<?php
		}else {
			$sql = "insert into pegawai
				(kode_pegawai,nama_pegawai,gaji) values('$kode_pegawai','$nama_pegawai','$gaji')";
			$query = mysqli_query($connect,$sql);
			if ($query) {
				?>
					<script language="JavaScript">
						alert('Input Data Pegawai Berhasil');
						document.location='lihat_pegawai.php';
					</script>
				<?php
			} else {
				?>
					<script language="JavaScript">
						alert('Input Data Pegawai GAGAL');
						document.location='tambah_pegawai.php';
					</script>
				<?php
			}
		}
	}

?>