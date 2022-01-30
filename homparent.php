<?php
session_start();
	include("connect.php");
	

?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8" name="google-signin-client_id" content="443964504438-f96c8cet1cfg551bdf6d936atavu5rjm.apps.googleusercontent.com">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
<title>ตรวจสอบคะแนนของนักศึกษา</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

<link rel="stylesheet" href="css/uikit.min.css" />
<link href="lightbox/css/lightbox.css" rel="stylesheet">
        

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
	  
	  
		<?php
	  		include "nav_bar.php";
	  	?>
  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    	<?php
	  		include "pg_ul_p.php";
	  	?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">ระบบตรวจสอบคะแนนรายวิชาของนักศึกษา</li>
        </ol>

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
		
			
			if($status == "2"){
		  ?>
        <!-- Icon Cards-->  
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-home"></i>
                </div>
                <div class="mr-5">กลับหน้าหลัก</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="index.php">
                <span class="float-left">คลิก&#33;</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">เพิ่มข้อมูลรายวิชา</div>
              </div>
          <a class="card-footer text-white clearfix small z-1" href="frm_addsub.php?id=<?=$id_user?>">
                <span class="float-left">คลิก&#33;</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">ดูข้อมูลรายวิชา</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">คลิก&#33;</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">แก้ไขประวัติส่วนตัว</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">คลิก&#33;</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

      
		   
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
          รายวิชา</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
					 <th>อาจารย์ผู้สอน</th>
                    <th>ชื่อรายวิชา</th>
                    <th>กลุ่มเรียน</th>
					  <th>ภาคเรียน</th>
					  <th>ปีการศึกษา</th>
                    <th>ใบรายชื่อนักศึกษา</th>
					
                 
                </thead>
                
				   <?php
	$fname = $_SESSION['givenName'];
	$lname = $_SESSION['familyName'];
	
   $sql = "select * from tb_subject inner join tb_user on tb_subject.instructor=tb_user.id_user where fname = '$fname' AND lname = '$lname' order by trem";
$result = mysqli_query($dbcon,$sql);
while($dbarr = mysqli_fetch_array($result)){
	?>
                <tbody>
					
                  <tr>
					  
                    <td><?=$dbarr['fname'];?>&nbsp;<?=$dbarr['lname'];?></td>
                    <td><?=$dbarr['sub_name'];?></td>
                    <td><?=$dbarr['class'];?></td>
					   <td><?=$dbarr['trem'];?></td>
					    <td><?=$dbarr['year'];?></td>
					  <td><a href="show_excel.php?id=<?=$dbarr['id'];?>"><?=$dbarr['list_names'];?></a></td>
					 
                  </tr>
					
                </tbody>
				 
				    <?php
	
}
				?>
				  
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
			
        </div>

      </div>
      <!-- /.container-fluid -->
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
			$dbaa = mysqli_fetch_array($result);
			$id_user = $dbaa['id_user'];
			$status = $dbaa['status'];
			$class = $dbaa['class_s'];
			if($status == "1"){
			
			//echo $class;
		?>
		
		  <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
          รายวิชา</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
					 <th>อาจารย์ผู้สอน</th> 
                    <th>ชื่อรายวิชา</th>
                    <th>กลุ่มเรียน</th>
					  <th>ภาคเรียน</th>
					  <th>ปีการศึกษา</th>
                    <th>ใบรายชื่อนักศึกษา</th>
					
                 
                </thead>
                
				   <?php
	
   $sql_l = "select * from tb_subject inner join tb_user on tb_subject.instructor=tb_user.id_user where class = '$class' order by trem";
$resultl = mysqli_query($dbcon,$sql_l);
while($dbarr = mysqli_fetch_array($resultl)){
	?>
                <tbody>
					
                  <tr>
					  
                 	<td><?=$dbarr['fname'];?>&nbsp;<?=$dbarr['lname'];?></td>
                    <td><?=$dbarr['sub_name'];?></td>
                    <td><?=$dbarr['class'];?></td>
					   <td><?=$dbarr['trem'];?></td>
					    <td><?=$dbarr['year'];?></td>
					  <td><a href="show_score_std.php?id=<?=$dbarr['id'];?>"><?=$dbarr['list_names'];?></a></td>
					 
                  </tr>
					
                </tbody>
				 
				    <?php
	
}
				?>
				  
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
			
        </div>

      </div>
	
		
		
		<?php
		
			}
			}
		}
		?>
		
      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright@2019 RMUTSB(ศูนย์สุพรรณบุรี)</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
	
	
	<script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/uikit.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>
</html>