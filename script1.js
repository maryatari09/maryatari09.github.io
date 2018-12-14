$(document).ready(function(){
	var data = "data_wisata.php";
	$('#data-wisata').load(data);
	
	$("#form-tambah").submit(function(e) {
		e.preventDefault();
		
		$("#error_nama").html('');
		$("#error_harga_tiket").html('');
		
		var dataform = $("#form-tambah").serialize();
		$.ajax({
			url: "input_wisata.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_nama").html(hasil.error.nama);
					$("#error_harga_tiket").html(hasil.error.harga_tiket);
				} else {
					$('#modal-tambah').modal('hide');
					$("#nama").val('');
					$("#harga_tiket").val('');
					$('#data-wisata').load(data);
				}
			}
		});
	});
	
	$(document).on('click','#edit',function(e){
		e.preventDefault();
		$("#modal-edit").modal('show');
		$.post('edit_wisata.php',
			{id:$(this).attr('data-id')},
			function(html){
				$("#data-edit").html(html);
			}   
		);
	});
	
	
	$("#form-edit").submit(function(e) {
		e.preventDefault();
		
		$("#error_nama").html('');
		$("#error_harga_tiket").html('');
		
		var dataform = $("#form-edit").serialize();
		$.ajax({
			url: "update_wisata.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_edit_nama").html(hasil.error.edit_nama);
					$("#error_edit_harga_tiket").html(hasil.error.edit_harga_tiket);
				} else {
					$('#modal-edit').modal('show');
					$("#nama").val('');
					$("#harga_tiket").val('');
					$('#data-wisata').load(data);
				}
			}
		});
	});
	
	
	$(document).on('click','#hapus',function(e){
		e.preventDefault();
		$.post('hapus_wisata.php',
			{id:$(this).attr('data-id')},
			function(html){
				$('#data-wisata').load(data);			
			}   
		);
	});


});