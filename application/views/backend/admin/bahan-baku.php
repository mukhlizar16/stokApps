<div class="layout-px-spacing">
	<div class="row layout-spacing layout-top-spacing" id="cancel-row">
		<div class="col-lg-12">
			<div class="widget-content searchable-container list">
				<div class="row">
					<div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
						<div class="d-flex">
							<h3>Stok Bahan Baku</h3>
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

							<div class="table-responsive mb-2 mt-3">
								<table id="table-pembelian" class="table table-hover" style="width:100%">
									<thead>
										<tr>
											<th class="text-center" width="5%">No</th>
											<th>Nama Barang</th>
											<th class="text-center" width="15%">Jumlah</th>
											<th class="text-center" width="5%">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($bahan->result_array() as $b) : ?>
											<tr>
												<td class="text-center" width="10%"><?= $no++ ?></td>
												<td><?= $b['barang'] ?></td>
												<td class="text-center" width="15%"><?= $b['jumlah'] ?></td>
												<td width="5%">
													<button id="btn-hapus" title="Hapus" class="gayaku bs-tooltip" data-id="">
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