<?php

include ('db.php');



    $id = $_GET['did'];

    mysqli_query($connect,"delete from classes where  id='$id'");


    header("location:classes-list.php");

   

?>