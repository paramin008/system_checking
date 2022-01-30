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

  <<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">อัพโหลดไฟล์</div>
      <div class="card-body">
		  
	
		  
        <form method="post" action="upload_file.php" enctype="multipart/form-data">
         
			
			 <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                 <div class="form-label-group">
                  <input type="text" name="class" class="form-control" placeholder="กลุ่มเรียน" required="required" value=" ">
					<label for="lastName"><b>กลุ่มเรียน</b></label>
                </div>
              </div>
				
              <div class="col-md-6">
               <div class="form-label-group">
                 <select class="form-control form-control-lg" name="trem">
					  <option selected>ภาคเรียน</option>
  					<option>1</option>
					 <option>2</option>
					 <option>3</option>
				</select>
                </div>
              </div>
            </div>
          </div>
			
			 <?php
			$sum = 0;
			$date = date("Y");
			$sum = $date + 543;
		  ?>
			
        <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                 <div class="form-label-group">
                  <input type="text" name="year" class="form-control" placeholder="ปีการศึกษา" required="required" value="<?=$sum;?>">
					
                </div>
              </div>
				
             <div class="col-md-6">
                <div class="form-label-group">
                  <input type="file" accept="application/msexcel" name="list_name" class="form-control" placeholder="ใบรายชื่อ" required="required">
                  <label>ใบรายชื่อนักศึกษา</label>
                </div>
              </div>
            </div>
          </div>
				
            
			
			<div class="text-center">
			<input type="reset" class="btn btn-primary btn-group align-bottom" value="ยกเลิก">
          <input type="submit" name="submit" class="btn btn-primary btn-group align-center" value="เพิ่มข้อมูล">
			</div>
        </form>
		  <br>
        <div class="text-center">
          
			<h4><a class="d-block small" style="text-decoration: none" href="hompage.php">กลับ</a></h4>
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
