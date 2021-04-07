<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Toko</title>
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
        <div class="col menu-icon-fixed"  onclick="window.location.href='{{ url('admin_toko')}}'">
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
                        Data Pegawai
                        <div class="container pad-left-right-23" id="img-produk">
                        @foreach($pegawai as $p)
                        <div class="garis-full pad-top-10">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-1 img-detail cur-pointer ">
                                    <div class="img-wrapper-have">
                                        <div class="img-have-picture" style="background-image: url('{{asset('main/'.$p->gambar)}}')">       
                                        </div>
                                    </div>
                                    <div class="mutasi-text">
                                        <div class="text-14">{{ $p->nama }}</div>
                                        <div>{{ $p->email }} </div>
                                    </div>
                                </div>
                                <div class="ellipsis-right cur-pointer">
                                    <a href="pegawai/{{$p->id_pegawai}}/edit"><img src="asset/img/icon-edit.svg" class="edit-detail-bank"></a>
                                    <a href="pegawai/{{$p->id_pegawai}}/delete"><img src="asset/img/icon-delete.svg" class="edit-detail-bank"></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                <div>
                    <button id="tambah-produk"
                        class="btn btn-outline-secondary fix-long btn-batal btn-tambah-produk text-14">+
                        Tambah Pegawai</button>
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
<script>
    $("#tambah-produk").click(function () {
        setTimeout(function () {
            window.location.href = '{{ url('pegawai/tambahpegawai')}}';
        }, 300)
    })
</script>
</html>