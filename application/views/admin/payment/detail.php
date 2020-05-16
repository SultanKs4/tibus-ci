<?php
foreach ($payment as $pym) :
?>
    <div class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <div class="card card-user">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center"><?= $pym['id']; ?></h5>
                            <p class="card-text">
                                <label for=""><b>Akun:</b></label><br>
                                <?= $pym['akun']; ?>
                            </p>
                            <p class="card-text">
                                <label for=""><b>Total:</b></label><br>
                                <?= $pym['total']; ?>
                            </p>
                            <p class="card-text">
                                <label for=""><b>Method:</b></label><br>
                                <?= $pym['method']; ?>
                            </p>
                            <p class="card-text">
                                <label for=""><b>Bukti Bayar:</b></label><br>
                                <?= $pym['bukti_bayar']; ?>
                            </p>
                            <p class="card-text">
                                <label for=""><b>Status:</b></label><br>
                                <?= $pym['status']; ?>
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