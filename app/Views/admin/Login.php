<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login</title>

    <!-- Custom fonts for this template-->
    <link href="/assets/admin/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image center"><img style="width: 400px; margin-right: auto; " src="/assets/admin/img/admin.jpg" alt="admin"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <?php if (session()->getFlashdata('error')) : ?>
                                            <div class="alert alert-danger alert-dismissible show fade">
                                                <div class="alert-body">
                                                    <button class="close" data-dismiss="alert">x</button>
                                                    <b>Error !</b>
                                                    <?= session()->getFlashdata('error'); ?>
                                                </div>
                                            </div>
                                        <?php elseif (!empty(session()->getFlashdata('message'))) : ?>
                                            <div class="alert alert-info">
                                                <?= session()->getFlashdata('message') ?>
                                            </div>
                                        <?php endif; ?>
                                        <h1 class="h4 text-gray-900 mb-4">Admin Login</h1>
                                    </div>
                                    <form method="POST" action="<?= site_url('admin/prosesMasuk'); ?>" class="signup-form">
                                        <div class="form-group">
                                            <label class="label" for="email">Alamat Email</label>
                                            <input type="text" class="form-control" name="email" id="email" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label class="label" for="password">Kata Sandi</label>
                                            <input type="password" class="form-control" name="password" id="password" required autofocus>
                                            <hr>
                                            <button type="submit" class="btn btn-primary submit">Masuk</span></button>
                                            <hr>
                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="">Lupa Katasandi?</a>
                                    </div> -->
                                    <div class="text-center">
                                        <a class="small" href="/admin/register">Buat Akun!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/assets/admin/jquery/jquery.min.js"></script>
    <script src="/assets/admin/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/assets/admin/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/assets/admin/js/sb-admin-2.min.js"></script>

</body>

</html>