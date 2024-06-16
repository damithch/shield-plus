<?php require_once('inc/connection.php')?>
<?php require_once('inc/header1.php')?>

<body>
	<div class="main-container">
		<?php require_once('inc/header1-1.php') ?>
		<h3>Register Form</h3>
		<div class="form-container">
			
			<form id="form" action="/" method="post">
				<div class="ele">
				<label>First Name</label> <br>
				<input type="text" name="firstName" required class="a"> <br>
				</div>

		        <div class="ele">
		        <label>Last Name</label> <br>
		        <input type="text" name="lastName" required class="a"> <br>
		        </div>

		        <div class="ele">
		        <label>Gender</label> <br>
		        <input type="radio" name="gender" value="male" required>
		        <label>Male</label>
		        <input type="radio" name="gender" value="female">
		        <label>Female</label> <br>
		        </div>

		        <div class="ele">
		        <label>Mobile Number</label> <br>
		        <small>Format : 07xxxxxxxx</small> <br>
		        <input type="tel" name="mobileNumber" maxlength="10" required pattern="[0-9]{10}" class="a"> <br>
		        </div>

		        <div class="ele">
		        <label>Email Address</label> <br>
		        <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required class="a"> <br>
		        </div>

		        <div class="ele">
		        <label>Address</label> <br>
		        <small>[Type address in same line]</small> <br>
		        <!--<input type="text" name="address"> <br>-->
		        <textarea name="address" rows="4" cols="65"></textarea>
		        </div>

		        <div class="ele">
		        <label>Choose your date of birth</label> <br>
		        <input type="date" name="dob"> <br>
		        </div>

		        <div class="ele">
		        <label>Password</label> <br>
		        <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required class="b" id="pwd1"> <br>
		        </div>
        
		        <div class="ele">
		        <label>Re-enter password</label> <br>
		        <input type="password" name="rePassword" class="b" id="pwd2"> <br>
		        </div>

		        <div class="ele">
		        <input type="checkbox" name="">
		        <label>Accept Terms and Conditions</label> <br>
		        </div>

		        <button>Submit</button>


	        </form>
        </div>

        <?php require_once('inc/footer.php') ?>
	</div>

</body>
</html>