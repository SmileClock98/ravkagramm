<?php 

	require('database/db.php');

	$db = new DB;

	if (!$db->logout()) header('Location: index.php');