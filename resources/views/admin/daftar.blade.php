<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/fontawesome.css">
    <link rel="stylesheet" href="asset/css/solid.css">
    <link rel="stylesheet" href="asset/css/v4-shims.css">
    <link href="asset/font/lato.css" rel="stylesheet">
    <link href="asset/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="asset/css/select2-bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/my_css.css">
    <link rel="stylesheet" href="asset/css/animate.css">
</head>

<body>

    <!-- Navigasi -->
    <div class="row nav-wrapper nav-dashboard  fixed-bottom">
        <div class="col menu-icon-fixed" onclick="window.location.href='{{ url('admin_dashboard')}}'">
            <img src="asset/img/home.svg" class="img-menu-fixed" alt="">
            <!-- <i class="fas fa-home icon-menu-fixed"></i> -->
            <div class="text-menu-fixed">Dashboard</div>
        </div>
        <div class="col menu-icon-fixed" onclick="window.location.href='{{ url('admin_billing')}}'">
            <img src="asset/img/transaction.svg" class="img-menu-fixed" alt="">
            <!-- <i class="fas fa-paste icon-menu-fixed"></i> -->
            <div class="text-menu-fixed">Billing</div>
        </div>
        <div class="col menu-icon-fixed" onclick="window.location.href='{{ url('admin_toko')}}'">
            <img src="asset/img/shopping.svg" class="img-menu-fixed" alt="">
            <!-- <i class="fas fa-store icon-menu-fixed"></i> -->
            <div class="text-menu-fixed">Toko</div>
        </div>
        <div class="col menu-icon-fixed active">
            <img src="asset/img/lock.svg" class="img-menu-fixed" alt="">
            <!-- <i class="fas fa-users icon-menu-fixed"></i> -->
            <div class="text-menu-fixed">Admin</div>
        </div>
    </div>

    <div class="back-top-wrapper">
        <!-- Judul -->
        <div class="fixed-top menu-fixed">
            <div class="menu-fixed-wrapper">
                <!-- <i class="fas fa-chevron-left tombol-back-edit" onclick="window.location.href='dashboard.html'"></i> -->
                <center>
                    <p class="text-profil-pengguna-edit">Admin</p>
                </center>
            </div>
        </div>


        <div class="row remove-padding-margin">
            <div class="col-md-12 col-sm-12 col-12 remove-padding">
                <div class="img-admin-wrapper">
                    <center>
                        <img src="asset/img/undraw_hang_out.svg" class="img-profil">
                    </center>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="admin-wrapper">
                        Admin
                        <p class="no-invoice jarak-admin-1">Pengguna/pegawai yang dapat masuk ke dalam aplikasi dengan
                            batasan akses terhadap fitur aplikasi.</p>
                        <p class="no-invoice jarak-admin-2">Anda dapat menggunakan fasilitas admin untuk pegawai anda
                            membantu siklus usaha anda tanpa perlu memberikan akses terhadap data sensitif dari
                            perusahaan
                            anda.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-6 mar-auto">
                    <div class="garis-admin">

                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="admin-wrapper">
                        Akses yang dibatasi
                        <p class="no-invoice jarak-admin-1">Berikut akses yang dapat dibatasi : </p>
                        <ul class="no-invoice jarak-ul-admin">
                            <li>Menambah, menghapus dan mengganti data produk</li>
                            <li>Menambah, menghapus dan mengganti data pegawai</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pad-bottom-70 mar-bottom-15">
                <div class="col-md-8 col-sm-8 col-8">
                    <button type="button" href="" class="btn button-admin fix-long uk-font" 
                    onclick="window.location.href='{{ url('pegawai')}}'"> <b>Daftarkan Pegawai</b> <i
                            class="fas fa-chevron-right chevron-right uk-font "></i></button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="asset/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>