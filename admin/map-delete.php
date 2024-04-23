<?php

include ('db.php');



    $id = $_GET['did'];

    mysqli_query($connect,"delete from map where  id='$id'");


    header("location:map-list.php");

   

?>