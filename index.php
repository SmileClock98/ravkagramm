<?php

	require('database/db.php');

	$db = new DB;
	
	if (!$db->isLogged()) header('Location: login.php');
	else header('Location: me.php');