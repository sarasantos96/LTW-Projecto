<?php
  function userFullName($path){
    $db = new PDO($path);

    $stmt = $db->prepare('SELECT Name FROM Client WHERE Username = ?');
    $stmt->execute(array($_SESSION['username']));
    $result = $stmt->fetch();

    return $result['Name'];
  }

  function userPhoto($path){
    $db = new PDO($path);

    $stmt = $db->prepare('SELECT Photo FROM Client WHERE Username = ?');
    $stmt->execute(array($_SESSION['username']));
    $result = $stmt->fetch();

    return $result['Photo'];
  }

  function getUserPass(){
    $db = new PDO('sqlite:../restaurant.db');

    $stmt = $db->prepare('SELECT Password FROM Client WHERE Username = ?');
    $stmt->execute(array($_SESSION['username']));
    $result = $stmt->fetch();

    return $result['Password'];
  }

  function setUserFullName($newuserfullname){
    $db = new PDO('sqlite:../restaurant.db');

    $stmt = $db->prepare('UPDATE Client SET Name = ? WHERE Username = ?');
    $stmt->execute(array($newuserfullname,$_SESSION['username']));
  }

  function setUsername($newusername){
    $db = new PDO('sqlite:../restaurant.db');

    $stmt = $db->prepare('UPDATE Client SET Username = ? WHERE Username = ?');
    $stmt->execute(array($newusername,$_SESSION['username']));
  }

  function setPassword($newpassword){
    $db = new PDO('sqlite:../restaurant.db');

    $stmt = $db->prepare('UPDATE Client SET Password = ? WHERE Username = ?');
    $stmt->execute(array($newpassword,$_SESSION['username']));
  }
?>
