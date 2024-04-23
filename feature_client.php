<form action="" method="post" enctype="multipart/form-data">

    <table>
        <tr>
            <th><label for="">image:</label></th>
            <th><input type="file" name="image" id=""></th>
        </tr>
        <tr>
            <th><label for="">name:</label></th>
            <th><input type="text" name="name" id=""></th>
        </tr>
        <tr>
            <th><label for="">profission:</label></th>
            <th><input type="text" name="profission" id=""></th>
        </tr>
        <tr>
            <th><label for="">text:</label></th>
            <th><input type="text" name="text" id=""></th>
        </tr>
        
        
        <tr>
            <th>
                <input type="submit" name="done" value="submit">
            </th>
        </tr>
    </table>

</form>


<?php

$connect = mysqli_connect("localhost","root","","gym");
    if(isset($_POST['done']))
    {
        $name = $_POST['name'];
        $profission = $_POST['profission'];
        $text = $_POST['text'];


        $imagename = $_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        $size = $_FILES['image']['size'];
        $type = $_FILES['image']['type'];

        $folder = "uploads/";
        $path = $folder.basename($imagename);
        if(move_uploaded_file($tmpname,$path))
        {
            mysqli_query($connect,"insert into feature_client values('','$imagename','$name','$profission','$text')");

        }
    }

?>