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
				</div>

				<div class="row">
					<div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
						<div class="widget-content widget-content-area br-6">
							<div class="table-responsive mb-2 mt-2">
								<table id="table-stok" class="table table-hover" style="width:100%">
									<thead>
									<tr>
										<th width="5%">No</th>
										<th>Nama Barang</th>
										<th width="15%">Jumlah</th>
										<th width="15%">Satuan</th>
										<th width="15%">Tanggal</th>
									</tr>
									</thead>
									<tbody>
									<?php
									$no = 1;
									foreach ($stok->result_array() as $s) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $s['barang'] ?></td>
											<td><?= $s['jumlah'] ?></td>
											<td><?= $s['satuan'] ?></td>
											<td><?= date('d-m-Y', strtotime($s['tgl'])) ?></td>
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
