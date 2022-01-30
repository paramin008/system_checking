<?php
include"connect.php";

$id = $_REQUEST['id'];
$sql = "select * from tb_user where id_user ='$id'";
$result = mysqli_query($dbcon,$sql);
$dba = mysqli_fetch_array($result);
$id_user = $dba['id_user'];
$fname = $dba['fname'];
$lname = $dba['lname'];
$email = $dba['email'];
$picture = $dba['picture'];
$status = $dba['status'];

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
      <div class="card-header">ระบุกลุ่มเรียน</div>
      <div class="card-body">
		  
        <form method="post" action="class.php" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
				
                 <input type="hidden" name="txth_ID" class="form-control"  value="<?=$id_user?>">
              
              <div class="col-md-6">
                <div class="form-label-group">
                  <label for="firstName">ชื่อ:&nbsp;<?=$fname?></label><br>
                </div>
				  
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
				
                  <label for="lastName">นามสกุล:&nbsp;<?=$lname?></label>
                </div>
              </div>
            </div>
          </div>
			
			 <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
               
                  <label for="firstName">Email:&nbsp;<?=$email?></label>
                </div>
              </div>
             
         
				
              <div class="col-md-4">
                <div class="form-label-group">
     <input type="text" name="class" class="form-control" placeholder="กลุ่มเรียน" required="required" autofocus="autofocus">
                  <label for="firstName">กลุ่มเรียน</label>
                </div>
              </div>
				
            </div>
          </div>
			
			
			<div class="text-center">
			<input type="reset" class="btn btn-primary btn-group align-bottom" value="ยกเลิก">
          <input type="submit" name="submit" class="btn btn-primary btn-group align-center" value="อัพเดตข้อมูล">
			</div>
        </form>
		  <br>
        <div class="text-center">
          
          <a class="d-block small" href="index.php">กลับ</a>
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
