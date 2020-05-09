<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Method</h4>
                    </div>
                    <div class="card-body">
                        <?= validation_errors() ?>
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input name="name" type="text" class="form-control" placeholder="Nama method">
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