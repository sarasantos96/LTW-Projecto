<?php
	function userExists($username, $password) {
    global $db;

    $stmt = $db->prepare('SELECT * FROM Client WHERE Username = :name AND Password = :pass');
	$stmt->bindParameter(':name', $username);
	$stmt->bindParameter(':pass', $password);
    $stmt->execute(array($username, $password);

    return $stmt->fetch() !== false;
  }
?>
	session_start ();
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
