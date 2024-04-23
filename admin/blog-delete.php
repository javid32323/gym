<?php

include ('db.php');



    $id = $_GET['did'];

    mysqli_query($connect,"delete from blog_image where  id='$id'");


    header("location:blog-list.php");

   

?>