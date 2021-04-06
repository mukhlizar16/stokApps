<div class="layout-px-spacing">
	<div class="row layout-spacing layout-top-spacing" id="cancel-row">
		<div class="col-lg-12">
			<div class="widget-content searchable-container list">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 filtered-list-search layout-spacing align-self-center">
						<form class="form-row my-lg-0 align-items-center" method="post">
							<div class="form-group col-md-3">
								<label class="text-dark" for="">Tanggal Awal</label>
								<input type="date" name="tgl_awal" class="form-control">
							</div>
							<div class="form-group col-md-3">
								<label class="text-dark" for="">Tanggal Akhir</label>
								<input type="date" name="tgl_akhir" class="form-control">
							</div>
							<div class="form-group col-md-2">
								<label class="text-dark" for="">Status</label>
								<select name="status" id="" class="form-control">
									<option value="">--Pilih--</option>
									<option value="">Member</option>
									<option value="">Voucher</option>
									<option value="">Umum</option>
								</select>
							</div>
							<div class="form-group col-md-2">
								<button type="submit" class="btn btn-dark mt-4 btn-lg ml-2 btn-rounded">Cari</button>
							</div>
						</form>
					</div>
				</div>

				<div class="widget-content widget-content-area br-6">
					<div class="searchable-items list">
						<div class="table-responsive">
							<table id="table-penjualan" class="table table-hover dataTable nowrap">
								<thead>
								<tr>
									<th>No</th>
									<th>Tanggal</th>
									<th>Nama</th>
									<th>No HP</th>
									<th>Jenis Kelamin</th>
									<th>Status</th>
									<th>Produk</th>
									<th>Qty</th>
									<th>Harga</th>
									<th>Total</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>1</td>
									<td>01-03-2021</td>
									<td>Budi Laksana Setan</td>
									<td>082233445566</td>
									<td>Laki-laki</td>
									<td>Voucher</td>
									<td>Mie Goreng</td>
									<td>3</td>
									<td>Rp. 15.000</td>
									<td>Rp. 45.000</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
