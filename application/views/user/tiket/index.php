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
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Nama Penumpang</th>
                                <th>No Duduk</th>
                                <th>Trayek</th>
                                <th>Jam Berangkat</th>
                                <th>Tanggal Berangkat</th>
                                <th>Bukti Bayar</th>
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
                                                                    <?php if ($pym['bukti_bayar'] == null) : ?>
                                                                        <a href="<?= base_url(); ?>user/payment/edit/<?= $pym['id']; ?> " class="badge badge-warning">Upload</a>
                                                                    <?php else : ?>
                                                                        <img src="<?= base_url("assets/img/bukti/") . $pym['bukti_bayar'] ?>" alt="bukti-tf" style="width:287px;height:180px">
                                                                    <?php endif; ?>
                                                                </td>
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