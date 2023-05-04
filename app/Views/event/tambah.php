<?= $this->include('header') ?>
<div class="content">
    <div class="container">
        <div class="card mt-4">
            <div class="card-header" style="background:#182C61">
                <h3 class="card-title" style="color:#ffffff">Tambah Data Event</h3>
                <div class="card-tools">
                    <!-- <a href="" class="btn btn-tool btn-sm" data-toggle="modal" data-target="#tambah">
                        <i class="fas fa-plus-circle"></i>
                    </a> -->
                </div>
            </div>
            <!-- /.card-header -->
            <form role="form" action="<?= base_url(); ?>/event/tambah" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Event</label>
                                            <input type="text" name="nama_event" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Deskripsi</label>
                                            <input type="text" name="deskripsi" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success col-sm-12 mt-2" name="submit" value="tambah">Simpan Data</button>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /.card-body -->
        </div>

    </div>
    <?= $this->include('footer') ?>