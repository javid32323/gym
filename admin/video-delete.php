<?php

include ('db.php');



    $id = $_GET['did'];

    mysqli_query($connect,"delete from video_intro where  id='$id'");


    header("location:video-list.php");

   

?>