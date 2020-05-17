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
                                <img src="<?= base_url("assets/img/payment/") . $pym['bukti_bayar'] ?>" alt="bukti-tf" style="max-width: 300px; max-height:300px" class="img-responsive">
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
    <div class="modal fade" role="dialog" id="imgmodal" aria-labelledby="exampleModalLongTitle" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img" src="" id="show-img" style="width: 100%;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php
endforeach;
?>