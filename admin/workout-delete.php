<?php

include ('db.php');


$id = $_GET['did'];

        mysqli_query($connect,"delete from workout where id='$id'");
    header("location:workout-list.php");

   

?>