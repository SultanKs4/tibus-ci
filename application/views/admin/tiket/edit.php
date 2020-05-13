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
                                            <label>Kode Booking</label>
                                            <select name="name" class="form-control">
                                                <?php
                                                foreach ($booking as $bkg) :
                                                    if ($tkt['kode_booking'] == $bkg['id']) :
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
                                            <input name="no_duduk" type="text" class="form-control" placeholder="No Duduk" value="<?= $tkt['no_duduk']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Trayek</label>
                                            <input name="id_trayek" type="number" class="form-control" placeholder="Trayek" value="<?= $tkt['id_trayek']; ?>" disabled>
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