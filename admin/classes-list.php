<?php
session_start();
include('db.php');
include('header.php');
include('head.php');
include('sidebar.php');

if (isset($_SESSION['token'])) {
?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <!-- Column -->
                <div class="card">
                    <div class="table-responsive">
                        <a href="classes-form.php" class="btn btn-light"  >
                            <img src="images/plus.png" style="width: 40px;" alt="">
                        </a>
                        <!-- Table with stripped rows -->
                        <table class="table datatable text-align-center">
                            <thead>
                                <tr>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Title </th>
                                    <th scope="col">Description </th>
                                    <th scope="col">Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                               $row = mysqli_query($connect,"select * from classes");
                               while($res = mysqli_fetch_assoc($row))
{


                                    $id = $res['id'];
                                    $timeid = $res['timeid'];

                                   $time =  mysqli_fetch_assoc(mysqli_query($connect,"select * from time where id='$timeid'"));
                                  $timename =  $time['name'];

                                    $dayid = $res['dayid'];

                                    $day =  mysqli_fetch_assoc(mysqli_query($connect,"select * from day where id='$dayid'"));
                                    $dayname =  $day['name'];


                                    $subjectid = $res['subjectid'];

                                    $subject =  mysqli_fetch_assoc(mysqli_query($connect,"select * from subject where id='$subjectid'"));
                                    $subname =  $subject['name'];
                                ?>
                                    <tr>
                                        <td><?php echo $timename; ?></td>
                                        <td><?php echo $dayname; ?></td>
                                        <td><?php echo $subname; ?></td>

                                       
                                            <td>
                                            <a href="classes-delete.php?did=<?php echo $id;  ?>" type="button" class="btn btn btn-outline-light"><img src="images/trash.png" style="width: 40px;" alt=""></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        <?php
        include('footer.php');
    } else
                 echo "<script>window.location.href = 'login.php'</script>";

        ?>