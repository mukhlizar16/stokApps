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
										data-toggle="collapse" data-target="#form-tambah">Tambah Pembelian
								</button>
							</div>
							<div id="form-tambah" class="collapse mt-3 mb-5">
								<div class="col-md-12">
									<div class="card shadow-lg">
										<div class="card-body">
											<form id="form-submit-array">
												<div class="alert alert-danger mb-3">
													<span>
														<i class="text-danger" data-feather="alert-triangle"></i>
														Note : Isilah bidang <strong class="text-black">Nomor Faktur</strong>
														terlebih dahulu.
													</span>
												</div>
												<div class="col-md-5">
													<div class="form-group">
														<input type="text"
															   name="no_faktur"
															   class="form-control"
															   placeholder="Nomor Faktur"
															   id="no_faktur"
															   value="<?= set_value('no_faktur') ?>"
															   autofocus>
													</div>
													<div class="form-group">
														<select class="form-control basic" name="supplier"
																id="supplier">
															<option selected="selected" value="">--Pilih Supplier--
															</option>
															<?php foreach ($supplier as $s) : ?>
																<option value="<?= $s['id'] ?>"><?= $s['nama'] ?></option>
															<?php endforeach; ?>
														</select>
													</div>
												</div>
												<div class="col-md-12 mt-2">
													<div class="form-group text-black">
														<h6 style="font-weight: bold">
															<i data-feather="clock" style="color: limegreen"></i>
															&nbsp;<?= date('d-m-Y H:i:s') ?></h6>
													</div>
													<span class="text-black mt-3">Data barang :</span>
													<table id="table-add-pembelian" width="100%">
														<thead>
														<tr>
															<th width="25%">Nama Barang</th>
															<th width="20%">Jumlah</th>
															<th width="20%">Harga Satuan</th>
															<th width="20%">Total</th>
															<th width="5%">
																<button type="button" title="tambah"
																		class="gayaku bs-tooltip" id="btn-add-row">
																	<i class="p-1 mb-1 br-6 icon-tambah"
																	   data-feather="plus-circle"></i>
																</button>
															</th>
														</tr>
														</thead>
														<tbody id="data-target">
														</tbody>
													</table>
												</div>
												<div class="col-md-8 mt-3">
													<div class="form-group row">
														<label for="" class="col-form-label col-md-3 text-black">Diskon
															Total</label>
														<div class="col-md-5">
															<input type="number" class="form-control"
																   name="diskon_total">
														</div>
													</div>
													<div class="form-group row">
														<label for="" class="col-form-label col-md-3 text-black">Total
															Bayar</label>
														<div class="col-md-5">
															<input type="number" min="0" class="form-control"
																   name="total_bayar" id="total_bayar">
														</div>
													</div>
												</div>

												<div class="col-md-12">
													<button class="btn btn-primary" id="btn-simpan">Simpan</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>

							<div class="table-responsive mb-2 mt-3">
								<table id="table-pembelian" class="table table-hover" style="width:100%">
									<thead>
									<tr>
										<th width="5%">No</th>
										<th width="15%">Tanggal</th>
										<th width="18%">Nomor Faktur</th>
										<th>Supplier</th>
										<th width="15%">Total</th>
										<th class="text-center" width="10%">Aksi</th>
									</tr>
									</thead>
									<tbody>
									<?php
									$no = 1;
									foreach ($pembelian as $p) :
										?>
										<tr>
											<td class="text-center"><?= $no++ ?></td>
											<td><?= date('d-m-Y', strtotime($p['tgl'])) ?></td>
											<td><?= $p['no_faktur'] ?></td>
											<td><?= $p['supplier'] ?></td>
											<td>Rp. <?= $p['total'] ?></td>
											<td>
												<button id="btn-edit" title="Edit data" class="gayaku bs-tooltip"
														data-id="<?= $p['id'] ?>">
													<i class="p-1 br-6 mb-1" data-feather="edit"></i>
												</button>
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
