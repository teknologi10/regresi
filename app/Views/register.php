<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FKUB</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url(); ?>/img/logojdih.ico" rel="icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/theme/admin/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url(); ?>/theme/admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/theme/admin/assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-info" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <div class="register-logo">
            <!-- <a href="../../index2.html"><b>Admin</b>LTE</a> -->
        </div>

        <div class="card">
            <div class="card-body register-card-body text-center">
                <!-- <p class="login-box-msg">Register a new membership</p> -->
                <img src="<?= base_url('img'); ?>/logofix.png" alt="" class="img-fluid mb-4" style="width: 50%;">
                <form action="<?= base_url('login/daftar'); ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" placeholder="nama" name="nama" value="<?= old('nama'); ?>">
                        <div class=" input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback text-left">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" placeholder="Username" name="username" value="<?= old('username'); ?>">
                        <div class=" input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback text-left">
                            <?= $validation->getError('username'); ?>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" placeholder="Password" name="password">
                        <div class=" input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback text-left">
                            <?= $validation->getError('password'); ?>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control <?= ($validation->hasError('nohp')) ? 'is-invalid' : ''; ?>" placeholder="nohp" name="nohp">
                        <div class=" input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback text-left">
                            <?= $validation->getError('nohp'); ?>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12"><br>
                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    <br>
                    <p class="mb-0"><a href="<?= base_url(); ?>/login">Login</a></p>
                </form>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>/theme/admin/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>/theme/admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>/theme/admin/assets/dist/js/adminlte.min.js"></script>
</body>

</html>