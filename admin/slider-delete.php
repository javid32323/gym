<?php

include ('db.php');



    $id = $_GET['did'];

    mysqli_query($connect,"delete from slider where  id='$id'");


    header("location:slider-list.php");

   

?>