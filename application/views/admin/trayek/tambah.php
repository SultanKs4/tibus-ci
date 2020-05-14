<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add trayek</h4>
                    </div>
                    <div class="card-body">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger alert-dismissable" role="alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif ?>
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>PO</label>
                                        <select name="id_po" class="form-control">
                                            <option value="" selected disabled>---select---</option>
                                            <?php
                                            foreach ($po as $p) :
                                            ?>
                                                <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                            <?php
                                            endforeach;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Dari</label>
                                        <select name="dari" class="form-control" require>
                                            <option value="" selected disabled>---select---</option>
                                            <?php
                                            foreach ($terminal as $trm) :
                                            ?>
                                                <option value="<?= $trm['id'] ?>"><?= $trm['nama'] ?></option>
                                            <?php
                                            endforeach;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Id Terminal (tujuan)</label>
                                        <select name="tujuan" class="form-control" require>
                                            <option value="" selected disabled>---select---</option>
                                            <?php
                                            foreach ($terminal as $trm) :
                                            ?>
                                                <option value="<?= $trm['id'] ?>"><?= $trm['nama'] ?></option>
                                            <?php
                                            endforeach;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Jam Berangkat</label>
                                        <input name="jam_berangkat" type="time" class="form-control" placeholder="Jam Berangkat" require>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Jam Tiba</label>
                                        <input name="jam_tiba" type="time" class="form-control" placeholder="Jam Tiba" require>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tanggal Berangkat</label>
                                        <input name="tanggal_berangkat" type="date" class="form-control" placeholder="Tanggal Berangkat" require>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tanggal Tiba</label>
                                        <input name="tanggal_tiba" type="date" class="form-control" placeholder="Tanggal Tiba" require>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input name="harga" type="number" class="form-control" placeholder="Harga" require>
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