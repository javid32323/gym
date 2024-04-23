<?php

include ('db.php');



    $id = $_GET['did'];

    mysqli_query($connect,"delete from info where  id='$id'");


    header("location:info-list.php");

   

?>