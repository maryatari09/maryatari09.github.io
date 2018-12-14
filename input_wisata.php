<?php

include"koneksi.php";

$nama = $_POST['nama'];
$harga_tiket = $_POST['harga_tiket'];

if ($nama == '') {
    $data['error']['nama_user'] = 'Nama User tidak boleh kosong';
}
if ($harga_tiket == '') {
    $data['error']['harga_tiket'] = 'Harga tidak boleh kosong';
}

if (empty($data['error'])) {
    
		$query = "insert INTO wisata SET
										nama = '$nama',
										harga_tiket = '$harga_tiket'
										";

		mysqli_query($koneksi, $query)
		or die ("Gagal Perintah SQL".mysql_error());
		
    $data['hasil'] = 'sukses';
    
} else {
    
    $data['hasil'] = 'gagal';
}

echo json_encode($data);

?>

