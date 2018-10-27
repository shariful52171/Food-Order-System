<?php 
	include_once('include/header.php');
	$error = array();
if(loggedin() == false){
	if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['passwordcon']) && isset($_POST['user_phone'])){
		$username = htmlspecialchars(htmlentities($_POST['name']));
		$email = htmlspecialchars(htmlentities($_POST['email']));
		$password = htmlspecialchars(htmlentities($_POST['password']));
		$passwordcon = htmlspecialchars(htmlentities($_POST['passwordcon']));
		$userphone = htmlspecialchars(htmlentities($_POST['user_phone']));
			if(!empty($username) && !empty($email) && !empty($user_phone) && !empty($password) && !empty($passwordcon)){
				if($password == $passwordcon){
					$usernamein = mysqli_real_escape_string($conn, $username);
					$emailin = mysqli_real_escape_string($conn, $email);
					$userphonein = mysqli_real_escape_string($conn, $userphone);
					$passwordin = md5(mysqli_real_escape_string($conn, $password));
					$q = "SELECT `username` FROM `userlogin` WHERE `phone`='$phone'";
					$query =  mysqli_query($db, $q);
					if($query->num_rows ==  0){
						$q2 = "INSERT INTO `userlogin` (`id`,`name`,`email`,`password`,`phone`) VALUES ('','$usernamein','$emailin','$passwordin','$userphonein')";
						if(mysqli_query($conn, $q2)){
							header('Location:login.php');
						}
					}else{
						$error[] = 'Username Already Exists. Please Try A New One.';
					}
				}else{
					$error[] = 'Both Password Must Match';
				}
			}else{
				$error[] =  'Please Input All Fields';
			}
	}
}else{
	echo"you are logedin";
}	
	
?>