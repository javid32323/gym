<form action="" method="post" >

    <table>
        <tr>
            <th><label for="">class:</label></th>
            <th><input type="text" name="class" id=""></th>
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
        $game = $_POST['class'];
        

       
            mysqli_query($connect,"insert into working_class values('','$game')");

        
    }

?>