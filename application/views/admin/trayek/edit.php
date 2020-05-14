<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit trayek</h4>
                    </div>
                    <div class="card-body">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger alert-dismissable" role="alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif ?>
                        <?php
                        foreach ($trayek as $try) :
                            $namapo = $try['po'];
                        ?>
                            <form method="post" action="">
                                <input type="hidden" name="id" value="<?= $try['id']; ?>">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>PO</label>
                                            <select name="id_po" class="form-control">
                                                <?php
                                                foreach ($po as $p) :
                                                    if ($try['po'] == $p['nama']) :
                                                ?>
                                                        <option value="<?= $p['id'] ?>" selected><?= $p['nama'] ?></option>
                                                    <?php
                                                    else :
                                                    ?>
                                                        <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
                                                <?php
                                                    endif;
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
                                            <select name="dari" class="form-control">
                                                <?php
                                                foreach ($terminal as $trm) :
                                                    if ($try['dari'] == $trm['nama']) :
                                                ?>
                                                        <option value="<?= $trm['id'] ?>" selected><?= $trm['nama'] ?></option>
                                                    <?php
                                                    else :
                                                    ?>
                                                        <option value="<?= $trm['id'] ?>"><?= $trm['nama'] ?></option>
                                                <?php
                                                    endif;
                                                endforeach;
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tujuan</label>
                                            <select name="tujuan" class="form-control">
                                                <?php
                                                foreach ($terminal as $trm) :
                                                    if ($try['tujuan'] == $trm['nama']) :
                                                ?>
                                                        <option value="<?= $trm['id'] ?>" selected><?= $trm['nama'] ?></option>
                                                    <?php
                                                    else :
                                                    ?>
                                                        <option value="<?= $trm['id'] ?>"><?= $trm['nama'] ?></option>
                                                <?php
                                                    endif;
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
                                            <input name="jam_berangkat" type="time" class="form-control" placeholder="Jam Berangkat" require value="<?= $try['jam_berangkat']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Jam Tiba</label>
                                            <input name="jam_tiba" type="time" class="form-control" placeholder="Jam Tiba" require value="<?= $try['jam_tiba']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tanggal Berangkat</label>
                                            <input name="tanggal_berangkat" type="date" class="form-control" placeholder="Tanggal Berangkat" require value="<?= $try['tanggal_berangkat']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tanggal Tiba</label>
                                            <input name="tanggal_tiba" type="date" class="form-control" placeholder="Tanggal Tiba" require value="<?= $try['tanggal_tiba']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input name="harga" type="number" class="form-control" placeholder="Harga" require value="<?= $try['harga']; ?>">
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