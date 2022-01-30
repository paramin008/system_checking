<?php
session_start();
	include("connect.php");
	$idselect = $_REQUEST['id'];
     $sql = "select * from tb_subject where id ='$idselect'";
$result = mysqli_query($dbcon,$sql);
$dba = mysqli_fetch_array($result);
$id_excel = $dba['id'];
$name_excel = $dba['list_names'];
$class_excel = $dba['class'];
$sub_name = $dba['sub_name'];
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
	
	 <style type="text/css">
body{
    font-size:12px; 
}
.textAlignVer{
    display:block;
    filter: flipv fliph;
	
    -webkit-transform: rotate(-90deg); 
    -moz-transform: rotate(-90deg); 
	-o-transform:rotate(-90deg);
	
	
    position:relative;
    width:12px;
    white-space:nowrap;
    font-size:14px;
    margin-top:60px;
	left:8px;
      text-align:center;
	
	
}
</style>
	
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
            
			$_SESSION['row']=$row;
			
            if($row >= 1 && $row <= 4){
				
        		echo '<p style="font-size:14px;"  align="center">'.$data_value.'</p>'."";
    		}
		
             
        }
	echo '</pre>'	;
		$allDataInSheet = $objPHPExcel->getSheet(1)->toArray(null,true,true,true);
        
		$arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet
echo '<pre>';
echo '<table class="table table-bordered text-center" style="width:900px;">';
		
		
    	for($i=6; $i<=$arrayCount; $i++){
    

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

<?php
	
			if($_SESSION['givenName'] >= $allDataInSheet[$i]["A"] && $_SESSION['familyName'] <= $allDataInSheet[$i]["Y"] && $_SESSION['givenName'] >= $allDataInSheet[$i]["A"] || $_SESSION['familyName'] <= $allDataInSheet[$i]["Y"]){
				
			
		
	?>
		
		<tr>
	
        <td><?=$value1;?></td>
        <td><?=$value2;?></td>
		<td><?=$value3;?></td>
		<td><?=$value4;?></td>
		<td><?=$value5;?></td>
		<td height="70"  align="justify"><span class="textAlignVer"><?=$value6;?></span></td>
		<td height="70" align="justify"><span class="textAlignVer"><?=$value7;?></span></td>
		<td height="70"  align="justify"><span class="textAlignVer"><?=$value8;?></span></td>
		<td height="70"  align="justify"><span class="textAlignVer"><?=$value9;?></span></td>
		<td height="70"  align="justify"><span class="textAlignVer"><?=$value10;?></span></td>
		<td height="70"  align="justify"><span class="textAlignVer"><?=$value11;?></span></td>
		<td height="70" align="justify"><span class="textAlignVer"><?=$value12;?></span></td>
		<td height="70"  align="justify"><span class="textAlignVer"><?=$value13;?></span></td>
		<td height="70" align="justify"><span class="textAlignVer"><?=$value14;?></span></td>
		<td height="70"  align="justify"><span class="textAlignVer"><?=$value15;?></span></td>
		<td height="70" align="justify"><span class="textAlignVer"><?=$value16;?></span></td>
        <td height="70" align="justify"><span class="textAlignVer"><?=$value17;?></span></td>
		<td height="70"  align="justify"><span class="textAlignVer"><?=$value18;?></span></td>
		<td height="70"  align="justify"><span class="textAlignVer"><?=$value19;?></span></td>
		<td height="70"  align="justify"><span class="textAlignVer"><?=$value20;?></span></td>
		<td height="70" align="justify"><span class="textAlignVer"><?=$value21;?></span></td>
		<td height="70"  align="justify"><span class="textAlignVer"><?=$value22;?></span></td>
		<td height="70"  align="justify"><span class="textAlignVer"><?=$value23;?></span></td>
		<td height="70"  align="justify"><span class="textAlignVer"><?=$value24;?></span></td>
		<td height="70"  align="justify"><span class="textAlignVer"><?=$value25;?></span></td>
     
		</tr>
		
		<?php
	
	
	
		}else if($_SESSION['givenName'] == $allDataInSheet[$i]["D"]  && $_SESSION['familyName'] == $allDataInSheet[$i]["E"]){
	
			
		$_SESSION['score']=$allDataInSheet[$i]["X"];
				
					
		
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
		
		<table class="table table-bordered text-center" style="width:350px;">
  <tbody>
    <tr>
	
      <td width="30">คะแนนตำ่สุด</td>
	  <?php
		foreach ($cell_collection as $cell) {
            // ค่าสำหรับดูว่าเป็นคอลัมน์ไหน เช่น A B C ....
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            // คำสำหรับดูว่าเป็นแถวที่เท่าไหร่ เช่น 1 2 3 .....
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            // ค่าของข้อมูลในเซลล์นั้นๆ เช่น A1 B1 C1 ....
            $data_value = $objPHPExcel->getSheet(1)->getCell($cell)->getFormattedValue();          
            
			
			
            if($column == "B" && $row == 16){
				
		
				?>
	  <td width="20"><?=$data_value?></td>
	  <td width="20"><img class="uk-align-center" style="width:40px; height:40; align-content: center" src="imges/<?=$dbas['sc_imges'];?>"></td>
	  <?php
		  	}else if($column == "A" && $row == 16){
						$da = $data_value;	
			    
			$sql_l = "select * from tb_score where sc_name='".$da."'";
				$resultl = mysqli_query($dbcon,$sql_l);
				$dbas = mysqli_fetch_array($resultl);
				
	  ?>
	  
	  <?php
							}
						}	
			
		
				?>
    </tr>
	  <tr>
      <td width="30">คะแนนสูงสุด</td>
	   <?php
		foreach ($cell_collection as $cell) {
            // ค่าสำหรับดูว่าเป็นคอลัมน์ไหน เช่น A B C ....
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            // คำสำหรับดูว่าเป็นแถวที่เท่าไหร่ เช่น 1 2 3 .....
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            // ค่าของข้อมูลในเซลล์นั้นๆ เช่น A1 B1 C1 ....
            $data_value = $objPHPExcel->getSheet(1)->getCell($cell)->getFormattedValue();          
            
			
			
            if($column == "B" && $row == 17){
				
		
				?>
	  <td width="20"><?=$data_value?></td>
	  <td width="20"><img class="uk-align-center" style="width:40px; height:40; align-content: center" src="imges/<?=$dbas['sc_imges'];?>"></td>
	  <?php
		  	}else if($column == "A" && $row == 17){
						$da = $data_value;	
			    
			$sql_l = "select * from tb_score where sc_name='".$da."'";
				$resultl = mysqli_query($dbcon,$sql_l);
				$dbas = mysqli_fetch_array($resultl);
				
	  ?>
	  
	  <?php
							}
						}	
			
		
				?>
    </tr>
	  <tr>
      <td width="30">ค่าเฉลี่ย</td>
	   <?php
		foreach ($cell_collection as $cell) {
            // ค่าสำหรับดูว่าเป็นคอลัมน์ไหน เช่น A B C ....
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            // คำสำหรับดูว่าเป็นแถวที่เท่าไหร่ เช่น 1 2 3 .....
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            // ค่าของข้อมูลในเซลล์นั้นๆ เช่น A1 B1 C1 ....
            $data_value = $objPHPExcel->getSheet(1)->getCell($cell)->getFormattedValue();          
            
			
			
            if($column == "B" && $row == 18){
				
		
				?>
	  <td width="20"><?=$data_value?></td>
	  <td width="20"><img class="uk-align-center" style="width:40px; height:40; align-content: center" src="imges/<?=$dbas['sc_imges'];?>"></td>
	  <?php
		  	}else if($column == "A" && $row == 18){
						$da = $data_value;	
			    
			$sql_l = "select * from tb_score where sc_name='".$da."'";
				$resultl = mysqli_query($dbcon,$sql_l);
				$dbas = mysqli_fetch_array($resultl);
				
	  ?>
	  
	  <?php
							}
						}	
			
		
				?>
    </tr>
  </tbody>
</table>

		<?php
				
				
				
				 if($value24 >= 80 && $value24 <= 100){
					$value24 = "80-100";
					 $sql_l = "select * from tb_imges where im_name='".$value24."'";
				$resultl = mysqli_query($dbcon,$sql_l);
				$dbas = mysqli_fetch_array($resultl);
					
					 $_SESSION['score']=$allDataInSheet[$i]["X"];
					
				 
				?>
				
		
	</table>

	</pre>
	
	<pre>
	
	<table class="table table-bordered text-center" style="width:900px;">
  <tbody>
    <tr>
	  <td>วิชา</td>
	  <td>คะแนนที่ได้</td>
	  <td>เกรด</td>
	   <td>อันดับภาพ</td>
    </tr>
	<tr>
	
	  <td><?=$sub_name;?></td>
	  <td><?=$allDataInSheet[$i]["X"];?></td>
	  <td><?=$dbas['im_grad'];?></td>
	  
<td><img class="uk-align-center" style="width:40px; height:40; align-content: center" src="imges/<?=$dbas['im_imges'];?>"></td>
 
    </tr>
  </tbody>
</table>


	</pre>
	
	<?php
	 }else if($value24 >= 75 && $value24 <= 79){
				$value24 = "75-79";
					 $sql_l = "select * from tb_imges where im_name='".$value24."'";
				$resultl = mysqli_query($dbcon,$sql_l);
				$dbas = mysqli_fetch_array($resultl);
				
				$_SESSION['score']=$allDataInSheet[$i]["X"];	
						 
						 
	
	?>
	
	
</table>

	</pre>
	
	<pre>
	
	<table class="table table-bordered text-center" style="width:900px;">
  <tbody>
    <tr>
	  <td>วิชา</td>
	  <td>คะแนนที่ได้</td>
	  <td>เกรด</td>
	   <td>อันดับภาพ</td>
    </tr>
	<tr>
	
	  <td><?=$sub_name;?></td>
	  <td><?=$allDataInSheet[$i]["X"];?></td>
	  <td><?=$dbas['im_grad'];?></td>

<td><img class="uk-align-center" style="width:40px; height:40; align-content: center" src="imges/<?=$dbas['im_imges'];?>"></td>
    </tr>
  </tbody>
</table>

	</pre>

	
	<?php
	 }else if($value24 >= 70 && $value24 <= 74){
				$value24 = "70-74";
					 $sql_l = "select * from tb_imges where im_name='".$value24."'";
				$resultl = mysqli_query($dbcon,$sql_l);
				$dbas = mysqli_fetch_array($resultl);
						 
				$_SESSION['score']=$allDataInSheet[$i]["X"];
	?>


</table>

	</pre>
	
	<pre>
	
	<table class="table table-bordered text-center" style="width:900px;">
  <tbody>
    <tr>
	  <td>วิชา</td>
	  <td>คะแนนที่ได้</td>
	  <td>เกรด</td>
	   <td>อันดับภาพ</td>
    </tr>
	<tr>
	
	  <td><?=$sub_name;?></td>
	  <td><?=$allDataInSheet[$i]["X"];?></td>
	  <td><?=$dbas['im_grad'];?></td>

<td><img class="uk-align-center" style="width:40px; height:40; align-content: center" src="imges/<?=$dbas['im_imges'];?>"></td>
    </tr>
  </tbody>
</table>

	</pre>




<?php
	 }else if($value24 >= 65 && $value24 <= 69){
				$value24 = "65-69";
					 $sql_l = "select * from tb_imges where im_name='".$value24."'";
				$resultl = mysqli_query($dbcon,$sql_l);
				$dbas = mysqli_fetch_array($resultl);
				$_SESSION['score']=$allDataInSheet[$i]["X"];		 
	
	?>

</table>

	</pre>
	
	<pre>
	
	<table class="table table-bordered text-center" style="width:900px;">
  <tbody>
    <tr>
	  <td>วิชา</td>
	  <td>คะแนนที่ได้</td>
	  <td>เกรด</td>
	   <td>อันดับภาพ</td>
    </tr>
	<tr>
	
	  <td><?=$sub_name;?></td>
	  <td><?=$allDataInSheet[$i]["X"];?></td>
	  <td><?=$dbas['im_grad'];?></td>

<td><img class="uk-align-center" style="width:40px; height:40; align-content: center" src="imges/<?=$dbas['im_imges'];?>"></td>
    </tr>
  </tbody>
</table>

	</pre>



<?php
	 }else if($value24 >= 60 && $value24 <= 64){
				$value24 = "60-64";
					 $sql_l = "select * from tb_imges where im_name='".$value24."'";
				$resultl = mysqli_query($dbcon,$sql_l);
				$dbas = mysqli_fetch_array($resultl);
						 
				$_SESSION['score']=$allDataInSheet[$i]["X"];
	?>



</table>

	</pre>
	
	<pre>
	
	<table class="table table-bordered text-center" style="width:900px;">
  <tbody>
    <tr>
	  <td>วิชา</td>
	  <td>คะแนนที่ได้</td>
	  <td>เกรด</td>
	   <td>อันดับภาพ</td>
    </tr>
	<tr>
	
	  <td><?=$sub_name;?></td>
	  <td><?=$allDataInSheet[$i]["X"];?></td>
	  <td><?=$dbas['im_grad'];?></td>

<td><img class="uk-align-center" style="width:40px; height:40; align-content: center" src="imges/<?=$dbas['im_imges'];?>"></td>
    </tr>
  </tbody>
</table>

	</pre>




<?php
	 }else if($value24 >= 55 && $value24 <= 59){
				$value24 = "55-59";
					 $sql_l = "select * from tb_imges where im_name='".$value24."'";
				$resultl = mysqli_query($dbcon,$sql_l);
				$dbas = mysqli_fetch_array($resultl);
						 
				$_SESSION['score']=$allDataInSheet[$i]["X"];
	?>

</table>

	</pre>
	
	<pre>
	
	<table class="table table-bordered text-center" style="width:900px;">
  <tbody>
    <tr>
	  <td>วิชา</td>
	  <td>คะแนนที่ได้</td>
	  <td>เกรด</td>
	   <td>อันดับภาพ</td>
    </tr>
	<tr>
	
	  <td><?=$sub_name;?></td>
	  <td><?=$allDataInSheet[$i]["X"];?></td>
	  <td><?=$dbas['im_grad'];?></td>

<td><img class="uk-align-center" style="width:40px; height:40; align-content: center" src="imges/<?=$dbas['im_imges'];?>"></td>
    </tr>
  </tbody>
</table>

	</pre>


<?php
	 }else if($value24 >= 50 && $value24 <= 54){
				$value24 = "50-54";
				$sql_l = "select * from tb_imges where im_name='".$value24."'";
				$resultl = mysqli_query($dbcon,$sql_l);
				$dbas = mysqli_fetch_array($resultl);
						 
				$_SESSION['score']=$allDataInSheet[$i]["X"];
					
	?>

 
</table>

	</pre>
	
	<pre>
	
	<table class="table table-bordered text-center" style="width:900px;">
  <tbody>
    <tr>
	  <td>วิชา</td>
	  <td>คะแนนที่ได้</td>
	  <td>เกรด</td>
	   <td>อันดับภาพ</td>
    </tr>
	<tr>
	
	  <td><?=$sub_name;?></td>
	  <td><?=$allDataInSheet[$i]["X"];?></td>
	  <td><?=$dbas['im_grad'];?></td>

<td><img class="uk-align-center" style="width:40px; height:40; align-content: center" src="imges/<?=$dbas['im_imges'];?>"></td>
    </tr>
  </tbody>
</table>

	</pre>

<?php
	 }else if($value24 <= 49){
				$value24 = "1-49";
					 $sql_l = "select * from tb_imges where im_name='".$value24."'";
				$resultl = mysqli_query($dbcon,$sql_l);
				$dbas = mysqli_fetch_array($resultl);
				$_SESSION['score']=$allDataInSheet[$i]["X"];
				
	?>


</table>

	</pre>
	
	<pre>
	
	<table class="table table-bordered text-center" style="width:900px;">
  <tbody>
    <tr>
	  <td>วิชา</td>
	  <td>คะแนนที่ได้</td>
	  <td>เกรด</td>
	   <td>อันดับภาพ</td>
    </tr>
	<tr>
	
	  <td><?=$sub_name;?></td>
	  <td><?=$allDataInSheet[$i]["X"];?></td>
	  <td><?=$dbas['im_grad'];?></td>

<td><img class="uk-align-center" style="width:40px; height:40; align-content: center" src="imges/<?=$dbas['im_imges'];?>"></td>
    </tr>
  </tbody>
</table>

	</pre>

<?php

				 }else{
					
				
?>


</table>
	  
	</pre>
	
	
	<pre>
	
	<table class="table table-bordered text-center" style="width:900px;">
  <tbody>
    <tr>
      <td><?php  echo "โปรดใส่คะแนนไว้ที่ 100 คะแนน";?></td>
	 
    </tr>
  </tbody>
</table>

	</pre>



<?php
}
}
}

?>

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
