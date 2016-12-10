<?php
  session_start();

  $nameInput = $_POST['name'];
  $usernameInput= $_POST['username'];
  $oldPasswordInput = $_POST['oldpassword'];
  $newPasswordInput= $_POST['newpassword'];
  $hashed_oldpassword = sha1($oldPasswordInput);
  $hashed_newpassword = sha1($newPasswordInput);
  $path = 'sqlite:../restaurant.db';

  $db = new PDO('sqlite:../restaurant.db');

  include_once('userData.php');

	if(userFullName($path) != $nameInput)
    setUserFullName($nameInput);

  if($_SESSION['username'] != $usernameInput){
    setUsername($usernameInput);
    $_SESSION['username'] = $usernameInput;
  }

  if($hashed_oldpassword == getUserPass() && $hashed_oldpassword != $hashed_newpassword)
    setPassword($hashed_newpassword);

  header('Location: ../userPage.php');
 ?>
