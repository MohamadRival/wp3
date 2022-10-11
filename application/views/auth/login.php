<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">
            <!-- lg- untuk ukuran kotak login -->

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><img src=" https://i.ibb.co/Z2c6KpC/Whats-App-Image-2021-12-23-at-11-49-53-removebg-preview-2.png" alt="Logo" height="60px" width="90px" class="img-fluid" </h1>
                                        <h1 class="h4 text-gray-900 mb-4">Cofee Roastery</h1>
                                </div>
                                <!-- flashdata -->
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user  <?= form_error('email') ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= set_value('email'); ?>" placeholder=" Masukan email anda">
                                        <small class="text-danger">
                                            <?= form_error('email'); ?>
                                        </small>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user  <?= form_error('password') ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Password">
                                        <small class="text-danger">
                                            <?= form_error('password'); ?>
                                        </small>
                                    </div>

                                    <div class="form-group">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                    <hr>

                                </form>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Lupa Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url(); ?>auth/register">Buat Akun Baru</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>