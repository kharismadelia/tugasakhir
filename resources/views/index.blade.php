<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/my_css.css">
	<link rel="stylesheet" type="text/css" href="asset/css/fontawesome.min.css"> 
	<link rel="stylesheet" href="asset/css/all.css">
	<link rel="stylesheet" href="asset/css/brands.css">
	<link rel="stylesheet" href="asset/css/fontawesome.css">
	<link rel="stylesheet" href="asset/css/regular.css">
	<link rel="stylesheet" href="asset/css/solid.css">
	<link rel="stylesheet" href="asset/css/v4-shims.css">
	<!-- <link rel="stylesheet" href="asset/css/all.min.css"> -->
	<!-- <link href="asset/css/buttonLoader.css" rel="stylesheet" type="text/css"> -->
	<link href="asset/font/lato.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container h-100">
		<div class="row justify-content-center align-items-center remove-padding-margin h-100">
			<div class="col-md-6 flex-end">
				<center>
					<img src="asset/img/undraw_startled.png" class="img-startled">
					<h3 class="text-ayo-memulai">Ayo Memulai</h3>
					<p style="font-size:14px; padding: 0px 15px 0px 15px;">
                    Pencatatan Penjualan dengan Mudah</p>

					<div class="col-12">
						<button class="btn btn-outline-dark button-create fix-long"> Buat Akun </button>
						<button class="btn button-login fix-long"> Masuk </button>
					</div>
				</center>
			</div>
			<footer class="footer-small col-12">
				<center>	
					<small>Powered by <a class="font-smartlink">Smartlink</a></small>
				</center>
			</footer>
		</div>
	</div>
</body>
<script src="asset/js/jquery-1.11.3.min.js"></script>
<!-- <script src="asset/js/jquery.buttonLoader.min.js"></script> -->
<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
<script>
	$('.button-login').click(function () {
		$(this).html("<i class='fa fa-refresh spin-that'></i> Loading . . .")
		setTimeout(function(){
			window.location='{{ url('login')}}';
		}, 50)
	});

	$('.button-create').click(function () {
		$(this).html("<i class='fa fa-refresh spin-that'></i> Loading . . .")
		setTimeout(function(){
			window.location='{{ url('register')}}';
		}, 50)
	});
</script>
</html>