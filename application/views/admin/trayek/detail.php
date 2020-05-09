<?php
foreach ($trayek as $try) :
?>
    <div class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <div class="card card-user">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center"><?= $try['id']; ?></h5>
                            <p class="card-text">
                                <label for=""><b>PO:</b></label><br>
                                <?= $try['po']; ?>
                            </p>
                            <p class="card-text">
                                <label for=""><b>Dari:</b></label><br>
                                <?= $try['dari']; ?>
                            </p>
                            <p class="card-text">
                                <label for=""><b>Tujuan:</b></label><br>
                                <?= $try['tujuan']; ?>
                            </p>
                            <p class="card-text">
                                <label for=""><b>Jam Berangkat:</b></label><br>
                                <?= $try['jam_berangkat']; ?>
                            </p>
                            <p class="card-text">
                                <label for=""><b>Jam Tiba:</b></label><br>
                                <?= $try['jam_tiba']; ?>
                            </p>
                            <p class="card-text">
                                <label for=""><b>Tanggal Berangkat:</b></label><br>
                                <?= $try['tanggal_berangkat']; ?>
                            </p>
                            <p class="card-text">
                                <label for=""><b>Tanggal Tiba:</b></label><br>
                                <?= $try['tanggal_tiba']; ?>
                            </p>
                            <p class="card-text">
                                <label for=""><b>Harga:</b></label><br>
                                <?= $try['harga']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
endforeach;
?>