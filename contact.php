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
        <h4 class="display-4 font-weight-bold">Email Us For Any Query</h4>
    </div>
    <div class="row px-3 pb-2">

        <?php

        $result = mysqli_query($connect, "select * from userinfo");
        $row = mysqli_fetch_assoc($result);



        ?>
        <div class="col-sm-4 text-center mb-3">
            <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
            <h4 class="font-weight-bold">Address</h4>
            <?php

            $result = mysqli_query($connect, "select * from userinfo");
            while ($row = mysqli_fetch_assoc($result)) {


            ?>
                <p><?php echo $row['address'];  ?></p>
            <?php
            }
            ?>
        </div>
        <div class="col-sm-4 text-center mb-3">
            <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
            <h4 class="font-weight-bold">Phone</h4>
            <?php

            $result = mysqli_query($connect, "select * from userinfo");
            while ($row = mysqli_fetch_assoc($result)) {


            ?>
                <p><?php echo $row['phone'];  ?></p>
            <?php
            }
            ?>
        </div>
        <div class="col-sm-4 text-center mb-3">
            <i class="far fa-2x fa-envelope mb-3 text-primary"></i>
            <h4 class="font-weight-bold">Email</h4>
            <?php

            $result = mysqli_query($connect, "select * from userinfo");
            while ($row = mysqli_fetch_assoc($result)) {


            ?>
                <p><?php echo $row['email'];  ?></p>
            <?php
            }
            ?>
        </div>


    </div>
    <div class="row">
        <div class="col-md-6 pb-5">
            <!-- <iframe width="100%" height="500" style="border:0" loading="lazy" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC9pzIFsfKOOJ_RFAC7TjgfDeo7a9kEbGQ
    &amp;q=Khushal-Khan-Khattak-University-Opposite-Tableghi-Markaz-Karak-Pakistan">
</iframe> -->
            <p class="text-center">
                <iframe width="100%" height="500" style="border:0" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d13366.72151983691!2d71.09340204146311!3d33.11748569841569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1skhushal%20khan%20khattak%20university%20karak!5e0!3m2!1sen!2s!4v1691840128995!5m2!1sen!2s">
                </iframe>
            </p>
            <div id="map"></div>

        </div>
        <div class="col-md-6 pb-5">
            <div class="contact-form">
                <div id="success"></div>
                <form method="post" action="">
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" name="name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" name="email" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="subject" placeholder="Contact" required="required" data-validation-required-message="Please enter a Contact" name="contact" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message" name="message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <input type="submit" name="done" value="Send Message" class="btn btn-outline-primary" id="sendMessageButton">
                    </div>
                </form>

                <?php

                if (isset($_POST['done'])) {
                    // echo "working";
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $contact = $_POST['contact'];
                    $message = $_POST['message'];

                    mysqli_query($connect, "insert into form values('','$name','$email','$contact','$message')");
                }

                ?>
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