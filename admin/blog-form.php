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
                    <input type="date" name="date" required class="form-control" placeholder="Date">
                  </div>
                  <div class="row mb-3">
                    <input type="text" name="title" required class="form-control" placeholder="Title">
                  </div>
                  <div class="row mb-3">
                    <input type="text" name="text" required class="form-control" placeholder="Description">
                  </div>
                  
                 
                  
                  <div class="row align-self-center text-center m-t-5">
                    <input name="done" class="btn btn-success" type="submit" value="Save">
                    <span>
                    </form>
                    <?php

    if(isset($_POST['done']))
    {
        $date = $_POST['date'];
       
        $title = $_POST['title'];
        $text = $_POST['text'];


        $imagename = $_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        

        $folder = "upload/";
        $path = $folder.basename($imagename);
        if(move_uploaded_file($tmpname,$path))
        {
            mysqli_query($connect,"insert into blog_image values('','$imagename','$date','$title','$text')");
                      echo "<script>window.location.href = 'blog-list.php'</script>";

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