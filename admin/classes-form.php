<?php
session_start();
include('db.php');
include('header.php');
include('head.php');
include('sidebar.php');

if (isset($_SESSION['token'])) {
?>

    <body class="fix-header fix-sidebar card-no-border">
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <!-- Column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3 class="mb-5 mt-4">Workout Form</h3>
                                <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                                    <div class="row mb-3">
                                        <select name="dayid" id="">
                                            <?php
                                                $day = mysqli_query($connect,"select * from day");
                                                while($row=mysqli_fetch_assoc($day))
                                                {
                                                    $id = $row['id'];
                                                    $name = $row['name'];

                                                    echo "<option value='$id'>$name</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="row mb-3">
                                        <select name="subjectid" id="">
                                            <?php
                                                $day = mysqli_query($connect,"select * from subject");
                                                while($row=mysqli_fetch_assoc($day))
                                                {
                                                    $id = $row['id'];
                                                    $name = $row['name'];

                                                    echo "<option value='$id'>$name</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="row mb-3">
                                        <select name="timeid" id="">
                                            <?php
                                                $day = mysqli_query($connect,"select * from time");
                                                while($row=mysqli_fetch_assoc($day))
                                                {
                                                    $id = $row['id'];
                                                    $name = $row['name'];

                                                    echo "<option value='$id'>$name</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>

                                    

                                    <div class="row align-self-center text-center m-t-5">
                                        <input name="submit" class="btn btn-success" type="submit" value="Save">
                                        <span>
                                </form>
                                <?php
                                        if(isset($_POST['submit']))
                                        {
                                            $dayid = $_POST['dayid'];
                                            $timeid = $_POST['timeid'];
                                            $subjectid = $_POST['subjectid'];

                                            mysqli_query($connect,"insert into classes values('','$dayid','$timeid','$subjectid')");
                                            echo "<script>window.location.href = 'classes-list.php'</script>";
                                        }
                                    
                                

                                ?>
                                </span>
                            </div>




                        </div>
                    </div>
                </div>
            </div> <!-- End Table with stripped rows -->
        </div>
        </div>

        <!--  -->


        </div>

    <?php
    include('footer.php');
} else
    header('location:login.php');
    ?>