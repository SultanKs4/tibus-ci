<?php
foreach ($akun as $akn) :
?>
    <div class="content">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <div class="card card-user">
                        <div class="card-image">
                            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="author">
                                <a href="#">
                                    <img class="avatar border-gray" src="<?= base_url() ?>assets/img/faces/face-3.jpg" alt="...">
                                    <h5 class="title"><?= $akn['nama_depan'] ?> <?= $akn['nama_belakang'] ?></h5>
                                </a>
                                <p class="description">
                                    <?= $akn['email'] ?>
                                </p>
                            </div>
                            <p class="description text-center">
                                <?= $akn['telpon'] ?><br>
                                <?= $akn['name'] ?>
                            </p>
                        </div>
                        <hr>
                        <div class="button-container mr-auto ml-auto">
                            <button href="#" class="btn btn-simple btn-link btn-icon">
                                <i class="fa fa-facebook-square"></i>
                            </button>
                            <button href="#" class="btn btn-simple btn-link btn-icon">
                                <i class="fa fa-twitter"></i>
                            </button>
                            <button href="#" class="btn btn-simple btn-link btn-icon">
                                <i class="fa fa-google-plus-square"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
endforeach;
?>