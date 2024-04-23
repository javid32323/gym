<?php

include ('db.php');



    $id = $_GET['did'];

    mysqli_query($connect,"delete from image where  id='$id'");


    header("location:image-list.php");

   

?>