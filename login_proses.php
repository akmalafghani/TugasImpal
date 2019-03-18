<?php
	
	include 'koneksi.php';

	if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			?>
				<script language="JavaScript">
					alert('Login GAGAL. Coba Lagi');
					document.location='form_login.php';
				</script>
			<?php
		}else {
			session_start();
			$username = $_POST['username'];
			$password = $_POST['password'];

			$query = mysqli_query($connect, "select * from akun where
				username='$username' and password='$password'")
				or die (mysqli_error());
			$row = mysqli_fetch_array($query,MYSQLI_ASSOC);

			$jml = mysqli_num_rows($query);
			if ($jml > 0) {
				$_SESSION['username'] = $row['username'];
				$_SESSION['kode_pegawai'] = $row['kode_pegawai'];

				if ($row['kode_pegawai'] =="koor01") {
					header("location:index.php");
				}else if ($row['kode_pegawai'] =="mngr01") {
					header("location:index_manager.php");
				}else if ($row['kode_pegawai'] =="kasr01") {
					header("location:index_kasir.php");
				}else if ($row['kode_pegawai'] =="supl01") {
					header("location:index_supplier.php");
				}
			}
			else {
				?>
				<script language="JavaScript">
					alert('Login GAGAL. Username atau Password mungkin salah. Coba Lagi');
					document.location='form_login.php';
				</script>
				<?php
			}
		}
	}

?>
	