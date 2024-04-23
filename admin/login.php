

<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Login
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
  <div class="page-header align-items-start min-vh-100" style="background-image: url('../img/bgimg.jpg')" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto" >
      <div class="row" >
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
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
              <form role="form" action="#" method="post" class="text-start">
                <div class="input-group input-group-outline my-3">
                  <label class="form-label">User Name</label>
                  <input type="email" name="email" class="form-control">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" name="password" class="form-control">
                </div>
                
                <div class="text-center">
                  <input type="submit" name="done" class="btn bg-gradient-success w-100 my-4 mb-2" value="Sign in">                </div>
                <p class="mt-4 text-sm text-center">
                 <a href="register.php"> Don't have an account? </a>
                </p>
              </form>
            </div>

            <?php
session_start();
include('db.php');
if (isset($_POST['done'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $count  = mysqli_num_rows(mysqli_query($connect, "select * from register where email='$email' AND password='$pass'"));
    
    if ($count  > 0) {
        $_SESSION['token'] = $email;
        header("location:workout-list.php");
        // echo "<script>window.location.href = 'index.php'</script>";
    } else {
        echo "<script>alert('Sorry! Invalid Credentials...');</script>";
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