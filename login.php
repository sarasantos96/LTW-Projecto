<!DOCTYPE html>

<html>
  <head>
    <title> Foodify - Log In </title>
    <meta charset="utf-8" >
    <link rel="stylesheet" href="loginstyle.css" >
    <link rel="shortcut icon" href="res/logo.png"/>
  <head>

  <body>
    <a href = "foodify.php"> <img id="logo" src = "res/logo.png" alt = "Foodify" height="42" width="42"> </a>
    <h2 id="logIn"> Log in to Foodify </h2>
    <form class="userdata" action="userlogin.php" method="post">
        <label id="username"> Username <br>
          <input class="userInput" type="text" name="username"> <br>
        </label>
        <label id="password"> Password <br>
          <input class="userInput" type="password" name="password">
        </label>
        <input id = "logIn" type = "submit" value = "Log In">
    </form>
  </body>
</html>
