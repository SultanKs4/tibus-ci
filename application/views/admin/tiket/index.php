<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Tiket</h4>
                        <div class="row">
                            <p class="card-category col-md-9">Data tiket</p>
                        </div>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped" id="list">
                            <thead>
                                <th>Nama Penumpang</th>
                                <th>No KTP</th>
                                <th>No Duduk</th>
                                <th>Trayek</th>
                                <th>Id Duduk</th>
                                <th>Id Payment</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($tiket as $tkt) :
                                ?>
                                    <tr>
                                        <td><?= $tkt['nama_penumpang']; ?></td>
                                        <td><?= $tkt['no_ktp_penumpang']; ?></td>
                                        <td><?= $tkt['no_duduk']; ?></td>
                                        <td><a href="<?= base_url(); ?>admin/trayek/detail/<?= $tkt['id_trayek'] ?>">Detail Trayek</a></td>
                                        <td><?= $tkt['id_duduk']; ?></td>
                                        <td><?= $tkt['id_payment']; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>admin/tiket/edit/<?= $tkt['id']; ?> " class="badge badge-success float-right">Edit</a>
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