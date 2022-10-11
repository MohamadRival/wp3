<div class="row">
    <div class="col-md-3">
        <nav id="navbar-example3" class="navbar navbar-light bg-light flex-column align-items-stretch p-3" style="width: 100%">
            <form action="/cari" method="post">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
            </form>
            <nav class="nav nav-pills flex-column">
                <a class="nav-link disabled text-dark" href="#item-1">Semua produk</a>
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link ms-3 my-1" href="#item-1-1">Discount</a>
                </nav>
                <a class="nav-link disabled text-dark" href="#item-2">Kategori</a>
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link ms-3 my-1" href="#item-2-1">Beans</a>
                    <a class="nav-link ms-3 my-1" href="#item-2-2">Powder</a>
                    <a class="nav-link ms-3 my-1" href="#item-2-3">Tools</a>
                </nav>
                <a class="nav-link disabled text-dark" href="#item-3">Urutan</a>
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link ms-3 my-1" href="#item-3-1">Terpopuler</a>
                    <a class="nav-link ms-3 my-1" href="/baru">Terbaru</a>
                    <a class="nav-link ms-3 my-1" href="/lama">Terlama</a>
                    <a class="nav-link ms-3 my-1" href="/harga">Harga Tinggi</a>
                    <a class="nav-link ms-3 my-1" href="/hargarendah">Harga Terendah</a>
                    <a class="nav-link ms-3 my-1" href="/nama">Nama Produk (A-Z)</a>
                </nav>
            </nav>
        </nav>
    </div>

    <div class="col-md-9">
        <div class="row">
            <?php foreach ($product as $b) : ?>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                            <div class="main-img"><img src="<?= base_url(); ?>assets/img/<?= $b['sampul']; ?>" alt="Category"></div>
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $b['nama_barang']; ?></h5>
                            <p class="text-muted"><?= $b['berat']; ?> Gr</p>
                            <p class="text-muted">Rp. <?= $b['harga']; ?></p>
                            <!-- membuat tombol cart -->
                            <?= anchor('pages/addchart/' . $b['id'], '<div class="btn btn-outline-success">Add to Chart</div>') ?>
                            <a class="btn btn-outline-primary btn-sm m-2" href="#" data-abc="true" data-bs-toggle="modal" data-bs-target="#produk<?= $b['id']; ?>">Detail</a>

                        </div>
                    </div>
                </div>
                <!-- modal -->
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
                                        <img src="<?= base_url(); ?>assets/img/<?= $b['sampul']; ?>" alt=" Category" style="width: 100%">
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
                                                <td><?= $b['stok']; ?></td>
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
                                <button type="button" class="btn btn-primary">Buy Products</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal -->
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="container mt-100">