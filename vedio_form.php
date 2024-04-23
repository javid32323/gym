<!-- Navbar start -->

<?php

// $connect = mysqli_connect("localhost","root","","gym");

include("admin/db.php");
include("header.php");


?>
<!-- Navbar End -->


<!-- Page Header Start -->
<div class="container-fluid page-header mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Contact Us</h4>
        <div class="d-inline-flex">
            <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Contact Us</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-primary font-weight-bold">Get In Touch</h4>
        <h4 class="display-4 font-weight-bold">Contact Us For Any Query </h4>
        <h3>03159177427/03329257432</h3>
    </div>
   
    <div class="row">
        <div class="col-md-6 pb-5">
            <!-- <iframe width="100%" height="500" style="border:0" loading="lazy" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC9pzIFsfKOOJ_RFAC7TjgfDeo7a9kEbGQ
    &amp;q=Khushal-Khan-Khattak-University-Opposite-Tableghi-Markaz-Karak-Pakistan">
</iframe> -->

        
        
        <div class="col-md-12 pb-5">
            <div class="contact-form">
                <div id="success"></div>
                <form method="post" action="">
                   
                    
                    <div class="control-group">
                        <textarea class="form-control" rows="6" id="message" placeholder="Please enter your jazzCash/easyPaisa" required="required" data-validation-required-message="Please enter your jazzCash/easyPaisa" name="userid"></textarea>
                    </div>
                    <div>
                        <input type="submit" name="done" value="Send Message" class="btn btn-outline-primary" id="sendMessageButton">
                    </div>
                </form>

                <?php

                if (isset($_POST['done'])) {
                    // echo "working";
                    $userid = $_POST['userid'];

                    $res = mysqli_fetch_assoc(mysqli_query($connect, "select * from video_info where userid='$userid'"));
                    if($res>0)
                    {
                        // header('location:gallery2.php');
              echo "<script>window.location.href = 'gallery2.php'</script>";

                        // echo  $res;
                    }
                    else
                    {
                        echo "<script> alert('Please verified your key');</script>"; 
                    }
                }

                ?>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Contact End -->


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
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: 33.09828,
                lng: 71.09258
            },
            zoom: 100
        });
    }
</script>


</body>

</html>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4W41XKZZGS"></script>