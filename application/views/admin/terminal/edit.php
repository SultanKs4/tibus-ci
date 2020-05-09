<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Terminal</h4>
                    </div>
                    <div class="card-body">
                        <?= validation_errors() ?>
                        <?php
                            foreach($terminal as $trm):
                        ?>
                        <form method="post" action="">
                            <input type="hidden" name="id" value="<?= $trm['id']; ?>">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input name="nama" type="text" class="form-control" placeholder="Nama Terminal" value="<?= $trm['nama']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Kota</label>
                                        <input name="kota" type="text" class="form-control" placeholder="Nama Kota" value="<?= $trm['kota']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input name="alamat" type="text" class="form-control" placeholder="Alamat Terminal" value="<?= $trm['alamat']; ?>">
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