<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billing</title>
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/fontawesome.css">
    <link rel="stylesheet" href="asset/css/solid.css">
    <link rel="stylesheet" href="asset/css/v4-shims.css">
    <link href="asset/font/lato.css" rel="stylesheet">
    <link href="asset/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="asset/css/select2-bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/my_css.css">
    <link rel="stylesheet" href="asset/css/animate.css">
    <link rel="stylesheet" href="asset/css/tiny-slider.css">
    <link rel="stylesheet" href="asset/css/bootstrap-material-datetimepicker.css">
    <link rel="stylesheet" href="asset/css/bootstrap-datetimepicker.min.css">
</head>

<body>
    <!-- Navigasi -->
    <div class="row nav-wrapper nav-dashboard  fixed-bottom">
        <div class="col menu-icon-fixed" onclick="window.location.href='{{ url('admin_dashboard')}}'">
            <img src="asset/img/home.svg" class="img-menu-fixed" alt="">
            <!-- <i class="fas fa-home icon-menu-fixed"></i> -->
            <div class="text-menu-fixed">Dashboard</div>
        </div>
        <div class="col menu-icon-fixed active">
            <img src="asset/img/transaction.svg" class="img-menu-fixed" alt="">
            <!-- <i class="fas fa-paste icon-menu-fixed"></i> -->
            <div class="text-menu-fixed">Billing</div>
        </div>
        <div class="col menu-icon-fixed" onclick="window.location.href='{{ url('admin_toko')}}'">
            <img src="asset/img/shopping.svg" class="img-menu-fixed" alt="">
            <!-- <i class="fas fa-store icon-menu-fixed"></i> -->
            <div class="text-menu-fixed">Toko</div>
        </div>
        <div class="col menu-icon-fixed" onclick="window.location.href='{{ url('admin_daftar')}}'">
            <img src="asset/img/lock.svg" class="img-menu-fixed" alt="">
            <!-- <i class="fas fa-users icon-menu-fixed"></i> -->
            <div class="text-menu-fixed">Admin</div>
        </div>
    </div>
    <div class="back-top-wrapper">
        <div class="row remove-padding-margin">
            <div class="fixed-top menu-fixed fixed-judul">
                <div class="menu-fixed-wrapper">
                    <center>
                        <p class="text-profil-pengguna-edit">Biling</p>
                    </center>
                </div>
            </div>
        </div>
        <div class="uk-font mar-bottom-30">
            <div class="container">
                <div class="tambah-produk-wrapper tns-nav d-flex flex-row justify-content-center">
                </div>
                <div class="tns-nav no-invoice">
                    Diupdate 2 menit yang lalu
                </div>
            </div>
        </div>

        <div class="container uk-font remove-padding pad-bottom-70 pad-left-right-23 garis-item-cash-in">
        @foreach ($invoice as $row)
            <div class="mar-top-15 card card-transaksi">
                <div class="card-body remove-padding-margin">
                    <div class="garis-full content-bank">
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-between flex-1">
                                <div class="d-flex flex-column">
                                    <div class="">
                                    INV. #{{ $row->id }}
                                    </div>
                                    <div class="jarak-cashin-menu">
                                        <h5 class="remove-margin"> Rp. {{ number_format($row->total_price) }}</h5>
                                    </div>
                                </div>
                                    <div class="d-flex waiting-wrapper">
                                        <div class="no-invoice font-10">
                                            11 Agustus 2019
                                        </div>
                                        <div class="pad-label-kurang font-10 text-center">
                                        <a href="{{ route('invoice.print', $row->id) }}"> Cetak PDF</a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</body>
<script src="asset/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>

</html>