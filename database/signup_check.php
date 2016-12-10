<?php

	$db = new PDO('sqlite:../restaurant.db');

	$usernames = $db->prepare('SELECT Username FROM Client');
	$usernames->execute();
	$res = $usernames->fetchAll();

	$to_encode = array();
	foreach($res as $row){
		$to_encode[] = $row['Username'];
	}

	echo json_encode($to_encode);
?>
