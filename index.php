<?php
include('admin/db.php');
include('header.php');

?>


<body class="bg-white">
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="" class="navbar-brand">
                <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">passionate</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4 bg-secondary">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <a href="feature.php" class="nav-item nav-link">Our Features</a>
                    <a href="class.php" class="nav-item nav-link">Classes</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="blog.php" class="dropdown-item">Blog Grid</a>
                            <a href="gallery.php" class="dropdown-item">Gallery</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary text-capitalize m-0">Gym for passionate peoples</h3>
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Best Gym In Town</h2>
                        <a href="" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Join Us Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-primary text-capitalize m-0">Gym & Fitness Center</h3>
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Get Body In Shape</h2>
                        <a href="" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Join Us Now</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Gym Class Start -->
    <div class="container gym-class mb-5">
        <div class="row px-3">
            <div class="col-md-6 p-0">
                <div class="gym-class-box d-flex flex-column align-items-end justify-content-center bg-primary text-right text-white py-5 px-5">
                    <i class="flaticon-six-pack"></i>
                    <h3 class="display-4 mb-3 text-white font-weight-bold">Body Building</h3>
                    <p>
                        Lorem justo tempor sit aliquyam invidunt, amet vero ea dolor ipsum ut diam sit dolores, dolor
                        sit eos sea sanctus erat lorem nonumy sanctus takimata. Kasd amet sit sadipscing at..
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt illum recusandae, saepe eaque tempora blanditiis, maxime iure eos est enim quas laudantium ex et animi officiis! Cum aliquid deleniti ipsum.
                    </p>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="gym-class-box d-flex flex-column align-items-start justify-content-center bg-secondary text-left text-white py-5 px-5">
                    <i class="flaticon-bodybuilding"></i>
                    <h3 class="display-4 mb-3 text-white font-weight-bold">Muscle Building</h3>
                    <p>
                        Lorem justo tempor sit aliquyam invidunt, amet vero ea dolor ipsum ut diam sit dolores, dolor
                        sit eos sea sanctus erat lorem nonumy sanctus takimata. Kasd amet sit sadipscing at..
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque quibusdam iusto temporibus quaerat officia, perspiciatis autem id, neque dolorum consequuntur dicta ratione voluptatibus placeat similique recusandae, quo voluptates. Dicta, odit?
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Gym Class End -->


    <!-- About Start -->
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid mb-4 mb-lg-0" src="img/about.jpg" alt="Image">
            </div>
            <div class="col-lg-6">
                <h2 class="display-4 font-weight-bold mb-4">10 Years Experience</h2>
                <p>Labore vero lorem eos sed aliquy ipsum aliquy sed. Vero dolore dolore takima ipsum lorem rebum</p>
                <div class="row py-2">
                    <div class="col-sm-6">
                        <i class="flaticon-barbell display-2 text-primary"></i>
                        <h4 class="font-weight-bold">Certified GYM Center</h4>
                        <p>Ipsum sanctu dolor ipsum dolore sit et kasd duo</p>
                    </div>
                    <div class="col-sm-6">
                        <i class="flaticon-medal display-2 text-primary"></i>
                        <h4 class="font-weight-bold">Award Winning</h4>
                        <p>Ipsum sanctu dolor ipsum dolore sit et kasd duo</p>
                    </div>
                </div>
                <a href="" class="btn btn-lg px-4 btn-outline-primary">Learn More</a>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid my-5">
        <div class="row">
          <?php
          $counter=1;
          $res = mysqli_query($connect,"select * from workout");
          while($row = mysqli_fetch_assoc($res))
          {
            $icon = $row['icon'];
            $title = $row['title'];
            $description = $row['description'];
          
          
          ?>
            <div class="col-lg-4 p-0">
                <div class="d-flex align-items-center 
                
                <?php
                    if($counter==2)
                    {
                       echo "bg-success"; 

                    }
                    else
                    {
                        echo "bg-secondary"; 
                    }
                    $counter++;
                ?>
                text-white px-5" style="min-height: 300px;">
                    <i class="<?php echo $icon; ?> display-3 text-primary mr-3"></i>
                    <div class="">
                        <h2 class="text-white mb-3"><?php echo $title; ?></h2>
                        <p><?php echo $description; ?>
                        </p>
                    </div>
                </div>
            </div>
          <?php
          }
          ?>  
        </div>
    </div>
    <!-- Features End -->


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


    <!-- Subscribe Start -->
    <div class="subscribe container-fluid my-5 py-5 text-center">
        <h4 class="display-4 text-white font-weight-bold mt-5 mb-3">Subscribe Our Newsletter</h4>
        <p class="text-white mb-4">Subscribe and get Our latest article in your inbox</p>
        <form class="form-inline justify-content-center mb-5">
            <div class="input-group">
                <input type="text" class="form-control-lg" placeholder="Your Email">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Subscribe End -->


    <!-- Class Timetable Start -->
    <div class="container gym-feature py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Class Timetable</h4>
            <h4 class="display-4 font-weight-bold">Working Hours and Class Time</h4>
        </div>
        <div class="tab-class">
           
            <div class="tab-content">
                <div id="class-all" class="container tab-pane p-0 active">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                               
                            <?php
// Assume you have a database connection established as "$connect"

// Perform a JOIN query to retrieve class data along with the associated day, subject, and time names
$query = "SELECT classes.*, day.name AS day_name, subject.name AS subject_name, time.name AS time_name
          FROM classes
          INNER JOIN day ON classes.dayid = day.id
          INNER JOIN subject ON classes.subjectid = subject.id
          INNER JOIN time ON classes.timeid = time.id";

$result = mysqli_query($connect, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($connect));
}
?>

<!-- Display the class data in a table -->
<table class="table table-bordered table-lg m-0">
    <tr class="bg-secondary text-white text-center">
        <th>Day</th>
        <th>Subject</th>
        <th>Time</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td  class='bg-secondary text-white text-center'>" . $row['day_name'] . "</td>";
        echo "<td>" . $row['subject_name'] . "</td>";
        echo "<td>" . $row['time_name'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!-- Class Timetable End -->


    <!-- BMI Calculation Start -->
    <div class="container position-relative bmi my-5">
        <div class="container-fluit g-5 ml-4">
            <div class="row px-3 align-items-center">
                <div class="col-md-6">
                    <div class="pr-md-3 d-none d-md-block">
                        <h4 class="text-primary">Body Mass Index </h4>
                        <h4 class="display-4 text-white font-weight-bold mb-4">Whate is BMI?</h4>
                        <p class="m-0 text-white">Vero elitr lorem magna justo magna justo at justo est ipsum sed clita lorem dolor ipsum sed. Lorem sea lorem vero. Sanct dolor clita clita rebum kasd magna erat diam</p>
                    </div>
                </div>
                <div class="col-md-6 bg-secondary py-5">
                    <div class="py-5 px-3">
                        <h1 class="mb-4 text-white">Calculate your BMI</h1>
                        <form>
                            <div class="form-row">
                                <div class="col form-group">
                                    <input type="text" class="form-control form-control-lg bg-dark text-white" placeholder="Weight (KG)">
                                </div>
                                <div class="col form-group">
                                    <input type="text" class="form-control form-control-lg bg-dark text-white" placeholder="Height (CM)">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <input type="text" class="form-control form-control-lg bg-dark text-white" placeholder="Age">
                                </div>
                                <div class="col form-group">
                                    <select class="custom-select custom-select-lg bg-dark text-muted">
                                        <option>Gender</option>
                                        <option>Mal</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <input type="button" class="btn btn-lg btn-block btn-dark border-light"
                                        value="Calculate Now">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BMI Calculation End -->


    <!-- Team Start -->
    <div class="container pt-5 team">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Our Trainers</h4>
            <h4 class="display-4 font-weight-bold">Meet Our Expert Trainers</h4>
        </div>
        <div class="row">
        <?php
          $res = mysqli_query($connect,"select * from trainer");
          while($row = mysqli_fetch_assoc($res))
          {
            $image = $row['image'];
            $name = $row['name'];
            $profession = $row['profession'];
          
          
          ?>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="admin/upload/<?php echo $image; ?>" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary"><?php echo $name; ?></h4>
                        <p class="card-text"><?php echo $profession; ?></p>
                    </div>
                </div>
            </div>
           <?php
          }

          ?>
        </div>
    </div>
    <!-- Team End -->
    <!-- Team Start -->
    <div class="container pt-5 team">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Our Team</h4>
            <h4 class="display-4 font-weight-bold">Meet Our Expert Team</h4>
        </div>
        <div class="row">
        <?php
          $res = mysqli_query($connect,"select * from team_form");
          while($row = mysqli_fetch_assoc($res))
          {
            $image = $row['image'];
            $name = $row['name'];
            $profession = $row['profession'];
          
          
          ?>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card border-0 bg-secondary text-center text-white">
                    <img class="card-img-top" src="admin/upload/<?php echo $image;  ?>" alt="">
                    <div class="card-social d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://twitter.com/tweeter?lang=en"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://www.facebook.com/groups/600591733944767/?device_id=b2f21a82-c9a2-4a7e-b989-45df3d612973"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body bg-secondary">
                        <h4 class="card-title text-primary"><?php echo $name;  ?></h4>
                        <p class="card-text"><?php echo $profession;  ?></p>
                    </div>
                </div>
            </div>
          <?php

          }

          ?>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid position-relative testimonial my-5">
        <div class="container-fluid">
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
                            $counter=1;
          $res = mysqli_query($connect,"select * from testimonial");
          while($row = mysqli_fetch_assoc($res))
          {
            $image = $row['image'];
            $name = $row['name'];
            $profession = $row['profession'];
            $description = $row['description'];
          
          
          ?>  
                                <div class="carousel-item
                                <?php

if($counter=="1")
echo "active";
$counter++;
                                ?>
                                ">
                                    <div class="d-flex align-items-center mb-4 text-white">
                                        <img width="80" height="80" class="rounded-circle bg-dark p-2" src="admin/upload/<?php echo $image; ?>" alt="Image">
                                        <div class="pl-4">
                                            <h4 class="text-primary"><?php echo $name; ?></h4>
                                            <p class="m-0"><?php echo $profession; ?></p>
                                        </div>
                                    </div>
                                    <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                    <?php echo $description; ?>                                    </div>
                                </div>
                               <?php
          }
          ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pl-md-3 d-none d-md-block">
                        <h4 class="text-primary">Testimonial</h4>
                        <h4 class="display-4 mb-4 text-white font-weight-bold">What Our Clients Say?</h4>
                        <p class="m-0 text-white">Vero elitr lorem magna justo magna justo at justo est ipsum sed clita lorem dolor ipsum sed. Lorem sea lorem vero. Sanct dolor clita clita rebum kasd magna erat diam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Our Blog</h4>
            <h4 class="display-4 font-weight-bold">Latest Article From Blog</h4>
        </div>
        <div class="row">
        <?php
$connect = mysqli_connect("localhost","root","","gym");

    $result = mysqli_query($connect,"select * from blog_image");
    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
        $image = $row['image'];
        $date = $row['date'];
        $title = $row['title'];

    

?>
            <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="admin/upload/<?php echo $image; ?>" alt="Image">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white" style="width: 80px; height: 80px;">
                        <small><?php echo $date; ?></small>
                      
                    </div>
                    <div class="pl-3">
                        <h3 class="font-weight-bold"><?php echo $title; ?></h3>
                        <div class="d-flex">
                            <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                            <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                            <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                        </div>
                    </div>
                </div>
                
                <a class="btn btn-outline-primary mt-2 px-3" href="single.php?id=<?php echo $id; ?>">Read More <i class="fa fa-angle-right"></i></a>
            </div>
          <?php
    }
    ?> 
        </div>
    </div>
    <!-- Blog End -->


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