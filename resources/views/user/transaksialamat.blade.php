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

<body style="background-color: rgba(245, 245, 245, 0.4);">

    <!-- Judul -->
    <div class="back-top-wrapper">
        <div class="container container-padding">
            <div class="row justify-content-center remove-padding-margin">
                <div class="col-12">
                    <div class="fixed-top menu-fixed fixed-judul">
                        <div class="menu-fixed-wrapper">
                            <i class="fas fa-chevron-left tombol-back-edit"
                                onclick="window.history.go(-1); return false;"></i>
                            <center>
                                <p class="text-profil-pengguna-edit">Alamat Transaksi</p>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 remove-padding-margin tepi-content">
                    <div class="tambah-produk-wrapper gambar-barang">
                        </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Penerima</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Penerima">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <div class="input-group text-nomor input">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">+62</div>
                                    </div>
                                    <input type="text" class="form-control text-no" id="nomor" v-model="nomor"
                                        placeholder="85646319100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="deskripsi">Alamat</label>
                                <textarea class="form-control" id="deskripsi"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="harga">Kota</label>
                            <select class="js-example-basic-single form-control" name="kota">
                                <option value="">Malang</option>
                                <option value="">Jombang</option>
                                <option value="">Kediri</option>
                                <option value="">Bondowoso</option>
                                <option value="">Situbondo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="harga">Kode Pos</label>
                            <select class="js-example-basic-single form-control" name="kota">
                                <option value="">651213</option>
                                <option value="">651417</option>
                                <option value="">651409</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="pad-bottom-70">
                        <div class="row  content-toko-wrapper">
                            <div class="col-12">
                                <button type="button" class="btn btn-selesai fix-long text-14" 
                                onclick="window.location.href='{{ url('detailtransaksi')}}'"> Lanjutkan
                                </button>
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

</html>