<form action="" method="post">

    <table>
        <tr>
            <th><label for="">Address:</label></th>
            <th><input type="text" name="add" id=""></th>
        </tr>
        <tr>
            <th><label for="">Phone:</label></th>
            <th><input type="text" name="phone" id=""></th>
        </tr>
        <tr>
            <th><label for="">Email:</label></th>
            <th><input type="text" name="eml" id=""></th>
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
        $address = $_POST['add'];
        $phone = $_POST['phone'];
        $eml = $_POST['eml'];


        mysqli_query($connect,"insert into userinfo values('','$address','$phone','$eml')");
    }

?>