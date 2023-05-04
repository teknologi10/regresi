<?= $this->include('header') ?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="<?= base_url(); ?>/event/tambah" class="btn btn-success mb-2 mt-4">Tambah</a>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header" style="background:#182C61">
                        <h3 class="card-title" style="color:#ffffff">Data Event</h3>
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
                                    <th>Nama Event</th>
                                    <th>Alamat</th>
                                    <th>Deskipsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($event as $d) : ?>
                                    <tr>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td><?= $d['nama_event'] ?></td>
                                        <td><?= $d['alamat'] ?></td>
                                        <td><?= $d['deskripsi'] ?></td>
                                        <td class="text-center" style="width: 10%;">
                                            <a class="text-muted d-inline-block mr-2" href="<?= base_url(); ?>/event/edit/<?= $d['id_event'] ?>">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a class="text-muted d-inline-block mr" href="<?= base_url(); ?>/event/hapus/<?= $d['id_event'] ?>" onclick="return confirm('apakah anda ingin hapus data?');">
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