<!DOCTYPE html>

<html>
	<?php session_start (); ?>
  <head>
    <title> Foodify - The best places to eat </title>
    <meta charset="utf-8" >
    <link rel="stylesheet" href="styles/reset.css" >
    <link rel="stylesheet" href="styles/foodifystyle.css" >
    <link rel="shortcut icon" href="res/logo.png"/>
  </head>

  <body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
      $(function(){
      	$('.fadein img:gt(0)').hide();
      	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 2500);
      });
    </script>

		<?php include_once('templates/header.php'); ?>

		<div id= "signOptions">
	<?php if(isset($_SESSION['username']) && $_SESSION['username'] != null) { ?>
			<ul>
		 <li> <a href="userPage.php"> Hello, <?= $_SESSION['username'] ?> </a> </li>
		 <li> <a href="database/logout.php"> Log Out </a> </li>
	</ul>
	<?php } else { ?>
	<ul>
			<li> <a href="login.php"> Log In </a> </li>
			<li> <a href="signup.php"> Sign Up </a> </li>
	</ul>
	<?php } ?>
		</div>

		<div id="search">
			<h1 class = "searchQuestion"> Where are you eating today? </h1>
			<form class = "searchbox" action="search.php" method="get">
				<input name="search" id="searchb" type = "text" placeholder ="Search for a restaurant or city...">
				<input id = "submit" type = "submit" value = "Search">
			</form>
		</div>

    <div class="fadein">
      <img src="res/s1.jpg" height="800">
      <img src="res/s2.jpg" height="800">
      <img src="res/s3.jpg" height="800">
      <img src="res/s4.jpg" height="800">
      <img src="res/s5.jpg" height="800">
    </div>
  </body>
</html>
