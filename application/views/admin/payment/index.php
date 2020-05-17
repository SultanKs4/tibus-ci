<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Payment</h4>
                        <div class="row">
                            <p class="card-category col-md-9">Data Payment</p>
                        </div>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped" id="list">
                            <thead>
                                <th>Akun</th>
                                <th>Bukti Transfer</th>
                                <th>Status</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($payment as $pym) :
                                ?>
                                    <tr>
                                        <td><?= $pym['akun']; ?></td>
                                        <td>
                                            <?php if ($pym['bukti_bayar'] == null) : ?>
                                                <p>NULL</p>
                                            <?php else : ?>
                                                <img src="<?= base_url("assets/img/payment/") . $pym['bukti_bayar'] ?>" alt="bukti-tf" style="max-width: 300px; max-height:300px" class="img-responsive">
                                            <?php endif; ?>
                                        </td>
                                        <td><?= $pym['status']; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>admin/payment/hapus/<?= $pym['id']; ?>" class="badge badge-danger float-right mr-1" onclick="return confirm('Yakin Data ini akan dihapus')">Hapus</a>
                                            <a href="<?= base_url(); ?>admin/payment/edit/<?= $pym['id']; ?> " class="badge badge-success float-right mr-1">Edit</a>
                                            <a href="<?= base_url(); ?>admin/payment/detail/<?= $pym['id']; ?> " class="badge badge-primary float-right">Detail</a>
                                        </td>
                                    </tr>
                                <?php
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