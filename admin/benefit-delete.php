<?php

include ('db.php');



    $id = $_GET['did'];

    mysqli_query($connect,"delete from feature_benifite where  id='$id'");


    header("location:benefit-list.php");

   

?>