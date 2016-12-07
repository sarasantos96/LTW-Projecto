<html>
  <head>
    <title> Foodify - Log In </title>
    <meta charset="utf-8" >
    <link rel="stylesheet" href="loginstyle.css" >
    <link rel="shortcut icon" href="res/logo.png"/>
	<script type="text/javascript" src="login.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  <head>

  <body>
    <a href = "foodify.php"> <img id="logo" src = "res/logo.png" alt = "Foodify" height="42" width="42"> </a>
    <h2 id="logIn"> Log in to Foodify </h2>
    <form name="login_form" class="userdata" action="userlogin.php" method="post" onSubmit="return submitForm()">
        <label id="username"> Username <br>
          <input class="userInput" type="text" name="username"> <br>
        </label>
        <label id="password"> Password <br>
          <input class="userInput" type="password" name="password">
        </label>
        <input id = "logInButton" type = "submit" value = "Log In">
    </form>
	
	<p id="warnings"></p>
	
  </body>
</html>
