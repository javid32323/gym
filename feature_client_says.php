<form action="" method="post" >

    <table>
       
        <tr>
            <th><label for="">name:</label></th>
            <th><input type="text" name="name" id=""></th>
        </tr>
        <tr>
            <th><label for="">title:</label></th>
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
        $name = $_POST['name'];
        $title = $_POST['title'];
        $text = $_POST['text'];


       
            mysqli_query($connect,"insert into feature_client_says values('','$name','$title','$text')");

        
    }

?>