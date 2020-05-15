<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Akun</h4>
                        <div class="row">
                            <p class="card-category col-md-9">Data akun</p>
                        </div>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped" id="list">
                            <thead>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($akun as $akn) :
                                ?>
                                    <tr>
                                        <td><?= $akn['nama_depan']; ?> <?= $akn['nama_belakang']; ?></td>
                                        <td><?= $akn['email']; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>admin/akun/detail/<?= $akn['id']; ?>" class="badge badge-primary float-right">detail</a>
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