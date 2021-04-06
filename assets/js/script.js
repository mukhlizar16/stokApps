$(document).ready(function () {
	$('#register-form').submit(function (e) {
		e.preventDefault();
		$('.keterangan').html('<span class="alert alert-success" role="alert">Menyimpan data ...</span>').show();
		$.ajax({
			type: 'post',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			dataType: 'json',
			cache: false,
			success: function (response) {
				if (response.status == 'error') {
					$('.keterangan').html('<span class="alert alert-danger" role="alert">Gagal...</span>');
					toastr["error"](response.pesan).then(
						window.location.refresh()
					);
				} else if (response.status == 'sukses') {
					$('.keterangan').html('<span class="alert alert-success" role="alert">Sukses menyimpan data...</span>');
					toastr["success"](response.pesan).then(
						window.location.assign(response.alamat)
					);
				} else if (response.status == 'gagal_simpan') {
					$('.keterangan').html('<span class="alert alert-danger" role="alert">Gagal menyimpan data...</span>');
					toastr["error"](response.pesan).then(
						window.location.refresh()
					);
				} else {
					$('.keterangan').html('<span class="alert alert-info" role="alert">Gagal...</span>');
					toastr["error"](response.pesan);
					window.location.refresh();
				}
			}
		});
		return false;
	});

	//Method login
	$('#login-form').submit(function (e) {
		e.preventDefault();
		$('#btn-loading').show();
		$('#btn-login').hide();
		$('#pesan-login').html("<div class='alert alert-info' role='alert'>Mengecek data..</div>");
		$.ajax({
			type: 'post',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			dataType: 'json',
			cache: false,
			success: function (response) {
				if (response.status == 'Error') {
					setTimeout(function () {
						$('#pesan-login').html("<span class='alert alert-danger' role='alert'>Login gagal ...</span>");
						$('#btn-loading').hide();
						$('#btn-login').show();
					}, 1000);
					toastr["error"](response.pesan)
				} else if (response.status == 'Sukses') {
					toastr["success"](response.pesan);
					setTimeout(function () {
						$('#btn-loading').hide();
						$('#btn-login').show();
						$('#pesan-login').html("<span class='alert alert-success' role='alert'>" + response.pesan + "</span>").then(
							window.location.assign(response.alamat)
						)
					}, 1000);
				} else if (response.status == 'error_pass') {
					setTimeout(function () {
						$('#pesan-login').html("<span class='alert alert-danger' role='alert'>Login gagal ...</span>");
						$('#btn-loading').hide();
						$('#btn-login').show();
					}, 1000);
					toastr["error"](response.pesan)
				} else {
					setTimeout(function () {
						$('#pesan-login').html("<span class='alert alert-danger' role='alert'>Login gagal ...</span>");
						$('#btn-loading').hide();
						$('#btn-login').show();
					}, 1000);
					toastr["error"](response.pesan)
				}
			}
		});
		return false;
	});

	toastr.options = {
		"closeButton": true,
		"debug": false,
		"newestOnTop": true,
		"progressBar": true,
		"positionClass": "toast-top-right",
		"preventDuplicates": false,
		"onclick": null,
		"showDuration": "300",
		"hideDuration": "1000",
		"timeOut": "5000",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "fadeOut"
	}
})
