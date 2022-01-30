

<img class="navbar-brand mr-1" width="25" height="25" src="imges/logo.png" >
    <a class="navbar-brand mr-1" href="index.php">คณะวิทยาศาสตร์และเทคโนโลยี</a>
  
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
<!--	  
<table width="250" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md0 "border="0">
  <tbody>
    <tr>
      <td class="navbar-brand mr-1">ระบบตรวจสอบคะแนนของนักศึกษา</td>
      
    </tr>

  </tbody>
</table>
-->

<table class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" width="350" border="0">
  <tbody>
    <tr>
      <td>&nbsp;</td>
     
    </tr>
    
  </tbody>
</table>
   


<ul class="navbar-nav ml-auto ml-md-0">
      <?php
		 		if(isset($_SESSION['access_token'])){
		
		?>
      <li class="nav-item dropdown no-arrow mx-1">
		  
        <img class="rounded-circle" style="width:40px; height:40;" src="<?php echo $_SESSION['picture'] ?>">
       
      </li>
		<?php
		 		}
		?>
    </ul>

    
	  

	
