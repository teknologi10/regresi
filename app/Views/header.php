<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Informasi Peramalan Wisatawan</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url(); ?>/img/logo.png" rel="icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/theme/admin/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url(); ?>/theme/admin/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url(); ?>/theme/admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url(); ?>/theme/admin/assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url(); ?>/theme/admin/assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/theme/admin/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/theme/admin/assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url(); ?>/theme/admin/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url(); ?>/theme/admin/assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url(); ?>/theme/admin/assets/plugins/summernote/summernote-bs4.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url(); ?>/theme/admin/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/theme/admin/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/theme/admin/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Google Font: Source Sans Pro -->

    <script src="<?= base_url(); ?>/theme/admin/assets/barcode/jquery-barcode.js"></script>
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <!-- <script src="http://code.jquery.com/jquery-1.3.2.min.js"></script> -->
    <style type="text/css">
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
        }

        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }
    </style>
    <script>
        $(document).ready(function() {
            $(".preloader").fadeOut();
        })
    </script>

</head>
<?php $uri = current_url(true); ?>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-blue navbar-light" style="background:#182C61">
            <div class="container">
                <a href="<?= base_url(); ?>/dashboard" class="navbar-brand" style="color:#ffffff">
                    <img src="<?= base_url(); ?>/theme/admin/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">AdminLTE 3</span>
                </a>

                <button style="background-color:#ffffff" class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse" style="color:#ffffff">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>/dashboard" class="nav-link" style="color:#ffffff">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="color:#ffffff">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>/wisatawan" class="nav-link" style="color:#ffffff">WISATAWAN</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>/event" class="nav-link" style="color:#ffffff">EVENT</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" style="color:#ffffff">DATA</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="<?= base_url(); ?>/peramalan" class="dropdown-item">Peramalan</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#" style="color:#ffffff">
                            <b><?= session('username'); ?></b> &nbsp;&nbsp;&nbsp;<i class="fas fa-power-off"></i>

                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="color:#ffffff">
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url('/logout'); ?>" class="dropdown-item dropdown-footer">Log Out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->