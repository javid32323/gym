<?php

include ('db.php');



    $id = $_GET['did'];

    mysqli_query($connect,"delete from service where  id='$id'");


    header("location:service-icon-list.php");

   

?>