<!DOCTYPE html>

<html>
  <?php session_start(); ?>

  <head>
    <title> Edit My Profile </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="reset.css" >
    <link rel="stylesheet" href="editUserPageStyle.css" />
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

    <div class="userInput">
        <?php include_once('userData.php'); ?>
        <img id="profimg" src = <?php echo userPhoto(); ?> alt = "Foodify" height="200" width="200"> <br>
        <form class="photoForm" action="choosePhoto.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
        </form>
        <form name="edit_form" class="edit" action="" method="post">
            <label id="name"> Name <br>
              <input class="userInput" type="text" name="name" > <br>
            </label>
            <label id="username"> Username <br>
              <input class="userInput" type="text" name="username" > <br>
            </label>
            <label id="password"> Password <br>
              <input class="userInput" type="password" name="password" > <br>
            </label>
            <input id = "applyButton" type = "submit" value = "Apply Changes">
        </form>
    </div>
  </body>
</html>
