<?php

    $dbcon = mysqli_connect("localhost","id11191767_root" ,"root1234","id11191767_itschecking");
    
    if (mysqli_connect_errno($dbcon)) {
        echo "ไม่สามารถติดต่อฐานข้อมูล MySQL ได้".  mysqli_connect_error();
        exit;
    }
    mysqli_set_charset($dbcon, 'utf8');
?>
