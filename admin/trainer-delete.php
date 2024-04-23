<?php

include ('db.php');



    $id = $_GET['did'];

    mysqli_query($connect,"delete from trainer where  id='$id'");


    header("location:trainer-list.php");

   

?>