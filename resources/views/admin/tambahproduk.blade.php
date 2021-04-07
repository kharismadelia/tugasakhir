<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Toko</title>
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/solid.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/v4-shims.css')}}">
    <link href="{{asset('asset/font/lato.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/select2.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('asset/css/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/my_css.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">
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
                                <p class="text-profil-pengguna-edit">Tambah Produk</p>
                            </center>
                        </div>
                    </div>
                </div>
                 <form action="{{url('admin_toko/simpanproduk')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="col-md-12 remove-padding-margin tepi-content">
                    <div class="tambah-produk-wrapper gambar-barang">
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="deskripsi">Gambar</label></br>
                                <input type="file" name="gambar" >
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" class="form-control" name="nama_produk" 
                                id="nama_produk" required="required" placeholder="Masukkan Nama Barang">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="harga">Harga</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input type="number" class="form-control" name="harga" 
                                required="required" placeholder="Masukkan Harga">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8 col-xs-8 col-8">
                            <label for="berat">Berat</label>
                            <input type="number" class="form-control" name="berat" required="required" placeholder="Masukkan Berat">
                        </div>
                        <div class="form-group col-md-4 col-xs-4 col-4">
                            <select id="satuan" class="form-control mar-bottom-18rem">
                                <option selected>Kilogram</option>
                                <option>Ons</option>
                                <option>Gram</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="berat">Dimensi (cm)</label>
                            <input type="number" class="form-control" name="panjang" required="required" placeholder="Panjang">
                        </div>
                        <div class="form-group col">
                            <input type="number" class="form-control mar-bottom-18rem" name="lebar" required="required" placeholder="Lebar">
                        </div>
                        <div class="form-group col">
                            <input type="number" class="form-control mar-bottom-18rem" name="tinggi" required="required" placeholder="Tinggi">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" required="required" name="deskripsi"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="pad-bottom-70">
                        <div class="row  content-toko-wrapper">
                            <div class="col-12">
                                <button type="submit" class="btn btn-selesai fix-long text-14" >Simpan </button>
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
<script>
    $(document).ready(function () {
        $('.js-example-basic-single').select2({
            width: '100%',
            theme: 'bootstrap4'
        });
    });

    // Untuk upload foto
    $(".image-box").click(function (event) {
        var previewImg = $(this).children("img");
        var iconUpload = $(this).children(".icon-upload");
        var iconHapus = $(this).children(".icon-hapus");

        $(this)
            .siblings()
            .children("input")
            .trigger("click");

        $(this)
            .siblings()
            .children("input")
            .change(function () {
                var reader = new FileReader();

                reader.onload = function (e) {
                    var urll = e.target.result;
                    $(previewImg).attr("src", urll);
                    previewImg.parent().css("background", "transparent");
                    previewImg.show();
                    previewImg.siblings("p").hide();
                    iconUpload.hide();
                    $(iconHapus).show();
                };
                reader.readAsDataURL(this.files[0]);
            })
            .prop('disabled', true);

        setTimeout(() => {
            $(this).removeClass("image-box");
            $(this).addClass('img-hapus')
        }, 10)
    });

    $("body").on('click', '.img-hapus', function () {
        var previewImg = $(this).children("img");
        var iconUpload = $(this).children(".icon-upload");
        var iconHapus = $(this).children(".icon-hapus");

        $(previewImg).attr("src", '');
        previewImg.parent().css("background", "transparent");
        previewImg.hide();
        previewImg.siblings("p").show();
        iconUpload.show();
        iconHapus.hide();

        $(this)
            .siblings()
            .children("input")
            .prop('disabled', false)
            .val('');


        setTimeout(() => {
            $(this).removeClass("img-hapus");
            $(this).addClass('image-box');
        }, 10)

    });

</script>

</html>