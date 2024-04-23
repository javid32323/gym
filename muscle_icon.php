<form action="" method="post">

    <table>
        <tr>
            <th><label for="">icon:</label></th>
            <th><input type="text" name="icon" id=""></th>
        </tr>
        <tr>
            <th><label for="">Title:</label></th>
            <th><input type="text" name="title" id=""></th>
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
        $icon = $_POST['icon'];
        $title = $_POST['title'];
        $text = $_POST['text'];


        mysqli_query($connect,"insert into muscle_icon values('','$icon','$title','$text')");
    }

?>