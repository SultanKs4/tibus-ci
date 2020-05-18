<div class="container-fluid">
    <h1 class="text-center mt-3">PENUMPANG</h1>
    <div class="container-fluid">
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $trayek['id'] ?>">
            <input type="hidden" name="po" value="<?= $trayek['po'] ?>">
            <input type="hidden" name="dari" value="<?= $trayek['dari'] ?>">
            <input type="hidden" name="tujuan" value="<?= $trayek['tujuan'] ?>">
            <input type="hidden" name="jam_berangkat" value="<?= $trayek['jam_berangkat'] ?>">
            <input type="hidden" name="jam_tiba" value="<?= $trayek['jam_tiba'] ?>">
            <input type="hidden" name="tanggal_berangkat" value="<?= $trayek['tanggal_berangkat'] ?>">
            <input type="hidden" name="tanggal_tiba" value="<?= $trayek['tanggal_tiba'] ?>">
            <input type="hidden" name="harga" value="<?= $trayek['harga'] ?>">
            <input type="hidden" name="sisa_kursi" value="<?= $trayek['sisa_kursi'] ?>">
            <div class="container-fluid">
                <div class="col-6 ml-auto mr-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="mt-3">
                                <div class="form-group">
                                    <label for="nama_penumpang">Nama Penumpang</label>
                                    <input type="text" class="form-control" name="nama_penumpang" id="nama_penumpang" placeholder="nama penumpang" required>
                                </div>
                                <div class="form-group">
                                    <label for="no_ktp">No. Kartu Tanda Penduduk</label>
                                    <input type="text" class="form-control" name="no_ktp_penumpang" id="no_ktp" aria-describedby="no_ktp" placeholder="no kartu tanda penduduk" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Pilih Kursi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>