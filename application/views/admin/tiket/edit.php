<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Tiket</h4>
                    </div>
                    <div class="card-body">
                        <?= validation_errors() ?>
                        <?php
                        foreach ($tiket as $tkt) :
                        ?>
                            <form method="post" action="">
                                <input type="hidden" name="id" value="<?= $tkt['id']; ?>">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Penumpang</label>
                                            <input name="nama_penumpang" type="text" class="form-control" placeholder="Nama Penumpang" value="<?= $tkt['nama_penumpang']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>No KTP</label>
                                            <input name="no_ktp_penumpang" type="number" class="form-control" placeholder="No KTP" value="<?= $tkt['no_ktp_penumpang']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>No Duduk</label>
                                            <input name="no_duduk" type="text" class="form-control" placeholder="No Duduk" value="<?= $tkt['no_duduk']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <select name="id_akun" class="form-control">
                                                <?php
                                                foreach ($akun as $akn) :
                                                    if ($tkt['kode_booking'] == $bkg['id']) :
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
                                            <label>Trayek</label>
                                            <input name="id_trayek" type="number" class="form-control" placeholder="Trayek" value="<?= $tkt['id_trayek']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Id Duduk</label>
                                            <input name="id_duduk" type="text" class="form-control" placeholder="Id Duduk" value="<?= $tkt['id_duduk']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Id Payment</label>
                                            <input name="id_payment" type="text" class="form-control" placeholder="Id Payment" value="<?= $tkt['id_payment']; ?>" readonly>
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