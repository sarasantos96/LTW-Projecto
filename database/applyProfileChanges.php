<?php
  session_start();

  $token = $_POST['csrf'];

  if($token != $_SESSION['csrf']){
    echo 'Permission Denied';
  }else{

    $nameInput = $_POST['name'];
    $usernameInput= $_POST['username'];
    $userTypeInput = $_POST['usertype'];
    $oldPasswordInput = $_POST['oldpassword'];
    $newPasswordInput= $_POST['newpassword'];
    $hashed_oldpassword = sha1($oldPasswordInput);
    $hashed_newpassword = sha1($newPasswordInput);
    $path = 'sqlite:../restaurant.db';

    $db = new PDO($path);

    include_once('userData.php');

  	if(userFullName($path) != $nameInput)
      setUserFullName($nameInput);

    if($_SESSION['username'] != $usernameInput){
      setUsername($usernameInput);
      $_SESSION['username'] = $usernameInput;
    }

    if($userTypeInput == "owner"){
      $newType = 1;
    }else{
      $newType = 0;
    }

    if(userType($path) != $newType){
      setUserType($newType);
    }

    if($hashed_oldpassword == getUserPass() && $hashed_oldpassword != $hashed_newpassword)
      setPassword($hashed_newpassword);


    header('Location: ../userPage.php');
  }
 ?>
