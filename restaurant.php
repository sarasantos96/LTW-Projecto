<?php
	$db = new PDO('sqlite:restaurant.db');
  
	$stmt = $dbh->prepare('SELECT * FROM City');
					   
	$stmt->execute();
?>