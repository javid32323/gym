<?php

include ('db.php');



    $id = $_GET['did'];

    mysqli_query($connect,"delete from collapse where  id='$id'");


    header("location:collapse-list.php");

   

?>