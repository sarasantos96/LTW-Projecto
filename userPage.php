<!DOCTYPE html>

<html>
  <?php session_start(); ?>
  <head>
    <title> My Profile </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="reset.css" >
    <link rel="stylesheet" href="userPageStyle.css" />
    <link rel="shortcut icon" href="res/logo.png"/>
  </head>

  <body>
    <?php include_once('templates/header.php'); ?>

    <div id= "signOptions">
      <ul>
          <li> <a href="foodify.php"> Main Page </a> </li>
          <li> <a href="logout.php"> Log Out </a> <li>
      </ul>
    </div>

    <div class = "userInfo">
      <h1 id="username"> <?php include_once('userData.php'); echo userFullName(); ?> </h1>
    </div>
  </body>
</html>
