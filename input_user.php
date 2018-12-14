<?php

include"koneksi.php";

$nama_user = $_POST['nama_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$status = $_POST['status'];

if ($nama == '') {
    $data['error']['nama_user'] = 'Nama User tidak boleh kosong';
}
if ($username == '') {
    $data['error']['username'] = 'Username tidak boleh kosong';
}
if ($password == '') {
    $data['error']['password'] = 'Password tidak boleh kosong';
}
if ($nama == '') {
    $data['error']['nama'] = 'Nama Wisata tidak boleh kosong';
}
if ($status == '') {
    $data['error']['status'] = 'Status tidak boleh kosong';
}

if (empty($data['error'])) {
    
		$query = "insert INTO user SET
										nama_user = '$nama_user',
										username = '$username',
										password = '$password',
										nama = '$nama',
										status = '$status'
										";

		mysqli_query($koneksi, $query)
		or die ("Gagal Perintah SQL".mysql_error());
		
    $data['hasil'] = 'sukses';
    
} else {
    
    $data['hasil'] = 'gagal';
}

echo json_encode($data);

?>

