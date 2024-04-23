<form action="" method="post" enctype="multipart/form-data">

    <table>
        <tr>
            <th><label for="">image:</label></th>
            <th><input type="file" name="image" id=""></th>
        </tr>
        <tr>
            <th><label for="">trainer name:</label></th>
            <th><input type="text" name="trainer" id=""></th>
        </tr>
        <tr>
            <th><label for="">name:</label></th>
            <th><input type="text" name="name" id=""></th>
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
        $trainer = $_POST['trainer'];
        $name = $_POST['name'];

        $imagename = $_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        $size = $_FILES['image']['size'];
        $type = $_FILES['image']['type'];

        $folder = "uploads/";
        $path = $folder.basename($imagename);
        if(move_uploaded_file($tmpname,$path))
        {
            mysqli_query($connect,"insert into team_form values('','$imagename','$trainer','$name')");

        }

    }

?>