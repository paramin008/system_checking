<?php
	include("connect.php");
	$idselect = $_REQUEST['id'];
     $sql = "select * from tb_subject where id ='$idselect'";
$result = mysqli_query($dbcon,$sql);
$dba = mysqli_fetch_array($result);
$name_excel = $dba['list_names'];
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
	<link rel="stylesheet" href="https://unpkg.com/bootstrap@3.3.7/dist/css/bootstrap.min.css">

</head>

<body class="bg-dark">

  <div class="container" style="width:1000px;">
		 <pre>
	
		
<?php
 
require_once "Classes/PHPExcel.php";

		$objPHPExcel = PHPExcel_IOFactory::load("documents/".$name_excel);

		 $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
		
		foreach ($cell_collection as $cell) {
            // ค่าสำหรับดูว่าเป็นคอลัมน์ไหน เช่น A B C ....
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            // คำสำหรับดูว่าเป็นแถวที่เท่าไหร่ เช่น 1 2 3 .....
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            // ค่าของข้อมูลในเซลล์นั้นๆ เช่น A1 B1 C1 ....
            $data_value = $objPHPExcel->getSheet(1)->getCell($cell)->getValue();          
             
            if($row >= 1 && $row <= 4){
				
        		echo '<p style="font-size:14px;"  align="center">'.$data_value.'</p>'."";
    		}
             
        }
	echo '</pre>'	;
		$allDataInSheet = $objPHPExcel->getSheet(1)->toArray(null,true,true,true);

		$arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet
echo '<pre>';
echo '<table class="table table-bordered text-center" style="width:900px;">';
		
		
    	for($i=6; $i<=$arrayCount; $i++ ){
    
			
		
        $value1 = trim($allDataInSheet[$i]["A"])."<br>";
		$value2 = trim($allDataInSheet[$i]["B"])."<br>";
		$value3 = trim($allDataInSheet[$i]["C"])."<br>";
		$value4 = trim($allDataInSheet[$i]["D"])."<br>";
		$value5 = trim($allDataInSheet[$i]["E"])."<br>";
		$value6 = trim($allDataInSheet[$i]["F"])."<br>";
		$value7 = trim($allDataInSheet[$i]["G"])."<br>";
		$value8 = trim($allDataInSheet[$i]["H"])."<br>";
		$value9 = trim($allDataInSheet[$i]["I"])."<br>";
		$value10 = trim($allDataInSheet[$i]["J"])."<br>";
		$value11 = trim($allDataInSheet[$i]["K"])."<br>";
		$value12 = trim($allDataInSheet[$i]["L"])."<br>";
		$value13 = trim($allDataInSheet[$i]["M"])."<br>";
		$value14 = trim($allDataInSheet[$i]["N"])."<br>";
		$value15 = trim($allDataInSheet[$i]["O"])."<br>";
		$value16 = trim($allDataInSheet[$i]["P"])."<br>";
		$value17 = trim($allDataInSheet[$i]["Q"])."<br>";
		$value18 = trim($allDataInSheet[$i]["R"])."<br>";
		$value19 = trim($allDataInSheet[$i]["S"])."<br>";
		$value20 = trim($allDataInSheet[$i]["T"])."<br>";
		$value21 = trim($allDataInSheet[$i]["U"])."<br>";
		$value22 = trim($allDataInSheet[$i]["V"])."<br>";
		$value23 = trim($allDataInSheet[$i]["W"])."<br>";
		$value24 = trim($allDataInSheet[$i]["X"])."<br>";
		$value25 = trim($allDataInSheet[$i]["Y"])."<br>";
		//$number = number_format($value7,2);
        //var_dump($value1);
		//var_dump($value2);
?>
		<tr>
	
        <td><?=$value1;?></td>
        <td><?=$value2;?></td>
		<td><?=$value3;?></td>
		<td><?=$value4;?></td>
		<td><?=$value5;?></td>
		<td><?=$value6;?></td>
		<td><?=$value7;?></td>
		<td><?=$value8;?></td>
		<td><?=$value9;?></td>
		<td><?=$value10;?></td>
		<td><?=$value11;?></td>
		<td><?=$value12;?></td>
		<td><?=$value13;?></td>
		<td><?=$value14;?></td>
		<td><?=$value15;?></td>
		<td><?=$value16;?></td>
        <td><?=$value17;?></td>
		<td><?=$value18;?></td>
		<td><?=$value19;?></td>
		<td><?=$value20;?></td>
		<td><?=$value21;?></td>
		<td><?=$value22;?></td>
		<td><?=$value23;?></td>
		<td><?=$value24;?></td>
		<td><?=$value25;?></td>
     
		</tr>
		
		<?php
	}
	
		
			
	?>
	</table>
	</pre>
	</div>

        <div class="text-center">
          
          <a class="thead-light" href="hompage.php">กลับ</a>
        </div>
	<br>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
