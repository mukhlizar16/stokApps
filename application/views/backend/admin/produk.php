<div class="layout-px-spacing">
	<div class="row layout-top-spacing">
		<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
			<div class="widget-content widget-content-area br-6">
				<div class="mt-3">
					<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="collapseForm">
						Tambah
					</button>
					<div class="collapse mt-3" id="form">
						<div class="col-md-6">
							<div class="widget-content widget-content-area">
								<form>
									<div class="form-group mb-4">
										<label for="namaproduk">Nama Produk *</label>
										<input type="text" class="form-control" id="namaproduk" placeholder="">
									</div>
									<div class="form-group">
										<label for="">Kategori *</label>
										<select class="custom-select mb-4">
											<option selected="">Open this select</option>
											<option value="1">Makanan</option>
											<option value="2">Minuman</option>
										</select>
									</div>
									<div class="form-group mb-4">
										<label for="deskripsi">Deskripsi *</label>
										<textarea class="form-control" id="deskripsi" rows="3"></textarea>
									</div>
									<div class="row align-items-md-center">
										<div class="col-md-5">
											<div class="form-group mb-4 mt-3">
												<label for="fotoproduk">Foto Produk</label>
												<input type="file" class="form-control-file" id="fotoproduk">
											</div>
										</div>
										<div class="col-md-7">
											<div class="image-preview" id="imagePreview">
												<img src="" class="img-circle" alt="Preview gambar" id="gambar" width="60px">
												<span class="text-muted preview-text">Preview gambar</span>
											</div>
										</div>
									</div>

									<small id="emailHelp2" class="form-text text-muted">*Required Fields</small>
									<button type="submit" class="btn btn-primary mt-3">Simpan</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="table-responsive mb-4 mt-4">
					<table id="table-list-product" class="table table-hover" style="width:100%">
						<thead>
						<tr>
							<th>No</th>
							<th>Nama Produk</th>
							<th>Kategori</th>
							<th>Jenis</th>
							<th>Deskripsi</th>
							<th>Foto</th>
							<th>Aksi</th>
						</tr>
						</thead>
						<tbody>
						<?php
						$no = 1;
						foreach ($produk->result_array() as $item) :
							?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $item['nama'] ?></td>
								<td><?= $item['kategori'] ?></td>
								<td><?= $item['jenis'] ?></td>
								<td><?= $item['deskripsi'] ?></td>
								<td>
									<a class="profile-img" href="javascript: void(0);">
										<img src="<?= base_url() ?>assets/backend/img/90x90.jpg" alt="product">
									</a>
								</td>
								<td>
									<a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip"
									   data-placement="top" title="" data-original-title="Edit">
										<i class="p-1 br-6 mb-1" data-feather="edit-2"></i>
									</a>
									<a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip"
									   data-placement="top" title="" data-original-title="Delete">
										<i class="p-1 br-6 mb-1" data-feather="trash"></i>
									</a>
								</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
						<tfoot>
						<tr>
							<th>No</th>
							<th>Nama Produk</th>
							<th>Kategori</th>
							<th>Jenis</th>
							<th>Deskripsi</th>
							<th>Foto</th>
							<th>Action</th>
						</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
