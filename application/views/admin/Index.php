<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- flash data -->
            <?php if ($this->session->flashdata('tambah')) : ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-success alert-dismissible fade show my-2" role="alert">
                            Data barang <strong>berhasil</strong> <?= $this->session->flashdata('tambah'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- tombol tambah data product -->
            <a href="<?= base_url('admin/tambah'); ?>" class="btn btn-primary my-3">Tambah data barang</a>
            <!-- tabel data -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-center">
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Merk</th>
                                    <th>Stok</th>
                                    <th>Berat</th>
                                    <th>Harga</th>
                                    <th>Tanggal Datang</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($product as $p) : ?>
                                    <tr>
                                        <td><?= $p['nama_barang']; ?>
                                            <a href="<?= base_url(); ?>admin/hapus/<?= $p['id']; ?>" class="btn btn-danger btn-sm ms-2 float-end" onclick="return confirm('apakah yakin akan menghapus data?');">Hapus</a>
                                            <a href="<?= base_url('admin'); ?>/ubah/<?= $p['id']; ?>" class="btn btn-success btn-sm ms-2 float-end">Ubah</a>
                                        </td>
                                        <td><?= $p['merk']; ?></td>
                                        <td><?= $p['stok']; ?></td>
                                        <td><?= $p['berat']; ?> Gr</td>
                                        <td>Rp. <?= $p['harga']; ?></td>
                                        <td><?= $p['created_at']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>