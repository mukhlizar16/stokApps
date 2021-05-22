<div class="layout-px-spacing">
	<div class="row layout-top-spacing">
		<div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">
			<div class="user-profile layout-spacing">
				<div class="widget-content widget-content-area">
					<div class="d-flex justify-content-between">
						<h3 class="">Tambah Data</h3>
						<a href="javascript:void(0)" class="mt-2 edit-profile"><i data-feather="plus"></i></a>
					</div>
					<div class="user-info">
						<form id="form-kategori">
							<div class="form-group">
								<input type="text" class="form-control" name="kode_kategori" placeholder="Kode Kategori" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="nama_kategori" placeholder="Nama kategori" required>
							</div>
							<div class="mt-4">
								<button type="submit" class="btn btn-primary mt-3">Tambah</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
			<div class="user-profile layout-spacing ">
				<div class="widget-content widget-content-area">
					<div class="d-flex justify-content-between">
						<h3 class="">Data Kategori</h3>
						<a href="javascript:void(0)" class="mt-2 edit-profile"><i data-feather="thumbs-up"></i></a>
					</div>
					<div class="user-info">
						<div class="table-responsive">
							<table id="table-category" class="table dataTable nowrap table-hover">
								<thead>
								<tr>
									<th>No</th>
									<th>Kode</th>
									<th>Nama Kategori</th>
									<th>Tgl Buat</th>
									<th>Aksi</th>
								</tr>
								</thead>
								<tbody>
								<?php
								$no = 1;
								foreach ($kategori->result_array() as $k) : ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $k['kode'] ?></td>
									<td><?= $k['nama'] ?></td>
									<td><?= date('d-m-Y', strtotime($k['tgl_buat'])) ?></td>
									<td>
										<button id="btn-hapus" title="Hapus" class="gayaku bs-tooltip" data-id="<?= $k['id'] ?>">
											<i class="p-1 br-6 mb-1" data-feather="trash"></i>
										</button>
									</td>
								</tr>
								<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
