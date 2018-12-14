<?php
include"koneksi.php";


$query = "DELETE FROM user 
							WHERE id_user ='$_POST[id]'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());

?>

