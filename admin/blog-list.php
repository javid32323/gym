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
                        <a href="blog-form.php" class="btn btn-light"  >
                            <img src="images/plus.png" style="width: 40px;" alt="">
                        </a>
                        <!-- Table with stripped rows -->
                        <table class="table datatable text-align-center">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Date</th>
                                   
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Edit </th>
                                    <th scope="col">Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $data = mysqli_query($connect, "select * from blog_image ");
                                while ($res = mysqli_fetch_assoc($data)) {


                                    $id = $res['id'];
                                    $date = $res['date'];
                                    $image = $res['image'];
                                    $title = $res['title'];
                                    $text = $res['text'];
                                ?>
                                    <tr>
                                        <td><img src="upload/<?php echo $image; ?>" style="height:100px;width:100px;" alt=""></td>
                                        <td><?php echo $date; ?></td>
                                       
                                        <td><?php echo $title; ?></td>
                                        <td><?php echo $text; ?></td>

                                        <td>
                                            <a href="blog-edit.php?cid=<?php echo $id; ?>" type="button" class="btn btn btn-outline-light"><img src="images/edit.png" style="width: 40px;" alt=""></a>
                                            </td>
                                            <td>
                                            <a href="blog-delete.php?did=<?php echo $id; ?>" type="button" class="btn btn btn-outline-light"><img src="images/trash.png" style="width: 40px;" alt=""></a>
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