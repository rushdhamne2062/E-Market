<?php
$con=mysqli_connect("localhost","root","","emarket_registration");

if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL:".mysqli_connect_error();
}

if(isset($_POST['submit'])){
	$firstname=($_POST['fn']);
	$lastname=($_POST['ln']);
	$email=($_POST['email']);
	$mobileno=($_POST['mn']);
	$gender=($_POST['gender']);
	$password=($_POST['pass']);
	$confirmpassword=($_POST['conpass']);

	$query="INSERT INTO `regis_data`(`firstname`, `lastname`, `email`, `mobile number`, `gender`, `newpassword`, `confirmpassword`) VALUES ('$firstname','$lastname','$email','$mobileno','$gender','$password','$confirmpassword')";

	$result=mysqli_query($con, $query);

	if($result){
		echo "<script>
		alert('Registration Successful');
		window.location='login.html';
		</script>";
	}
	else{
		echo "<script>
		alert('Registration Failed!');
		window.location='Registration.html';
		</script>";
	}

	// if(empty($pass)){
	// 	echo "<script>alert('password not found!')</script>";
	// }
	// else if($password!=$confirmpassword){
	// 	echo "<script>alert('Not Match password!');
	// 	window.location='Registration.html';</script>";
	// }


	
}


?>