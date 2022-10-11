<div class="container-fluid">
    <div class="row mt-3">
        <?php foreach ($product as $b) : ?>
            <div class="col-md-4 col-sm-3">
                <!-- col-md-4 artinya dalam 1 baris kolom 12 dibagi 4 jadi 3 , 12 default dari bootstrap-->
                <div class="card mb-30">
                    <a class="card-img-tiles" href="#" data-abc="true">
                        <div class="main-img"><img src="<?= base_url(); ?>assets/img/<?= $b['sampul']; ?>" alt="Category"></div>
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $b['nama_barang']; ?></h5>
                        <p class="text-muted"><?= $b['berat']; ?> Gr</p>
                        <p class="text-muted"><?= $b['stok']; ?> pcs</p>
                        <a class="btn btn-outline-primary btn-sm" href="#" data-abc="true" data-bs-toggle="modal" data-bs-target="#produk<?= $b['id']; ?>" style="width: 100%">Detail</a>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="produk<?= $b['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?= base_url(); ?>assets/img/<?= $b['sampul']; ?>" alt="Category" style="width: 100%">
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-borderless m-3">
                                        <tr>
                                            <th>Nama Produk</th>
                                            <td><?= $b['nama_barang']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Merk</th>
                                            <td><?= $b['merk']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Stok Produk</th>
                                            <td><?= $b['stok']; ?> pcs</td>
                                        </tr>
                                        <tr>
                                            <th>Harga</th>
                                            <td>Rp. <?= $b['harga']; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a href="<?= base_url('auth'); ?>" class="btn btn-primary">Buy Product</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="container mt-100">

        </div>