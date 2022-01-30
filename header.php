<?php

	include("connect.php");
	//$query=mysqli_query("select * from tb_imges");
//$rowcount=mysqli_num_rows($query);
				$sql_l = "select * from tb_header";
				$resultl = mysqli_query($dbcon,$sql_l);
				$rowcount=mysqli_num_rows($resultl);
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
  <?php
  
  for($i=1;$i<=$rowcount;$i++){
	   $actives='';
	   
      $actives='active';
	   
  ?>

      <li data-target="#myCarousel" data-slide-to="<?=$i;?>" class="<?=$actives;?>"></li>
      
 
      <?php
   
  }
  ?>
 
    </ol>
    
    <div class="carousel-inner">
    <?php
  for($i=1;$i<=$rowcount;$i++)
  {
	  $row=mysqli_fetch_array($resultl);
	  
  ?>
   <?php 
  if($i==1)
  {
  ?>
      <div class="carousel-item active">
 <img class="uk-align-center" width="100%" height="100%"  src="imges/sci/<?=$row['im_imges'];?>">
      </div>
        <?php	
  }
  else
  {
	?> 
      <div class="carousel-item ">
<img class="uk-align-center" width="100%" height="100%" src="imges/sci/<?=$row['im_imges'];?>">

      </div>
      
       <?php
   }
  }
  ?>
 
    </div>
    
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>