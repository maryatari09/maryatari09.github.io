
$(document).ready(function(){
	var data = "data_user.php";
	$('#data-user').load(data);
	
	$("#form-tambah").submit(function(e) {
		e.preventDefault();
		
		$("#error_nama_user").html('');
		$("#error_username").html('');
		$("#error_password").html('');
		$("#error_nama").html('');
		$("#error_status").html('');
		
		var dataform = $("#form-tambah").serialize();
		$.ajax({
			url: "input_user.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_nama_user").html(hasil.error.nama_user);
					$("#error_username").html(hasil.error.username);
					$("#error_password").html(hasil.error.password);
					$("#error_nama").html(hasil.error.nama);
					$("#error_status").html(hasil.error.status);
				} else {
					$('#modal-tambah').modal('hide');
					$("#nama_user").val('');
					$("#username").val('');
					$("#password").val('');
					$("#nama").val('');
					$("#status").val('');
					$('#data-user').load(data);
				}
			}
		});
	});
	
	$(document).on('click','#edit',function(e){
		e.preventDefault();
		$("#modal-edit").modal('show');
		$.post('edit_user.php',
			{id:$(this).attr('data-id')},
			function(html){
				$("#data-edit").html(html);
			}   
		);
	});
	
	
	$("#form-edit").submit(function(e) {
		e.preventDefault();
		
		$("#error_nama_user").html('');
		$("#error_username").html('');
		$("#error_password").html('');
		$("#error_nama").html('');
		$("#error_status").html('');
		
		var dataform = $("#form-edit").serialize();
		$.ajax({
			url: "update_user.php",
			type: "post",
			data: dataform,
			success: function(result) {
				var hasil = JSON.parse(result);
				if (hasil.hasil !== "sukses") {
					$("#error_edit_nama_user").html(hasil.error.edit_nama_user);
					$("#error_edit_username").html(hasil.error.edit_username);
					$("#error_edit_password").html(hasil.error.edit_password);
					$("#error_edit_nama").html(hasil.error.edit_nama);
					$("#error_edit_status").html(hasil.error.edit_status);
				} else {
					$('#modal-edit').modal('hide');
					$("#nama_user").val('');
					$("#username").val('');
					$("#password").val('');
					$("#nama").val('');
					$("#status").val('');
					$('#data-user').load(data);
				}
			}
		});
	});
	
	
	$(document).on('click','#hapus',function(e){
		e.preventDefault();
		$.post('hapus_user.php',
			{id:$(this).attr('data-id')},
			function(html){
				$('#data-user').load(data);			
			}   
		);
	});


});