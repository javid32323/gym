    <!-- Navbar start -->

    <?php

include("admin/db.php");
include("header.php");


?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Gym Classes</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Gym Classes</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Gym Class Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Our Blog</h4>
            <h4 class="display-4 font-weight-bold">Latest Article Video Blog</h4>
        </div>
        <div class="row">
        <?php
                               $row = mysqli_query($connect,"select * from video");
                               while($res = mysqli_fetch_assoc($row))
{


                                    $id = $res['id'];
                                    $video = $res['video'];
                                    $title = $res['title'];

                                    ?>
            <div class="col-lg-6 mb-5 blog-item">
                <video class="img-fluid mb-2" controls autoplay muted loop src="img/<?php echo $video; ?>"alt="video">
               
            </div>
            
                
     <?php
     
}
?>
        </div>
    </div>


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