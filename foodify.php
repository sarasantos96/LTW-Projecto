<!DOCTYPE html>

<html>
	<?php session_start (); ?>
  <head>
    <title> Foodify - The best places to eat </title>
    <meta charset="utf-8" >
    <link rel="stylesheet" href="reset.css" >
    <link rel="stylesheet" href="foodifystyle.css" >
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

		<div id="search">
			<h1 class = "searchQuestion"> Where are you eating today? </h1>
			<form class = "searchbox" action="search.php" method="get">
				<input name="search" id="searchb" type = "text" placeholder ="Search for a restaurant or city...">
				<input id = "submit" type = "submit" value = "Search">
			</form>
		</div>

    <div class="fadein">
      <img src="res/s1.jpg">
      <img src="res/s2.jpg">
      <img src="res/s3.jpg">
      <img src="res/s4.jpg">
      <img src="res/s5.jpg">
    </div>
  </body>
</html>
