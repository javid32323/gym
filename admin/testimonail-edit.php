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

          <?php

include('db.php');


$id = $_GET['cid'];

$result = mysqli_query($connect,"select * from testimonial where id='$id'");

   $line = mysqli_fetch_assoc($result);

   $fullname = $line['name'];
                      $profession = $line['profession'];
                       $description = $line['description'];
                       $image = $line['image'];
  
   
  

?>
          <div class="col-12">
            <div class="card">
              <div class="card-body text-center">
                <h3 class="mb-5 mt-4">Testimonials Form</h3>
                <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                  <div class="row mb-3">
                    <img src="upload/<?php echo $image;  ?>" style="height:100px;width:100px;" alt="">
                    <input type="file" name="image" value="<?php echo $image;  ?>" required class="form-control" placeholder="Image">
                  </div>

                  <div class="row mb-3">
                    <input type="text" name="name" value="<?php echo $fullname;  ?>"  class="form-control" placeholder="Name">
                  </div>
                  <div class="row mb-3">
                    <input type="text" name="profession" value="<?php echo $profession;  ?>"  class="form-control" placeholder="Profession">
                  </div>
                  <div class="row mb-3">
                    <textarea name="description"  id=""  cols="30" placeholder="description" rows="10"><?php echo $description;  ?></textarea>
                  </div>
                  
                  <div class="row align-self-center text-center m-t-5">
                    <input name="submit" class="btn btn-success" type="submit" value="Submit">
                    <span>
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                       $fullname = $_POST['name'];
                      $profession = $_POST['profession'];
                       $description = $_POST['description'];
                     

                      $imagename = $_FILES['image']['name'];
                      $imagetmp = $_FILES['image']['tmp_name'];
                      
                      $folder = "upload/";
                      $path = $folder.basename($imagename);
                      
                      
                      
                              if(move_uploaded_file($imagetmp,$path))
                              {

                      mysqli_query($connect, "update  testimonial set image='$imagename',name='$fullname',profession='$profession',description='$description' where id='$id'");
                      echo "Record added successfully";
                      echo "<script>window.location.href = 'testimonail-list.php'</script>";
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