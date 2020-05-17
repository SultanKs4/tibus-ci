<?php
foreach ($payment as $pym) :
?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Upload Bukti Transfer</h4>
                        </div>
                        <div class="card-body">
                            <?= form_open_multipart('user/Payment/uploadtf/' . $pym['id']) ?>
                            <?php

                            foreach ($tiket as $tkt) :
                                if ($tkt['id_payment'] == $pym['id']) :
                            ?>
                                    <input type="hidden" name="id" value="<?= $pym['id']; ?>">
                                    <input type="hidden" name="akun" value="<?= $pym['akun']; ?>">
                                    <input type="hidden" name="total" value="<?= $pym['total']; ?>">
                                    <input type="hidden" name="method" value="<?= $pym['method']; ?>">
                                    <input type="hidden" name="status" value="<?= $pym['status']; ?>">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama Penumpang</label>
                                                <input name="nama_penumpang" type="text" class="form-control" placeholder="Email" value="<?= $tkt['nama_penumpang']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>No KTP Penumpang</label>
                                                <input name="no_ktp_penumpang" type="text" class="form-control" placeholder="Email" value="<?= $tkt['no_ktp_penumpang']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>No Duduk</label>
                                                <input name="no_duduk" type="text" class="form-control" placeholder="Email" value="<?= $tkt['no_duduk']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input name="email" type="email" class="form-control" placeholder="Email" value="<?= $tkt['email']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Trayek</label>
                                                <input name="email" type="email" class="form-control" placeholder="Email" value="<?= $tkt['email']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Bukti Transfer</label>
                                                <input name="bukti_bayar" type="file" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                        <?php
                                endif;
                            endforeach;
                        endforeach;
                        ?>
                        <button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Edit</button>
                        <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div