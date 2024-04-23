<?php
session_start();
include('db.php');
include('header.php');
include('head.php');
include('sidebar.php');

if (isset($_SESSION['token'])) {
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <!-- Column -->
                <div class="card">
                    <div class="table-responsive">
                        <a href="workout-form.php" class="btn btn-light"  >
                            <img src="images/plus.png" style="width: 40px;" alt="">
                        </a>
                        <!-- Table with stripped rows -->
                        <table class="table datatable text-align-center">
                            <thead>
                                <tr>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Title </th>
                                    <th scope="col">Description </th>
                                    <th scope="col">Edit </th>
                                    <th scope="col">Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                               $row = mysqli_query($connect,"select * from workout");
                               while($res = mysqli_fetch_assoc($row))
{


                                    $id = $res['id'];
                                    $icon = $res['icon'];
                                    $title = $res['title'];
                                    $description = $res['description'];
                                ?>
                                    <tr>
                                        <td><?php echo $icon; ?></td>
                                        <td><?php echo $title; ?></td>
                                        <td><?php echo $description; ?></td>

                                        <td>
                                            <a href="workout-edit.php?eid=<?php echo $id; ?>" type="button" class="btn btn btn-outline-light"><img src="images/edit.png" style="width: 40px;" alt=""></a>
                                            </td>
                                            <td>
                                            <a href="workout-delete.php?did=<?php echo $id;  ?>" type="button" class="btn btn btn-outline-light"><img src="images/trash.png" style="width: 40px;" alt=""></a>
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