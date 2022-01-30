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
if(isset($_SESSION['givenName'])){
			if(isset($_SESSION['familyName'])){
		 	
			$fname = $_SESSION['givenName'];
			$lname = $_SESSION['familyName'];
			$sql = "select * from tb_user where fname ='$fname' AND lname = '$lname'";
			$result = mysqli_query($dbcon,$sql);
			$dba = mysqli_fetch_array($result);
			$id_user = $dba['id_user'];
			$status = $dba['status'];
				
			}
}
	

	$sub_name= $_POST['sub_name'];
	$class = $_POST['class'];
	$trem = $_POST['trem'];
	
			$sum = 0;
			$date = date("Y");
			$sum = $date + 543;
	
	$ext = pathinfo(basename($_FILES['list_name']['name']), PATHINFO_EXTENSION);
	$new_image_name = 'excel'."_".$sub_name.'_'.$class.'_'.$trem.'_'.$sum.".".$ext;
	$image_path = "documents/";
	$upload_path = $image_path.$new_image_name;
	
	$success = move_uploaded_file($_FILES['list_name']['tmp_name'],$upload_path);
	
	$pro_image = $new_image_name;
	
			
	
	$sql = "INSERT INTO tb_subject (instructor, sub_name, class, trem, year, list_names, code_number) VALUES('$id_user','$sub_name','$class','$trem','$sum','$pro_image','00001')";
	$result = mysqli_query($dbcon,$sql);

	
	echo "บันทึกข้อมูลเรียบร้อยแล้ว";
	echo '<meta http-equiv="refresh" content="1; URL=hompage.php">';
    //echo '<meta http-equiv="refresh" content="1; URL=sys_product_detail.php?id='.$appoint_id.'">';
?>