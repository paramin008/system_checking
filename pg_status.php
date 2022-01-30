<?php
	session_start();
	include("connect.php");
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
	  		include "pg_ul.php";
	  	?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">ระบบตรวจสอบคะแนนรายวิชาของนักศึกษา</li>
        </ol>
	
	<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
          รายชื่อ login เข้ามา</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
					 <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>อีเมล</th>
					  <th>รูปภาพ</th>
					  <th>กำหนดสิทธิ์เข้าใช้งาน</th>
					
                 
                </thead>
	<?php
	
		
				
	
	
		$id = $_REQUEST['id'];	 
    $sql = "select * from  tb_user where status = '$id'";
$result = mysqli_query($dbcon,$sql);
while($dbarr = mysqli_fetch_array($result)){
	

	?>
	<tbody>
                  <tr>
                    <td><?=$dbarr['fname'];?></td>
                    <td><?=$dbarr['lname'];?></td>
                    <td><?=$dbarr['email'];?></td>
					<td><img class="rounded-circle" style="width:40px; height:40;" src="<?php echo $dbarr['picture'] ?>"></td>
					  
			
					  <td><a href="frm_status.php?id=<?=$dbarr['id_user'];?>">รอการยืนยัน</a></td>
					  
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