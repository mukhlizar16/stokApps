<div id="content" class="main-content">
    <div class="container">
        <div class="container">
            <div class="row">
                <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Edit Data Supplier</h4>
                                </div>
                            </div>
                            <?= $this->session->flashdata('pesan'); ?>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form method="post" action="<?= base_url('supplier/updateData') ?>">
                                <div class="form-group mb-4">
                                    <label for="nama">Nama Supplier *</label>
                                    <input class="form-control" id="id" type="text" name="id" value="<?= $id; ?>" hidden>
                                    <input type="text" class="form-control" name="nama" id="nama" value="<?= $nama_supp; ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="alamat">Alamat </label>
                                    <textarea type="text" class="form-control" name="alamat" id="alamat"><?= $alamat; ?> </textarea>
                                </div>

                                <div class=" form-group mb-4">
                                    <label for="nohp">No Hp *</label>
                                    <input type="text" class="form-control" name="nohp" id="nohp" value="<?= $nohp; ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="email">Email </label>
                                    <input type="text" class="form-control" name="email" id="email" value="<?= $email; ?>">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="web">Website</label>
                                    <input type="text" class="form-control" name="web" id="web" value="<?= $web; ?>">
                                </div>

                                <small id="emailHelp2" class="form-text text-muted">*Required Fields</small>
                                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com">Karya</a>, Sahabat Software.</p>
        </div>
        <div class="footer-section f-section-2">
            <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                </svg></p>
        </div>
    </div>
</div>