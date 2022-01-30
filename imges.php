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
	$im_name = $_POST['im_name'];
	$im_grad = $_POST['im_grad'];

	
	$ext = pathinfo(basename($_FILES['im_imges']['name']), PATHINFO_EXTENSION);
	$new_image_name = 'imges_'.$im_name.".".$ext;
	$image_path = "imges/";
	$upload_path = $image_path.$new_image_name;
	
	$success = move_uploaded_file($_FILES['im_imges']['tmp_name'],$upload_path);
	
	$pro_image = $new_image_name;
	
	
	$sql = "INSERT INTO tb_imges (im_name, im_grad, im_imges) VALUES('$im_name','$im_grad','$pro_image')";
	$result = mysqli_query($dbcon,$sql);

	
	echo "บันทึกข้อมูลเรียบร้อยแล้ว";
	echo '<meta http-equiv="refresh" content="1; URL=hompage.php">';
    //echo '<meta http-equiv="refresh" content="1; URL=sys_product_detail.php?id='.$appoint_id.'">';
?>