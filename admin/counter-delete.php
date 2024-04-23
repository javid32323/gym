<?php

include ('db.php');



    $id = $_GET['did'];

    mysqli_query($connect,"delete from counter where  id='$id'");


    header("location:counter-list.php");

   

?>