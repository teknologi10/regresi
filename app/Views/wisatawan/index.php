<?= $this->include('header') ?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="<?= base_url(); ?>/wisatawan/tambah" class="btn btn-success mb-2 mt-4">Tambah</a>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header" style="background:#182C61">
                        <h3 class="card-title" style="color:#ffffff">Data Wisatawan</h3>
                        <div class="card-tools">
                            <!-- <a href="" class="btn btn-tool btn-sm" data-toggle="modal" data-target="#tambah">
                        <i class="fas fa-plus-circle"></i>
                    </a> -->
                        </div>
                    </div>


                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example3" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th witdh="5%">ID</th>
                                    <th>Periode</th>
                                    <th>Jumlah Event</th>
                                    <th>Jumlah Wisatawan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($wisatawan as $d) : ?>
                                    <tr>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td><?= $d['periode'] ?></td>
                                        <td><?= $d['event'] ?></td>
                                        <td><?= $d['jumlah_wisatawan'] ?></td>
                                        <td class="text-center" style="width: 10%;">
                                            <a class="text-muted d-inline-block mr-2" href="<?= base_url(); ?>/wisatawan/edit/<?= $d['id'] ?>">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a class="text-muted d-inline-block mr" href="<?= base_url(); ?>/wisatawan/hapus/<?= $d['id'] ?>" onclick="return confirm('apakah anda ingin hapus data?');">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>

                                        </td>
                                    </tr>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

</div>
<?= $this->include('footer') ?>