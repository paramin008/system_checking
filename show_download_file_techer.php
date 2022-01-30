<?php
session_start();
	include("connect.php");
    require_once "Classes/PHPExcel.php";
	if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}

?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8" name="google-signin-client_id" content="443964504438-f96c8cet1cfg551bdf6d936atavu5rjm.apps.googleusercontent.com">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

<title>ตรวจสอบคะแนนของนักศึกษา</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
	  <!-- Custom fonts for this template-->
   <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/uikit.min.css" />
<link href="lightbox/css/lightbox.css" rel="stylesheet">
        
<style type="text/css">
body{
    font-size:12px; 
}
.textAlignVer{
    display:block;
    filter: flipv fliph;
    -webkit-transform: rotate(-90deg); 
    -moz-transform: rotate(-90deg); 
    transform: rotate(-90deg); 
    position:relative;
    width:20px;
    white-space:nowrap;
    font-size:12px;
	font-family: sans-serif;
	text-align: center;
    margin-bottom:10px;
}
</style>

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
	  		include "pg_ul.php";
	  	?>

	  
    <div id="content-wrapper">

      <div class="container-fluid">

		 
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
         <i class="fas fa-atom fa-spin" style="font-size: 25px; color: orange"></i>&nbsp;&nbsp;
			<a href="hompage.php" style="font-size: 16px; color: darkgray; text-decoration: none;"> SCI คณะวิทยาศาสตร์และเทคโนโลยี
            </a>
             
        </ol>
          
           <?php
			include "header.php";	
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
			
			if($status == "อาจารย์ผู้สอน"){
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
              <a class="card-footer text-white clearfix small z-1" href="hompage.php">
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
          <a class="card-footer text-white clearfix small z-1" href="frm_addsub.php">
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
              <a class="card-footer text-white clearfix small z-1" href="hompage.php">
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
                <div class="mr-5">ดาวน์โหลดไฟล์</div>
              </div>
             <a class="card-footer text-white clearfix small z-1" href="show_download_file_techer.php">
                <span class="float-left">คลิก&#33;</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

      
		   
        <!-- DataTables Example -->
      <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
          ข้อมูลไฟล์excel</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
					  <th>กลุ่มเรียน</th> 
					 <th>ภาคเรียน</th> 
                    <th>ปีการศึกษา</th>
                    <th>ไฟล์excel</th>
					<th>ดาวห์โหลด</th>
					
                 
                </thead>
                
				  
                <tbody>
					
					 <?php
	
   $sql_l = "select * from tb_download";
$resultl = mysqli_query($dbcon,$sql_l);
while($dbarr = mysqli_fetch_array($resultl)){
	?>
                  <tr>
					  
                 	 <td><?=$dbarr['class'];?></td>
                    <td><?=$dbarr['tream'];?></td>
                    <td><?=$dbarr['year'];?></td>
					<td><?=$dbarr['list_name'];?></td>
				<td>
	                 <a href="upload_xls/<?=$dbarr['list_name'];?>" 
					  style="text-decoration: none; color: gold"><i class="fas fa-file-download" style="font-size: 25px; color: darkgreen;"></i></a></td>
					
					 
                  </tr>
					 
				    <?php
	
}
				?>
                </tbody>
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
			
			//echo $class;
				
		?>
		 
		<!-- Content Row -->
     
	<!------------------------------------ DataTables Example -------------------------------------->
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-table"></i>
          ข้อมูลรายวิชา</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead >
			
                  <tr>
					
                    <th class="text-center">รายวิชา</th>
             
					  <th  height="70"  align="justify"><span class="textAlignVer text-center">เก็บครั้งที่ 1</span></th>
					  <th height="70"  align="justify"><span class="textAlignVer">เก็บครั้งที่ 2</span></th>
                    <th height="70"  align="justify"><span class="textAlignVer">เก็บครั้งที่ 3</span></th>
					  <th  height="70"  align="justify"><span class="textAlignVer">เก็บครั้งที่ 4</span></th>
					  <th height="70"  align="justify"><span class="textAlignVer">เก็บครั้งที่ 5</span></th>
                    <th height="70"  align="justify"><span class="textAlignVer">เก็บครั้งที่ 6</span></th>
					
					  <th  height="70"  align="justify"><span class="textAlignVer">เก็บครั้งที่ 7</span></th>
					  <th height="70"  align="justify"><span class="textAlignVer">เก็บครั้งที่ 8</span></th>
                    <th height="70"  align="justify"><span class="textAlignVer">เก็บครั้งที่ 9</span></th>
					  
					  <th  height="80"  align="justify"><span class="textAlignVer">เก็บครั้งที่ 10</span></th>
					  <th height="70"  align="justify"><span class="textAlignVer">เก็บครั้งที่ 11</span></th>
                    <th height="70"  align="justify"><span class="textAlignVer">เก็บครั้งที่ 12</span></th>
					  
					  <th  height="70"  align="justify"><span class="textAlignVer">เก็บครั้งที่ 13</span></th>
					  <th height="70"  align="justify"><span class="textAlignVer">เก็บครั้งที่ 14</span></th>
                    <th height="70"  align="justify"><span class="textAlignVer">เก็บครั้งที่ 15</span></th>
					  
					  <th  height="70"  align="justify"><span class="textAlignVer">เก็บครั้งที่ 16</span></th>
					  <th height="70"  align="justify"><span class="textAlignVer">เก็บครั้งที่ 17</span></th>
                    <th height="70"  align="justify"><span class="textAlignVer">เก็บครั้งที่ 18</span></th>
					   
					</tr>
					
					
                </thead>
                 
                <tbody>
					 <?php
	
   $sql_l = "select * from tb_subject inner join tb_user on tb_subject.instructor=tb_user.id_user where class = '$class'";
$resultl = mysqli_query($dbcon,$sql_l);
while($dbarr = mysqli_fetch_array($resultl)){
	
	 $list_names = $dbarr['list_names'];
	
	require_once "Classes/PHPExcel.php";
	
	$objPHPExcel = PHPExcel_IOFactory::load("documents/".$list_names);

		 $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
		
		foreach ($cell_collection as $cell) {
            // ค่าสำหรับดูว่าเป็นคอลัมน์ไหน เช่น A B C ....
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            // คำสำหรับดูว่าเป็นแถวที่เท่าไหร่ เช่น 1 2 3 .....
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            // ค่าของข้อมูลในเซลล์นั้นๆ เช่น A1 B1 C1 ....
            $data_value = $objPHPExcel->getSheet(1)->getCell($cell)->getValue();          
            
			
		    $data_arr[$column.$row]=$data_value;
			
        }
					
					
					

		$allDataInSheet = $objPHPExcel->getSheet(1)->toArray(null,true,true,true);
        
		$arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet

		
    	for($i=6; $i<=$arrayCount; $i++){
    
		
        $value1 = trim($allDataInSheet[$i]["A"]);
		$value2 = trim($allDataInSheet[$i]["B"]);
		$value3 = trim($allDataInSheet[$i]["C"]);
		$value4 = trim($allDataInSheet[$i]["D"]);
		$value5 = trim($allDataInSheet[$i]["E"]);
		$value6 = trim($allDataInSheet[$i]["F"]);
		$value7 = trim($allDataInSheet[$i]["G"]);
		$value8 = trim($allDataInSheet[$i]["H"]);
		$value9 = trim($allDataInSheet[$i]["I"]);
		$value10 = trim($allDataInSheet[$i]["J"]);
		$value11 = trim($allDataInSheet[$i]["K"]);
		$value12 = trim($allDataInSheet[$i]["L"]);
		$value13 = trim($allDataInSheet[$i]["M"]);
		$value14 = trim($allDataInSheet[$i]["N"]);
		$value15 = trim($allDataInSheet[$i]["O"]);
		$value16 = trim($allDataInSheet[$i]["P"]);
		$value17 = trim($allDataInSheet[$i]["Q"]);
		$value18 = trim($allDataInSheet[$i]["R"]);
		$value19 = trim($allDataInSheet[$i]["S"]);
		$value20 = trim($allDataInSheet[$i]["T"]);
		$value21 = trim($allDataInSheet[$i]["U"]);
		$value22 = trim($allDataInSheet[$i]["V"]);
		$value23 = trim($allDataInSheet[$i]["W"]);
		$value24 = trim($allDataInSheet[$i]["X"]);
		$value25 = trim($allDataInSheet[$i]["Y"]);
		//$number = number_format($value7,2);
        //var_dump($value1);
		//var_dump($value2);
			
		
				
			if($_SESSION['givenName'] == $allDataInSheet[$i]["D"]  && $_SESSION['familyName'] == $allDataInSheet[$i]["E"]){
					
				
			
		
				
				
				if($allDataInSheet[$i]["F"] >= $allDataInSheet[$i]["W"] == ""){
			
								
							    
			
				
				}
				
				
	
	?>
                  <tr>
					  
                
                    <td ><?=$dbarr['sub_name'];?></td>
        
					   <td class="text-center" ><?=$allDataInSheet[$i]["F"];?></td>
					    <td class="text-center" ><?=$allDataInSheet[$i]["G"];?></td>
					  <td class="text-center" ><?=$allDataInSheet[$i]["H"];?></td>
					 <td class="text-center" ><?=$allDataInSheet[$i]["I"];?></td>
					    <td class="text-center" ><?=$allDataInSheet[$i]["J"];?></td>
					  <td class="text-center" ><?=$allDataInSheet[$i]["K"];?></td>
					  <td class="text-center" ><?=$allDataInSheet[$i]["L"];?></td>
					    <td class="text-center" ><?=$allDataInSheet[$i]["M"];?></td>
					  <td class="text-center" ><?=$allDataInSheet[$i]["N"];?></td>
					  <td class="text-center" ><?=$allDataInSheet[$i]["O"];?></td>
					    <td class="text-center" ><?=$allDataInSheet[$i]["P"];?></td>
					  <td class="text-center" ><?=$allDataInSheet[$i]["Q"];?></td>
					  <td class="text-center" ><?=$allDataInSheet[$i]["R"];?></td>
					    <td class="text-center" ><?=$allDataInSheet[$i]["S"];?></td>
					  <td class="text-center" ><?=$allDataInSheet[$i]["T"];?></td>
					  <td class="text-center" ><?=$allDataInSheet[$i]["U"];?></td>
					    <td class="text-center" ><?=$allDataInSheet[$i]["V"];?></td>
					  <td class="text-center" ><?=$allDataInSheet[$i]["W"];?></td>
					  
					  
					   
                  </tr>
					
					    <?php
	
}
		
		}
}
				?>
                </tbody> 
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
	  
	    
	  <!-----------user Admin ------------------------------------------------------------------->
	  
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
			if($status == "500"){
			
			//echo $class;
		?>
		
		  <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
          ข้อมูลไฟล์excel</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
					  <th>กลุ่มเรียน</th> 
					 <th>ภาคเรียน</th> 
                    <th>ปีการศึกษา</th>
                    <th>ไฟล์excel</th>
					<th>Action</th>
					
                 
                </thead>
                
				  
                <tbody>
					
					 <?php
	
   $sql_l = "select * from tb_download";
$resultl = mysqli_query($dbcon,$sql_l);
while($dbarr = mysqli_fetch_array($resultl)){
	?>
                  <tr>
					  
                 	 <td><?=$dbarr['class'];?></td>
                    <td><?=$dbarr['tream'];?></td>
                    <td><?=$dbarr['year'];?></td>
					<td><?=$dbarr['list_name'];?></td>
				<td><a href="upload_xls/<?=$dbarr['list_name'];?>" 
					  style="text-decoration: none; color: gold">Download</a></td>
					
					 
                  </tr>
					 
				    <?php
	
}
				?>
                </tbody>
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
  
<script>

var ctxD = document.getElementById("doughnutChart").getContext('2d');
var myLineChart = new Chart(ctxD, {
type: 'doughnut',
data: {
labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
datasets: [{
data: [600, 50, 100, 40, 120],
backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
}]
},
	
options: {
    responsive: true,
    legend: {
      position: 'right',
      labels: {
        padding: 20,
        boxWidth: 10
      }
	}
    },
	
});
	
	
</script>


</body>
</html>