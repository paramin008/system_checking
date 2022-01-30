<?php
	
	require_once "connect.php";
	

	
	
	$p_user= $_POST['user'];
	$p_pass = $_POST['pass'];
	//$status = $_REQUEST['status'];
//echo $status;

	
	

		 
$sql_select = "select * from tb_parent  WHERE p_user='$p_user' AND p_pass='$p_pass'";
	$result_se = mysqli_query($dbcon,$sql_select);
	//$num_row = mysqli_num_rows($result_se);

	 
if($result_se && mysqli_num_rows($result_se) == 1){
	
	$dba = mysqli_fetch_array($result_se);
	$_SESSION['p_fname']=$dba['p_fname'];
	$_SESSION['p_lname']=$dba['p_lname'];
	$_SESSION['p_cname']=$dba['p_cname'];
	$_SESSION['p_user']=$dba['p_user'];
	$_SESSION['p_status']=$dba['p_status'];
	
	
	
	if($dba['p_status'] == 3){
					$dba['p_status'] = 3;
					echo "<meta http-equiv='refresh' content='1; URL=homparent.php'>";
					//header("Location: main.php");
				}else{
					//echo "<meta http-equiv='refresh' content='1; URL=index.php'>";
					//header("Location: index.php");
				}
}
	
 //header('Location: hompage.php');
 
	

	 exit();
	 
?>