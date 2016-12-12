<?php
	session_start();
	$id = $_GET['id'];
	
	include_once('userData.php');
	
	$userID = userID('sqlite:../restaurant.db');
	
	$db = new PDO('sqlite:../restaurant.db');
	
	$stmt = $db->prepare('SELECT * FROM Restaurant WHERE OwnerID = ? AND RestaurantID = ?');
	$stmt->execute(array($userID, $id));
	$result = $stmt->fetch();
	
	if($result){
		$deleteRes = $db->prepare('DELETE FROM Restaurant WHERE RestaurantID = ?');
		$deleteRes->execute(array($id));
		
		$deleteRevs = $db->prepare('DELETE FROM Review WHERE RestaurantID = ?');
		$deleteRevs->execute(array($id));
		
		header('Location: ../userPage.php');
	}else{
		echo "<h1>PERMISSION DENIED</h1>";
	}
	
?>