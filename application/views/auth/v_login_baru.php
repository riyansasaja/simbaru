<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login-Page</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;700&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- css pribadi -->
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>sandiri.css">

</head>

<body>

    <div class="container">
        <div class="row mt-5 justify-content-center box">
            <!-- gambar section -->
            <div class="col-lg-5 gambar-section d-none d-lg-block">
                <div class="gmbr text-right">
                    <img src="<?= base_url('assets/') ?>img/bg_login.png" alt="bg-login" class="img-fluid">
                </div>
                <div class="tulisan text-center text-white">
                    <p>Nice to see you again</p>
                    <h3>welcome back</h3>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates blanditiis provident rem.
                    </span>
                </div>
            </div>



            <!-- form section -->
            <div class="col-lg-4 col-md-12 form-section">
                <div class="row justify-content-center">
                    <div class="col text-login text-center">
                        <h3>Login Account</h3>
                        <p>Sistem Informasi Kepegawaian <br>Badan Kepegawaian dan Pengembangan SDM Kota Bitung </p>
                        <p> <?= $this->session->flashdata('message'); ?></p>
                    </div>
                </div>
                <div class="row input-form justify-content-center tiga">
                    <div class="col-10">
                        <form action="<?= base_url('auth') ?>" method="POST" class="user">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?= set_value('email'); ?>" placeholder="Email ID" autofocus>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?= set_value('password'); ?>" placeholder="Password">
                            </div>
                            <div class="tombol">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                                <a href="<?= base_url('auth/register') ?>" class="btn btn-primary btn-block">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row foot">
            <div class="col text-center">
                <p>design by. Jackru | Dev by. Sasaja</p>
            </div>
        </div>

    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>