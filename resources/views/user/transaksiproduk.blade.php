<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi Produk</title>
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
    <link rel="stylesheet" href="asset/css/mycss.css">

</head>

<body style="background-color: rgba(245, 245, 245, 0.4);">
    <!-- Navigasi -->
    <div class="back-top-wrapper">
        <div class="row justify-content-center remove-padding-margin">
            <div class="col-12">
                <div class="fixed-top menu-fixed fixed-judul">
                    <div class="menu-fixed-wrapper">
                        <i class="fas fa-chevron-left tombol-back-edit" id="back-menu"
                        onclick="window.location.href='{{ url('dashboard')}}'"></i>
                        <i class="fas fa-chevron-left tombol-back-edit" id="back-menu-detail"
                            style="display: none;"></i>
                        <center>
                            <p class="text-profil-pengguna-edit" id="judul-produk">Transaksi Produk</p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <div class="pad-bottom-70 tambah-produk-wrapper ">
            <div class="container pad-left-right-23" id="img-produk">
                <div class="garis-full">
                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-1 cur-pointer ">
                            <div class="form-group">
                                <input type="checkbox" id="html3">
                                <label for="html3"></label>
                            </div>
                            <div class="img-wrapper-have">
                                <div class="img-have-picture" style="background-image: url('asset/img/promo-1.jpg')">
                                </div>
                            </div>
                            <div class="mutasi-text">
                                <div class="text-14">Laptop MSI UY</div>
                                <div>Rp. 26.000.000</div>
                            </div>
                        </div>
                        <div class="min-add-button">
                            <div class="input-group">
                                <a href="#" class="button btn-nambah input-group-addon minus increment" key="adults3"><i class="fa fa-minus" aria-hidden="true"></i></a>
                                    <input type="text" class="form-control" id="adults3" size="2" value="0">
                                <a href="#" class="button btn-nambah input-group-addon plus increment" key="adults3"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="garis-full pad-top-10">
                    <div class="d-flex  align-items-center">
                        <div class="d-flex flex-1 cur-pointer ">
                            <div class="form-group">
                                <input type="checkbox" id="html2">
                                <label for="html2"></label>
                            </div>
                            <div class="img-wrapper-have">
                                <div class="img-have-picture" style="background-image: url('asset/img/promo-2.jpg')">
                                </div>
                            </div>
                            <div class="mutasi-text">
                                <div class="text-14">Handphone Sony K2</div>
                                <div>Rp. 500.000</div>
                            </div>
                        </div>
                        <div class="min-add-button">
                            <div class="input-group">
                                <a href="#" class="button btn-nambah input-group-addon minus increment" key="adults2"><i class="fa fa-minus" aria-hidden="true"></i></a>
                                    <input type="text" class="form-control" id="adults2" size="2" value="0">
                                <a href="#" class="button btn-nambah input-group-addon plus increment" key="adults2"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="garis-full pad-top-10">
                    <div class="d-flex  align-items-center">
                        <div class="d-flex flex-1 cur-pointer ">
                            <div class="form-group">
                                <input type="checkbox" id="html3">
                                <label for="html3"></label>
                            </div>
                            <div class="img-wrapper-have">
                                <div class="img-have-picture" style="background-image: url('asset/img/promo-3.jpg')">
                                </div>
                            </div>
                            <div class="mutasi-text">
                                <div class="text-14">Voucher Pulsa Indosat</div>
                                <div>Rp. 12.000</div>
                            </div>
                        </div>
                        <div class="min-add-button">
                            <div class="input-group">
                                <a href="#" class="button btn-nambah input-group-addon minus increment" key="adults1"><i class="fa fa-minus" aria-hidden="true"></i></a>
                                    <input type="text" class="form-control" id="adults1" size="2" value="0">
                                <a href="#" class="button btn-nambah input-group-addon plus increment" key="adults1"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="garis-full pad-top-10">
                    <div class=" d-flex  align-items-center">
                        
                            <button type="button" onclick="window.location.href='{{ url('transaksialamat')}}'" class="btn btn-login btn-long"> Lanjutkan
                            </button>
                        </div>
                    </div>
            
        </div>
    </div>

    
    </div>
</body>
<script src="asset/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
<script src="asset/js/tiny-slider.js"></script>
<script src="asset/js/myjs.js"></script>


</html>