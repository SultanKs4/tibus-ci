<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <?php
        foreach ($trayek as $try) :
            if ($try['sisa_kursi'] > 0) :
        ?>
                <form method="POST" action="">
                    <input type="text" name="id" value="<?= $try['id'] ?>" hidden>
                    <input type="text" name="po" value="<?= $try['po'] ?>" hidden>
                    <input type="text" name="dari" value="<?= $try['dari'] ?>" hidden>
                    <input type="text" name="tujuan" value="<?= $try['tujuan'] ?>" hidden>
                    <input type="text" name="jam_berangkat" value="<?= $try['jam_berangkat'] ?>" hidden>
                    <input type="text" name="jam_tiba" value="<?= $try['jam_tiba'] ?>" hidden>
                    <input type="text" name="tanggal_berangkat" value="<?= $try['tanggal_berangkat'] ?>" hidden>
                    <input type="text" name="tanggal_tiba" value="<?= $try['tanggal_tiba'] ?>" hidden>
                    <input type="text" name="harga" value="<?= $try['harga'] ?>" hidden>
                    <input type="text" name="sisa_kursi" value="<?= $try['sisa_kursi'] ?>" hidden>
                    <div class="card mt-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="assets2/images/p2.png" class="center">
                                </div>
                                <div class="col-md-10">
                                    <h5 class="card-title bus-name"><span class="bus-type fs-13"><?= $try['po'] ?></span></h5>
                                    <div class="row card-text m-b-10 bus-description">
                                        <div class="col-sm-8 fs-20">
                                            <div>
                                                <i class="material-icons" style="font-size: 13px;">Tanggal : <span class="p-r-5 fr"> <?= $try['tanggal_berangkat'] ?> </span>
                                            </div>
                                            <div>
                                                <i class="material-icons" style="font-size: 13px;">Dari :<span class="p-r-5 fr"> <?= $try['dari'] ?> </span>
                                            </div>
                                            <div>
                                                <i class="material-icons" style="font-size: 13px;">Tujuan :<span class="p-r-5 fr"> <?= $try['tujuan'] ?> </span>
                                            </div>
                                            <div>
                                                <i class="material-icons" style="font-size: 13px;">Jam :<span class="p-r-5 fr"> <?= $try['jam_berangkat'] ?> </span>
                                            </div>
                                            <div>
                                                <i class="material-icons" style="font-size: 13px;"> Harga:<span class="p-r-5 fr"> <?= $try['harga'] ?> </span>
                                            </div>
                                            <div>
                                                <i class="material-icons" style="font-size: 13px;"> Sisa Kursi:<span class="p-r-5 fr"> <?= $try['sisa_kursi'] ?> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="submit btn btn-circle btn-success book_btn mt-4 align-self-end">Pilih Bus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
        <?php
            endif;
        endforeach;
        ?>
        </fieldset>
    </div>
</div>