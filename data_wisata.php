	<?php
	include"koneksi.php";

	?>
	<table class="table table-bordered">
		<tr>
			<th>
				No 
			</th>
			<th>
				Nama Wisata
			</th>
			<th>
				Harga
			</th>
			<th>
				Opsi
			</th>
		</tr>
			<?php
				$no = 1;
				$data = mysqli_query ($koneksi, " select 
														id_wisata,
														nama,
														harga_tiket
												  from 
												  wisata 
												  order by id_wisata DESC");
				while ($row = mysqli_fetch_array ($data))
				{
			?>
		<tr>
			<td>
				<?php echo $no++; ?>
			</td>
			<td>
				<?php echo $row['nama']; ?>
			</td>
			<td>
				<?php echo $row['harga_tiket']; ?>
			</td>
			<td>
				<a href="index.php?mod=edit_wisata" id="edit" data-id="<?php echo $row['id_wisata']; ?>">Edit</a> |
				<a href="index.php?mod=hapus_wisata" id="hapus" data-id="<?php echo $row['id_wisata']; ?>">Hapus</a> 
			</td>
		</tr>
		<?php
			}
		?>
	</table>
