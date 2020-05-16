<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit booking</h4>
                    </div>
                    <div class="card-body">
                        <?= validation_errors() ?>
                        <?php
                        foreach ($akun as $akn) :
                        ?>
                            <form method="post" action="">
                                <input type="hidden" name="id" value="<?= $akn['id']; ?>">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" placeholder="Email" value="<?= $akn['email']; ?>" require>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Depan</label>
                                            <input name="nama_depan" type="text" class="form-control" placeholder="Nama Depan" value="<?= $akn['nama_depan']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Belakang</label>
                                            <input name="nama_belakang" type="text" class="form-control" placeholder="Nama Belakang" value="<?= $akn['nama_belakang']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input name="telpon" type="number" class="form-control" placeholder="No Telepon" value="<?= $akn['telpon']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input name="password" type="password" class="form-control" placeholder="New Password">
                                        </div>
                                    </div>
                                </div>
                            <?php
                        endforeach;
                            ?>
                            <button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Edit</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div