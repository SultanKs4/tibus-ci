<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Booking</h4>
                        <div class="row">
                            <p class="card-category col-md-9">Data Booking</p>
                            <div class="row mt-4 float-right mr-5 col-md-2">
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Kode Booking</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($booking as $bkg) :
                                ?>
                                    <tr>
                                        <td><?= $bkg['name']; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>admin/booking/hapus/<?= $bkg['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin Data ini akan dihapus')">Hapus</a>
                                            <a href="<?= base_url(); ?>admin/booking/edit/<?= $bkg['id']; ?> " class="badge badge-success float-right">Edit</a>
                                        </td>
                                    </tr>
                                <?php
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>