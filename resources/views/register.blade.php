<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Daftar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/my_css.css">
	<link rel="stylesheet" href="asset/css/all.css">
	<link rel="stylesheet" href="asset/css/brands.css">
	<link rel="stylesheet" href="asset/css/fontawesome.css">
	<link rel="stylesheet" href="asset/css/regular.css">
	<link rel="stylesheet" href="asset/css/solid.css">
	<link rel="stylesheet" href="asset/css/v4-shims.css">
	<link href="asset/font/lato.css" rel="stylesheet">
</head>

<body>
	<div class="contain-body h-100">
            <div class="container h-100">
                <div class="row justify-content-center align-items-center remove-padding-margin h-100">
                    <div class="col-md-6 flex-end">
                        <center>
                            <h3>Daftar</h3>
                            <p style="font-size:14px;padding-bottom: 10px;">Masukkan beberapa data untuk mendaftar</b></p>
                            <div class="col-12">
                            	<div class="form-group">
	                                <div class="input-group input">
	                                    <input type="text" class="form-control text-no" id="nomor"
	                                        placeholder="Your Name" v-model="nama">
	                                </div>
                            	</div>

                                <div class="form-group">
	                                <div class="input-group input">
	                                    <input type="text" class="form-control text-no" id="nomor"
	                                        placeholder="Your Email" v-model="email">
	                                </div>
                            	</div>
                            	<div class="form-group">
	                                <div class="input-group text-nomor input">
	                                    <input type="text" class="form-control text-no" id="nomor" v-model="nomor"
	                                        placeholder="085646319100">
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <div class="input-group input">
	                                    <select class="js-example-basic-single form-control" name="kota">
                                    <option value="">Malang</option>
                                    <option value="">Surabaya</option>
                                </select>
	                                </div>
	                            </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control text-no"
                                        placeholder="Your Password" v-model="password">
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                                </div>
                                
                                <button type="button" class="btn btn-login btn-long" @click="daftar"> Daftar
                                </button>
                                <button type="button" class="btn btn-outline-dark btn-kembali btn-long"
                                    onclick="history.back()"> Kembali </button>
                            </div>

                            <!-- <div class="col-12">
                                
                            </div> -->
                        </center>
                    </div>
                    <footer class="footer-small col-12">
                        <center>
                            <small>Powered by <a class="font-smartlink">Smartlink</a></small>
                        </center>
                    </footer>
                </div>
            </div>
        </div>
</body>
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
<script src="asset/js/jquery-1.11.3.min.js"></script>
<script>

	$('.btn-login').click(function () {
		$(this).html("<i class='fa fa-refresh spin-that'></i> Loading . . .")
		setTimeout(function () {
			window.location = "verifikasi.html";
		}, 50)
	});

	$(document).ready(function () {
		$("#nomor").focus(function () {
			$(".footer-small").toggle();
		});
		$("#nomor").blur(function () {
			$(".footer-small").toggle();
		});
	});
</script>

</html>