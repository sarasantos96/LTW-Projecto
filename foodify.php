<!DOCTYPE html>

<html>
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

    <div id="header">
      <header>
        <img id="headerimg" src = "res/logo.png" alt = "Foodify" height="42" width="42">
        <div id="headerText">
          <h1 id ="mainTitle"> Foodify </h1>
          <h2 id="slogan"> Eat what you want, where you want </h2>
        </div>
      </header>
      <div id= "signOptions">
	  <?php if(isset($_SESSION['username'])) { ?>
        <ul>
		   <li> <a href="userPage.php"> Olá </a> </li>
		   <li> <a href="logout.php"> Log Out </a> </li>
		</ul>
	  <?php } else { ?>
		<ul>
			  <li> <a href="login.php"> Log In </a> </li>
			  <li> <a href="signup.html"> Sign Up </a> <li>
		</ul>
	  <?php } ?>
      </div>
    </div>

    <div id="search">
      <h1 class = "searchQuestion"> Where are you eating today? </h1>
      <form class = "searchbox" action="search.php" method="get">
        <input name="cityName" id="searchb" type = "text" placeholder ="Search for a restaurant or city...">
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
