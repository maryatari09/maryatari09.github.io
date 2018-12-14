<?php
	
	include"koneksi.php";
	$no = 1;
	$data = mysqli_query ($koneksi, " select 
											id_wisata,
											nama,
											harga_tiket
									  from 
									  wisata 
									  where id_wisata = $_POST[id]");
	$row = mysqli_fetch_array ($data);
	
?>
<form role="form" id="form-edit" method="post" action="update_wisata.php">
	<div class="form-group">
		<label>Nama Wisata</label>
		<input type="hidden" name="id_wisata" value="<?php echo $row['id_wisata'] ; ?>">
		<input class="form-control" name="nama" value="<?php echo $row['nama'] ; ?>">
		<p style="color:red" id="error_edit_nama"></p>
	</div>
	<div class="form-group">
		<label>Harga Tiket</label>
		<input class="form-control" name="harga_tiket"  value="<?php echo $row['harga_tiket'] ; ?>">
		<p style="color:red" id="error_edit_harga_tiket"></p>
	</div>
	
</form>