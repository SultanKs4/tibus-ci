<!DOCTYPE html>
<html>

<head>
    <!-- for-mobile-apps -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#25274d">
    <meta name="description" content="A bus seat reservation system made by James">
    <meta name="author" content="James Muriitih">
    <meta name="keywords" content="bus,bus seats,">
    <meta property="og:site_name" content="google.com">
    <meta property="og:title" content="Bus Seat Reservation System" />
    <meta property="og:description" content="A bus seat reservation system made by James" />
    <meta property="og:image:url" itemprop="image" content="A bus seat reservation system made by James">
    <meta property="og:image" content="https://james-muriithi.github.io/bus/images/logo-400.png" />
    <meta property="og:image:url" content="https://james-muriithi.github.io/bus/images/logo-400.png" />
    <meta property="og:image:secure_url" content="https://james-muriithi.github.io/bus/images/logo-400.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="400" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta name="application-name" content="My Bus" />
    <meta name="apple-mobile-web-app-title" content="My Bus" />
    <meta name="msapplication-TileColor" content="#2b5797" />

    <!-- //for-mobile-apps -->
    <title>Seat</title>
    <!-- icons -->
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets2/images/logo-96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets2/images/logo-16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets2/images/logo-32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets2/images/logo-64.png" sizes="64x64" />
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets2/images/logo-128.png" sizes="128x128" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url(); ?>images/apple-touch-icon.png" />
    <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5" />
    <link rel="manifest" href="proyek1/tibus-ci/assets2/site.webmanifest">
    <!-- end of icons  -->
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets2/css/bootstrapValidator.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets2/css/nice-select.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets2/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets2/css/jquery.seat-charts.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets2/fonts/font-awesome/css/font-awesome.min.css">
    <link href="<?= base_url(); ?>assets2/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets2/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets2/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets2/css/material.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets2/plugins/lobibox/css/lobibox.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets2/css/simplelightbox.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets2/css/style.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/css/header.css">
    <!-- end of css -->
    <script>
        $inputPrice = <?= 3000; ?>;
        $idTrayek = <?= 1; ?>;
    </script>
</head>

<body>
    <!-- seat map -->


    <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="text-transform: uppercase;">TIBUS.COM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>home">Home</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url(); ?>seat">Seat
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ticket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>pembayaran">Payment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>register">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>login/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>