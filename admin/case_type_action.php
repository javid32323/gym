<?php
include('db.php');
if(isset($_POST['submit']))
{
    $type = $_POST['type'];
    
   
   
                mysqli_query($connect,"insert into cases_type values('','$type')");

                header('location:case_type.php');
               
            
           
}

$imagename = $_FILES['image']['name'];
$imagetmp = $_FILES['image']['tmp_name'];

$folder = "upload/";
$path = $folder.basename($imagename);



        if(move_uploaded_file($imagetmp,$path))
        {
            mysqli_query($connect,"insert into  love values('','$imagename')");

            header('location:love-list.php');
           
        }

?>