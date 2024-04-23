<?php

include ('db.php');



    $id = $_GET['did'];

    mysqli_query($connect,"delete from form where  id='$id'");


    header("location:contact-list.php");

   

?>