<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Восстановление</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="login.php">
					<span class="login100-form-title">
						Восстановление
					</span>

					<div class="flex-col-c p-b-20" align="center">
						<span class="txt1 p-b-9">
							Ваш пароль был изменен, и отправлен на почту <?php echo $_GET['mail'] ?>.
						</span>
					</div>

					<div class="flex-col-c p-b-100 p-t-20">
						<div class="container-login100-form-btn">
							<button class="login100-form-btn">
								Войти
							</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/login.js"></script>

</body>
</html>