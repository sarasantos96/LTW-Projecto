<?php
	session_start();
	$restaurant = $_SESSION['restaurant'];
	
	echo $restaurant;
?>