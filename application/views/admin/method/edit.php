<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Method</h4>
                    </div>
                    <div class="card-body">
                        <?= validation_errors() ?>
                        <?php
                        foreach ($method as $mth) :
                        ?>
                            <form method="post" action="">
                                <input type="hidden" name="id" value="<?= $mth['id']; ?>">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input name="name" type="text" class="form-control" placeholder="Nama method" value="<?= $mth['name']; ?>">
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