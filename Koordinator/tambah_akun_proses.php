<?php

	if (isset($_POST['tambah_akun'])) {
		include '../koneksi.php';

		$username = $_POST['username'];
		$kode_pegawai = $_POST['kode_pegawai'];
		$password = $_POST['password'];

		if (empty($_POST['username']) || empty($_POST['kode_pegawai']) || empty($_POST['password'])) {
			?>
			<script language="" ="JavaScript">
				alert('Lengkapi Data!');
				document.location='tambah_akun.php';
			</script>
			<?php
		}else {
			$sql = "insert into akun
				(username,kode_pegawai,password) values('$username','$kode_pegawai','$password')";
			$query = mysqli_query($connect,$sql);
			if ($query) {
				?>
					<script language="JavaScript">
						alert('Input Data Akun Berhasil');
						document.location='lihat_akun.php';
					</script>
				<?php
			} else {
				?>
					<script language="JavaScript">
						alert('Input Data Akun GAGAL');
						document.location='tambah_akun.php';
					</script>
				<?php
			}
		}
	}

?>