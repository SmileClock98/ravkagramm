<?php

	if (isset($_POST['sign'])) {

		require('database/db.php');

		$db = new DB;

		$sign = $_POST['sign'];

		$u_name = $_POST['username'];
		$password = $_POST['pass'];

		if ($sign == 'in') {

			if ($db->sign(['u_name/mail' => $u_name, 'password' => $password])) header('Location: me.php');
			else header('Location: login.php?data=wrong');

		} else if ($sign == 'up') {

			$mail = $_POST['mail'];

			if ($db->addUser(['mail' => $mail, 'u_name' => $u_name, 'password' => $password])) header('Location: me.php');
			else header('Location: register.php?data=wrong');

		}

	} else {
		header('Location: index.php');
	}

	