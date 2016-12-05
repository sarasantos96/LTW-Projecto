<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	$db = new PDO('sqlite:restaurant.db');

	$stmt = $db->prepare('SELECT * FROM Client WHERE Username = ? AND Password = ?');
	$stmt->execute(array($username,$password));
	$result = $stmt->fetchAll();

	if($result){
		session_start();
		$_SESSION['username'] = $username;
		header('Location: foodify.php');
	}
	else{
		$_REQUEST['loginResult'] = false;
		header('Location: login.html');
	}
?>
