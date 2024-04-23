<form action="" method="post" >

    <table>
       
        <tr>
            <th><label for="">Time:</label></th>
            <th>
                <select name="time" id="">
                    <option value="">select time</option>
<?php
$connect = mysqli_connect("localhost","root","","gym");

    $res = mysqli_query($connect,"select * from working_time");
    while($work = mysqli_fetch_assoc($res))
    {
        $wid = $work['id'];
        $timeid = $work['time'];

        echo "<option value='$wid'>$timeid</option>";
    }

?>
                </select>
            </th>
        </tr>
        <tr>
            <th><label for="">days:</label></th>
            <th>
                <select name="day" id="">
                <option value="">select days</option>

                <?php

    $result = mysqli_query($connect,"select * from working_day");
    while($day = mysqli_fetch_assoc($result))
    {
        $did = $day['id'];
        $dayid = $day['days'];

        echo "<option value='$did'>$dayid</option>";
    }

?>
                 </select>
            </th>
        </tr>

        <tr>
        <th><label for="">classes:</label></th>
        <th>
        <select name="class" id="">
        <option value="">select class</option>

                <?php

    $resu = mysqli_query($connect,"select * from working_class");
    
    while($cls = mysqli_fetch_assoc($resu))
    {
        $gid = $cls['id'];
        $game = $cls['game'];

        echo "<option value='$gid'>$game</option>";

       
    }

?>
                 </select> 
        </th>
            
    </tr>
       
        <tr>
            <th>
                <input type="submit" name="done" value="submit">
            </th>
        </tr>
    </table>

</form>


<?php

    if(isset($_POST['done']))
    {
        $time = $_POST['time'];
        $day = $_POST['day'];
        $game = $_POST['class'];
        
        
        if($game=='')
        {
            mysqli_query($connect,"insert into main_working values('','$day','$time','$game')");


        }
        
        
    }

?>