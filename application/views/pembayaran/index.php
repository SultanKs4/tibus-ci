<?php
foreach ($po as $p) {
    if ($p['nama'] == $seat['po']) {
        $id_po = $p['id'];
        break;
    }
}

foreach ($terminal as $trm) {
    if ($trm['nama'] == $seat['dari']) {
        $id_dari = $trm['id'];
    }
    if ($trm['nama'] == $seat['tujuan']) {
        $id_tujuan = $trm['id'];
        break;
    }
}
?>
<div class="container1 m-4 p-2">
    <h1 class="text-center">PAYMENT</h1>
    <div class="container-fluid">
        <form class="" action="" method="post">
            <input type="hidden" name="id" value="<?= $seat['id'] ?>">
            <input type="hidden" name="id_po" value="<?= $id_po ?>">
            <input type="hidden" name="id_dari" value="<?= $id_dari ?>">
            <input type="hidden" name="id_tujuan" value="<?= $id_tujuan ?>">
            <input type="hidden" name="id_akun" value="<?= $this->session->userdata('id'); ?>">
            <input type="hidden" name="status" value="1">
            <input type="hidden" name="jam_tiba" value="<?= $seat['jam_tiba'] ?>">
            <input type="hidden" name="tanggal_berangkat" value="<?= $seat['tanggal_berangkat'] ?>">
            <input type="hidden" name="tanggal_tiba" value="<?= $seat['tanggal_tiba'] ?>">
            <input type="hidden" name="id_duduk" id="id_duduk" value="<?= $seat['id_duduk'] ?>">
            <input type="hidden" name="sisa_kursi" value="<?= $seat['sisa_kursi'] - 1 ?>">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nama_penumpang">Nama Penumpang</label>
                            <input type="text" class="form-control" name="nama_penumpang" id="nama_penumpang" placeholder="Nama Penumpang" readonly value="<?= $seat['nama_penumpang'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="no_ktp_penumpang">No. Kartu Tanda Penduduk</label>
                            <input type="text" class="form-control" value="<?= $seat['no_ktp_penumpang'] ?>" name="no_ktp_penumpang" id="no_ktp_penumpang" aria-describedby="no_ktp_penumpang" placeholder="no kartu" readonly>
                        </div>
                        <div class="form-group">
                            <label for="po">P O</label>
                            <input type="text" class="form-control" value="<?= $seat['po'] ?>" name="po" id="po" aria-describedby="PO Trayek" placeholder="PO Trayek" readonly>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="dari">Dari</label>
                                    <input id="dari" value="<?= $seat['dari'] ?>" class="form-control" type="text" name="dari" readonly>
                                </div>
                                <div class="col">
                                    <label for="tujuan">Tujuan</label>
                                    <input id="tujuan" value="<?= $seat['tujuan'] ?>" class="form-control" type="text" name="tujuan" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="jam_berangkat">Berangkat</label>
                                    <input id="jam_berangkat" class="form-control" type="text" name="jam_berangkat" value="<?= $seat['jam_berangkat'] ?>" readonly>
                                </div>
                                <div class="col">
                                    <label for="no_duduk">No Duduk</label>
                                    <input id="no_duduk" class="form-control" type="number" name="no_duduk" value="<?= $seat['no_duduk'] ?>" readonly>
                                </div>
                                <div class="col">
                                    <label for="harga">Harga</label>
                                    <input required class="form-control" type="number" id="harga" name="harga" value="<?= $seat['harga'] ?>" placeholder="total" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="overflow-x:auto;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7 mt-3 mb-3">
                            <label>Pilih Metode Pembayaran: </label><br>
                            <p>Bank Transfer</p>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label pembayaranwrapper" for="BCA">
                                    <input class="form-check-input" type="radio" name="pembayaran" id="BCA" value="<?= $payment[0]['id'] ?>" required>
                                    <img src="<?= base_url(); ?>assets/img/logo-bca.png" width="60px" height="20px">
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label pembayaranwrapper" for="BNI">
                                    <input class="form-check-input" type="radio" name="pembayaran" id="BNI" value="<?= $payment[1]['id'] ?>" required>
                                    <img src="<?= base_url(); ?>assets/img/bni.png" width="60px" height="20px">
                                </label>
                            </div>
                        </div>
                        <div class="col-md-5 mt-5 mb-3">
                            <div class="form-group">
                                <label for="detail">Detail</label>
                                <textarea id="detail" class="form-control" name="detail" rows="3" readonly placeholder="Detail Bank"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn-form-pay btn btn-primary">Book</button>
            </div>
        </form>
    </div>
</div>