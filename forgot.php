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
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="forgot-controller.php" method="post">
					<span class="login100-form-title">
						Восстановление
					</span>

					<input type="hidden" name="step" value="<?php echo $_GET['step_number']; ?>">

					<div class="flex-col-c p-b-20">
						<h3 class="step-text p-b-9">
							Шаг <?php echo $_GET['step_number']; ?> из 3
						</h3>
					</div>

					<?php if (isset($_GET['data']) && $_GET['data'] == 'wrong') { ?>
						<div class="alert alert-danger" align="center">Данные введены неверно!</div>
					<?php } ?>

					<div class="flex-col-c p-b-20" align="center">
						<span class="txt1 p-b-9">
							<?php

								if ($_GET['step_number'] == 1) {
									echo 'Впишите почту, которую указывали при регистрации в поле ниже для продолжения.';
								} else if ($_GET['step_number'] == 2) {
									echo 'На почту '.$_GET['mail'].' пришло письмо с кодом подтверждения. Впишите его в поле ниже для продолжения.';
								} else if ($_GET['step_number'] == 3) {
									echo 'Придумайте новый пароль:';
								}

							?>
						</span>
					</div>

					<?php

						if ($_GET['step_number'] == 1) { ?>

							<div class="wrap-input100 validate-input mb-4" data-validate = "Пожалуйста, введите почту">
								<input class="input100" type="text" name="mail" placeholder="Почта">
								<span class="focus-input100"></span>
							</div>

						<?php } else if ($_GET['step_number'] == 2) { ?>

							<input type="hidden" name="mail-step-2" value="<?php echo $_GET['mail']; ?>">

							<div class="wrap-input100 validate-input mb-4" data-validate = "Пожалуйста, введите код">
								<input class="input100" type="text" name="code" placeholder="Код">
								<span class="focus-input100"></span>
							</div>

						<?php } else if ($_GET['step_number'] == 3) { ?>

							<input type="hidden" name="mail-step-2" value="<?php echo $_GET['mail']; ?>">

							<div class="wrap-input100 validate-input mb-4" data-validate = "Пожалуйста, введите пароль">
								<input id="pass-js" class="input100" type="password" name="pass" placeholder="Пароль">
								<span class="focus-input100"></span>
							</div>

							<div class="wrap-input100 validate-input mb-4" data-validate = "Пожалуйста, введите пароль">
								<input id="pass_again-js" class="input100" type="password" name="pass_again" placeholder="Пароль еще раз">
								<span class="focus-input100"></span>
							</div>

							<script src="assets/js/forgot.js"></script>

						<?php }

					?>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Далее
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Уже вспомнили?
						</span>

						<a href="login.php" class="txt3">
							Войти
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