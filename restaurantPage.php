<!DOCTYPE html>
<html>
	<?php session_start(); ?>
	<head>
		<title>Foodify - The best places to eat</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="styles/reset.css" >
		<link rel="stylesheet" href="styles/restaurantPage.css" >
		<link rel="shortcut icon" href="res/logo.png"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="addReview.js"></script>
		<link rel="stylesheet" href="styles/addReview.css" >
	</head>

	<body>
		<?php include_once('templates/header.php'); ?>
		<?php include_once('database/getRestaurantByID.php'); ?>
		<?php include_once('database/reviewData.php'); ?>
		<?php include_once('database/restaurantData.php'); ?>

		<div id= "signOptions">
			<?php if(isset($_SESSION['username']) && $_SESSION['username'] != null) { ?>
			<ul>
			   <li> <a href="userPage.php"> Hello <?= $_SESSION['username'] ?> </a> </li>
			   <li> <a href="database/logout.php"> Log Out </a> </li>
			</ul>
		  <?php } else { ?>
			<ul>
				  <li> <a href="login.php"> Log In </a> </li>
				  <li> <a href="signup.php"> Sign Up </a> <li>
			</ul>
		  <?php } ?>
		</div>
		<div class="container">

			<h1 id="restaurantName"><?=$restData['Name']?></h1>
			<img id="restPic" src=<?php echo restaurantPhoto($restData['RestaurantID']); ?> alt="Foodify" height="300" width="400">

			<div class="data">
				<h2 id="information">Information: </h2>
				<p>Address: <?=$restData['Address']?></p>
				<p>City: <?=restaurantCity($restData['RestaurantID'])?></p>
				<p>Contact: <?=$restData['PhoneNumber']?></p></br>
			</div>

			<div class="comments">
				<h2 id="reviewsection"> Review Section </h2>

				<div class="userInput" id="form_id">
					<form name="review_form" class="edit" action="database/submitReview.php?id=<?php echo$_GET["id"]?>" method="post" onSubmit="return review_submit()">
						<label id="name"> Review <br>
							<input class="userInput" type="text" name="review" > <br>
						</label>

						<div class="rating">
							<span><input type="radio" name="rating" id="str5" value="5"><label for="str5"></label></span>
							<span><input type="radio" name="rating" id="str4" value="4"><label for="str4"></label></span>
							<span><input type="radio" name="rating" id="str3" value="3"><label for="str3"></label></span>
							<span><input type="radio" name="rating" id="str2" value="2"><label for="str2"></label></span>
							<span><input type="radio" name="rating" id="str1" value="1"><label for="str1"></label></span>
						</div>
						<input id = "signUpButton" type = "submit" value = "Submit Review">
					</form>
				</div>
				<?php if(isset($_SESSION['username']) && $_SESSION['username'] != null) { ?>
					<input id="review_button" type="button" onclick="review_click()" value="Add Review">
				<?php } ?>
				<p id="warnings"></p>

					<?php
						$id = $_GET['id'];
						$restaurantName = restaurantName($id);
						$reviews = getReviews($id);
						if($reviews != NULL):
							foreach($reviews as $row): ?>
								<div class="comment">
									<img id="profilePic" src="<?php echo reviewerPic($row['ReviewerID']);?>" alt="Foodify" height="50" width="50">
									<p id="username"><?php echo reviewerUsername($row['ReviewerID']);?> said: </p>
									<h4 id="score"><?=$row['Score']?>/5</h4>
									<p id="review"><?=$row['Review']?></p>
								</div>
								<?php
									$replies = reviewReplies($row['ReviewID']);
									if($replies != NULL):
										foreach($replies as $reply): ?>
											<div class="review">
												<p class="restaurantName"> <?=$restaurantName?> said:</p>
												<p class="reply"><?=$reply['Reply']?></p>
											</div>
										<?php endforeach;
									endif;
								?>

							<?php endforeach;
						endif;
					?>
			</div>



		</div>
	</body>
