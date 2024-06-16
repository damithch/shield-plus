<?php require_once('inc/connection.php')?>

<?php 
	// check for form submission
	if (isset($_POST['submit'])){

		$errors = array();

		//check if the username and password has been entered
		if(!isset($_POST['userid']) || strlen(trim($_POST['userid'])) < 1){
			$errors[] = 'User is Missing or Invalid';
		}

		if(!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1){
			$errors[] = 'Password is Missing or Invalid';
		}

		//check if there any errors in the form
		if(empty($errors)){

			// save userid and password into variables
			$userid = $_POST['userid'];
			$password = $_POST['password'];

			
		}

	}
?>

<?php //require_once('inc/header1.php')?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign in - Shield Plus</title>
	<link rel="stylesheet" type="text/css" href="./css/sign-in.css">
</head>

<body>
	<div class="main-container">
		<?php require_once('inc/header1-1.php') ?>
		<h3><u>Log in form</u></h3>
		<div class="form-container">
			
			<form id="form" action="sign-in.php" method="post">
				
		        <div class="ele">
		        <label>User Id</label> <br>
		        <input type="userid" name="userid"  required class="b"> <br>
		        </div>

		        <div class="ele">
		        <label>Password</label> <br>
		        <input type="password" name="password" required class="b" id="pwd1"> <br>
		        </div>

		        <button class="button-green" class="center">Sign In</button> <br>

		        <div class="text-center">
		        <label>Don't have an account? <a href="sign-up.php">Sign up here!</a></label>
		        </div>

		        <div class="text-center">
		        <label><a href="admin-login">Log in as Admin</a></label>
		        </div>


	        </form>
        </div>

        <footer>
	        <hr>
	        &copy; 2024 Copyright Reserved - Shield Plus Insurance <br>
	        <small>email@shieldplus.com</small>
        </footer>

        <?php //require_once('inc/footer.php') ?>
	</div>

</body>
</html>