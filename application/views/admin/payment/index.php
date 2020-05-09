<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Payment</h4>
                        <div class="row">
                            <p class="card-category col-md-9">Data Payment</p>
                        </div>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Akun</th>
                                <th>Kode Booking</th>
                                <th>Status</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($payment as $pym) :
                                ?>
                                    <tr>
                                        <td><?= $pym['akun']; ?></td>
                                        <td><?= $pym['kode_booking']; ?></td>
                                        <td><?= $pym['status']; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>admin/payment/hapus/<?= $pym['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin Data ini akan dihapus')">Hapus</a>
                                            <a href="<?= base_url(); ?>admin/payment/edit/<?= $pym['id']; ?> " class="badge badge-success float-right">Edit</a>
                                            <a href="<?= base_url(); ?>admin/payment/detail/<?= $pym['id']; ?> " class="badge badge-primary float-right">Detail</a>
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