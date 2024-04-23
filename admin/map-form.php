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
                <h3 class="mb-5 mt-4">Testimonials Form</h3>
                <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                 

                  <div class="row mb-3">
                    <input type="text" name="map" required class="form-control" placeholder="Map Link">
                  </div>
                  <div class="row mb-3">
                    <select name="link" id="">
                        <option value="0">Chose one option</option>
                        <option value="1">Low Intensity</option>
                        <option value="2">Medium Intensity</option>
                        <option value="3">Hight Intensity</option>
                        <option value="4">Dotholese</option>
                        <option value="5">Ruthings</option>
                    </select>
                  </div>
                  
                  <div class="row mb-3">
                    <input type="file" name="image" class="form-control" required /> 
                  </div>
                  <div class="row align-self-center text-center m-t-5">
                    <input name="submit" class="btn btn-success" type="submit" value="Save">
                    <span>
                    </form>
                    <?php
                    if (isset($_POST['submit'])) 
                    {
                      $map = $_POST['map'];
                      $link = $_POST['link'];

                      $filename = $_FILES['image']['name'];
                      $tempname = $_FILES['image']['tmp_name'];
                      $filesize = $_FILES['image']['size'];
                      $filetype = $_FILES['image']['type'];

                      $direct = "images/";
                      $path = $direct.basename($filename);

                      if(move_uploaded_file($tempname,$path))
                      {
                        mysqli_query($connect,"insert into map values('','$map','$link','$filename')");
                        echo "Record added successfully";
                        echo "<script>window.location.href = 'map-list.php'</script>";
                      }
                      else
                      {
                        echo "<script>alert('File not uploaded...')</script>";
                      }
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