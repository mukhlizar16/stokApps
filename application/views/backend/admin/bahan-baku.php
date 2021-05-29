<div class="layout-px-spacing">
	<div class="row layout-spacing layout-top-spacing" id="cancel-row">
		<div class="col-lg-12">
			<div class="widget-content searchable-container list">
				<div class="row">
					<div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
						<div class="d-flex">
							<h3>Bahan Baku</h3>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
						<div class="widget-content widget-content-area br-6">
							<div class="mb-5 mt-2">
								<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form"
										aria-expanded="false" aria-controls="collapseForm">
									Tambah
								</button>
								<div class="warna collapse mt-5" id="form">
									<form action="" id="form-bahan-baku">
										<div class="form-group row">
											<div class="col-md-3">
												<label class="col-form-label text-black" for="nm_barang">Nama Barang
													:</label>
											</div>
											<div class="col-md-7">
												<input type="text" class="form-control" name="nm_barang" id="nm_barang">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-md-3">
												<label class="col-form-label text-black" for="satuan">Satuan :</label>
											</div>
											<div class="col-md-7">
												<select name="satuan" id="satuan" class="form-control">
													<option value="">--Pilih--</option>
													<?php foreach ($satuan->result_array() as $s) : ?>
														<option value="<?= $s['id'] ?>"><?= $s['nama'] ?></option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>

										<div class="mt-2 text-center">
											<button type="submit" class="btn btn-outline-warning">Simpan</button>
										</div>
									</form>
								</div>
							</div>

							<div class="table-responsive mb-2 mt-2">
								<table id="table-stok" class="table table-hover" style="width:100%">
									<thead>
									<tr>
										<th width="5%">No</th>
										<th>Nama Barang</th>
										<th width="15%">Satuan</th>
										<th width="15%">Tgl Buat</th>
										<th class="text-center" width="10%">Aksi</th>
									</tr>
									</thead>
									<tbody>
									<?php
									$no = 1;
									foreach ($bahan->result_array() as $b) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $b['nama'] ?></td>
											<td><?= $b['satuan'] ?></td>
											<td><?= date('d-m-Y', strtotime($b['tgl'])) ?></td>
											<td class="text-center">
												<button title="Hapus" class="gayaku bs-tooltip" id="hapus">
													<i class="p-1 br-6 mb-1 icon-hapus" data-feather="trash"></i>
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
