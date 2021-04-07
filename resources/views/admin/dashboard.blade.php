<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/tiny-slider.css"> -->
</head>

<body style="background-color: rgba(245, 245, 245, 0.4);">

    <!-- Navigasi -->
    <div class="row nav-wrapper nav-dashboard  fixed-bottom">
        <div class="col menu-icon-fixed active">
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
        <div class="col menu-icon-fixed" onclick="window.location.href='{{ url('admin_daftar')}}'">
            <img src="asset/img/lock.svg" class="img-menu-fixed" alt="">
            <!-- <i class="fas fa-users icon-menu-fixed"></i> -->
            <div class="text-menu-fixed">Admin</div>
        </div>
    </div>

    <div class="back-top-wrapper">
        <!-- Background -->
        <div class="back-top">
            <div class="container">
                <!-- Menu and Notification -->
                <div class="row remove-padding-margin">
                    <div class="col-12 remove-padding">
                        <div class="d-flex menu-notification">
                            <div class="menu-wrapper" id="menu-modal" data-toggle="modal" data-target="#modalMenu">
                                <img src="asset/img/menu-button.svg" class="img-menu" alt="">
                            </div>
                            <div class="notification-wrapper" data-toggle="modal" data-target="#modalNotifikasi">
                                <img src="asset/img/notifications.svg" class="img-notification" alt="">
                                <div class="icon-notif-dashboard">
                                    <div class="notif-produk">21</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Profil -->
                <div class="row remove-padding-margin">
                    <div class="col-12 remove-padding">
                        <div class="d-flex foto-name-phone">
                            <div class="foto-profil-dashboard">
                                <div class="fas fa-camera icon-camera-dash">
                                </div>
                            </div>
                            <div class="name-phone">
                                <div class="profil-name"><b>{{auth()->user()->name}}</b></div>
                                <div class="profil-phone op-65 ">{{auth()->user()->email}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        <!-- Mutasi -->
        <div class="container  mutasi-wrapper  pad-left-right-23 pad-bottom-70">
            <div class="remove-padding-margin">
                <div class="lihat-text-mutasi">
                    <div class="text-promo">
                        Mutasi Hari Ini
                    </div>
                </div>
            </div>
            @foreach ($invoice as $row)
            <div class="garis-full pad-top-10">
                <div class="d-flex align-items-center">
                    <div class="img-mutation-right-wrapper">
                        <div class="img-mutation-right"></div>
                    </div>
                    <div class="mutasi-text">
                        <div class="uk-font">{{ $row->customer->name }}</div>
                        <div>Rp {{ number_format($row->total_price) }}</div>
                        <div class="uk-font no-invoice">{{ $row->created_at->format('D, d M Y') }}</div>
                    </div>
                    <div class="chevron-right-right">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <!-- MODAL PROFILE -->
    <div class="modal slideInLeft animated faster modal-fullscreen-board" id="modalMenu">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content no-absolute modal-body-wrapper">

                <div class=" modal-profil-dashboard" id="main-profile">
                    <!-- Modal body -->
                    <div class="modal-body remove-padding-margin">

                        <!-- Foto Profil -->
                        <div class="container">
                            <div class="row justify-content-center remove-padding-margin">
                                <div class="col-md-12">
                                    <div class="fixed-top menu-fixed fixed-judul">
                                        <div class="menu-fixed-wrapper">
                                            <i class="fas fa-chevron-left tombol-back-edit"></i>
                                            <center>
                                                <p class="text-profil-pengguna-edit">Profil Pengguna</p>
                                            </center>
                                        </div>
                                    </div>
                                    <center>
                                        <div class="foto-profil-edit">
                                            <div class="fas fa-camera icon-camera">
                                            </div>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>

                        <!-- Profil Atas -->
                        <div class="garis-profil">
                            <div class="row justify-content-center remove-padding-margin tepi-content-username">
                                <div class="col-md-12">
                                    <div class="row jarak-text-profil remove-padding-margin">
                                        <div class="col-md-1 col-sm-1 col-1 induk-icon-text remove-padding-margin">
                                            <i class="fas fa-user icon-text"></i>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-9">
                                            Nama
                                            <div>
                                                <b>{{auth()->user()->name}}</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row jarak-text-profil remove-padding-margin">
                                        <div class="col-md-1 col-sm-1 col-1 induk-icon-text remove-padding-margin">
                                            <i class="fas fa-building icon-text"></i>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-9">
                                            Email
                                            <div>
                                                <b>{{auth()->user()->email}}</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Pemisah -->
                        <div class="jarak-pemisah remove-padding-margin">
                        </div>
                        <!-- Logout -->
                        <div class="col-md-12 remove-padding-margin sub-logout cur-pointer"
                            onclick="window.location.href='index.html'">
                            <div class="row remove-padding-margin ">
                                <div class="col-md-12">
                                    <a href="/logout">Keluar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MODAL EDIT PROFILE KEDUA -->
                <div class="modal-profil-kedua pad-left-right-23" id="edit-profile" style="display: none;">
                    <!-- MODAL -->
                    <!-- Modal Header -->

                    <!-- Modal body -->
                    <div class="">
                        <div class="row jarak-nama">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama"
                                        value="Ronald Arrival Fajar">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>No Telepon</label>
                                    <div class="input-group text-nomor">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">+62</div>
                                        </div>
                                        <input type="text" class="form-control" class="text-no" id="nomor"
                                            placeholder="856-4631-9100" value="7213766126">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Kota</label>
                                    <select class="js-example-basic-single form-control" name="kota">
                                        <option value="">Malang</option>
                                        <option value="">Jombang</option>
                                        <option value="">Kediri</option>
                                        <option value="">Bondowoso</option>
                                        <option value="">Situbondo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Provinsi</label>
                                    <select class="js-example-basic-single form-control" name="kota">
                                        <option value="">Jawa Timur</option>
                                        <option value="">Jawa Tengah</option>
                                        <option value="">Jawa Barat</option>
                                        <option value="">Jakarta</option>
                                        <option value="">D.I Yogyakarta</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Negara</label>
                                    <select class="js-example-basic-single form-control" name="kota">
                                        <option value="">Indonesia</option>
                                        <option value="">Malaysia</option>
                                        <option value="">Singapura</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="d-flex justify-content-center modal-footer">
                        <button type="button"
                            class="tutup-edit btn-profile-long btn btn-outline-dark btn-batal">Batal</button>
                        <button type="button" class="btn btn-selesai btn-profile-long">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL NOTIFIKASI -->
    <div class="modal slideInRight animated faster modal-fullscreen-board" id="modalNotifikasi">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content no-absolute modal-body-wrapper">
                <div class="modal-header no-border-bot header-notif-wrapper">
                    <div class="max-width-500 header-notif">
                        <h4 class="modal-title induk-icon-text color-detail-produk">Notifikasi</h4>
                        <button type="button" class="close pad-right-25">&times;</button>
                    </div>
                </div>
                <div class=" modal-profil-dashboard" style="margin: 56px auto 5px auto;">
                    <!-- Modal body -->
                    <div class="modal-body remove-padding-margin over-y-auto">
                        <div class="">
                            <div class="d-flex flex-row pad-left-right-30 pad-top-bot-15 border-top-smartlink">
                                <div class="">
                                    <i class="fa fa-envelope icon-envelope-notif"></i>
                                </div>
                                <div class="d-flex justify-content-between mar-left-25 flex-1 uk-font notif-wrapper">
                                    <div class="d-flex flex-column">
                                        <span>Penagihan Billing</span>
                                        <span>Hariaman - 52137128232173621</span>
                                        <span class="text-edit text-14">Rp 100.000</span>
                                    </div>
                                    <div class="d-flex flex-column text-right">
                                        <span class="font-10">31 Agu 19 / 18:22 WIB</span>
                                        <span class="no-invoice font-10 ">6 jam yang lalu</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row pad-left-right-30 pad-top-bot-15 border-top-smartlink">
                                <div class="">
                                    <i class="fa fa-envelope icon-envelope-notif"></i>
                                </div>
                                <div class="d-flex justify-content-between mar-left-25 flex-1 uk-font notif-wrapper">
                                    <div class="d-flex flex-column">
                                        <span>Pelunasan Invoice</span>
                                        <span>Hariaman - 52137128232173621</span>
                                        <span class="text-edit text-14">Rp 920.000</span>
                                    </div>
                                    <div class="d-flex flex-column text-right">
                                        <span class="font-10">30 Agu 19 / 09:12 WIB</span>
                                        <span class="no-invoice font-10 ">Kemarin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="asset/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
<script src="asset/js/select2.min.js"></script>
<!-- <script src="https://www.gstatic.com/firebasejs/6.3.4/firebase-app.js"></script> -->
<script src="asset/js/tiny-slider.js"></script>
<script>
    // Select 2
    $(document).ready(function () {
        $('.js-example-basic-single').select2({
            width: '100%',
            theme: 'bootstrap4'
        });
    });

    $("#btn-edit").click(function () {
        $('#main-profile').fadeOut(200);
        setTimeout(function () {
            $('#edit-profile').fadeIn(200)
        }, 300)
    });

    $(".tutup").click(function () {
        $('#modalMenu').addClass('slideOutLeft animated faster');
        setTimeout(function () {
            $('#modalMenu').removeClass('slideOutLeft animated faster');
            $('#modalMenu').addClass('slideInLeft animated faster');
            $('#modalMenu').modal('hide');
        }, 500);
    })

    // Button modal kedua
    $(".tutup-edit").click(function () {
        $('#edit-profile').fadeOut(300);
        setTimeout(function () {
            $('#main-profile').fadeIn(300)
        }, 300)
    })

    $(".btn-selesai").click(function () {
        $('#edit-profile').fadeOut(300);
        setTimeout(function () {
            $('#main-profile').fadeIn(300)
        }, 300)
    })

    // Sampai Sini

    $(".tombol-back-edit").click(function () {
        $('#modalMenu').addClass('slideOutLeft animated faster');
        setTimeout(function () {
            $('#modalMenu').removeClass('slideOutLeft animated faster');
            $('#modalMenu').addClass('slideInLeft animated faster');
            $('#modalMenu').modal('hide');
        }, 300);
    })

    $(".foto-name-phone").click(function () {
        $('#modalMenu').modal('show');
    })
    // 

    var slider = tns({
        container: '#promo',
        "slideBy": "page",
        "mouseDrag": true,
        "center": true,
        "loop": false,
        "edgePadding": 20,
        'gutter': 10,
        "swipeAngle": false,
        "speed": 400,
        "controls": false,
        "navPosition": "bottom"
    });

    // Modal NOTIF

    $(".close").click(function () {
        $('#modalNotifikasi').addClass('slideOutRight animated faster');
        setTimeout(function () {
            $('#modalNotifikasi').removeClass('slideOutRight animated faster');
            $('#modalNotifikasi').addClass('slideInRight animated faster');
            $('#modalNotifikasi').modal('hide');
        }, 300);
    })
</script>

</html>