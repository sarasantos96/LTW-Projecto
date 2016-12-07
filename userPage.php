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
      <?php include_once('userData.php'); ?>
      <img id="profimg" src = <?php echo userPhoto(); ?> alt = "Foodify" height="200" width="200">
      <h1 id="userfullname"> <?php echo userFullName(); ?> </h1>
      <h2 id="username" > <?= $_SESSION['username'] ?></h2>
      <button id="editButton" onclick="location.href = 'editUserpage.php'"> Edit Profile </button>
    </div>
  </body>
</html>
