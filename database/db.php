<?php 

class DB {

	function __construct() {

		$this->host = 'localhost';
		$this->db_name = 'ravkagramm';
		$this->user = 'mysql';
		$this->password = 'mysql';

		$this->connect = mysqli_connect(
			$this->host,
			$this->user,
			$this->password,
			$this->db_name
		) or die(mysqli_connect_error() . PHP_EOL);

		$this->usersTable = 'users';

		$this->createTables();

		// var_dump($this->createRecoveryCode('132123538'));

	}

	public function createTables() {

		$usersTable = $this->connect->query('SELECT * FROM `users`');

		if ($usersTable === false) {
			$this->connect->query('CREATE TABLE `'.$this->usersTable.'` (
				`id` INT(11) NOT NULL,
				`mail` VARCHAR(565) NOT NULL,
				`u_name` VARCHAR(65) NOT NULL,
				`password` VARCHAR(65) NOT NULL,
				`f_name` VARCHAR(65) DEFAULT NULL,
				`l_name` VARCHAR(65) DEFAULT NULL,
				`descr` VARCHAR(400) DEFAULT NULL,
				`status` VARCHAR(30) DEFAULT NULL,
				`forgot_code` VARCHAR(30) DEFAULT NULL,
				UNIQUE (`id`)
			) ENGINE = InnoDB');
		}

	}

	public function createRecoveryCode($id) {

		return strtoupper(uniqid()); 

	}

	public function addRecoveryCode($id, $code) {

		return $this->connect->query('UPDATE `'.$this->usersTable.'` SET `forgot_code` = "'.$code.'" WHERE id = "'.$id.'"');

	}

	public function getUserById($id) {

		return $this->connect->query('SELECT * FROM `'.$this->usersTable.'` WHERE `id` = "'.$id.'"')->fetch_assoc();

	}

	public function getUserByMail($mail) {

		return $this->connect->query('SELECT * FROM `'.$this->usersTable.'` WHERE `mail` = "'.$mail.'"')->fetch_assoc();

	}

	public function getUserRecoveryCode($id) {

		return $this->connect->query('SELECT `forgot_code` FROM `'.$this->usersTable.'` WHERE `id` = "'.$id.'"')->fetch_assoc()['forgot_code'];

	}

	public function isLogged() {

		$id = $_COOKIE['id'];

		if ($id != NULL && $this->getUserById($id) != false) return true;

		return false;

	}

	public function generateId() {

		$users = $this->connect->query('SELECT `id` FROM `'.$this->usersTable.'`');

		while (true) {

			$id = random_int(100000000,10000000000);

			while($row = $users->fetch_assoc()) {
				
				$row_id = $row['id'];

				if ($row_id == $id) $exists = true;

			}

			if (!$exists) break;

		}

		return $id;
		
	}

	public function changePassword($id, $pass) {

		return $this->connect->query('UPDATE `'.$this->usersTable.'` SET `password` = "'.$pass.'" WHERE id = "'.$id.'"');

	}

	public function delRecoveryCode($id) {

		return $this->connect->query('UPDATE `'.$this->usersTable.'` SET `forgot_code` = "" WHERE id = "'.$id.'"');

	} 

	public function	addUser($data) {

		$id = $this->generateId();

		setcookie("id", $id);

		return $this->connect->query('INSERT INTO `'.$this->usersTable.'` VALUES ("'.$id.'","'.$data['mail'].'","'.$data['u_name'].'","'.$data['password'].'","","","","")');

	}

	public function isExists($data) {
		return $this->connect->query('SELECT * FROM `'.$this->usersTable.'` WHERE u_name = "'.$data['u_name/mail'].'" AND password = "'.$data['password'].'" OR mail = "'.$data['u_name/mail'].'" AND password = "'.$data['password'].'"')->fetch_assoc();
	}

	public function sign($data) {

		$user = $this->isExists($data);

		if ($user) {

			setcookie("id", $user['id']);

			return true;

		}

		return false;

	}

	public function logout() {

		setcookie("id", '', time() - 3600);

		if (header('Location: login.php')) return true;

		return false;

	}

}