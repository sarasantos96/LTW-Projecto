<?php

	$username = $_POST['username'];
	$name = $_POST['name'];
	$password = $_POST['password'];
	$usertype = $_POST['usertype'];
	
	if($usertype == "owner")
		$owner = 1;
	else
		$owner = 0;
	
	echo $name;
	$db = new PDO('sqlite:restaurant.db');
	
	$stmt = $db->prepare("INSERT INTO Client(ClientID, Name, Password, Username)
	VALUES(null, :nam, :pass, :use)");
	$stmt->bindParam(':nam', $name);
	$stmt->bindParam(':pass', $password);
	$stmt->bindParam(':use', $username);
	$stmt->execute();
	
	
	header('Location: login.html');
	
?>