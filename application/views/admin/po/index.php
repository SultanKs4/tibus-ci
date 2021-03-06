<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Po</h4>
                        <div class="row">
                            <p class="card-category col-md-9">Data Po</p>
                            <div class="row mt-4 float-right mr-5 col-md-2">
                                <div class="col-md-6">
                                    <a href="<?= base_url(); ?>admin/po/tambah" class="btn btn-primary">Tambah Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped" id="list">
                            <thead>
                                <th>Nama</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($po as $p) :
                                ?>
                                    <tr>
                                        <td><?= $p['nama']; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>admin/po/hapus/<?= $p['id']; ?>" class="badge badge-danger float-right mr-1" onclick="return confirm('Yakin Data ini akan dihapus')">Hapus</a>
                                            <a href="<?= base_url(); ?>admin/po/edit/<?= $p['id']; ?> " class="badge badge-success float-right">Edit</a>
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