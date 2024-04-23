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
                        
                        <!-- Table with stripped rows -->
                        <table class="table datatable text-align-center">
                            <thead>
                                <tr>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email </th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Message </th>
                                    <th scope="col">Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $data = mysqli_query($connect, "select * from form ");
                                while ($res = mysqli_fetch_assoc($data)) {


                                    $id = $res['id'];
                                    $name = $res['name'];
                                    $email = $res['email'];
                                    $subject = $res['contact'];
                                    $description = $res['message'];
                                ?>
                                    <tr>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td><?php echo $subject; ?></td>
                                        <td><?php echo $description; ?></td>

                                        
                                            <td>
                                            <a href="contact-delete.php?did=<?php echo $id; ?>" type="button" class="btn btn btn-outline-light"><img src="images/trash.png" style="width: 40px;" alt=""></a>
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