<div class="layout-px-spacing">
	<div class="row layout-top-spacing">
		<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
			<div class="widget-content widget-content-area br-6">
				<div class="mt-3">
					<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#form" aria-expanded="false" aria-controls="collapseForm">
						Tambah
					</button>
					<div class="collapse mt-3" id="form">
						<div class="col-md-6">
							<div class="widget-content widget-content-area">
								<form id="form-level">
									<div class="form-group mb-4">
										<label for="namalevel">Nama Level *</label>
										<input type="text" class="form-control" id="namalevel" name="level">
									</div>

									<small id="emailHelp2" class="form-text text-muted">*Required Fields</small>
									<button type="submit" class="btn btn-primary mt-3">Simpan</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="table-responsive mb-4 mt-4">
					<table id="table-list-level" class="table table-hover" style="width:100%">
						<thead>
						<tr>
							<th>No</th>
							<th>Nama Level</th>
							<th width="5%">Aksi</th>
						</tr>
						</thead>
						<tbody>
						<?php
						$no = 1;
						foreach ($level->result_array() as $l) : ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $l['nama_level'] ?></td>
								<td>
									<button id="btn-hapus" title="Hapus" class="gayaku bs-tooltip" data-id="<?= $l['id'] ?>">
										<i class="p-1 br-6 mb-1" data-feather="trash"></i>
									</button>
								</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
						<tfoot>
						<tr>
							<th>No</th>
							<th>Nama Level</th>
							<th>Action</th>
						</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
