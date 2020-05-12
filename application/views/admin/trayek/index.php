<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Trayek</h4>
                        <div class="row">
                            <p class="card-category col-md-9">Data Trayek</p>
                            <div class="row mt-4 float-right mr-5 col-md-2">
                                <div class="col-md-6">
                                    <a href="<?= base_url(); ?>admin/trayek/tambah" class="btn btn-primary">Tambah Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>PO</th>
                                <th>Dari</th>
                                <th>Tujuan</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($trayek as $try) :
                                ?>
                                    <tr>
                                        <td><?= $try['po']; ?></td>
                                        <td><?= $try['dari']; ?></td>
                                        <td><?= $try['tujuan']; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>admin/trayek/hapus/<?= $try['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin Data ini akan dihapus')">Hapus</a>
                                            <a href="<?= base_url(); ?>admin/trayek/edit/<?= $try['id']; ?> " class="badge badge-success float-right">Edit</a>
                                            <a href="<?= base_url(); ?>admin/trayek/detail/<?= $try['id']; ?>" class="badge badge-primary float-right">detail</a>
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