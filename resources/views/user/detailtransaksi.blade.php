<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Transaksi</title>
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
    <div class="back-top-wrapper">
        <!-- JUDUL -->
        <div class="row justify-content-center remove-padding-margin">
            <div class="col-12">
                <div class="fixed-top menu-fixed fixed-judul">
                    <div class="menu-fixed-wrapper">
                        <i class="fas fa-chevron-left tombol-back-edit" id="back-menu"
                            onclick="window.location.href='profil_toko.html'"></i>
                        <i class="fas fa-chevron-left tombol-back-edit" id="back-menu-detail"
                            style="display: none;"></i>
                        <center>
                            <p class="text-profil-pengguna-edit" id="judul-produk">Transaksi</p>
                            <p class="text-profil-pengguna-edit" id="judul-detail" style="display: none;">Detail Produk
                            </p>
                        </center>
                    </div>
                </div>
            </div>
        </div>

        <div class="tambah-produk-wrapper">
            <!-- LIST TRANSAKSI -->
            <div class="container pad-left-right-23 mar-bottom-15">
                <div class="card card-transaksi uk-font" >
                    <div class="card-header no-border-bot no-pad-bot">
                        <div class="d-flex border-transaksi">
                            <div class="d-flex flex-1 flex-column justify-content-center">
                                <div class="text-14">
                                    <b>Alamat Pengiriman</b>
                                    <br>
                                </div>
                                <div class="font-14 no-invoice ">
                                    Kharisma Adelia <br>
                                    087702580587 <br>
                                    Jl. Karet No.2Jatimulyo, Kec. Lowokwaru <br>
                                    Kota Malang, Jawa Timur 65141
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pad-card-transaksi no-border-bot no-pad-bot">
                        <div class="d-flex flex-column border-transaksi">
                            <div class="d-flex flex-1 flex-column justify-content-center">
                                <div class="text-14">
                                    <b>Detail Produk</b><br>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="text-produk flex-1">
                                        <div class="d-flex flex-row">
                                            <div class="text-center no-invoice">1x</div>
                                            <div class="flex-1 chevron-right no-invoice">Laptop MSI UY</div>
                                            <div class="no-invoice">Rp 15.000.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="text-produk flex-1">
                                    <div class="d-flex flex-row">
                                        <div class="text-center no-invoice">1x</div>
                                        <div class="flex-1 chevron-right no-invoice">Handphone Jadul</div>
                                        <div class="no-invoice">Rp 22.000.000</div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mar-bottom-24">
                                <div class="">
                                    <div class="text-14 text-edit">
                                        Total Pesanan (2 Produk)
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mar-bottom-24">
                                <div class="">
                                    <div class="text-14">
                                        Pesan :
                                    </div>
                                </div>
                                <div class="d-flex align-items-end">
                                    <div class="text-14 text-edit">
                                        <textarea class="form-control" id="deskripsi" placeholder="Tinggalkan pesan disini.."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="card-body pad-card-transaksi no-border-bot no-pad-bot">
                        <div class="d-flex flex-column border-transaksi">
                            <div class="text-14">
                                <b>Opsi Pengiriman</b>
                                <br>
                                
                                <select class="js-example-basic-single form-control" name="kota">
                                    <option value="">JNE</option>
                                    <option value="">J&T</option>
                                </select>
                            </div>
                        </div>    
                    </div>
                    <div class="card-body pad-card-transaksi no-border-bot no-pad-bot">
                        <div class="d-flex flex-column border-transaksi">
                            <div class="text-14">
                                <b>Metode Pembayaran</b>
                                <br>
                                
                                <select class="js-example-basic-single form-control" name="kota">
                                    <option value="">BNI</option>
                                    <option value="">COD (Hanya untuk Malang dan Sekitarnya)</option>
                                </select>
                            </div>
                        </div>    
                    </div>
                    <div class="card-body pad-card-transaksi no-border-bot no-pad-bot">
                        <div class="d-flex flex-column border-transaksi">
                            <div class="d-flex flex-1 flex-column justify-content-center">
                                <div class="text-14">
                                    <b>Detail Produk</b><br>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="text-produk flex-1">
                                        <div class="d-flex flex-row">
                                            <div class="flex-1 chevron-right no-invoice">Subtotal Produk</div>
                                            <div class="no-invoice">Rp 65.000.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="text-produk flex-1">
                                    <div class="d-flex flex-row">
                                        <div class="flex-1 chevron-right no-invoice">Subtotal Pengiriman</div>
                                        <div class="no-invoice">Rp 22.000.000</div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mar-bottom-24">
                                <div class="">
                                    <div class="text-14 text-edit">
                                        <b>Total Pembayaran</b>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end">
                                    <div class="text-14 text-edit"><b>Rp 16.500.000</b></div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    
                        <div class="row  content-toko-wrapper">
                            <div class="col-12">
                                <button type="button" class="btn btn-selesai fix-long text-14" 
                                onclick="window.location.href='{{ url('billing')}}'">Buat Transaksi
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
</html>