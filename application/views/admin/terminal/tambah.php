<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Terminal</h4>
                    </div>
                    <div class="card-body">
                        <?= validation_errors() ?>
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input name="nama" type="text" class="form-control" placeholder="Nama Terminal">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Kota</label>
                                        <input name="kota" type="text" class="form-control" placeholder="Nama Kota">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input name="alamat" type="text" class="form-control" placeholder="Alamat Terminal">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div