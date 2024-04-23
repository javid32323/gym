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
                                    <th scope="col">Logo</th>
                                    <th scope="col">Addres </th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Email </th>
                                    <th scope="col">Map </th>
                                    <th scope="col">Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $data = mysqli_query($connect, "select * from info");
                                while ($res = mysqli_fetch_assoc($data)) {


                                    $id = $res['id'];
                                    $logo = $res['logo'];
                                    $address = $res['address'];
                                    $contact = $res['contact'];
                                    $email = $res['email'];
                                    $map = $res['map'];
                                ?>
                                    <tr>
                                        <td><?php echo $logo; ?></td>
                                        <td><?php echo $address; ?></td>
                                        <td><?php echo $contact; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td><?php echo $map; ?></td>

                                        
                                            <td>
                                            <a href="info-delete.php?did=<?php echo $id; ?>" type="button" class="btn btn btn-outline-light"><img src="images/trash.png" style="width: 40px;" alt=""></a>
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