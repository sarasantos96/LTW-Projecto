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