
<?php
	
	include"koneksi.php";
	$no = 1;
	$data = mysqli_query ($koneksi, " select 
											id_user,
											nama_user,
											username,
											password,
											nama,
											status
									  from 
									  user 
									  where id_user = $_POST[id]");
	$row = mysqli_fetch_array ($data);
	
?>
<form role="form" id="form-edit" method="post" action="update_user.php">
	<div class="form-group">
		<label>Nama User</label>
		<input type="hidden" name="id_user" value="<?php echo $row['id_user'] ; ?>">
		<input class="form-control" name="nama_user" value="<?php echo $row['nama_user'] ; ?>">
		<p style="color:red" id="error_edit_nama_user"></p>
	</div>
	<div class="form-group">
		<label>Username</label>
		<input class="form-control" name="username"  value="<?php echo $row['username'] ; ?>">
		<p style="color:red" id="error_edit_username"></p>
	</div>
	<div class="form-group">
		<label>Password</label>
		<input class="form-control" name="password"  value="<?php echo $row['password'] ; ?>">
		<p style="color:red" id="error_edit_password"></p>
	</div>
	<div class="form-group">
		<label>Pilih Wisata</label>
							<select name="nama_wisata" class="form-control">

									<?php 
										include 'koneksi.php';

									$sql=mysqli_query($koneksi ,"select * from wisata order by id_wisata desc") or die ('error'.mysqli_error());

										while ($data=mysqli_fetch_array($sql)) {
											?>
										<option value="<?php echo $data['id_wisata'];?>"><?php echo $data['nama'];?></option>
										<?php } ?>
								</select>
		<p style="color:red" id="error_edit_nama"></p>
	</div>
	<div class="form-group">
		<label>Pilih Status</label>
							<select name="status" class="form-control">
								<option value="pegawai" <?php if($row['status']=='pegawai'){ ; ?> checked <?php } ?>>Pegawai></option>
								<option value="admin" <?php if($row['status']=='admin'){ ; ?> checked <?php } ?>>Admin></option>
							</select>
		<p style="color:red" id="error_edit_status"></p>
	</div>
	
</form>