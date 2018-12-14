<div class="container" style="margin-top:8%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			<p>
				<center>
					<h2>Data User</h2>
				</center>
			</p>
			<br>
			<p>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">Add New</button>
			</p>
				<div id="data-user">
				</div>
		</div>
	</div>
</div>
	<script type="text/javascript" src="style/jquery.js"></script>
	<script type="text/javascript" src="style/bootstrap.js"></script>	
	<script type="text/javascript" src="script.js"></script>	
</body>
</html>

	<div id="modal-tambah" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form role="form" id="form-tambah" method="post" action="input_user.php">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Menambahkan User</h4>
				</div>
					<div class="modal-body">
						
						<div class="form-group">
							<label>Nama User</label>
							<input class="form-control" id="nama_user" name="nama_user">
							<p style="color:red" id="error_nama_user"></p>
						</div>
						<div class="form-group">
							<label>Username</label>
							<input class="form-control" id="username" name="username">
							<p style="color:red" id="error_username"></p>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input class="form-control" id="password" name="password">
							<p style="color:red" id="error_password"></p>
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
						</div>
						<div>
							<label>Pilih Status</label>
							<select name="status" class="form-control">
								<option value="pegawai">pegawai</option>
								<option value="admin">admin</option>
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary" >Simpan</button>
					</div>
				</form>		
			</div>
		</div>
	</div>
	<div id="modal-edit" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form role="form" id="form-edit" method="post" action="input_user.php">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Menambahkan User</h4>
				</div>
					<div class="modal-body">
						<div id="data-edit">
						
						</div>				
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary" >Simpan</button>
					</div>
				</form>		
			</div>
		</div>
	</div> 