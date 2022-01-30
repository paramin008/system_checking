<?php
include "connect.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
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
</head>

<body>
	
	
	<?php
	
/*
			$objPHPExcel = PHPExcel_IOFactory::load("");

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
				
			
			
			}
		}
			
			*/
?>
	
	<!-- Content Row -->
          
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-4 mb-2">
		<!-- Project Card Example -->
              <div class="card shadow mb-2">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                </div>
                <div class="card-body">
					
				<?php
				$sql = "select * from tb_subject";
$result = mysqli_query($dbcon,$sql);
$num_record = mysqli_num_rows($result);
$i = 1;		
while($dbarr = mysqli_fetch_array($result)){
	
	$list_names = $dbarr['list_names'];
?>
	<?php
	
	if($i==1){
		
		$color = "bg-danger";
	
	}else if($i==2){
		
		$color = "bg-warning";
	    
	}else if($i==3){
		
		$color = "#4e73df";
	}else if($i==4){
		
		$color = "bg-info";
	}else if($i==5){
		
		$color = "bg-success";
	}else if($i==6){
		
		$color = "bg-success";
	}
	
require_once "Classes/PHPExcel.php";
	
	$objPHPExcel = PHPExcel_IOFactory::load($list_names);

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

		
    	for($i=6; $i<=$arrayCount; $i++ ){
    
		
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
		$value24 = trim($allDataInSheet[$i]["X"]);
		$value25 = trim($allDataInSheet[$i]["Y"]);
		//$number = number_format($value7,2);
        //var_dump($value1);
		//var_dump($value2);
			
		
	
	
	
	?>
					
    <h4 class="smaller font-weight-bolder"><?=$dbarr['sub_name'];?><span class="float-right"><?php echo $allDataInSheet[$i]["X"];?>คะแนน</span></h4>
                  <div class="progress mb-4">
          <div class="progress-bar <?=$color;?>" role="progressbar" style="width: <?=$sum;?>%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>				
<?php
	$i++;		
}
	}
	
?>
					
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
	
</body>
</html>