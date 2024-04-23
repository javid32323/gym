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
                        <a href="service-icon-form.php" class="btn btn-light"  >
                            <img src="images/plus.png" style="width: 40px;" alt="">
                        </a>
                        <!-- Table with stripped rows -->
                        <table class="table datatable text-align-center">
                            <thead>
                                <tr>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Description </th>
                                    <th scope="col">Edit </th>
                                    <th scope="col">Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $data = mysqli_query($connect, "select * from service ");
                                while ($res = mysqli_fetch_assoc($data)) {


                                    $id = $res['id'];
                                    $icon = $res['icon'];
                                    $description = $res['description'];
                                ?>
                                    <tr>
                                        <td><?php echo $icon; ?></td>
                                        <td><?php echo $description; ?></td>

                                        <td>
                                            <a href="service-icon-edit.php?cid=<?php echo $id; ?>" type="button" class="btn btn btn-outline-light"><img src="images/edit.png" style="width: 40px;" alt=""></a>
                                            </td>
                                            <td>
                                            <a href="service-icon-delete.php?did=<?php echo $id; ?>" type="button" class="btn btn btn-outline-light"><img src="images/trash.png" style="width: 40px;" alt=""></a>
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
        header('location:login.php');
        ?>