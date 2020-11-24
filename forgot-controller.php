<?php

	require('database/db.php');

	$db = new DB;

	$step = intval($_POST['step']);

	if ($step != NULL) {

		if ($step == 1) {

			$mail = $_POST['mail'];

			$user = $db->getUserByMail($mail);

			$code = $db->createRecoveryCode($user['id']);

			if ($user != NULL) {
				if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
					if (mail($mail, 'Код подтверждения | RavkaGramm.io', $code, 'From: RavkaGramm.io')) {
						$db->addRecoveryCode($user['id'], $code);
						header('Location: forgot.php?step_number=2&mail='.$mail);
					} else header('Location: forgot.php?step_number=3&data=wrong');
				} else header('Location: forgot.php?step_number=3&data=wrong');
			} else {
				header('Location: forgot.php?step_number=1&data=wrong');
			}

		} else if ($step == 2) {

			$mail = $_POST['mail-step-2'];
			$post_code = $_POST['code'];
			$user = $db->getUserByMail($mail);

			$code = $db->getUserRecoveryCode($user['id']);

			if ($code == $post_code) {

				$db->delRecoveryCode($user['id']);

				header('Location: forgot.php?step_number=3&mail='.$mail.'&token='.$code);

			} else {
				header('Location: forgot.php?step_number=2&data=wrong');
			}

		} else if ($step == 3) {

			$mail = $_POST['mail-step-2'];
			$user = $db->getUserByMail($mail);
			$code = $db->getUserRecoveryCode($user['id']);
			$post_code = $_POST['code'];

			if ($code == $post_code) {

				$pass = $_POST['pass'];

				if ($db->changePassword($user['id'], $pass)) {

					mail($mail, 'Новый пароль | RavkaGramm.io', $pass, 'From: RavkaGramm.io');

					header('Location: changed-password.php?mail='.$mail);

				}
				else header('Location: forgot.php?step_number=3&data=wrong');

			} else {

				header('Location: forgot.php?step_number=3&data=wrong');

			}
			
		}

	}
?>