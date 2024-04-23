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
                                <h3 class="mb-5 mt-4">Collapse Form</h3>
                                <form class="row g-3" action="" method="post" enctype="multipart/form-data">



                                    <div class="row mb-3">
                                        <input type="text" name="title" required class="form-control" placeholder="title">
                                    </div>
                                    <div class="row mb-3">
                                        <textarea name="description" id="" cols="30" placeholder="description" rows="10"></textarea>
                                    </div>
                                    <div class="row mb-3">
                                    <select class="form-select" name="cid" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="collapseOne">One</option>
                                        <option value="headingTwo">Two</option>
                                    </select>
                                    </div>
                                    <div class="row align-self-center text-center m-t-5">
                                        <input name="submit" class="btn btn-success" type="submit" value="Save">
                                        <span>
                                </form>
                                <?php
                                if (isset($_POST['submit'])) {
                                    $title = $_POST['title'];
                                    $cid = $_POST['cid'];
                                    $description = $_POST['description'];
                                    mysqli_query($connect, "insert into collapse values('','$title','$description','$cid')");
                                    echo "Record added successfully";
                                    echo "<script>window.location.href = 'collapse-list.php'</script>";
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