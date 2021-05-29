$(document).ready(function() {
	App.init();
	/*
=========================================
|                                       |
|           Scroll To Top               |
|                                       |
=========================================
*/
	$('.scrollTop').click(function() {
		$("html, body").animate({scrollTop: 0});
	});


	$('.navbar .dropdown.notification-dropdown > .dropdown-menu, .navbar .dropdown.message-dropdown > .dropdown-menu ').click(function(e) {
		e.stopPropagation();
	});

	/*
	=========================================
	|                                       |
	|       Multi-Check checkbox            |
	|                                       |
	=========================================
	*/

	function checkall(clickchk, relChkbox) {

		var checker = $('#' + clickchk);
		var multichk = $('.' + relChkbox);


		checker.click(function () {
			multichk.prop('checked', $(this).prop('checked'));
		});
	}


	/*
	=========================================
	|                                       |
	|           MultiCheck                  |
	|                                       |
	=========================================
	*/

	/*
		This MultiCheck Function is recommanded for datatable
	*/

	function multiCheck(tb_var) {
		tb_var.on("change", ".chk-parent", function() {
			var e=$(this).closest("table").find("td:first-child .child-chk"), a=$(this).is(":checked");
			$(e).each(function() {
				a?($(this).prop("checked", !0), $(this).closest("tr").addClass("active")): ($(this).prop("checked", !1), $(this).closest("tr").removeClass("active"))
			})
		}),
			tb_var.on("change", "tbody tr .new-control", function() {
				$(this).parents("tr").toggleClass("active")
			})
	}

	/*
	=========================================
	|                                       |
	|           MultiCheck                  |
	|                                       |
	=========================================
	*/

	function checkall(clickchk, relChkbox) {

		var checker = $('#' + clickchk);
		var multichk = $('.' + relChkbox);


		checker.click(function () {
			multichk.prop('checked', $(this).prop('checked'));
		});
	}

	/*
	=========================================
	|                                       |
	|               Tooltips                |
	|                                       |
	=========================================
	*/

	$('.bs-tooltip').tooltip();

	/*
	=========================================
	|                                       |
	|               Popovers                |
	|                                       |
	=========================================
	*/

	$('.bs-popover').popover();


	/*
	================================================
	|                                              |
	|               Rounded Tooltip                |
	|                                              |
	================================================
	*/

	$('.t-dot').tooltip({
		template: '<div class="tooltip status rounded-tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
	})


	/*
	================================================
	|            IE VERSION Dector                 |
	================================================
	*/

	function GetIEVersion() {
		var sAgent = window.navigator.userAgent;
		var Idx = sAgent.indexOf("MSIE");

		// If IE, return version number.
		if (Idx > 0)
			return parseInt(sAgent.substring(Idx+ 5, sAgent.indexOf(".", Idx)));

		// If IE 11 then look for Updated user agent string.
		else if (!!navigator.userAgent.match(/Trident\/7\./))
			return 11;

		else
			return 0; //It is not IE
	}

	$('#form-kategori').submit(function (e){
		e.preventDefault();
		$.ajax({
			url: 'tambah_kategori',
			type: 'post',
			data: $(this).serialize(),
			dataType: 'json',
			success: function (data){
				if(data.status == 'success'){
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#8dbf42',
						pos: 'bottom-right',
						duration: 3000
					})
					setTimeout(function (){
						location.reload();
					},3000);
				}else{
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#e7515a',
						pos: 'bottom-right',
						duration: 3000
					});
				}
			}
		})
		return false;
	})

	$('#table-category').on('click', '#btn-hapus', function (e){
		e.preventDefault();
		var id = $(this).attr('data-id');
		$.ajax({
			type: 'post',
			url: 'hapus_kategori',
			data: {id:id},
			dataType: 'json',
			success: function (data){
				if (data.status == 'success'){
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#8dbf42',
						pos: 'bottom-right',
						duration: 3000
					})
					setTimeout(function (){
						location.reload();
					},3000);
				}else{
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#e7515a',
						pos: 'bottom-right',
						duration: 3000
					});
				}
			}
		})
		return false;
	})

	$('#form-jenis').submit(function (){
		$.ajax({
			url: 'tambah_jenis',
			type: 'post',
			data: $(this).serialize(),
			dataType: 'json',
			cache: false,
			success: function (data){
				if(data.status == 'sukses'){
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#8dbf42',
						pos: 'bottom-right',
						duration: 3000
					})
					setTimeout(function (){
						location.reload();
					},3000);
				}else{
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#e7515a',
						pos: 'bottom-right',
						duration: 3000
					});
				}
			}
		})
		return false;
	})

	$('#form-supplier').submit(function (){
		$.ajax({
			url: 'tambah_supplier',
			type: 'post',
			data: $(this).serialize(),
			dataType: 'json',
			cache: false,
			success: function (data){
				if(data.status == 'sukses'){
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#8dbf42',
						pos: 'bottom-right',
						duration: 3000
					})
					setTimeout(function (){
						location.reload();
					},3000);
				}else{
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#e7515a',
						pos: 'bottom-right',
						duration: 3000
					});
				}
			}
		})
		return false;
	})

	$('#form-bahan-baku').submit(function (e){
		e.preventDefault();
		$.ajax({
			url: 'tambah_bahan_baku',
			type: 'post',
			data: $(this).serialize(),
			dataType: 'json',
			cache: false,
			success: function (data){
				if(data.status == 'sukses'){
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#8dbf42',
						pos: 'bottom-right',
						duration: 3000
					})
					setTimeout(function (){
						location.reload();
					},3000);
				}else{
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#e7515a',
						pos: 'bottom-right',
						duration: 3000
					});
				}
			}
		})
		return false;
	})

	$('#form-stok-pembelian').submit(function (e){
		e.preventDefault();
		$.ajax({
			type: 'post',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			dataType: 'json',
			cache: false,
			success: function (data){
				if (data.status == 'sukses-tambah'){
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#8dbf42',
						pos: 'bottom-right',
						duration: 3000
					})
					setTimeout(function (){
						location.reload();
					},3000);
				}else if(data.status == 'sukses-update'){
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#8dbf42',
						pos: 'bottom-right',
						duration: 3000
					})
					setTimeout(function (){
						location.reload();
					},3000);
				}else if(data.status == 'gagal-tambah'){
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#e7515a',
						pos: 'bottom-right',
						duration: 3000
					});
				}else if (data.status == 'gagal-update'){
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#e7515a',
						pos: 'bottom-right',
						duration: 3000
					});
				}else{
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#e7515a',
						pos: 'bottom-right',
						duration: 3000
					});
				}
			}
		})
		return false;
	})

	// form bahan baku
	$('#form-bahanbaku').submit(function (e){
		e.preventDefault();
		$.ajax({
			type: 'post',
			url: 'tambah_bahanbaku',
			data: $(this).serialize(),
			dataType: 'json',
			cache: false,
			success: function (data){
				if (data.status == 'sukses'){
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#8dbf42',
						pos: 'bottom-right',
						duration: 3000
					})
					setTimeout(function (){
						location.reload();
					},3000);
				}else{
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#e7515a',
						pos: 'bottom-right',
						duration: 3000
					});
				}
			}
		})
		return false;
	})

	// form satuan
	$('#form-satuan').submit(function (e){
		e.preventDefault();
		$.ajax({
			type: 'post',
			url: 'tambah_satuan',
			data: $(this).serialize(),
			dataType: 'json',
			cache: false,
			success: function (data){
				if (data.status == 'sukses'){
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#8dbf42',
						pos: 'bottom-right',
						duration: 3000
					})
					setTimeout(function (){
						location.reload();
					},3000);
				}else{
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#e7515a',
						pos: 'bottom-right',
						duration: 3000
					});
				}
			}
		})
		return false;
	})

	$('#table-pembelian').on('click', '#btn-hapus', function (e){
		e.preventDefault();
		let id = $(this).attr('data-id');
		$.ajax({
			url: 'hapus_pembelian',
			type: 'post',
			data: {id:id},
			dataType: 'json',
			success: function (data){
				if (data.status == 'sukses'){
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#8dbf42',
						pos: 'bottom-right',
						duration: 3000
					})
					setTimeout(function (){
						location.reload();
					},3000);
				}else{
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#e7515a',
						pos: 'bottom-right',
						duration: 3000
					});
				}
			}
		})
		return false;
	})

	$('#table-supplier').on('click', '#btn-hapus', function (e){
		e.preventDefault();
		let id = $(this).attr('data-id');
		$.ajax({
			url: 'hapus_supplier',
			type: 'post',
			data: {id:id},
			dataType: 'json',
			success: function (data){
				if (data.status == 'sukses'){
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#8dbf42',
						pos: 'bottom-right',
						duration: 3000
					})
					setTimeout(function (){
						location.reload();
					},3000);
				}else{
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#e7515a',
						pos: 'bottom-right',
						duration: 3000
					});
				}
			}
		})
		return false;
	})

	/*$("input[name='jumlah']").TouchSpin({
		initval: 0,
		buttondown_class: "btn btn-classic btn-primary",
		buttonup_class: "btn btn-classic btn-primary"
	});*/

	$(".jumlah").TouchSpin({
		initval: 0,
		buttondown_class: "btn btn-classic btn-primary",
		buttonup_class: "btn btn-classic btn-primary"
	});

	$('#btn-add-row').click(function (){
		var html = '';
		var faktur = $('#faktur').val();
		$.ajax({
			url: 'get_barang',
			type: 'post',
			dataType: 'json',
			success: function (data){
					html += '<tr>' +
							'<td><select class="form-control myselect" name="barang[]">' +
							'<option value="">--Pilih Barang--</option>';
						for (var i = 0; i < data.length; i++){
							html += '<option value="'+data[i].id+'">'+data[i].nama+'</option>';
						}
					html += '</select></td>' +
							'<td><input class="form-control jlh" type="number" min="0" name="jumlah[]"></td>' +
							'<td><input class="form-control bayar" type="number" min="0" name="harga[]">' +
							'<input class="form-control" hidden id="faktur_row" type="text" name="faktur[]"></td>' +
							'<td><input class="form-control" type="text" name="total" id="total"></td>' +
							'<td class="text-center"><button type="button" id="del-row" class="btn btn-sm btn-secondary"> Hapus</button></td>' +
							'</tr>';

				$('#data-target').append(html);
				$(".myselect").select2({
					tags: true
				});
			}
		})
	})

	$('#table-add-pembelian').on('click', '#del-row', function (){
		/*$(this).parent().parent().remove();*/		// boleh gunakan salah satu
		$(this).closest("tr").remove();		// boleh gunakan salah satu
		totalBayar();
	})

	$("table#table-add-pembelian").on("change", 'input[name^="harga"], input[name^="jumlah"]', function (event) {
		calculateRow($(this).closest("tr"));
		totalBayar();
	});

	function calculateRow(row) {
		var harga = +row.find('input[name^="harga"]').val();
		var qty = +row.find('input[name^="jumlah"]').val();
		var faktur = $('#no_faktur').val();
		row.find('input[name^="total"]').val((harga * qty).toFixed(0));
		row.find('input[name^="faktur[]"]').val(faktur);
	}

	function totalBayar() {
		var grandTotal = 0;
		$("table#table-add-pembelian").find('input[name^="total"]').each(function () {
			grandTotal += +$(this).val();
		});
		$("#total_bayar").val(grandTotal.toFixed(0));
	}

	$('#form-submit-array').submit(function (e){
		e.preventDefault()
		$.ajax({
			url: 'tambah_pembelian',
			type: 'post',
			data: $(this).serialize(),
			dataType: 'json',
			cache: false,
			success: function (data){
				if(data.status == 'sukses-tambah'){
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#8dbf42',
						pos: 'bottom-right',
						duration: 3000
					})
					setTimeout(function (){
						location.reload();
					},3000);
				}else if(data.status == 'fail'){
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#e7515a',
						pos: 'bottom-right',
						duration: 3000
					});
				}else{
					Snackbar.show({
						text: data.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#e7515a',
						pos: 'bottom-right',
						duration: 3000
					});
				}
			}
		})
	})

	$('#form-level').submit(function (event){
		event.preventDefault();
		$.ajax({
			url: 'tambah_level',
			type: 'post',
			data: $(this).serialize(),
			dataType: 'json',
			cache: false,
			success: function (response){
				if (response.status == 'sukses'){
					Snackbar.show({
						text: response.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#8dbf42',
						pos: 'bottom-right',
						duration: 3000
					})
					setTimeout(function (){
						location.reload();
					},3000);
				}else{
					Snackbar.show({
						text: response.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#e7515a',
						pos: 'bottom-right',
						duration: 3000
					});
				}
			}
		})
		return false;
	})

	$('#table-list-level').on('click', '#btn-hapus', function (e){
		e.preventDefault();
		var id = $(this).attr('data-id');
		$.ajax({
			url: 'hapus_level',
			type: 'post',
			data: {id:id},
			dataType: 'json',
			success: function (response){
				if (response.status == 'sukses'){
					Snackbar.show({
						text: response.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#8dbf42',
						pos: 'bottom-right',
						duration: 3000
					})
					setTimeout(function (){
						location.reload();
					},3000);
				}else{
					Snackbar.show({
						text: response.pesan,
						actionTextColor: '#fff',
						backgroundColor: '#e7515a',
						pos: 'bottom-right',
						duration: 3000
					});
				}
			}
		})
	})

	showImage();

	function showImage(){
		const inFile = document.getElementById('fotoproduk');
		const previewContainer = document.getElementById('imagePreview');
		const previewImage = previewContainer.querySelector('.img-circle');
		const previewText = previewContainer.querySelector('.preview-text');

		inFile.addEventListener('change', function (){
			const file = this.files[0];
			console.log(file);
			if (file){
				const reader = new FileReader();

				previewText.style.display = 'none';
				previewImage.style.display = 'block';

				reader.addEventListener("load", function (){
					previewImage.setAttribute("src", this.result);
				});

				reader.readAsDataURL(file);
			}
		})
	}


	/* Datatables */
	$('#table-list-product').DataTable( {
		"pagingType": "full_numbers",
		"oLanguage": {
			"oPaginate": {
				"sFirst": '<i data-feather="chevron-left"></i>',
				"sPrevious": '<i data-feather="feather-arrow-left"></i>',
				"sNext": '<i data-feather="feather-arrow-right"></i>',
				"sLast": '<i data-feather="feather-chevron-right"></i>'
			},
			"sInfo": "Menampilkan hal _PAGE_ of _PAGES_",
			"sSearch": '<i data-feather="feather-search"></i>',
			"sSearchPlaceholder": "Cari...",
			"sLengthMenu": "Filter :  _MENU_",
		},
		"stripeClasses": [],
		"lengthMenu": [5, 10, 15, 20],
		"pageLength": 5
	});

	$('#table-penjualan').DataTable({
		"pagingType": "full_numbers",
		"oLanguage": {
			"oPaginate": {
				"sFirst": '<i data-feather="chevron-left"></i>',
				"sPrevious": '<i data-feather="feather-arrow-left"></i>',
				"sNext": '<i data-feather="feather-arrow-right"></i>',
				"sLast": '<i data-feather="feather-chevron-right"></i>'
			},
			"sInfo": "Menampilkan hal _PAGE_ of _PAGES_",
			"sSearch": '<i data-feather="feather-search"></i>',
			"sSearchPlaceholder": "Cari...",
			"sLengthMenu": "Filter :  _MENU_",
		},
		"stripeClasses": [],
		"lengthMenu": [5, 10, 15, 20],
		"pageLength": 5
	});

	// table pembelian
	$('#table-pembelian').DataTable({
		"pagingType": "full_numbers",
		"oLanguage": {
			"oPaginate": {
				"sFirst": '<i data-feather="chevron-left"></i>',
				"sPrevious": '<i data-feather="feather-arrow-left"></i>',
				"sNext": '<i data-feather="feather-arrow-right"></i>',
				"sLast": '<i data-feather="feather-chevron-right"></i>'
			},
			"sInfo": "Menampilkan hal _PAGE_ of _PAGES_",
			"sSearch": '<i data-feather="feather-search"></i>',
			"sSearchPlaceholder": "Cari...",
			"sLengthMenu": "Filter :  _MENU_",
		},
		"stripeClasses": [],
		"lengthMenu": [5, 10, 15, 20],
		"pageLength": 5
	});

	$('#table-category').DataTable({
		"pagingType": "full_numbers",
		"oLanguage": {
			"oPaginate": {
				"sFirst": '<i data-feather="chevron-left"></i>',
				"sPrevious": '<i data-feather="feather-arrow-left"></i>',
				"sNext": '<i data-feather="feather-arrow-right"></i>',
				"sLast": '<i data-feather="feather-chevron-right"></i>'
			},
			"sInfo": "Menampilkan hal _PAGE_ of _PAGES_",
			"sSearch": '<i data-feather="feather-search"></i>',
			"sSearchPlaceholder": "Cari...",
			"sLengthMenu": "Filter :  _MENU_",
		},
		"stripeClasses": [],
		"lengthMenu": [5, 10, 15, 20],
		"pageLength": 5
	});

	$('#table-jenis').DataTable({
		"pagingType": "full_numbers",
		"oLanguage": {
			"oPaginate": {
				"sFirst": '<i data-feather="chevron-left"></i>',
				"sPrevious": '<i data-feather="feather-arrow-left"></i>',
				"sNext": '<i data-feather="feather-arrow-right"></i>',
				"sLast": '<i data-feather="feather-chevron-right"></i>'
			},
			"sInfo": "Menampilkan hal _PAGE_ of _PAGES_",
			"sSearch": '<i data-feather="feather-search"></i>',
			"sSearchPlaceholder": "Cari...",
			"sLengthMenu": "Filter :  _MENU_",
		},
		"stripeClasses": [],
		"lengthMenu": [5, 10, 15, 20],
		"pageLength": 5
	});

	$('#table-supplier').DataTable({
		"pagingType": "full_numbers",
		"oLanguage": {
			"oPaginate": {
				"sFirst": '<i data-feather="chevron-left"></i>',
				"sPrevious": '<i data-feather="feather-arrow-left"></i>',
				"sNext": '<i data-feather="feather-arrow-right"></i>',
				"sLast": '<i data-feather="feather-chevron-right"></i>'
			},
			"sInfo": "Menampilkan hal _PAGE_ of _PAGES_",
			"sSearch": '<i data-feather="feather-search"></i>',
			"sSearchPlaceholder": "Cari...",
			"sLengthMenu": "Filter :  _MENU_",
		},
		"stripeClasses": [],
		"lengthMenu": [5, 10, 15, 20],
		"pageLength": 5
	});

	$('#table-stok').DataTable({
		"pagingType": "full_numbers",
		"oLanguage": {
			"oPaginate": {
				"sFirst": '<i data-feather="chevron-left"></i>',
				"sPrevious": '<i data-feather="feather-arrow-left"></i>',
				"sNext": '<i data-feather="feather-arrow-right"></i>',
				"sLast": '<i data-feather="feather-chevron-right"></i>'
			},
			"sInfo": "Menampilkan hal _PAGE_ of _PAGES_",
			"sSearch": '<i data-feather="feather-search"></i>',
			"sSearchPlaceholder": "Cari...",
			"sLengthMenu": "Filter :  _MENU_",
			"sZeroRecords": 'Tidak ada data'
		},
		"stripeClasses": [],
		"lengthMenu": [5, 10, 15, 20],
		"pageLength": 5
	});
});

/* untuk form select2 */
var ss = $(".basic").select2({
	tags: true,
});
var ss = $(".second").select2({
	tags: true,
});
