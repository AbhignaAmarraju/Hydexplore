<?php

session_start();
$errors=array();

//connect to database
$db=mysqli_connect('localhost','root','123456','registration');

//if the register button is clicked
if (isset($_POST['register'])) {
	
$uname=$_POST['uname'];
	$email=$_POST['email'];
	$psw=$_POST['psw'];
	$psw2=$_POST['psw2'];
	
		
		if($psw != $psw2){
			array_push($errors, "The two passwords do not match");
		}

		if (count($errors)==0) {
			 
		$sql = "INSERT INTO user (username,email,password) VALUES ('$uname','$email','$psw')";
		mysqli_query($db,$sql);
		}	
}

if (isset($_POST['login'])) {
	
	$uname=$_POST['uname'];
$psw=$_POST['psw'];

	if (count($errors)==0) {

	$query= " SELECT * FROM user WHERE username='$uname' AND password='$psw' ";
	$result=mysqli_query($db,$query);;
	if (mysqli_num_rows($result)==1) {
		//log user in
		$_SESSION['uname']=$uname;
		$_SESSION['success']="You are now logged in";
		header('location: after_registeration.html');
	}
	else{
		
		$incorrect= "The username/password is incorrect";
		echo "<p style='color:red; position: fixed; text-align: center; margin-left:42%; margin-right: 30%; bottom: 40px;  '>" . $incorrect . "</p>";
		}
	}

}
