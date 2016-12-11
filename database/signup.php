<?php

	$username = $_POST['username'];
	$name = $_POST['name'];
	$password = $_POST['password'];
	$usertype = $_POST['usertype'];

	$hashed_password = sha1($password);

	if($usertype == "owner")
		$owner = 1;
	else
		$owner = 0;

	echo $name;
	$db = new PDO('sqlite:../restaurant.db');

	$stmt = $db->prepare("INSERT INTO Client(ClientID, Name, Password, Username, Photo, Type)
	VALUES(null, :nam, :pass, :use, 'res/profile-icon.png', :t)");
	$stmt->bindParam(':nam', $name);
	$stmt->bindParam(':pass', $hashed_password);
	$stmt->bindParam(':use', $username);
	$stmt->bindParam(':t', $owner);
	$stmt->execute();

	header('Location: ../login.php');

?>
