<!DOCTYPE html>

<html>
  <head>
    <title> Foodify - Sign Up </title>
    <meta charset="utf-8" >
    <link rel="stylesheet" href="styles/signupstyle.css" >
    <link rel="shortcut icon" href="res/logo.png"/>
	<script type="text/javascript" src="signup.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  </head>

  <body>
    <a href="foodify.php" > <img id="logo" src = "res/logo.png" alt = "Foodify" height="42" width="42"> </a>
    <h2 id="signUp"> Sign up to Foodify </h2>
    <form name="signup_form" class="userdata" action="database/signup.php" method="post" onsubmit="return submitForm()">
        <label id="name"> Name <br>
          <input class="userInput" type="text" name="name" > <br>
        </label>
        <label id="username"> Username <br>
          <input class="userInput" type="text" name="username" > <br>
        </label>
        <label id="password"> Password <br>
          <input class="userInput" type="password" name="password" >
        </label>
        <div class="usertype">
          <input type="radio" name="usertype" value="owner">Owner
          <input type="radio" name="usertype" value="reviewer" checked="checked">Reviewer
        </div>
        <input id = "signUpButton" type = "submit" value = "Sign up">
    </form>

	<p id="warnings"></p>

  </body>
</html>
