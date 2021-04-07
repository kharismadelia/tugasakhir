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
                                <p class="text-profil-pengguna-edit">Customer</p>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 remove-padding-margin tepi-content">
                    <div class="tambah-produk-wrapper gambar-barang">
                        </div>
                    <form action="{{ route('invoice.store') }}" method="post">
                        @csrf
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Penerima</label>
                                <select name="customer_id" class="form-control" required>
                                <option value="">Pilih</option>
                                    @foreach ($customer as $c) 
                                    <option value="{{ $c->id }}">{{ $c->name }} - {{ $c->email }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="pad-bottom-70">
                        <div class="row  content-toko-wrapper">
                            <div class="col-12">
                                <button type="submit" class="btn btn-selesai fix-long text-14" > 
                                Lanjutkan
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