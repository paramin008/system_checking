
<ul class="sidebar navbar-nav">
		<?php
		 		if(isset($_SESSION['access_token'])){
				
		?>
      <li class="nav-item active">
        <font class="nav-link" href="index.php">
           <i class="fas fa-toggle-on" style="font-size: 25px; color: limegreen"></i>
		
          <span>&nbsp;คุณ&nbsp;<?php echo $_SESSION['givenName'] ?>&nbsp;
						    <?php echo $_SESSION['familyName'] ?>
			</span>
			
			
			
        </font>
      </li>
	<?php
				}
						
				
			?>
	
	
      <li class="nav-item">
        <a class="nav-link" href="hompage.php">
    <i class="fas fa-home" style="font-size: 25px; color: dodgerblue"></i>
          <span>หน้าแรก</span></a>
			 
      </li>
	<?php
	if(isset($_SESSION['givenName'])){
			if(isset($_SESSION['familyName'])){
		 	
			$fname = $_SESSION['givenName'];
			$lname = $_SESSION['familyName'];
			$sql = "select * from tb_user where fname ='$fname' AND lname = '$lname'";
			$result = mysqli_query($dbcon,$sql);
			$dba = mysqli_fetch_array($result);
			$id_user = $dba['id_user'];
			$status = $dba['status'];
			$fname = $dba['fname'];
			$lname = $dba['lname'];
			$clssss = $dba['class_s'];
	
	?>
     
	
	<?php
			}
	}
	?>
	
		<?php
	

			$objPHPExcel = PHPExcel_IOFactory::load("data/ใบรายชื่อ.xls");

		 $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
		
		foreach ($cell_collection as $cell) {
            // ค่าสำหรับดูว่าเป็นคอลัมน์ไหน เช่น A B C ....
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            // คำสำหรับดูว่าเป็นแถวที่เท่าไหร่ เช่น 1 2 3 .....
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            // ค่าของข้อมูลในเซลล์นั้นๆ เช่น A1 B1 C1 ....
            $data_value = $objPHPExcel->getSheet(1)->getCell($cell)->getValue();          
            
			
			
        }

		$allDataInSheet = $objPHPExcel->getSheet(1)->toArray(null,true,true,true);
        
		$arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet

		
    	for($i=7; $i<=$arrayCount; $i++ ){
    
		
        $value1 = trim($allDataInSheet[$i]["A"])."<br>";
		$value2 = trim($allDataInSheet[$i]["B"]);
		$value3 = trim($allDataInSheet[$i]["C"])."<br>";
		$value4 = trim($allDataInSheet[$i]["D"])."<br>";
		$value5 = trim($allDataInSheet[$i]["E"])."<br>";
		$value6 = trim($allDataInSheet[$i]["F"])."<br>";
		$value7 = trim($allDataInSheet[$i]["G"]);
		$value8 = trim($allDataInSheet[$i]["I"]);
		$value9 = trim($allDataInSheet[$i]["J"]);
		$value10 = trim($allDataInSheet[$i]["K"]);
		$value11 = trim($allDataInSheet[$i]["L"]);
		
		//$number = number_format($value7,2);
        //var_dump($value1);
		//var_dump($value2);
			if($_SESSION['givenName'] == $allDataInSheet[$i]["E"]  && $_SESSION['familyName'] == $allDataInSheet[$i]["F"]){
				
			
			
			
			
?>
			
									   
		<li class="nav-item">
         <font class="nav-link">
        <i class="fas fa-user-alt" style="font-size: 25px; color: darkorange"></i>
          <span>&nbsp;<?php echo $allDataInSheet[$i]["G"];?></span>
			</font>
      </li>
	
								   
		<li class="nav-item">
         <font class="nav-link">
             <i class="fas fa-chalkboard-teacher" style="font-size: 25px; color: forestgreen"></i>

          <span>&nbsp;<?php echo $allDataInSheet[$i]["B"];?></span>
			</font>
      </li>
	
		<?php
			
			
$sql_update ="UPDATE tb_user SET class_s = '$value2', status = '$value7' WHERE id_user = '$id_user'";
$result_update = mysqli_query($dbcon,$sql_update);
						
			
				
			}else if($_SESSION['givenName'] == $allDataInSheet[$i]["J"]  && $_SESSION['familyName'] == $allDataInSheet[$i]["K"]){
				
		
			
		 ?>
	
<li class="nav-item">
         <font class="nav-link">
         <i class="fas fa-user-alt" style="font-size: 25px; color: darkorange"></i>
          <span>&nbsp;<?php echo "อาจารย์ผู้สอน" ?></span>
			</font>
      </li>
	
	<li class="nav-item">
		 <a class="nav-link" href="show_download_file_techer.php">
         <i class="fas fa-file-download" style="font-size: 25px; color: darkgreen"></i>
			
          <span>&nbsp;ดาวน์โหลดไฟล์</span>
			 </a>
      </li>
	
	
<?php
				
				
				$sql_update ="UPDATE tb_user SET  status = '$value11' WHERE id_user = $id_user";
$result_update = mysqli_query($dbcon,$sql_update);
		}
						
	
		}	
	?>
		
	<?php
	
	if(isset($_SESSION['givenName'])){
			if(isset($_SESSION['familyName'])){
		 	
			$fname = $_SESSION['givenName'];
			$lname = $_SESSION['familyName'];
			$sql = "select * from tb_user where fname ='$fname' AND lname = '$lname'";
			$result = mysqli_query($dbcon,$sql);
			$dba = mysqli_fetch_array($result);
			$id_user = $dba['id_user'];
			$status = $dba['status'];
			$class = $dba['class_s'];
			if($status == "นักศึกษา"){
			
	?>
	<li class="nav-item">
		  <a class="nav-link" href="show_imges.php">
      <i class="fas fa-images" style="font-size: 25px; color: steelblue"></i>
          <span>&nbsp;ข้อมูลภาพอันดับ</span>
		</a>
      </li>

	<li class="nav-item">
		  <a class="nav-link" href="show_total_sc.php">
      <i class="fas fa-table" style="font-size: 25px; color: sienna"></i>
          <span>&nbsp;คะแนนเก็บรายวิชา</span>
		</a>
      </li>
	
	
	
	<?php
		
			}
			}
	}
					
	?>
	
<?php
	
	if(isset($_SESSION['givenName'])){
			if(isset($_SESSION['familyName'])){
		 	
			$fname = $_SESSION['givenName'];
			$lname = $_SESSION['familyName'];
			$sql = "select * from tb_user where fname ='$fname' AND lname = '$lname'";
			$result = mysqli_query($dbcon,$sql);
			$dba = mysqli_fetch_array($result);
			$id_user = $dba['id_user'];
			$status = $dba['status'];
			$class = $dba['class_s'];
			if($status == "500"){
			
	?>
	
	
	<li class="nav-item">
		  <a class="nav-link" href="frm_imges.php">
           <i class="fas fa-file-image" style="font-size: 25px; color: chartreuse"></i>
          <span>&nbsp;เพิ่มภาพอันดับ</span>
			
		</a>
      </li>

	<li class="nav-item">
		  <a class="nav-link" href="frm_excel.php">
           <i class="fas fa-file-upload" style="font-size: 25px; color: darkorange"></i>
          <span>&nbsp;อัปโหลดไฟล์</span>
			
		</a>
      </li>

	<li class="nav-item">
		  <a class="nav-link" href="show_download_file.php">
           <i class="fas fa-file-download" style="font-size: 25px; color: darkgreen;"></i>
          <span>&nbsp;ไฟล์ excel</span>
			
		</a>
      </li>

	<li class="nav-item">
		  <a class="nav-link" href="frm_tream.php">
           <i class="fas fa-upload" style="font-size: 25px; color: darkred;"></i>
          <span>&nbsp;เพิ่มกลุ่มเรียน</span>
			
		</a>
      </li>
	<li class="nav-item">
		  <a class="nav-link" href="show_tream.php">
           <i class="fas fa-table" style="font-size: 25px; color: darkgray;"></i>
          <span>&nbsp;แสดงกลุ่มเรียน</span>
			
		</a>
      </li>
	
	<li class="nav-item">
		  <a class="nav-link" href="show_imges.php">
       <i class="fas fa-images" style="font-size: 25px; color: steelblue"></i>
          <span>&nbsp;ข้อมูลภาพอันดับ</span>
			
		</a>
      </li>
	
		<li class="nav-item">
         <font class="nav-link">
         <i class="fas fa-user-alt" style="font-size: 25px; color: darkorange"></i>
          <span>&nbsp;สถานะ <?php echo "ผู้ดูแลระบบ" ?></span>
			</font>
      </li>
	
		
	
	
	<?php
		
			}
			}
	}
					
	?>
	
		
		<?php
		 	if(isset($_SESSION['access_token'])){
		
		?>
		
		<li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-power-off" style="font-size: 25px; color: red"></i>
          <span>&nbsp;ออกจากระบบ</span></a>
      </li>
		<?php
		 	}
		 ?>
		
    </ul>