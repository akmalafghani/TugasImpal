<?php

	if (isset($_POST['ubah_akun'])) {
		include '../koneksi.php';

		$username = $_POST['username'];
		$kode_pegawai = $_POST['kode_pegawai'];
		$password = $_POST['password'];

		if (empty($_POST['username']) || empty($_POST['kode_pegawai']) || empty($_POST['password'])) {
			?>
			<script language="" ="JavaScript">
				alert('Lengkapi Data!');
				document.location='ubah_akun.php';
			</script>
			<?php
		}else {
			$sql = "update akun set username='$username',kode_pegawai='$kode_pegawai',password='$password' where username='$username'";
			$query = mysqli_query($connect,$sql);
			if ($query) {
				?>
					<script language="JavaScript">
						alert('Ubah Data Akun Berhasil');
						document.location='lihat_akun.php';
					</script>
				<?php
			} else {
				?>
					<script language="JavaScript">
						alert('Ubah Data Akun GAGAL');
						document.location='ubah_akun.php';
					</script>
				<?php
			}
		}
	}

?>