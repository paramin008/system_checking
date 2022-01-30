<?php
session_start();
	include("connect.php");
/*
	if(isset($_POST['submit'])){
		$allow=array('msexcel');
		$temp=explode(".",$_FILES['list_name']['name']);
		$extension=end($temp);
		$upload_file=$_FILES['list_name']['name'];
		move_uploaded_file($_FILES['list_name']['tmp_name'],"")
	}
*/
	$p_name = $_POST['p_name'];
	$p_lname= $_POST['p_lname'];
	$p_address = $_POST['p_address'];
	$c_name = $_POST['c_name'];
	$p_user = $_POST['p_user'];
	$p_pass = $_POST['p_pass'];

	
	$sql = "INSERT INTO tb_parent (p_fname, p_lname, p_address, p_cname, p_user, p_pass, p_status) VALUES('$p_name','$p_lname','$p_address','$c_name','$p_user','$p_pass','3')";
	$result = mysqli_query($dbcon,$sql);
	
	echo "บันทึกข้อมูลเรียบร้อยแล้ว";
	echo '<meta http-equiv="refresh" content="1; URL=login.php">';
    //echo '<meta http-equiv="refresh" content="1; URL=sys_product_detail.php?id='.$appoint_id.'">';
?>