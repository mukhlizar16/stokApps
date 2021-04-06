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

	$('#form-submit-stok').submit(function (e){
		e.preventDefault();
		$.ajax({
			url: 'tambah_stok',
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
});
