<div class="container1">
    <h1 style="margin:10px;">PAYMENT</h1>
    <form class="" action="index.html" method="post">
        <input required class="input-form laf" type="text" name="" value="" placeholder="Nama">
        <input required class="input-form laf" type="telp" name="" value="" placeholder="No.HP">
        <input required class="input-form-number laf" type="number" name="" value="Jumalh Penumpang" placeholder="Jumlah" ng-model="jumlah">
        <input required class="input-form-number laf" type="number" name="" value="Nominal" placeholder="Nominal" ng-model=" harga">
        <input disabled required class="input-form-value" type="number" name="" value="{{jumlah*harga}}" placeholder="Hasil" ng-model="Hasil">
        <textarea class="input-form" cols="5" rows="5" name="comment" placeholder="Catatan" required></textarea>
        </textarea>

        <div style="overflow-x:auto;">
            <label>Pilih Metode Pembayaran</label>
            <table border=0 cellpadding="10">
                <tr>
                    <th><input type="checkbox" value=""><img src="<?= base_url(); ?>assets/img/bni.png" width="60px" height="20px"></th>
                    <th><input type="checkbox" value=""><img src="<?= base_url(); ?>assets/img/logo-bca.png" width="60px" height="20px"></th>
                    <th><input type="checkbox" value=""><img src="<?= base_url(); ?>assets/img/bri.png" width="60px" height="25px"></th>
                    <th><input type="checkbox" value=""><img src="<?= base_url(); ?>assets/img/bjb.png" width="60px" height="30px"></th>
                    <th><input type="checkbox" value=""><img src="<?= base_url(); ?>assets/img/bankdki.png" width="60px" height="25px"></th>
                    <th><input type="checkbox" value=""><img src="<?= base_url(); ?>assets/img/bankbb.png" width="60px" height="20px"></th>
                </tr>
                <tr>
                    <th><input type="checkbox" value=""><img src="<?= base_url(); ?>assets/img/visa.png" width="60px" height="30px"></th>
                    <th><input type="checkbox" value=""><img src="<?= base_url(); ?>assets/img/masterc.png" width="60px" height="30px"></th>
                    <th><input type="checkbox" value=""><img src="<?= base_url(); ?>assets/img/paypal.png" width="60px" height="20px"></th>
                    <th><input type="checkbox" value=""><img src="<?= base_url(); ?>assets/img/alfa.jpg" width="70px" height="50px"></th>
                    <th><input type="checkbox" value=""><img src="<?= base_url(); ?>assets/img/indomaret.png" width="60px" height="20px"></th>
                    <th><input type="checkbox" value=""><img src="<?= base_url(); ?>assets/img/gopay.jpg" width="65px" height="40px"></th>
                </tr>
            </table>
            <button class="btn-form-pay">Pay</button>
            <button class="btn-form-change" id="myBtn" href="<?= base_url(); ?>home">Batal</button>
        </div>

    </form>
</div>