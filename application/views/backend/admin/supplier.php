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
						<form id="form-supplier">
							<div class="form-group">
								<input type="text" class="form-control" name="nama_toko" id="nama_toko" placeholder="Nama Toko" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No HP" required>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email" placeholder="Email">
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
						<h3 class="">Data Supplier</h3>
						<a href="javascript:void(0)" class="mt-2 edit-profile"><i data-feather="thumbs-up"></i></a>
					</div>
					<div class="user-info">
						<div class="table-responsive">
							<table id="table-supplier" class="table dataTable nowrap table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Toko</th>
										<th>Nomor HP</th>
										<th>Email</th>
										<th>Alamat</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($supplier->result_array() as $s) :
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $s['nama'] ?></td>
											<td><?= $s['telp'] ?></td>
											<td><?= $s['email'] ?: '--' ?></td>
											<td><?= $s['alamat'] ?></td>
											<td>
												<button id="btn-hapus" title="Hapus" class="gayaku bs-tooltip" data-id="<?= $s['id'] ?>">
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