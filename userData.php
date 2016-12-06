<?php

  function userFullName(){
    	$db = new PDO('sqlite:restaurant.db');

    $stmt = $db->prepare('SELECT Name FROM Client WHERE Username = ?');
    $stmt->execute(array($_SESSION['username']));
    $result = $stmt->fetch();

    echo $result['Name'];
  }
?>
