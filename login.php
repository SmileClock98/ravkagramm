<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Вход</title>
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
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="sign.php" method="post">
					<span class="login100-form-title">
						Вход
					</span>

					<input type="hidden" name="sign" value="in">

					<div class="wrap-input100 validate-input m-b-16" data-validate="Пожалуйста, введите никнейм">
						<input class="input100" type="text" name="username" placeholder="Почта или никнейм">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Пожалуйста, введите пароль">
						<input class="input100" type="password" name="pass" placeholder="Пароль">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Забыли
						</span>

						<a href="#" class="txt2">
							Никнейм / Пароль?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Войти
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Нет аккаунта?
						</span>

						<a href="register.php" class="txt3">
							Зарегестрироваться сейчас
						</a>
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