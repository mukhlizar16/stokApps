<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Jadwal Kuliah</h4>
                <!-- <h6 class="card-subtitle">To use add <code>.r-separator</code> class in the form with
                    form styling.</h6> -->
            </div>
            <hr class="mt-0">
            <form class="form-horizontal r-separator" method="post" action="<?= base_url('Jadwalkuliah/aksi_tambah'); ?>">
                <div class="card-body">

                    <div class="form-group row align-items-center mb-0">
                        <label for="thn_akad" class="col-md-3 text-right control-label col-form-label">Tahun Akademik</label>
                        <div class="col-md-9 border-left pb-2 pt-2">
                            <div class="row">
                                <div class="col-md-5">
                                    <input class="form-control" id="ta" type="text" name="thn_akad" value="<?= $atahun->id_ta ?>" hidden>
                                    <input class="form-control" type="text" value="<?= $atahun->tahun . ' ' . $atahun->semester_ta ?>" readonly>
                                </div>
                                <div class="col-md-1">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row align-items-center mb-0">
                        <label for="prodi" class="col-md-3 text-right control-label col-form-label">Prodi</label>
                        <div class="col-md-9 border-left pb-2 pt-2">
                            <select name="prodi" id="prodi" class="form-control">
                                <option value="">--Pilih--</option>
                                <?php foreach ($prodi as $pr) : ?>
                                    <option value="<?= $pr->id_prodi; ?>"><?= $pr->nama_prodi; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('prodi', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row align-items-center mb-0">
                        <label for="hari" class="col-md-3 text-right control-label col-form-label">Hari</label>
                        <div class="col-md-9 border-left pb-2 pt-2">
                            <select name="hari" id="hari" class="form-control">
                                <option value="">--Pilih--</option>
                                <?php foreach ($hari as $h) : ?>
                                    <option value="<?= $h->id_hari; ?>"><?= $h->hari; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('hari', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row align-items-center mb-0">
                        <label for="jam_masuk" class="col-md-3 text-right control-label col-form-label">Jam Kuliah</label>
                        <div class="col-md-9 border-left pb-2 pt-2">
                            <div class="row">
                                <div class="col-md-5">
                                    <input class="form-control" id="jam_masuk" type="time" name="jam_masuk">
                                    <?= form_error('jam_masuk', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="col-md-1">
                                    <label class="col-form-label" for="">s/d</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" type="time" name="jam_selesai">
                                    <?= form_error('jam_selesai', '<small class="text-danger">', '</small>') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row align-items-center mb-0">
                        <label for="hari" class="col-md-3 text-right control-label col-form-label">Matakuliah</label>
                        <div class="col-md-9 border-left pb-2 pt-2">
                            <select name="mk" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                <option value="">Select</option>
                                <optgroup label="Matematika">
                                    <?php foreach ($matkul as $mk) : ?>
                                        <option value="<?= $mk->id_mk; ?>"><?= $mk->kode_mk . ' > ' . $mk->nama_mk; ?></option>
                                    <?php endforeach; ?>
                                </optgroup>

                            </select>
                            <?= form_error('mk', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row align-items-center mb-0">
                        <label for="kelas" class="col-md-3 text-right control-label col-form-label">Kelas</label>
                        <div class="col-md-9 border-left pb-2 pt-2">
                            <select name="kelas" id="kelas" class="form-control">
                                <option value="">--Pilih--</option>
                                <?php foreach ($kelas as $k) : ?>
                                    <option value="<?= $k->id_kelas; ?>"><?= $k->nama_kelas; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('kelas', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row align-items-center mb-0">
                        <label for="ruang" class="col-md-3 text-right control-label col-form-label">Ruang Kuliah</label>
                        <div class="col-md-9 border-left pb-2 pt-2">
                            <select name="ruang" id="ruang" class="form-control">
                                <option value="">--Pilih--</option>
                                <?php foreach ($ruang as $r) : ?>
                                    <option value="<?= $r->id_ruang; ?>"><?= $r->nama_ruang; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('ruang', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row align-items-center mb-0">
                        <label for="dosen" class="col-md-3 text-right control-label col-form-label">Dosen Pengampu 1</label>
                        <div class="col-md-9 border-left pb-2 pt-2">
                            <select class="select2 form-control custom-select" name="dosen" style="width: 100%; height:36px;">
                                <option value="">Select</option>
                                <?php foreach ($dosen as $ds) : ?>
                                    <option value="<?= $ds->id_dosen; ?>"><?= $ds->nama_dosen; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('dosen', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row align-items-center mb-0">
                        <label for="dosen" class="col-md-3 text-right control-label col-form-label">Dosen Pengampu 2</label>
                        <div class="col-md-9 border-left pb-2 pt-2">
                            <select class="select2 form-control custom-select" name="dosen2" style="width: 100%; height:36px;">
                                <option value="">Select</option>
                                <?php foreach ($dosen as $ds) : ?>
                                    <option value="<?= $ds->id_dosen; ?>"><?= $ds->nama_dosen; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('dosen', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button>
                            <a type="button" class="btn btn-dark waves-effect waves-light" href="<?= base_url('jadwalkuliah') ?>">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>