
  <!-- Navbar start -->

<?php

    include("header.php");


?>  
  <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Our Features</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Our Features</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- GYM Feature Start -->
    <div class="container feature pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Why Choose Us?</h4>
            <h4 class="display-4 font-weight-bold">Benifits of Joining Our GYM</h4>
        </div>
        <div class="row">


<?php
$connect = mysqli_connect("localhost","root","","gym");


    $result = mysqli_query($connect,"select * from feature_benifite order by rand() limit 4");
    while($row = mysqli_fetch_assoc($result))
    {

    



?>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="img/<?php   echo $row['image'];   ?>" alt="Image">
                        <i class="<?php   echo $row['icon'];   ?>"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold"><?php   echo $row['title'];   ?></h4>
                        <p><?php   echo $row['text'];   ?></p>
                    </div>
                </div>
            </div>
            
           
<?php

    }

?>
    </div>
    </div>
    <!-- GYM Feature End -->


    <!-- Testimonial Start -->
    <div class="container-fluid position-relative testimonial mt-5" style="margin-bottom: 90px;">
        <div class="container-fluit">
            <div class="row px-3 align-items-center">
                <div class="col-md-6 bg-secondary">
                    <div class="d-flex align-items-center px-3" style="min-height: 450px;">
                        <div id="carouselId" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselId" data-slide-to="1"></li>
                                <li data-target="#carouselId" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">

<?php

    $res = mysqli_query($connect,"select * from feature_client");
    while($rows= mysqli_fetch_assoc($res))
    {

    


?>
                                <div class="carousel-item active">
                                    <div class="d-flex align-items-center mb-4 text-white">
                                        <img width="80" height="80" class="rounded-circle bg-dark p-2" src="img/<?php echo $rows['image'];   ?>"
                                            alt="Image">
                                        <div class="pl-4">
                                            <h4 class="text-primary"><?php echo $rows['name'];   ?></h4>
                                            <p class="m-0"><?php echo $rows['profission'];   ?></p>
                                        </div>
                                    </div>
                                    <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                    <?php echo $rows['text'];   ?>
                                    </div>
                                </div>


<?php

}

?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

<?php

    $client = mysqli_query($connect,"select * from feature_client_says");
    while($clin= mysqli_fetch_assoc($client))
    {

    


?>
                    <div class="pl-md-3 d-none d-md-block">
                        <h4 class="text-primary"><?php  echo $clin['name'];  ?></h4>
                        <h4 class="display-4 mb-4 text-white font-weight-bold"><?php  echo $clin['title'];  ?></h4>
                        <p class="m-0 text-white"><?php  echo $clin['text'];  ?>
                        </p>
                    </div>
<?php

    }

?>

                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
 <?php

    include("footer.php");
?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>