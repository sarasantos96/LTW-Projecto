<?php
	session_start ();
	$username = $_POST['username'];
	$password = $_POST['password'];

	$hashed_password = sha1($password);

	$db = new PDO('sqlite:../restaurant.db');

	$stmt = $db->prepare('SELECT * FROM Client WHERE Username = ? AND Password = ?');
	$stmt->execute(array($username,$hashed_password));
	$result = $stmt->fetchAll();

	if($result){
		$_SESSION['username'] = $username;
		$_SESSION['csrf'] = bin2hex(openssl_random_pseudo_bytes(16));
		header('Location: ../foodify.php');
	}
	else{
		header('Location: ../login.php');
	}
?>
