<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <?php
        foreach ($trayek as $try) :
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
                <div class="card">
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
                                            <i class="material-icons" style="font-size: 13px;"> Harga:<span class="p-r-5 fr"> <?= $try['harga'] ?> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="button">
                                    <a href="#" class="submit btn btn-circle btn-success book_btn" data-bus="1">Pilih Tempat Duduk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        <?php
        endforeach;
        ?>
        </fieldset>
    </div>
</div>