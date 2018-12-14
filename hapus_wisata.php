<?php
include"koneksi.php";


$query = "DELETE FROM wisata 
							WHERE id_wisata ='$_POST[id]'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());

?>

