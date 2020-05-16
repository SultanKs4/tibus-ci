<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- Custom stlylesheet -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/css/header.css">
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Home</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="text-transform: uppercase;">TIBUS.COM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <ul class="navbar-nav ml-auto">
                    <?php
                    if ($this->session->userdata('id')) :
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>user/akun">MyAccount</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>login/logout">Logout</a>
                        </li>
                    <?php
                    else :
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>login">Login</a>
                        </li>
                    <?php
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </nav>