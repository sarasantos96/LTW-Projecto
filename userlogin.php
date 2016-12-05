<?php
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

	$db = new PDO('sqlite:restaurant.db');

	$stmt = $db->prepare('SELECT * FROM Client WHERE Username = ? AND Password = ?');
	$stmt->execute(array($username,$password));
	$result = $stmt->fetchAll();

	if($result){
		$_SESSION['username'] = $username;
		header('Location: foodify.php');
	}
	else{
		header('Location: login.php');
	}
?>
