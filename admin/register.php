<!--
=========================================================
* Material Kit 2 - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Register
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="sign-in-basic">
  <!-- Navbar Transparent -->
  
    <!-- End Navbar -->
  <div class="page-header align-items-start min-vh-100" style="background-image: url('../pexels-ekaterina-bolovtsova-6077326.jpg');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Register</h4>
                <div class="row mt-3">
                  <div class="col-2 text-center ms-auto">
                    
                  </div>
                  <div class="col-2 text-center px-1">
                    
                  </div>
                  <div class="col-2 text-center me-auto">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body mt-4">
              <form action="#" method="post"  class="text-start" enctype="multipart/form-data">
                <div class="input-group input-group-outline my-3">
                  <label class="form-label"> Full Name</label>
                  <input type="text" name="fullname" class="form-control">
                </div>
                <div class="input-group input-group-outline my-3">
                  <label class="form-label">Mobile Number </label>
                  <input type="number" name="number" class="form-control">
                </div>
                <div class="input-group input-group-outline my-3">
                  <label class="form-label">User Name</label>
                  <input type="email"  name="email" class="form-control">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Password</label>
                  <input type="password"  name="password" class="form-control">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <input type="file"  name="image" class="form-control">
                </div>
                
                <div class="text-center">
                  <input type="submit" name="submit" class="btn bg-gradient-success w-100 my-4 mb-2" value="Sign up">
                </div>
                <p class="mt-4 text-sm text-center">
                 <a href="login.php"> Already have an account?</a>
                </p>
              </form>
            </div>

            <?php
include('db.php');

if(isset($_POST['submit']))
{
   $fullname = $_POST['fullname'];
   $email = $_POST['email'];
   $pass = $_POST['password'];
   $number = $_POST['number'];

   $imagename = $_FILES['image']['name'];
                      $imagetmp = $_FILES['image']['tmp_name'];
                      
                      $folder = "upload/";
                      $path = $folder.basename($imagename);
                      
                      
                      
                             

   $res = mysqli_query($connect,"select * from register where email='$email'");
   $count = mysqli_num_rows($res);
  if($count>0)
  {
    echo "<script>alert('User already exists');</script>";
  }
  else
  {
    if(move_uploaded_file($imagetmp,$path))
    {

    mysqli_query($connect,"insert into register values('','$fullname','$email','$pass','$imagename','$number')");
  }
  }
   
}

?>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="assets/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
</body>

</html>