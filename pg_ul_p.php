<ul class="sidebar navbar-nav">
	<?php
	if(isset($_SESSION['p_status'])){
	?>
      <li class="nav-item active">
        <font class="nav-link" href="index.php">
          <img src="imges/green_2.png" class="fas fa-fw fa-dot-circle">
		
          <span>คุณ<?php echo $_SESSION['p_fname'] ?>&nbsp;
						    <?php echo $_SESSION['p_lname'] ?>
			</span>
			
			<?php
	}
		?>
			
        </font>
      </li>

	
	
	<?php
                     if(isset($_SESSION['p_status'])){
		  
		  		if($_SESSION['p_status'] == '3'){
					
					$mem = $_SESSION['p_fname'];
						
					$sql = "select * from parent where p_fname = '$mem'";
					$result = mysqli_query($dbcon,$sql);
					$dbarrr = mysqli_fetch_array($result);
					
					?>
	<li class="nav-item active">
        <font class="nav-link" href="index.php">
          <img src="imges/green_2.png" class="fas fa-fw fa-dot-circle">
		
          <span>คุณ<?php echo $_SESSION['p_fname'] ?>&nbsp;
						    <?php echo $_SESSION['p_lname'] ?>
			</span>
			
			
			
        </font>
      </li>
	
 <?php
				}
						
					 }
?>
  
      <li class="nav-item">
        <a class="nav-link" href="hompage.php">
          <i class="fas fa-fw fa-home"></i>
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
	
	?>
      <li class="nav-item">
        <a class="nav-link" href="pg_member.php?id=<?=$id_user?>">
          <i class="fas fa-fw fa-table"></i>
          <span>ข้อมูลส่วนตัว</span></a>
      </li>
	
	<?php
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
			
			
			if($status == "0"){
		?>
									   
		<li class="nav-item">
         <font class="nav-link">
          <i class="fas fa-fw fa-table"></i>
          <span>สถานะ <?php echo "รอยืนยันจาก ADMIN" ?></span>
			</font>
      </li>
		<?php
				
		 	}else if($status == "1"){
				
			
		 ?>
	
	<?php
		if($class == ""){
	?>
	<li class="nav-item">
         <a class="nav-link" href="frm_class.php?id=<?=$id_user;?>">
          <i class="fas fa-fw fa-table"></i>
          <span>ระบุกลุ่มเรียน</span>
			</a>
      </li>
	
<?php
		}
	?>
		<li class="nav-item">
         <font class="nav-link">
          <i class="fas fa-fw fa-table"></i>
          <span>สถานะ <?php echo "นักศึกษา" ?></span>
			</font>
      </li>
	
	
		
		
		<?php
			 
			}else if($status == "2"){
			
		?>
	
	
		<li class="nav-item">
         <font class="nav-link">
          <i class="fas fa-fw fa-table"></i>
          <span>สถานะ <?php echo "อาจารย์ผู้สอน" ?></span>
			</font>
      </li>
		
	
	<?php
		
			}else if($status == "500"){
			
					
	?>
	
	<li class="nav-item">
         <font class="nav-link">
          <i class="fas fa-fw fa-table"></i>
          <span>สถานะ <?php echo "Admin" ?></span>
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
          <img src="imges/logout.png" class="fas fa-fw fa-circle-notch">
          <span>ออกจากระบบ</span></a>
      </li>
		<?php
		 	}
		 ?>
		
    </ul>