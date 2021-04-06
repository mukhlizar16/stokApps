<div class="layout-px-spacing">
	<div class="row layout-spacing layout-top-spacing" id="cancel-row">
		<div class="col-lg-12">
			<div class="widget-content searchable-container list">
				<div class="row">
					<div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
						<div class="d-flex">
							<h3>Data Pembelian</h3>
						</div>
					</div>

					<div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-left text-center layout-spacing align-self-center">
						<div class="d-flex justify-content-sm-end justify-content-center">
							<div class="form-row mb-12">
								<div class="form-group col-md-5">
									<label class="text-dark" for="tglawal">Tanggal Awal</label>
									<input type="date" class="form-control" id="tglawal" name="tglawal">
								</div>

								<div class="form-group col-md-5">
									<label class="text-dark" for="tglakhir">Tanggal Akhir</label>
									<input type="date" class="form-control" id="tglakhir" name="tglakhir">
								</div>
								<div class="form-group col-md-2 mt-1">
									<button class="btn btn-dark mt-4 mr-2 btn-lg btn-rounded">Cari</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
						<div class="widget-content widget-content-area br-6">
							<div class="ml-3">
								<button class="btn btn-primary" aria-expanded="false" aria-controls="collapseForm"
										data-toggle="collapse" data-target="#form-tambah">Tambah
								</button>
							</div>
							<div id="form-tambah" class="collapse mt-3 mb-3">
								<div class="col-md-8">
									<div class="card shadow" style="border-radius: 10px">
										<div class="card-body">
											<div class="text-center">
												<h5>Form Tambah Barang</h5>
												<hr>
											</div>
											<form action="<?= site_url('admin/tambah_pembelian') ?>"
												  method="post"
												  id="form-stok-pembelian">
												<div class="form-group row">
													<label class="required col-form-label col-md-4 text-black" for="tgl">Tanggal
														pembelian</label>
													<div class="col-md-8">
														<input type="date" name="tgl_beli" class="form-control" id="tgl"required>
													</div>
												</div>
												<div class="form-group row">
													<label class="required col-form-label col-md-4 text-black"
														   for="nama_barang">Nama barang</label>
													<div class="col-md-8">
														<input type="text" name="nama_barang" class="form-control"
															   id="nama_barang" autocomplete="off" required>
													</div>
												</div>
												<div class="form-group row">
													<label class="required col-form-label col-md-4 text-black" for="jumlah">Jumlah
														barang</label>
													<div class="col-md-8">
														<input type="text" name="jumlah" class="form-control jumlah"
															   id="jumlah" required>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-form-label col-md-4 text-black"
														   for="supplier">Supplier</label>
													<div class="col-md-8">
														<input type="text" name="supplier" class="form-control" id="supplier" required>
													</div>
												</div>
												<div class="mt-5 mb-2 text-center">
													<button class="btn btn-info" type="submit">Simpan</button>
												</div>
											</form>
											<p>(<span class="text-danger">*</span>) wajib diisi.</p>
										</div>
									</div>
								</div>
							</div>

							<div class="table-responsive mb-2 mt-3">
								<table id="table-pembelian" class="table table-hover" style="width:100%">
									<thead>
									<tr>
										<th>No</th>
										<th>Tanggal</th>
										<th>Nama Barang</th>
										<th>Supplier</th>
										<th>Total</th>
										<th>Aksi</th>
									</tr>
									</thead>
									<tbody>
									<?php
									$no = 1;
									foreach ($pembelian as $p) :
										?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= tgl_jam_indo($p['tgl_beli']) ?></td>
											<td><?= $p['nama_barang'] ?></td>
											<td><?= $p['jlh_barang'] ?></td>
											<td><?= $p['supplier'] ?></td>
											<td>
												<button id="btn-hapus" title="Hapus" class="gayaku bs-tooltip"
														data-id="<?= $p['id'] ?>">
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
</div>
