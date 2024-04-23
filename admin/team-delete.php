<?php

include ('db.php');



    $id = $_GET['did'];

    mysqli_query($connect,"delete from team_form where  id='$id'");


    header("location:team-list.php");

   

?>