<?php
foreach ($payment as $pym) :
    foreach ($method as $met) :
        if ($met['name'] == $pym['method']) :
            $id_method  = $met['id'];
            break;
        endif;
    endforeach;

    foreach ($status as $sts) {
        if ($sts['name'] == $pym['status']) {
            $id_status = $sts['id'];
            break;
        }
    }
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
                            <?= form_open_multipart() ?>
                            <?php

                            foreach ($tiket as $tkt) :
                                if ($tkt['id_payment'] == $pym['id']) :
                            ?>
                                    <input type="hidden" name="id" value="<?= $pym['id']; ?>">
                                    <input type="hidden" name="id_akun" value="<?= $id_akun; ?>">
                                    <input type="hidden" name="total" value="<?= $pym['total']; ?>">
                                    <input type="hidden" name="metode_bayar" value="<?= $id_method ?>">
                                    <input type="hidden" name="status" value="<?= $id_status; ?>">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama Penumpang</label>
                                                <input name="nama_penumpang" type="text" class="form-control" placeholder="Email" value="<?= $tkt['nama_penumpang']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>No KTP Penumpang</label>
                                                <input name="no_ktp_penumpang" type="text" class="form-control" placeholder="Email" value="<?= $tkt['no_ktp_penumpang']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>No Duduk</label>
                                                <input name="no_duduk" type="text" class="form-control" placeholder="Email" value="<?= $tkt['no_duduk']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Bukti Transfer</label>
                                                <input name="bukti_bayar" type="file" class="form-control">
                                            </div>
                                        </div>
                                        <?php
                                        if ($this->session->flashdata('error_upload') != null) :
                                        ?>
                                            <div class="col-md-12">
                                                <div class="alert alert-danger alert-dismissable" role="alert">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <?= $this->session->flashdata('error_upload'); ?>
                                                </div>
                                            </div>
                                        <?php
                                        endif;
                                        ?>
                                    </div>
                        <?php
                                endif;
                            endforeach;
                        endforeach;
                        ?>
                        <button type="submit" name="submit" class="btn btn-primary btn-fill pull-right">Edit</button>
                        <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div