<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User - Shield Plus</title>
	<link rel="stylesheet" type="text/css" href="./css/user.css">
</head>

<body>
	<div class="main-container">
		<div class="head">
			<br>
			<h1>Shield Plus Insurance</h1>
			<h5>Best health insurance partner</h5> <br>
		</div>

		<ul class="nav1">
			<li class="nav1"><a href="home.php">Home</a></li>
			<li class="nav1"><a href="about-us.php">About Us</a></li>
			<li class="nav1"><a href="plans.php">Plans</a></li>
			<li class="nav1"><a href="contact-us.php">Contact Us</a></li>
			<li class="nav1"><a href="">FAQ</a></li>
			<li class="nav2"><a href="home.php">Log out</a></li> <!-- redirect to home page after log out -->

		</ul>

		<h4>Hello name, Welcome to shield plus!</h4>

		<div class="user-details details">

			<div class="profile-pic">
				<p>add profile pic here</p>
			</div>

			<div class="user-details-content">
				<p>User ID : </p>
				<p>Username : </p> 
				<p>Plan : </p>
				<button class="button-green">Edit your details</button>
			</div>
			
		</div>
		
		<div class="claim-request details">
			<h4>Request a claim</h4>
			<hr>
			<button class="button-green">Request</button>
		</div>	

		<div class="claim-request details">
			<h4>Pending claim requests</h4>
			<hr>
			Not available right now
		</div>	

		<div class="annual-fee details">
			<h4>Pay annual fee</h4>
			<hr>
			Already paid!
		</div>

		<div class="complaint details">
			<h4>Add a complaint</h4>
			<hr>
			Not available right now
		</div>
		
		<!--
        <footer>
	        <hr>
	        &copy; 2024 Copyright Reserved - Shield Plus Insurance <br>
	        <small>email@shieldplus.com</small>
        </footer> 
    	-->

        <?php require_once('inc/footer.php') ?>
	</div>

</body>
</html>