<?= $this->include('header') ?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- <a href="<?= base_url(); ?>/event/tambah" class="btn btn-success mb-2 mt-4">Tambah</a> -->
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <div class="card mt-4">
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
                        <table id="example3" class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th witdh="5%">ID</th>
                                    <th>Periode</th>
                                    <th>Jumlah Event(X)</th>
                                    <th>Jumlah Pengunjung(Y)</th>
                                    <th>X<sup>2</sup></th>
                                    <th>Y<sup>2</sup></th>
                                    <th>X + Y</th>
                                    <th>XY</th>
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
                                        <td><?= ($d['event'] * $d['event']) ?></td>
                                        <td><?= ($d['jumlah_wisatawan'] * $d['jumlah_wisatawan']) ?></td>
                                        <td><?= ($d['event'] + $d['jumlah_wisatawan']) ?></td>
                                        <td><?= ($d['event'] * $d['jumlah_wisatawan']) ?></td>
                                    </tr>

                                <?php endforeach; ?>
                                <tr>
                                    <th>Total</th>
                                    <th></th>
                                    <th><?= $tot_event; ?></th>
                                    <th><?= $tot_wisatawan; ?></th>
                                    <th><?= $tot_event2; ?></th>
                                    <th><?= $tot_wisatawan2; ?></th>
                                    <th></th>
                                    <th><?= $tot_xy; ?></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="row">
                    <div class="col-6">
                        <div class="card mt-4">
                            <div class="card-header" style="background:#182C61">
                                <h3 class="card-title" style="color:#ffffff">Peramalan</h3>
                                <div class="card-tools">
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <form role="form" action="<?= base_url(); ?>/peramalan" method="post" enctype="multipart/form-data">
                                <?php
                                $a = ((($tot_wisatawan * $tot_event2) - ($tot_event * $tot_wisatawan)) / ((count($wisatawan) * $tot_event2) - ($tot_event * $tot_event)));
                                $b = (((count($wisatawan) * ($tot_xy)) - ($tot_event * $tot_wisatawan)) / ((count($wisatawan) * $tot_event2) - ($tot_event * $tot_event)));
                                ?>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?= csrf_field(); ?>
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Periode</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="periode" value="<?= $periode; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">Jumlah Event</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="x" value="<?= $x; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">A</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="a" class="form-control" value="<?= $a; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="" class="col-sm-3 col-form-label">B</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="b" class="form-control" value="<?= $b; ?>">
                                                    </div>
                                                </div>
                                                <button type=" submit" class="btn btn-success col-sm-12 mt-2" name="submit" value="hitung">Hitung</button>
                                                <!-- /.card-body -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mt-4">
                            <div class="card-header" style="background:#182C61">
                                <h3 class="card-title" style="color:#ffffff">Hasil Peramalan</h3>
                                <div class="card-tools">
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <form role="form" action="<?= base_url(); ?>/peramalan/hitung" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?= csrf_field(); ?>
                                            <div class="card-body">

                                                <div class="form-group row mt-4">
                                                    <label for="" class="col-sm-3 col-form-label">Jumlah Wisatawan</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="hasil" value="<?= round($hasil); ?>" readonly>
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->include('footer') ?>