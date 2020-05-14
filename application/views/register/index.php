<div class="main">

    <section class="signup">
        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="container">
            <div class="signup-content">
                <?= validation_errors() ?>
                <form method="POST" id="signup-form" class="signup-form">
                    <h2 class="form-title">Create account</h2>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="nama_depan" id="name" placeholder="Nama Depan" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="nama_belakang" id="name" placeholder="Nama Belakang" />
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-input" name="telpon" id="tlp" placeholder="Telepon" />
                    </div>
                    <div class="form-group">
                        <input class="form-input" name="password" type="password" id="password" placeholder="Password" />
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        <input type="number" name="id_level" value="1" hidden>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up" />
                    </div>
                </form>
                <p class="loginhere">
                    Have already an account ? <a href="<?= base_url(); ?>login" class="loginhere-link">Login here</a>
                </p>
            </div>
        </div>
    </section>

</div>