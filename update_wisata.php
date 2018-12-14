<?php
include"koneksi.php";

$id = $_POST['id_wisata'];
$nama = $_POST['nama'];
$harga_tiket = $_POST['harga_tiket'];
$status = $_POST['status'];
		if ($nama == '') {
			$data['error']['edit_nama'] = 'Nama Wisata  harap diisi';
		}
		if ($harga_tiket == '') {
			$data['error']['edit_harga_tiket'] = 'Harga harap diisi';
		}

		if (empty($data['error'])) {
			$query = "UPDATE wisata SET
											nama = '$nama',
											harga_tiket = '$harga_tiket'
											WHERE id_wisata = '$id'
											";

			mysqli_query($koneksi, $query)
			or die ("Gagal Perintah SQL".mysql_error());
			$data['hasil'] = 'sukses';
		} else {
			$data['hasil'] = 'gagal';
		}
		echo json_encode($data);

?>

