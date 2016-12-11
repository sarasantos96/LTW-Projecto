<!DOCTYPE html>

<html>
  <?php session_start(); ?>

  <head>
    <title> Edit My Profile </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles/reset.css" >
    <link rel="stylesheet" href="styles/editUserPageStyle.css" />
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
        <?php include_once('database/userData.php'); $path = 'sqlite:restaurant.db' ?>
        <img id="profimg" src = <?php echo userPhoto($path); ?> alt = "Foodify" height="200" width="200"> <br>
        <form class="photoForm" action="database/choosePhoto.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="image"  />
         <input id ="submitButton" type="submit"/>
        </form>
        <form name="edit_form" class="edit" action="database/applyProfileChanges.php" method="post">
            <label id="name"> Name <br>
              <?php $name = userFullName($path); ?>
              <input class="userInput" type="text" name="name" value= " <?= $name ?> " <br>
            </label>
            <label id="username"> Username <br>
              <input class="userInput" type="text" name="username" value = <?= $_SESSION['username'] ?> > <br>
            </label>
            <label id="password"> Password <br>
              <div id="oldPasswordInput">
                <label id="oldpassword"> Old Password
                  <input class="userInput" type="password" name="oldpassword" >
                </label>
              </div>
              <div id="newPasswordInput">
                <label id="newpassword"> New Password
                  <input class="userInput" type="password" name="newpassword" >
                </label>
              </div>
            </label>
            <div class="usertype">
              <?php if(userType($path) == 1){ ?>
                  <input type="radio" name="usertype" value="owner" checked="checked">Owner
                  <input type="radio" name="usertype" value="reviewer">Reviewer
              <?php }else{ ?>
                  <input type="radio" name="usertype" value="owner">Owner
                  <input type="radio" name="usertype" value="reviewer" checked="checked">Reviewer
              <?php } ?>
            </div>
            <input id = "applyButton" type = "submit" value = "Apply Changes">
        </form>
    </div>
  </body>
</html>
