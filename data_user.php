	<?php
	include"koneksi.php";

	?>
	<table class="table table-bordered">
		<tr>
			<th>
				No 
			</th>
			<th>
				Nama User
			</th>
			<th>
				Username
			</th>
			<th>
				Password
			</th>
			<th>
				Nama Wisata
			</th>
			<th>
				Opsi
			</th>
		</tr>
			<?php
				include"koneksi.php";
				$no = 1;
				$data = mysqli_query ($koneksi, " select 
														id_user,
														nama_user,
														username,
														password,
														status
												  from 
												  user 
												  order by id_user DESC");
				while ($row = mysqli_fetch_array ($data))
				{
			?>
		<tr>
			<td>
				<?php echo $no++; ?>
			</td>
			<td>
				<?php echo $row['nama_user']; ?>
			</td>
			<td>
				<?php echo $row['username']; ?>
			</td>
			<td>
				<?php echo $row['password']; ?>
			</td>
			<td>
				<?php echo $row['nama']; ?>
			</td>
			<td>
				<?php echo $row['status']; ?>
			</td>
			<td>
				<a href="index.php?mod=edit_user" id="edit" data-id="<?php echo $row['id_user']; ?>">Edit</a> |
				<a href="index.php?mod=hapus_user" id="hapus" data-id="<?php echo $row['id_user']; ?>">Hapus</a> 
			</td>
		</tr>
		<?php
			}
		?>
	</table>