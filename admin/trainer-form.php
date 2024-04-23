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
                <h3 class="mb-5 mt-4">Project Form</h3>
                <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                  <div class="row mb-3">
                    <input type="file" name="image" required class="form-control" placeholder="Image">
                  </div>
                
                 
                  
                  <div class="row mb-3">
                    <input type="text" name="name" required class="form-control" placeholder="Username">
                  </div>
                  <div class="row mb-3">
                    <input type="text" name="profession" required class="form-control" placeholder="Profession">
                  </div>
                 
                  
                  <div class="row align-self-center text-center m-t-5">
                    <input name="submit" class="btn btn-success" type="submit" value="Save">
                    <span>
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                        $name = $_POST['name'];
                        $profession = $_POST['profession'];
                     

                      $imagename = $_FILES['image']['name'];
                      $imagetmp = $_FILES['image']['tmp_name'];
                      
                      $folder = "upload/";
                      $path = $folder.basename($imagename);
                      
                      
                      
                              if(move_uploaded_file($imagetmp,$path))
                              {

                      mysqli_query($connect, "insert into trainer values('','$imagename','$name','$profession')");
                      echo "Record added successfully";
                      echo "<script>window.location.href = 'trainer-list.php'</script>";
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