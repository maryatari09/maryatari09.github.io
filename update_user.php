<?php
include"koneksi.php";

$id = $_POST['id_user'];
$nama_user = $_POST['nama_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$status = $_POST['status'];
		if ($nama_user == '') {
			$data['error']['edit_nama_user'] = 'Nama User  harap diisi';
		}
		if ($username == '') {
			$data['error']['edit_username'] = 'Username harap diisi';
		}
		if ($password == '') {
			$data['error']['password'] = 'Password Harap Di isi';
		}
		if ($nama == '') {
			$data['error']['edit_nama'] = 'Nama Wisata harap diisi';
		}
		if ($status == '') {
			$data['error']['edit_status'] = 'Statusharap diisi';
		}

		if (empty($data['error'])) {
			$query = "UPDATE user SET
											nama_user = '$nama_user',
											username = '$username',
											password = '$password',
											nama = '$nama',
											status = '$status'
											WHERE id_user = '$id'
											";

			mysqli_query($koneksi, $query)
			or die ("Gagal Perintah SQL".mysql_error());
			$data['hasil'] = 'sukses';
		} else {
			$data['hasil'] = 'gagal';
		}
		echo json_encode($data);

?>

