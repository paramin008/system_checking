<?php
session_start();
include("connect.php");
	

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">สมัครสมาชิก</div>
      <div class="card-body">
		  
		  
        <form method="post" action="register.php" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="p_name" class="form-control" placeholder="ชื่อผู้ปกครอง">
                  <label for="firstName">ชื่อผู้ปกครอง</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="p_lname" class="form-control" placeholder="นามสกุล" required="required">
                  <label for="lastName">นามสกุล</label>
                </div>
              </div>
            </div>
          </div>
			
			 <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="p_address" class="form-control" placeholder="บ้านเลขที่" required="required" autofocus="autofocus">
                  <label for="firstName">บ้านเลขที่</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="c_name" class="form-control" placeholder="ชื่อบุตรหลาน" required="required">
                  <label for="lastName">ชื่อบุตรหลาน</label>
                </div>
              </div>
            </div>
          </div>
         
      
			<div class="text-center">
			<input type="reset" class="btn btn-primary btn-group align-bottom" value="ยกเลิก">
          <input type="submit" name="submit" class="btn btn-primary btn-group align-center" value="ยืนยัน">
			</div>
        </form>
		  <br>
        <div class="text-center">
          
          <a class="d-block small" href="login.php">กลับ</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
