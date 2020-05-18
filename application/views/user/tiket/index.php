<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Tiket</h4>
                        <div class="row">
                            <p class="card-category col-md-9">Data tiket</p>
                        </div>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped" id="list">
                            <thead>
                                <th>Nama Penumpang</th>
                                <th>No Duduk</th>
                                <th>Trayek</th>
                                <th>Jam Berangkat</th>
                                <th>Tanggal Berangkat</th>
                                <th>Bukti Bayar</th>
                                <!-- <th>Action</th> -->
                            </thead>
                            <tbody>
                                <?php
                                foreach ($tiket as $tkt) :
                                    foreach ($akun as $akn) :
                                        foreach ($trayek as $try) :
                                            foreach ($payment as $pym) :
                                                if ($tkt['email'] == $akn['email']) :
                                                    if ($tkt['id_trayek'] == $try['id']) :
                                                        if ($tkt['id_payment'] == $pym['id']) :
                                ?>
                                                            <tr>
                                                                <td><?= $tkt['nama_penumpang']; ?></td>
                                                                <td><?= $tkt['no_duduk']; ?></td>
                                                                <td><?= $try['dari'] ?> -> <?= $try['tujuan'] ?></td>
                                                                <td><?= $try['jam_berangkat'] ?></td>
                                                                <td><?= $try['tanggal_berangkat'] ?></td>
                                                                <td>
                                                                    <?php if ($pym['bukti_bayar'] == null) :
                                                                        $this->session->set_userdata('id_payment', $pym['id']); ?>
                                                                        <a href="<?= base_url(); ?>user/payment/edit" class="badge badge-warning">Upload</a>
                                                                    <?php else : ?>
                                                                        <img src="<?= base_url("assets/img/payment/") . $pym['bukti_bayar'] ?>" alt="bukti-tf" style="max-width: 300px; max-height:300px" class="img-responsive pt-2">
                                                                </td>
                                                                <!-- <td>
                                                                    <a href="<?= base_url(); ?>user/payment/delete" class="badge badge-danger">Delete</a>
                                                                </td> -->
                                                            <?php endif; ?>
                                                            </tr>
                                <?php
                                                        endif;
                                                    endif;
                                                endif;
                                            endforeach;
                                        endforeach;
                                    endforeach;
                                endforeach;
                                ?>
                            </tbody>
                        </table>
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