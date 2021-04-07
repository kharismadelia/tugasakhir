<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/my_css.css">
	<link rel="stylesheet" type="text/css" href="asset/css/all.min.css">
	<link rel="stylesheet" href="asset/css/all.css">
	<link rel="stylesheet" href="asset/css/brands.css">
	<link rel="stylesheet" href="asset/css/fontawesome.css">
	<link rel="stylesheet" href="asset/css/regular.css">
	<link rel="stylesheet" href="asset/css/solid.css">
	<link rel="stylesheet" href="asset/css/v4-shims.css">
	<link href="asset/font/lato.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="contain-body h-100">
		<div class="container h-100">
			<div class="row justify-content-center align-items-center remove-padding-margin h-100">
				<div class="col-md-6 flex-end">
					<div class="text-center">
						<h3>Login</h3>
						<p style="font-size:14px;padding-bottom: 10px;">Masukkan Email dan Password</b>

							<div class="col-12">
								<form action="/admin_dashboard" method="post">
									{{csrf_field()}}
									<div class="form-group">
										<div class="input-group input">
											<input type="email" class="form-control text-no" placeholder="Your Email" name="email">
										</div>
									</div>
									<div class="form-group">
										<input type="password" class="form-control text-no"
										placeholder="Your Password" name="password">
									</div>

									<button type="submit" class="btn btn-login btn-long"> Login </button>
								</form>
								
								<button type="button" class="btn btn-outline-dark btn-kembali btn-long"
								onclick="window.location.href='index.html'"> Kembali </button>
							</div>
						</div>
					</div>
					<footer class="footer-small col-12">
						<center>
							<small class="powered">Powered by <a class="font-smartlink">Kharisma</a></small>
						</center>
					</footer>
				</div>
			</div>
		</div>
	</body>
	<script src="asset/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
	<script>
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