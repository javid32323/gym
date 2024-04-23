<form action="" method="post" enctype="multipart/form-data">

    <table>
        <tr>
            <th><label for="">image:</label></th>
            <th><input type="file" name="image" id=""></th>
        </tr>
        <tr>
            <th><label for="">date:</label></th>
            <th><input type="date" name="date" id=""></th>
        </tr>
        <tr>
            <th><label for="">month:</label></th>
            <th><input type="month" name="month" id=""></th>
        </tr>
        <tr>
            <th><label for="">year:</label></th>
            <th><input type="year" name="year" id=""></th>
        </tr>
        <tr>
            <th><label for="">title:</label></th>
            <th><input type="text" name="title" id=""></th>
        </tr>
        <tr>
            <th><label for="">text:</label></th>
            <th><textarea name="text" id="" cols="30" rows="10"></textarea></th>
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
        $date = $_POST['date'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $title = $_POST['title'];
        $text = $_POST['text'];


        $imagename = $_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        $size = $_FILES['image']['size'];
        $type = $_FILES['image']['type'];

        $folder = "uploads/";
        $path = $folder.basename($imagename);
        if(move_uploaded_file($tmpname,$path))
        {
            mysqli_query($connect,"insert into blog_image values('','$imagename','$date','$month','$year','$title','$text')");

        }
    }

?>