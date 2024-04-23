<?php

include ('db.php');



    $id = $_GET['did'];

    mysqli_query($connect,"delete from testimonial where  id='$id'");


    header("location:testimonail-list.php");

   

?>