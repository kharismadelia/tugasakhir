<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Transaksi</title>
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/solid.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/v4-shims.css')}}">
    <link href="{{asset('asset/font/lato.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/select2.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('asset/css/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/my_css.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/tiny-slider.css')}}">
</head>

<body style="background-color: rgba(245, 245, 245, 0.4);">
<!-- Navigasi -->
    <div class="row nav-wrapper nav-dashboard  fixed-bottom">
        <div class="col menu-icon-fixed" onclick="window.location.href='{{ url('dashboard')}}'">
            <img src="{{asset('asset/img/home.svg')}}" class="img-menu-fixed" alt="">
            <!-- <i class="fas fa-home icon-menu-fixed"></i> -->
            <div class="text-menu-fixed">Dashboard</div>
        </div>
        <div class="col menu-icon-fixed" onclick="window.location.href='{{ url('billing')}}'">
            <img src="{{asset('asset/img/transaction.svg')}}" class="img-menu-fixed" alt="">
            <!-- <i class="fas fa-paste icon-menu-fixed"></i> -->
            <div class="text-menu-fixed">Billing</div>
        </div>
        <div class="col menu-icon-fixed" onclick="window.location.href='{{ url('toko')}}'">
            <img src="{{asset('asset/img/shopping.svg')}}" class="img-menu-fixed" alt="">
            <!-- <i class="fas fa-store icon-menu-fixed"></i> -->
            <div class="text-menu-fixed">Toko</div>
        </div>
        <div class="col menu-icon-fixed" onclick="window.location.href='{{ url('customer')}}'">
            <img src="{{asset('asset/img/undraw_profile.svg')}}" class="img-menu-fixed" alt="">
            <!-- <i class="fas fa-users icon-menu-fixed"></i> -->
            <div class="text-menu-fixed">Customer</div>
        </div>
    </div>
    <div class="back-top-wrapper">
        <!-- JUDUL -->
        <div class="row justify-content-center remove-padding-margin">
            <div class="col-12">
                <div class="fixed-top menu-fixed fixed-judul">
                    <div class="menu-fixed-wrapper">
                        <i class="fas fa-chevron-left tombol-back-edit" id="back-menu"
                            onclick="window.location.href='{{ url('invoice')}}'"></i>
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
                <form action="{{ route('invoice.update', ['id' => $invoice->id]) }}" method="post">
                    @csrf
                    <div class="card-header no-border-bot no-pad-bot">
                        <div class="d-flex border-transaksi">
                            <div class="d-flex flex-1 flex-column justify-content-center">
                                <div class="text-14">
                                    <b>Data Customer</b>
                                    <br>
                                </div>
                                <div class="font-14 no-invoice ">
                                    {{ $invoice->customer->name }} <br>
                                    {{ $invoice->customer->phone }} <br>
                                    {{ $invoice->customer->email }} <br>
                                    {{ $invoice->customer->address }}<br>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pad-card-transaksi no-border-bot no-pad-bot">
                        <div class="d-flex flex-column border-transaksi">
                            @php $no = 1 @endphp
                            @foreach ($invoice->detail as $detail)
                            <div class="d-flex flex-1 flex-column justify-content-center">
                                <div class="text-14">
                                    <b>Detail Produk</b><br>
                                </div>
                                <div class="text-14">
                                    {{ $no++ }}<br>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="text-produk flex-1">
                                        <div class="d-flex flex-row">
                                            <div class="text-center no-invoice">{{ $detail->qty }}x</div>
                                            <div class="flex-1 chevron-right no-invoice">{{ $detail->product->nama_produk }}</div>
                                            <div class="no-invoice">Rp {{ number_format($detail->price) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mar-bottom-24">
                                <div class="">
                                    <div class="text-14 text-edit">
                                        Sub Total
                                    </div>
                                </div>
                                <div class="d-flex align-items-end">
                                    <div class="text-14 text-edit"><b>Rp {{ $detail->subtotal }}</b></div>
                                </div>
                            </div>
                            @endforeach
                        </div>    
                    </div>
                    <div class="card-body pad-card-transaksi no-border-bot no-pad-bot">
                        <div class="d-flex flex-column border-transaksi">
                            <div class="text-14">
                                <b>Pilih Produk</b>
                                <br>
                                <input type="hidden" name="_method" value="PUT" class="form-control">
                                <select class="js-example-basic-single form-control" name="product_id">
                                    <option value="">Pilih Produk</option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->nama_produk }}</option>
                                        @endforeach
                                </select>
                                <br>
                                <input type="number" min="1" value="1" name="qty" class="form-control" required>
                                <br>
                                <button class="btn btn-primary btn-sm">Tambahkan</button>
                            </div>
                        </div>    
                    </div>
                </form>
                    <div class="card-body pad-card-transaksi no-border-bot no-pad-bot">
                        <div class="d-flex flex-column border-transaksi">
                            <div class="d-flex flex-1 flex-column justify-content-center">
                                <div class="text-14">
                                    <b>Detail Transaksi</b><br>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="text-produk flex-1">
                                        <div class="d-flex flex-row">
                                            <div class="flex-1 chevron-right no-invoice">Subtotal Produk</div>
                                            <div class="no-invoice">Rp {{ number_format($invoice->total) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="text-produk flex-1">
                                    <div class="d-flex flex-row">
                                        <div class="flex-1 chevron-right no-invoice">Pajak</div>
                                        <div class="no-invoice">2% (Rp {{ number_format($invoice->tax) }})</div>
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
                                    <div class="text-14 text-edit"><b>Rp {{ number_format($invoice->total_price) }}</b></div>
                                </div>
                            </div>
                        </div>    
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
            
                    
                    </div>
                </div>
            </div>
        </div>
        
</html>