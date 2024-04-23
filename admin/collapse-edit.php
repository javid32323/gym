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

$result = mysqli_query($connect,"select * from collapse where id='$id'");

   $line = mysqli_fetch_assoc($result);

                      $title = $line['title'];
                       $description = $line['description'];
  
   
  

?>
          <div class="col-12">
            <div class="card">
              <div class="card-body text-center">
                <h3 class="mb-5 mt-4">Collapse Update Form</h3>
                <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                  
                  <div class="row mb-3">
                    <input type="text" name="title" value="<?php echo $title;  ?>"  class="form-control" placeholder="title">
                  </div>
                  <div class="row mb-3">
                    <textarea name="description"  id=""  cols="30" placeholder="description" rows="10"><?php echo $description;  ?></textarea>
                  </div>
                  
                  <div class="row align-self-center text-center m-t-5">
                    <input name="submit" class="btn btn-success" type="submit" value="Update">
                    <span>
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                       $title = $_POST['title'];
                       $description = $_POST['description'];
                     
                      mysqli_query($connect, "update  collapse set title='$title',description='$description' where id='$id'");
                      echo "Record Updated successfully";
                      echo "<script>window.location.href = 'collapse-list.php'</script>";
                              
                      
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