<div class="container1 m-4 p-2">
    <h1 class="text-center">PAYMENT</h1>
    <div class="container-fluid">
        <form class="" action="index.html" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nama_penumpang">Nama Penumpang</label>
                            <input type="text" class="form-control" name="nama_penumpang" id="nama_penumpang" placeholder="nama penumpang" readonly>
                        </div>
                        <div class="form-group">
                            <label for="no_ktp">No. Kartu Tanda Penduduk</label>
                            <input type="text" class="form-control" name="no_ktp" id="no_ktp" aria-describedby="no_ktp" placeholder="no kartu" readonly>
                        </div>
                        <div class="form-group">
                            <label for="trayek">Trayek</label>
                            <input type="text" class="form-control" name="po_trayek" id="trayek" aria-describedby="PO Trayek" placeholder="PO Trayek" readonly>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="dari">Dari</label>
                                    <input id="dari" class="form-control" type="text" name="dari" readonly>
                                </div>
                                <div class="col">
                                    <label for="tujuan">Tujuan</label>
                                    <input id="tujuan" class="form-control" type="text" name="tujuan" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="jam_berangkat">Berangkat</label>
                                    <input id="jam_berangkat" class="form-control" type="text" name="jam_berangkat" readonly>
                                </div>
                                <div class="col">
                                    <label for="no_duduk">No Duduk</label>
                                    <input id="no_duduk" class="form-control" type="number" name="no_duduk" id="no_duduk" readonly>
                                </div>
                                <div class="col">
                                    <label for="harga">Harga</label>
                                    <input required class="form-control" type="number" id="harga" name="total" value="{{jumlah*harga}}" placeholder="total" readonly>
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
                                <label class="form-check-label pembayaranwrapper" for="BNI">
                                    <input class="form-check-input" type="radio" name="pembayaran" id="BNI" value="2">
                                    <img src="<?= base_url(); ?>assets/img/bni.png" width="60px" height="20px">
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label pembayaranwrapper" for="BCA">
                                    <input class="form-check-input" type="radio" name="pembayaran" id="BCA" value="1">
                                    <img src="<?= base_url(); ?>assets/img/logo-bca.png" width="60px" height="20px">
                                </label>
                            </div>
                        </div>
                        <div class="col-md-5 mt-5 mb-3">
                            <div class="form-group">
                                <label for="detail">Detail</label>
                                <textarea id="detail" class="form-control" name="detail" rows="2" readonly placeholder="Detail Bank"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn-form-pay">Pay</button>
                <button class="btn-form-change" id="myBtn" href="<?= base_url(); ?>">Batal</button>
            </div>
        </form>
    </div>
</div>