<div class="layout-px-spacing">
	<div class="row layout-spacing layout-top-spacing" id="cancel-row">
		<div class="col-lg-12">
			<div class="widget-content searchable-container list">
				<div class="row">
					<div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
						<div class="d-flex">
							<h3>Satuan</h3>
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
												<h5>Form Tambah Satuan Barang</h5>
												<hr>
											</div>
											<form id="form-satuan">
												<div class="form-group row">
													<label class="required col-form-label col-md-4 text-black" for="satuan">Nama Satuan</label>
													<div class="col-md-8">
														<input type="text" name="satuan" class="form-control" id="satuan" required>
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
										<th width="5%">No</th>
										<th>Nama</th>
										<th width="5%">Aksi</th>
									</tr>
									</thead>
									<tbody>
									<?php
									$no = 1;
									foreach ($satuan->result_array() as $s) :?>
									<tr>
										<td width="5%"><?= $no++ ?></td>
										<td>
											<?= $s['nama'] ?>
										</td>
										<td width="5%">
											<button id="btn-hapus" title="Hapus" class="gayaku bs-tooltip"
													data-id="<?= $s['id'] ?>">
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
