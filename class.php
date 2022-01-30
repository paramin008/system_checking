<?php
session_start();
	include("connect.php");

	$id_select = $_POST['txth_ID'];
	$class = $_POST['class'];
	
	
	$sql_update ="UPDATE tb_user SET class_s='$class' WHERE id_user = $id_select";
$result_update = mysqli_query($dbcon,$sql_update);
	echo "บันทึกข้อมูลเรียบร้อยแล้ว";
	echo '<meta http-equiv="refresh" content="1; URL=hompage.php">';
    //echo '<meta http-equiv="refresh" content="1; URL=sys_product_detail.php?id='.$appoint_id.'">';
?>