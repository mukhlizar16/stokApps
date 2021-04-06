<div class="layout-px-spacing">
	<div class="row layout-spacing layout-top-spacing" id="cancel-row">
		<div class="col-lg-12">
			<div class="widget-content searchable-container list">
				<div class="row">
					<div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
						<div class="d-flex">
							<h3>Stok Barang</h3>
						</div>
					</div>

					<div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-left text-center layout-spacing align-self-center">
						<div class="d-flex justify-content-sm-end justify-content-center">
							<form action="" class="form-inline">
								<div class="form-row">
									<div class="form-group col-md-4">
										<label class="text-dark" for="kategori">Kategori</label>
										<select name="kategori" class="form-control" required>
											<option value="">--Pilih--</option>
											<?php foreach ($kategori->result_array() as $k) : ?>
												<option value="<?= $k['id'] ?>"><?= $k['nama_kategori'] ?></option>
											<?php endforeach; ?>
										</select>
									</div>
									<div class="form-group col-md-4">
										<label class="text-dark" for="jenis">Jenis</label>
										<select name="jenis" class="form-control" required>
											<option value="">--Pilih--</option>
											<?php foreach ($jenis->result_array() as $j) : ?>
												<option value="<?= $j['id'] ?>"><?= $j['nama_jenis'] ?></option>
											<?php endforeach; ?>
										</select>
									</div>
									<div class="form-group col-md-2">
										<button class="btn btn-dark btn-rounded btn-lg mt-4">Cari</button>
									</div>
								</div>
							</form>
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
									<form action="" id="form-submit-stok">
										<div class="form-group row">
											<div class="col-md-3">
												<label class="col-form-label text-black" for="">Kategori :</label>
											</div>
											<div class="col-md-7">
												<select name="kategori" class="form-control" required>
													<option value="">--Pilih--</option>
													<?php foreach ($kategori->result_array() as $k) : ?>
														<option value="<?= $k['id'] ?>"><?= $k['nama_kategori'] ?></option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-md-3">
												<label class="col-form-label text-black" for="">Jenis :</label>
											</div>
											<div class="col-md-7">
												<select name="jenis" class="form-control" required>
													<option value="">--Pilih--</option>
													<?php foreach ($jenis->result_array() as $j) : ?>
														<option value="<?= $j['id'] ?>"><?= $j['nama_jenis'] ?></option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-md-3">
												<label class="col-form-label text-black" for="">Nama barang :</label>
											</div>
											<div class="col-md-7">
												<input type="text" class="form-control" name="nama_barang">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-md-3">
												<label class="col-form-label text-black" for="">Supplier :</label>
											</div>
											<div class="col-md-7">
												<select name="supplier" class="form-control" required>
													<option value="">--Pilih--</option>
													<?php foreach ($supplier->result_array() as $s) : ?>
														<option value="<?= $s['id_supp'] ?>"><?= $s['nama'] ?></option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-md-3">
												<label class="col-form-label text-black" for="jumlah">Jumlah :</label>
											</div>
											<div class="col-md-7">
												<input id="jumlah" class="form-control jumlah" type="text" value="" name="jumlah">
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
										<th>No</th>
										<th>Kode Kategori</th>
										<th>Kode Jenis</th>
										<th>Nama Barang</th>
										<th>Jumlah</th>
										<th>Tgl Buat</th>
										<th>Aksi</th>
									</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
