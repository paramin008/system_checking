<?php

	include("connect.php");
	$r_class = $_POST['class'];

	
	
	$sql = "INSERT INTO tb_class (c_class) VALUES('$r_class')";
	$result = mysqli_query($dbcon,$sql);
	
	echo "บันทึกข้อมูลเรียบร้อยแล้ว";
	echo '<meta http-equiv="refresh" content="1; URL=hompage.php">';
    
?>
