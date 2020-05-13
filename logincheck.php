<?php
session_start();

$con = mysqli_connect('localhost', 'root' );
if($con){
	echo "conenction successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con, 'admin-login');

if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['password'];

	$sql = " select * from  admintable where user='$username' and password='$password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['user'] = $username;
			header('location:adminmainpage.php');
		}else{
			echo "login failed";
			header('location:index1.php');
		}

    }


?>

