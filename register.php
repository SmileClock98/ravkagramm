<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Регистрация</title>
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
						Регистрация
					</span>

					<?php if (isset($_GET['data']) && $_GET['data'] == 'wrong') { ?>
						<div class="alert alert-danger" align="center">Данные введены неверно!</div>
					<?php } ?>

					<input type="hidden" name="sign" value="up">

					<div class="wrap-input100 validate-input m-b-16" data-validate="Пожалуйста, введите очту">
						<input class="input100" type="text" name="mail" placeholder="Почта">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Пожалуйста, введите никнейм">
						<input class="input100" type="text" name="username" placeholder="Никнейм">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input mb-4" data-validate = "Пожалуйста, введите пароль">
						<input class="input100" type="password" name="pass" placeholder="Пароль">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Зарегестрироваться
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Уже есть аккаунт?
						</span>

						<a href="login.php" class="txt3">
							Войти сейчас
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