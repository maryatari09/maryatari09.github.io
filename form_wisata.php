<div class="container" style="margin-top:8%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			<p>
				<center>
					<h2>Data Wisata</h2>
				</center>
			</p>
			<br>
			<p>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">Add New</button>
			</p>
				<div id="data-wisata">
				</div>
		</div>
	</div>
</div>
	<script type="text/javascript" src="style/jquery.js"></script>
	<script type="text/javascript" src="style/bootstrap.js"></script>	
	<script type="text/javascript" src="script1.js"></script>	
</body>
</html>

	<div id="modal-tambah" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form role="form" id="form-tambah" method="post" action="input_wisata.php">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Menambahkan Wisata</h4>
				</div>
					<div class="modal-body">
						
						<div class="form-group">
							<label>Nama Wisata</label>
							<input class="form-control" id="nama" name="nama">
							<p style="color:red" id="error_nama"></p>
						</div>
						<div class="form-group">
							<label>Harga Tiket</label>
							<input class="form-control" id="harga_tiket" name="harga_tiket">
							<p style="color:red" id="error_harga_tiket"></p>
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
				<form role="form" id="form-edit" method="post" action="input_wisata.php">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Menambahkan Wisata</h4>
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
	