<?= form_open('login/proses_login'); ?>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('http://localhost/tibus-ci/assets/img/img-01.jpg');">
            <div class="wrap-login100 p-t-190 p-b-30">
                <form class="login100-form validate-form">
                    <p>
                        <div class="login100-form-avatar">
                            <img src="<?= base_url(); ?>assets/img/profile.jpg" alt="AVATAR">
                        </div>
                    </p>
                    <span class="login100-form-title p-t-20 p-b-45">
                        Welcome
                    </span>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Email is required">
                        <input class="input100" type="email" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn p-t-10">
                        <button class="login100-form-btn" type="submit">
                            <a href="#">Login</a>
                        </button>
                    </div>
                    <div class="text-center w-full p-t-25 p-b-230">
                        <a class="txt1" href="<?= base_url(); ?>register/tambah">
                            Create new account
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?= form_close(); ?>