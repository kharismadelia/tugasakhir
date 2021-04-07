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
    <link rel="stylesheet" href="asset/css/tiny-slider.css">
</head>

<body style="background-color: rgba(245, 245, 245, 0.4);">

    <!-- Navigasi -->
    <div class="row nav-wrapper nav-dashboard  fixed-bottom">
        <div class="col menu-icon-fixed" onclick="window.location.href='{{ url('dashboard')}}'">
            <img src="asset/img/home.svg" class="img-menu-fixed" alt="">
            <!-- <i class="fas fa-home icon-menu-fixed"></i> -->
            <div class="text-menu-fixed">Dashboard</div>
        </div>
        <div class="col menu-icon-fixed" onclick="window.location.href='{{ url('billing')}}'">
            <img src="asset/img/transaction.svg" class="img-menu-fixed" alt="">
            <!-- <i class="fas fa-paste icon-menu-fixed"></i> -->
            <div class="text-menu-fixed">Billing</div>
        </div>
        <div class="col menu-icon-fixed  active">
            <img src="asset/img/shopping.svg" class="img-menu-fixed" alt="">
            <!-- <i class="fas fa-store icon-menu-fixed"></i> -->
            <div class="text-menu-fixed">Toko</div>
        </div>
        <div class="col menu-icon-fixed" onclick="window.location.href='{{ url('customer')}}'">
            <img src="asset/img/undraw_profile.svg" class="img-menu-fixed" alt="">
            <!-- <i class="fas fa-users icon-menu-fixed"></i> -->
            <div class="text-menu-fixed">Customer</div>
        </div>
    </div>


    <div class="back-top-wrapper">
        <!-- back-top-wrapper -->
        <!-- Judul -->
        <div class="container container-padding">
            <div class="row justify-content-center remove-padding-margin">
                <div class="col-12">
                    <div class="fixed-top menu-fixed fixed-judul">
                        <div class="menu-fixed-wrapper">
                        <i class="fas fa-chevron-left tombol-back-edit" id="back-menu-detail"
                        onclick="window.location.href='{{ url('admin_toko')}}'" style="display: none;"></i>
                            <center>
                                <p class="text-profil-pengguna-edit" id="judul-produk">Toko</p>
                                <p class="text-profil-pengguna-edit" id="judul-detail" style="display: none;">Detail Produk
                            </p>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-12 remove-padding-margin" id="judul-toko">
                    <div class="img-profil-toko"></div>
                    <div class="card card-toko-wrapper">
                        <div class="card-body">
                            <div class="foto-profil-toko">
                                <div class="fas fa-cog icon-gear">
                                </div>
                            </div>
                            <div class="text-username-toko">
                                Toko Murah Meriah
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pad-bottom-70">
            <div class="row">
                <div class="col-12">
                    <!-- Produk -->
                    <div class="produk-wrapper">
                        <b class="text-produk"><h5>Produk</h5></b>
                    </div>
                   
            <!-- Produk Anda -->
            <div class="container pad-left-right-23" id="img-produk">
            @foreach($produks as $k)
                <div class="garis-full">
                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-1 img-detail cur-pointer ">
                            <div class="img-wrapper-have">
                                <div class="img-have-picture" style="background-image: url('{{asset('main/'.$k->gambar)}}')">
                                </div>
                            </div>
                            <div class="mutasi-text">
                            <div class="text-14">{{ $k->nama_produk }}</div>
                                <div>Rp{{ $k->harga }} </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <!--Pemisah -->
            <div class="container" id="pemisah">
                <div class="row">
                    <div class="col-12 remove-padding">
                        <div class="jarak-pemisah remove-padding-margin">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Untuk IMG Detail -->
            <!-- SLIDER -->
            <div class="container-carousel" id="img-detail" style="display: none;">
                <div class="row remove-padding-margin">
                    <div class="col-12 remove-padding">
                        <div class="my-slider" id="produk">
                            <div class="img-promo-wrapper">
                                <div class="row">
                                    <div class="col-12 uk-font">
                                        <div class="control-group file-upload" id="file-upload4">
                                            <div class="img-produk-detail text-center">
                                                <div style="background-image: url('asset/img/promo-4.jpg')"
                                                    class="img-produk-pos"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="img-promo-wrapper">
                                <div class="row">
                                    <div class="col-12 uk-font">
                                        <div class="control-group file-upload" id="file-upload4">
                                            <div class="img-produk-detail text-center">
                                                <div style="background-image: url('asset/img/promo-4.jpg')"
                                                    class="img-produk-pos"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="img-promo-wrapper">
                                <div class="row">
                                    <div class="col-12 uk-font">
                                        <div class="control-group file-upload" id="file-upload4">
                                            <div class="img-produk-detail text-center">
                                                <div style="background-image: url('asset/img/promo-1.jpg')"
                                                    class="img-produk-pos"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pad-left-right-23">
                            <div class="mar-top-bot-15">
                                <b>Laptop MSI UY</b>
                            </div>
                            <div class="mar-top-bot-15">
                                <h5 class="font-smartlink">Rp 123.123.000</h5>
                            </div>
                            <div class="mar-top-bot-15 op-65">
                                12 Kg (12x45x31 cm)
                            </div>
                            <div class="mar-top-bot-15">
                                <b>Deskripsi</b><br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio nobis animi cumque
                                quibusdam
                                non delectus minus, ipsa velit nihil id quos, fugiat distinctio aliquam, quas maiores
                                amet
                                ad? Veritatis, error.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL -->
    <div class="modal slideInUp animated faster modal-fullscreen" id="myModal">
        <div class="modal-dialog modal-dialog-centered" style="margin: auto;">
            <div class="modal-content modal-body-wrapper max-width-500">
                <div class="modal-profil-dashboard">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title mar-left-15 induk-icon-text color-detail-produk">Laptop MSI UY</h4>
                        <button type="button" class="close pad-right-25">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body remove-padding">
                        <div class="modal-min-height" id="modal_produk">
                            <!-- <div class="pad-15"> -->
                            <div class="d-flex align-items-center pad-top-bot-15 pad-left-right-30"
                            onclick="window.location.href='{{ url('admin_ubahproduk')}}'">
                                <div>
                                    <img src="asset/img/icon-edit.svg" class="icon-detail-produk" alt="">
                                </div>
                                <div class="mutasi-text">
                                    <div class="text-14 color-detail-produk">Ubah</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pad-top-bot-15 pad-left-right-30">
                                <div>
                                    <img src="asset/img/icon-duplicate.svg" class="icon-detail-produk" alt="">
                                </div>
                                <div class="mutasi-text">
                                    <div class="text-14 color-detail-produk">Duplikat</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pad-top-bot-15 pad-left-right-30">
                                <div>
                                    <img src="asset/img/icon-delete.svg" class="icon-detail-produk" alt="">
                                </div>
                                <div class="mutasi-text">
                                    <div class="text-14 color-detail-produk">Hapus</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pad-top-bot-15 cur-pointer pad-left-right-30" id="atur_harga">
                                <div>
                                    <img src="asset/img/icon-money.svg" class="icon-detail-produk" alt="">
                                </div>
                                <div class="mutasi-text">
                                    <div class="text-14 color-detail-produk">Atur Harga</div>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>

                        <!-- MODAL KEDUA UNTUK ATUR HARGA -->
                        <div class="modal-min-height" id="modal_atur_harga" style="display: none;">
                            <!-- <div class="pad-15"> -->
                            <div class="d-flex justify-content-center pad-top-bot-15 pad-left-right-30">
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="harga">Harga</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">Rp</div>
                                            </div>
                                            <input type="number" class="form-control" id="harga"
                                                placeholder="Masukkan Harga">
                                        </div>
                                    </div>
                                    <div class="form-group col-12 mar-bot-0">
                                        <button type="button" class="btn btn-selesai btn-long text-14"
                                            id="simpan">Simpan</button>

                                        <button type="button"
                                            class="btn btn-outline-dark text-sd text-14 button-create btn-long"
                                            id="batal">Batal</button>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="asset/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
<script src="asset/js/tiny-slider.js"></script>
<script>
    // Untuk modal utama
    $("#atur_harga").click(function () {
        $('#modal_produk').fadeOut(300);
        setTimeout(function () {
            $('#modal_atur_harga').fadeIn(300)
        }, 300)
    });

    // Untuk modal kedua
    $("#batal").click(function () {
        $('#modal_atur_harga').fadeOut(300);
        setTimeout(function () {
            $('#modal_produk').fadeIn(300)
        }, 300)
    });

    $("#simpan").click(function () {
        $('#myModal').addClass('slideOutDown animated faster');
        setTimeout(function () {
            $('#myModal').removeClass('slideOutDown animated faster');
            $('#myModal').addClass('slideInUp animated faster');
            $('#myModal').modal('hide');
        }, 500);
    });


    // UNTUK CLOSE MODAL PERTAMA
    $(".close").click(function () {
        $('#myModal').addClass('slideOutDown animated faster');
        setTimeout(function () {
            $('#myModal').removeClass('slideOutDown animated faster');
            $('#myModal').addClass('slideInUp animated faster');
            $('#myModal').modal('hide');
            $('#modal_atur_harga').hide();
            $('#modal_produk').show();
        }, 500);
    });

    $(".img-detail").click(function () {
        $('#img-produk').fadeOut(300);
        $('#back-menu').fadeOut(300);
        $('#judul-produk').fadeOut(300);
        $('#judul-toko').fadeOut(300);
        $('#pemisah').fadeOut(300);
        setTimeout(function () {
            $('#img-detail').fadeIn(300);
            $('#back-menu-detail').fadeIn(300);
            $('#judul-detail').fadeIn(300);
        }, 300)
    });

    // Untuk kembali
    $("#back-menu-detail").click(function () {
        $('#img-detail').fadeOut(300);
        $('#judul-detail').fadeOut(300);
        $('#back-menu-detail').fadeOut(300);
        setTimeout(function () {
            $('#img-produk').fadeIn(300);
            $('#judul-produk').fadeIn(300);
            $('#back-menu').fadeIn(300);
        }, 300)
    })
</script>

</html>