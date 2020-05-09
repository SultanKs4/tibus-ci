<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Payment</h4>
                    </div>
                    <div class="card-body">
                        <?= validation_errors() ?>
                        <?php
                        foreach ($payment as $pym) :
                        ?>
                            <form method="post" action="">
                                <input type="hidden" name="id" value="<?= $pym['id']; ?>">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Akun</label>
                                            <select name="id_akun" class="form-control">
                                                <?php
                                                foreach ($akun as $akn) :
                                                    if ($pym['akun'] == $akn['email']) :
                                                ?>
                                                        <option value="<?= $akn['id'] ?>" selected><?= $akn['email'] ?></option>
                                                    <?php
                                                    else :
                                                    ?>
                                                        <option value="<?= $akn['id'] ?>"><?= $akn['email'] ?></option>
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
                                            <label>Kode Booking</label>
                                            <select name="kode_booking" class="form-control">
                                                <?php
                                                foreach ($booking as $bkg) :
                                                    if ($pym['kode_booking'] == $bkg['name']) :
                                                ?>
                                                        <option value="<?= $bkg['id'] ?>" selected><?= $bkg['name'] ?></option>
                                                    <?php
                                                    else :
                                                    ?>
                                                        <option value="<?= $bkg['id'] ?>"><?= $bkg['name'] ?></option>
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
                                            <label>Total</label>
                                            <input name="total" type="number" class="form-control" placeholder="Total" value="<?= $pym['total']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Method</label>
                                            <select name="metode_bayar" class="form-control">
                                                <?php
                                                foreach ($method as $mth) :
                                                    if ($pym['method'] == $mth['name']) :
                                                ?>
                                                        <option value="<?= $mth['id'] ?>" selected><?= $mth['name'] ?></option>
                                                    <?php
                                                    else :
                                                    ?>
                                                        <option value="<?= $mth['id'] ?>"><?= $mth['name'] ?></option>
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
                                            <label>Bukti Bayar</label>
                                            <input name="bukti_bayar" type="text" class="form-control" placeholder="Nama File" value="<?= $pym['bukti_bayar']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <?php
                                                foreach ($status as $sts) :
                                                    if ($pym['status'] == $sts['name']) :
                                                ?>
                                                        <option value="<?= $sts['id'] ?>" selected><?= $sts['name'] ?></option>
                                                    <?php
                                                    else :
                                                    ?>
                                                        <option value="<?= $sts['id'] ?>"><?= $sts['name'] ?></option>
                                                <?php
                                                    endif;
                                                endforeach;
                                                ?>
                                            </select>
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