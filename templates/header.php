<div id="header">
  
  <header>
    <img id="headerimg" src = "res/logo.png" alt = "Foodify" height="42" width="42">
    <div id="headerText">
      <h1 id ="mainTitle"> Foodify </h1>
      <h2 id="slogan"> Eat what you want, where you want </h2>
    </div>
  </header>

      <div id= "signOptions">
	  <?php if(isset($_SESSION['username']) && $_SESSION['username'] != null) { ?>
        <ul>
		   <li> <a href="userPage.php"> Hello <?= $_SESSION['username'] ?> </a> </li>
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
