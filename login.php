<?php  
	
	$db = new PDO('sqlite:restaurant.db');
	$stmt = $db->prepare('SELECT * FROM Client WHERE Username = :name AND Password = :pass');
	$stmt->bindParam(':name', $_POST['username']);
	$stmt->bindParam(':pass', $_POST['password']);
	$stmt->execute();  

	$result = $stmt->fetchAll() ;
	echo oi;
	header('Location: foodify.html');
?>
