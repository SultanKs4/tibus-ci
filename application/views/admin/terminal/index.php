<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Terminal</h4>
                        <div class="row">
                            <p class="card-category col-md-9">Data Terminal</p>
                            <div class="row mt-4 float-right mr-5 col-md-2">
                                <div class="col-md-6">
                                    <a href="<?= base_url(); ?>admin/terminal/tambah" class="btn btn-primary">Tambah Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Nama</th>
                                <th>Kota</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($terminal as $trm) :
                                ?>
                                    <tr>
                                        <td><?= $trm['nama']; ?></td>
                                        <td><?= $trm['kota']; ?></td>
                                        <td><?= $trm['alamat']; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>admin/terminal/hapus/<?= $trm['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin Data ini akan dihapus')">Hapus</a>
                                            <a href="<?= base_url(); ?>admin/terminal/edit/<?= $trm['id']; ?> " class="badge badge-success float-right">Edit</a>
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