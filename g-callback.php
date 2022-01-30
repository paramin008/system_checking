<?php
	require_once "config.php";
	require_once "connect.php";

	
	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']);
		//$gClient->setAccessToken($_POST['status']);
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
		
	
	}else{
		header('Location:login.php');
		exit();
	}
	

	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();
/*
echo "<pre>";
var_dump($userData);
*/


	$_SESSION['id'] = $userData['id'];
	$_SESSION['email'] = $userData['email'];
	$_SESSION['gender'] = $userData['gender'];
	$_SESSION['picture'] = $userData['picture'];
	$_SESSION['familyName'] = $userData['familyName'];
	$_SESSION['givenName'] = $userData['givenName'];
	//$_REQUEST['status'] = $userData['status'];
	
	$id = $_SESSION['id'];
	$givenName = $_SESSION['givenName'];
	$familyName = $_SESSION['familyName'];
	$email = $_SESSION['email'];
	$picture = $_SESSION['picture'];
	$token = $_SESSION['access_token'];
	//$status = $_REQUEST['status'];
//echo $status;

	
	
if(!empty($userData)){
		 
$sql_select = "select * from tb_user  WHERE fname = '".$givenName."' AND lname = '".$familyName."'";
	$result_se = mysqli_query($dbcon,$sql_select);
	$num_row = mysqli_num_rows($result_se);
	$dba = mysqli_fetch_array($result_se);
	 
	$_SESSION['id_user']=$dba['id_user'];
	$_SESSION['fname']=$dba['fname'];
	$_SESSION['status']=$dba['status'];
	$_SESSION['class_s']=$dba['class_s'];
	 
		 
		 if($num_row > 0){
		
$sql_update ="UPDATE tb_user SET fname='".$givenName."', lname='$familyName', class_s='".$dba['class_s']."', email='$email', picture = '$picture' status='".$dba['status']."' WHERE id_user = '".$dba['id_user']."'";
$result_update = mysqli_query($dbcon,$sql_update);
			 
		 }else{
			 
			

			 
    $sql_in = "INSERT INTO tb_user (fname, lname, class_s, email, picture, status)  VALUES('$givenName','$familyName','NUll','$email','$picture','0')";
		$result_in = mysqli_query($dbcon,$sql_in);
				
					
		
			 
		}
	
}

 header('Location:hompage.php');
 
	

	 exit();
	 
?>