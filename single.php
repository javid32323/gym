<!-- Navbar start -->

<?php

include("admin/db.php");
include("header.php");


?>
<!-- Navbar End -->


<!-- Page Header Start -->
<div class="container-fluid page-header mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Detail Page</h4>
        <div class="d-inline-flex">
            <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Detail</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Blog Detail Start -->
<div class="container py-5">
    <div class="row">

    <?php

    $id = $_GET['id'];

   
    
    $row=mysqli_fetch_assoc(mysqli_query($connect,"select * from blog_image where id='$id'"));
    $bid = $row['id'];
    $image = $row['image'];
    $title = $row['title'];
    $text = $row['text'];
    $date = $row['date'];
        
    

?>
        <div class="col-12">
            <img class="img-fluid mb-12" width="70%;" src="admin/upload/<?php echo $image;   ?>" alt="Image">
            <div class="d-flex align-items-center mb-4">
                <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white" style="width: 100px; height: 100px;">
                    <span><?php echo $date;   ?></span>
                   
                </div>
                <div class="pl-3">
                    <h1 class="font-weight-bold mb-3"><?php echo $title;   ?></h1>
                    <div class="d-flex">
                        <span class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</span>
                        <span class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</span>
                        <span class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</span>
                    </div>
                </div>
            </div>
            <p><?php echo $text;   ?></p>
        </div>

        <h3 class="mb-4 font-weight-bold">Comments</h3>
        <?php
$res = mysqli_query($connect,"select * from comment where bid='$id'");
while($row=mysqli_fetch_assoc($res))
{

    $name = $row['name'];
    $bid = $row['bid'];
    $comment = $row['comment'];

?>
        <div class="col-12 py-4">
            <div class="media mb-4">
                <!-- <img src="img/user.jpg" alt="Image" class="mr-3 mt-1 rounded-circle" style="width:60px;"> -->
                <div class="media-body">
                    <h4><small><i><?php echo $name; ?></i></small></h4>
                    <p><?php echo $comment; ?>.</p>
                </div>
            </div>

        </div>

        <?php

}

?>
        <div class="col-12">
            <h3 class="mb-4 font-weight-bold">Leave a comment</h3>
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" name="name" class="form-control" id="name">
                    <input type="hidden" name="bid" value="<?php echo $bid; ?>" class="form-control" id="name">
                </div>

                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="comment" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="done" value="Leave Comment" class="btn btn-outline-primary px-3">
                </div>
            </form>

            <?php

            if(isset($_POST['done']))
            {
                $name = $_POST['name'];
                $bid = $_POST['bid'];
                $comment = $_POST['comment'];
                
                mysqli_query($connect,"insert into comment values('','$name','$bid','$comment')");
                echo "<script>window.location.href = 'single.php?id=$id'</script>";

            }
?>
        </div>
    </div>
</div>
<!-- Blog Detail End -->


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