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
                                <th>Kode Booking</th>
                                <th>Nama Penumpang</th>
                                <th>No KTP</th>
                                <th>No Duduk</th>
                                <th>Email</th>
                                <th>Trayek</th>
                                <th>Jam Berangkat</th>
                                <th>Tanggal Berangkat</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($tiket as $tkt) :
                                    foreach ($akun as $akn) :
                                        foreach ($trayek as $try) :
                                            if ($tkt['email'] == $akn['email']) :
                                                if ($tkt['id_trayek'] == $try['id']) :
                                ?>
                                                    <tr>
                                                        <td><?= $tkt['name']; ?></td>
                                                        <td><?= $tkt['nama_penumpang']; ?></td>
                                                        <td><?= $tkt['no_ktp_penumpang']; ?></td>
                                                        <td><?= $tkt['no_duduk']; ?></td>
                                                        <td><?= $tkt['email']; ?></td>
                                                        <td><?= $try['dari'] ?> -> <?= $try['tujuan'] ?></td>
                                                        <td><?= $try['jam_berangkat'] ?></td>
                                                        <td><?= $try['tanggal_berangkat'] ?></td>
                                                    </tr>
                                <?php
                                                endif;
                                            endif;
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