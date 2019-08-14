<?php 
require_once('../class/User.php');
if(isset($_POST['un']) && isset($_POST['pw']) ){
	$username = $_POST['un'];
	$password = $_POST['pw'];
	$password = md5($password);

	$result = $user->login($username, $password);


	if(!empty($result)){
		$_SESSION['user_logged'] = $result['user_id'];

		header("Location: ../home.php");

	}else {
		header("Location: ../login.php");
	}


}//end isset