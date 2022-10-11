<div class="container">
    <div class="row mt-3">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Form tambah data product
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row mb-3">
                            <label for="nama_barang" class="col-sm-2 col-form-label">product</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= form_error('nama_barang') ? 'is-invalid' : ''; ?>" id="nama_barang" name="nama_barang" value="<?= set_value('nama_barang'); ?>" autofocus>
                                <!-- menampilkan pesan error -->
                                <small class="form-text text-danger"><?= form_error('nama_barang'); ?></small>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= form_error('merk') ? 'is-invalid' : ''; ?>" id="merk" name="merk" value="<?= set_value('merk'); ?>">
                                <!-- menampilkan pesan error -->
                                <small class="form-text text-danger"><?= form_error('merk'); ?>
                                </small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= form_error('sampul') ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" autofocus value="<?= set_value('sampul'); ?>">
                                <!-- menampilkan pesan error -->
                                <small class="form-text text-danger"><?= form_error('sampul'); ?></small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="berat" class="col-sm-2 col-form-label">Berat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= form_error('berat') ? 'is-invalid' : ''; ?>" id="berat" name="berat" autofocus value="<?= set_value('berat'); ?>">
                                <!-- menampilkan pesan error -->
                                <small class="form-text text-danger"><?= form_error('berat'); ?></small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= form_error('harga') ? 'is-invalid' : ''; ?>" id="harga" name="harga" autofocus value="<?= set_value('harga'); ?>">
                                <!-- menampilkan pesan error -->
                                <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= form_error('stok') ? 'is-invalid' : ''; ?>" id="stok" name="stok" autofocus value="<?= set_value('stok'); ?>">
                                <!-- menampilkan pesan error -->
                                <small class="form-text text-danger"><?= form_error('stok'); ?></small>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary float-end" name="tambah">Tambah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>