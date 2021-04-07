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

<body>
    
    <!-- Judul -->
    <div class="back-top-wrapper">
        <div class="container container-padding">
            <div class="row justify-content-center remove-padding-margin">
            <form action="/admin_toko/{{$produks->id}}/update" method="post">
                    {{csrf_field()}}
                <div class="col-12">
                    <div class="fixed-top menu-fixed fixed-judul">
                        <div class="menu-fixed-wrapper">
                            <i class="fas fa-chevron-left tombol-back-edit"
                            onclick="window.history.go(-1); return false;"></i>
                            <center>
                                <p class="text-profil-pengguna-edit">Ubah Produk</p>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 remove-padding-margin tepi-content">
                    <div class="tambah-produk-wrapper gambar-barang">
                        <div class=" jarak-nama ">Gambar Produk</div>
                        <div class="row mar-barang">
                            <div class="col pad-5">
                                <div class="control-group file-upload" id="file-upload1">
                                    <div class="image-box text-center">
                                        <i class="fas fa-camera icon-upload"></i>
                                        <i class="fas fa-times icon-hapus" style="display: none;"></i>
                                        <img src="" alt="">
                                    </div>
                                    <div class="controls" style="display: none;">
                                        <input type="file" accept="image/*" name="file_image_1" />
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input name="nama_produk" type="text" class="form-control" id="nama" placeholder="Masukkan Nama Barang" value="{{$produks->nama_produk}}">
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
                                <input name="harga" type="number" class="form-control" id="harga" placeholder="Masukkan Harga" value="{{$produks->harga}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8 col-xs-8 col-8">
                            <label for="berat">Berat</label>
                            <input name="berat" type="number" class="form-control" id="berat" placeholder="Masukkan Berat" value="{{$produks->berat}}">
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
                            <input name="panjang" type="number" class="form-control" id="panjang" placeholder="Panjang" value="{{$produks->panjang}}">
                        </div>
                        <div class="form-group col">
                            <input name="lebar" type="number" class="form-control mar-bottom-18rem" id="lebar" placeholder="Lebar" value="{{$produks->lebar}}">
                        </div>
                        <div class="form-group col">
                            <input name="tinggi" type="number" class="form-control mar-bottom-18rem" id="tinggi" placeholder="Tinggi" value="{{$produks->tinggi}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" id="deskripsi">{{$produks->deskripsi}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="pad-bottom-70">
                        <div class="row  content-toko-wrapper">
                            <div class="col-12">
                                <button type="submit" class="btn btn-selesai fix-long text-14">Simpan</button>
                            </div>
                        </div>
                        <div class="row text-ayo-memulai ">
                            <div class="col-12">
                                <button type="button"
                                    class="btn btn-outline-dark text-sd text-14 button-create fix-long">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
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