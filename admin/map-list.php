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
                        <a href="map-form.php" class="btn btn-light"  >
                            <img src="images/plus.png" style="width: 40px;" alt="">
                        </a>
                        <!-- Table with stripped rows -->
                        <table class="table datatable text-align-center">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Map Link</th>
                                    <th scope="col">Type </th>
                                    <th scope="col">Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $data = mysqli_query($connect, "select * from map ");
                                while ($res = mysqli_fetch_assoc($data)) {


                                    $id = $res['id'];
                                    $image = $res['image'];
                                    $map = $res['map'];
                                    $link = $res['link'];
                                ?>
                                    <tr>
                                        <td><img src="images/<?php echo $image; ?>" style="height: 50px; width: 50px;" /></td>
                                        <td><?php echo $map; ?></td>
                                        <td><?php echo $link; ?></td>

                                       
                                            <td>
                                            <a href="map-delete.php?did=<?php echo $id; ?>" type="button" class="btn btn btn-outline-light"><img src="images/trash.png" style="width: 40px;" alt=""></a>
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