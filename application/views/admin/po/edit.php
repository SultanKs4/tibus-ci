<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit PO</h4>
                    </div>
                    <div class="card-body">
                        <?= validation_errors() ?>
                        <?php
                            foreach($po as $p):
                        ?>
                        <form method="post" action="">
                            <input type="hidden" name="id" value="<?= $p['id']; ?>">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input name="nama" type="text" class="form-control" placeholder="Nama po" value="<?= $p['nama']; ?>">
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