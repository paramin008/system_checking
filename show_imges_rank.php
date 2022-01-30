<?php
session_start();
	include("connect.php");
	$idselect = $_REQUEST['id'];
  	 $sql = "select * from tb_imges where im_name ='$idselect'";
$result = mysqli_query($dbcon,$sql);
$dba = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">

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

<body class="bg-dark">

 <div id="myCarousel" class="carousel slide" data-ride="carousel">
   
	 <div class="carousel-inner">
	<div class="carousel-item active">
 <img class="uk-align-center" style="width:500px; height:500; align-content: center" src="imges/<?=$dba['im_imges'];?>">
<h3 align="center"><font color="#FCFCFC"><?="อันดับที่ ".$dba['im_rank']."&nbsp;"."<br>".
"คุณ ".$_SESSION['givenName']."&nbsp;".$_SESSION['familyName']."<br>".
"คะแนนที่ได้ ".$_SESSION['score']."&nbsp;"."เกรด ".$dba['im_grad'];?></font></h3>
		 
      </div>
	
	
	</div>
	</div>
        <div class="text-center">
          
          <a class="thead-light" href="hompage.php">กลับ</a>
        </div>
	
  <!-- Bootstrap core JavaScript-->
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
