
<?php
session_start();
include('db.php');
include('header.php');
include('head.php');
include('sidebar.php');

        if(isset($_SESSION['token']))
        {
  ?>

       
<div class="page-wrapper">
                 <div class="container-fluid">
                     <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    
                </div>
                     <div class="row">
                    <!-- Column -->
                    <div class="row">
                        <div class="col-6 grid-margin">
                          <div class="card bg-gradient-danger card-img-holder text-white">
                            <div class="card-body">
                              <a href="case.php"><img src="images/beatriz-perez-moya-XN4T2PVUUgk-unsplash.jpg" style="width: 100%;"  alt="circle-image" />
                              <h4 class="font-weight-normal mb-1 mt-2 text-decoration-none" style="text-decoration: none; list-style:none;">Total cases 
                              </h4>
                             <?php
                              $data = mysqli_query($connect,"select * from cases");
  $count = mysqli_num_rows($data);
                              ?>
                              <h2 class="mb-5" style="list-style:none; text-decoration:none;"><?php echo $count; ?></h2></a>
                              <h6 class="card-text"></h6>
                            </div>
                          </div>
                        </div>
                        <div class="col-6 grid-margin">
                          <div class="card bg-gradient-info card-img-holder text-white">
                            <div class="card-body">
                              <a href="clients.php"><img src="images/sebastian-herrmann-NbtIDoFKGO8-unsplash.jpg" style="width: 100%;"  alt="circle-image" />
                              <h4 class="font-weight-normal mb-1 mt-2">Total Clients 
                              </h4>
                              <?php
 $data = mysqli_query($connect,"select * from client ");
  $count = mysqli_num_rows($data);

                              ?>
                              <h2 class="mb-5"><?php echo $count; ?></h2>
                              <h6 class="card-text"></h6></a>
                            </div>
                          </div>
                        </div>
                      </div>
                <div class="card">
                    <div class="card-body">
                <div class="row mt-4 mb-4">
                    <div class="col-12 text-center">
                        <h1>Cases Summary this week </h1>
                    </div>
                    <!-- Column -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th colspan="2"><b> Case No </b></th>
                                <th colspan="2"><b>Client Name  </b></th>
                                
                            </tr>
                        </thead>
                        <tbody>

                        <?php

$colinfo = mysqli_query($connect,"select  * from cases order by rand() limit 5");
while($col=mysqli_fetch_assoc($colinfo))
{
    $case_no = $col['case_no'];
    $c_name = $col['c_name'];
?>
                            <tr>
                                <td colspan="2"><?php echo $case_no;  ?> </td>
                                <td colspan="2"><?php echo $c_name;  ?> </td>
                                
                            </tr>
                         <?php
}
?>
                        </tbody>
                    </table>
                </div>
                    </div>
                </div>
                <div class="row">
                </div>
            </div>
        </div>
    </div>
  
<?php
include('footer.php');

        }
        else
        header('location:login.php');
        ?>