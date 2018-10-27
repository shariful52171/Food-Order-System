<?php
include_once('include/header.php');

if(isset($_POST['login'])){  
    $phone = $_POST['user_phone'];  
    $password = $_POST['password'];  
	if(!empty($_POST['user_phone']) && !empty($_POST['password'])){
		$phone1 = mysqli_real_escape_string($conn, $phone);
		$password1 = mysqli_real_escape_string($conn, $password);
		$check_user="SELECT * FROM `userlogin` WHERE `phone`='$phone1' AND `password`='$password1'";  
  
		$run=mysqli_query($conn,$check_user);  
  
		if(mysqli_num_rows($run)){  
			echo "<script>window.open('index.php','_self')</script>";  
	  
			$_SESSION['phone']=$phone;//here session is used and value of $user_email store in $_SESSION.  
	  
		}else{
			echo "<script>popup('phone or password is incorrect!')</script>";
		} 
	}  
}
?>
<section class="login-register-area">
	<div class="container">
		<div class="row">
			<div class="col-md-4 sign-in-box">
				<div class="login-body">
					<div class="login-text">
						<h2>Login</h2>
						<p>If you were hungry enough to register to our website before, you can login here</p>
					</div>
					<div class="login-form-area">
						<form action="index.php" method="post">
							<input type="text" name="user_phone" class="login-form-feild loginphone" placeholder="Mobile Number"/>
							<input type="password" name="password" class="login-form-feild loginpass" placeholder="Your Password"/>
							<button name="login" class="login-savbtn">Login Now</button>
						</form>
					</div>
					<div class="forgot-pass">
						Forgot password? It's ok. <a class="reset-pw" href="">Reset password</a>
					</div>
				  </div>
			</div>
			<div class="col-md-offset-3 col-md-5 register-area">
				<div class="register-body">
						<div class="login-text">
							<h2>Sign Up</h2>
							<p>Sign up using your Email address</p>
						</div>
						<form action="index.php" method="post">
							<input type="text" name="name" class="login-form-feild nameman" placeholder="Enter Your Name"/>
							
							<input type="email" name="email" class="login-form-feild loginemail" placeholder="Your Email"/>
							
							<input type="password" name="password" class="login-form-feild loginpass" placeholder="Your Password"/>
							
							<input type="password" name="passwordcon" class="login-form-feild loginpass" placeholder="Confirm Password"/>
							 <p class="active-number">Your Active Mobile Number</p>
							 <input type="text" name="user_phone" class="login-form-feild phonebg" placeholder="eg. 01757-XXXXXX"/>
							<button name="register" class="login-savbtn">Create My Account</button>
						</form>
				  </div>
			</div>
		</div>
	</div>
</section>
<?php
if(isset($_POST['register'])){
	$username = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$passwordcon = $_POST['passwordcon'];
	$phone = $_POST['user_phone'];
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['passwordcon']) && !empty($_POST['user_phone'])){
		$user = mysqli_real_escape_string($conn, $username);
		$user_mail = mysqli_real_escape_string($conn, $email);
		$pass = mysqli_real_escape_string($conn, $password);
		$pass_con = mysqli_real_escape_string($conn, $passwordcon);
		$number = mysqli_real_escape_string($conn, $phone);
		//here query check weather if user already registered so can't register again.  
		$check_phone_query = "select * from `userlogin` WHERE `email` = '$user_mail' AND `phone` = '$number'";  
		$run_query = mysqli_query($conn, $check_phone_query);  
	  
		if(mysqli_num_rows($run_query)>0){  
			echo "<script>alert('phone number $number is already exist in our database, Please try another one!')</script>";  
			exit();  
		}  
		
	//insert the user into the database.  
		$insert_user="INSERT INTO `userlogin` (`user_id`,`name`,`email`,`password`,`phone`) VALUE ('','$user','$user_mail','$pass','$number')";  
		if(mysqli_query($conn, $insert_user)){  
			echo"<script>window.open('index.php','_self')</script>";  
		}
	}
}
include_once('include/footer.php');
?>