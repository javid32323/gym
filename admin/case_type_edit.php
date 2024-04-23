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
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Case Type Edit</h4>
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

            <?php

include('db.php');


$id = $_GET['cid'];

$result = mysqli_query($connect,"select * from cases_type where id='$id'");

   $line = mysqli_fetch_assoc($result);

   $type = $line['type'];
  
   
  

?>


<?php

if(isset($_POST['submit']))
{
    $did = $_POST['id'];
    $type = $_POST['type'];
    

    mysqli_query($connect,"update cases_type set type='$type' where id='$did'");
  
    header('location:case_type.php');
  
   
}

?>
            <div class="card-body mt-4">
              <form action="#" method="post"  class="text-start">
                <div class="input-group input-group-outline my-3">
                  <label class="form-label"> Case Type</label>
                  <input type="text" name="type" value="<?php  echo $type; ?>" class="form-control">
                  <input type="hidden" name="id" value="<?php  echo $id; ?>" class="form-control">
                </div>
                
                
                
                
                <div class="text-center">
                  <input type="submit" name="submit" class="btn bg-gradient-success w-100 my-4 mb-2" value="Update">
                </div>
                <div class="text-center">
                  <a href="case_type.php"  class="btn bg-gradient-success w-100 my-4 mb-2" > Back</a>
                </p>
              </form>
            </div>

           
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