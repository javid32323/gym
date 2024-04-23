    <!-- Navbar start -->

<?php

include("admin/db.php");
include("header.php");


?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Gym Classes</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Gym Classes</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Gym Class Start -->
    <div class="container gym-feature py-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Class Timetable</h4>
            <h4 class="display-4 font-weight-bold">Working Hours and Class Time</h4>
        </div>
        <div class="tab-class">
           
            <div class="tab-content">
                <div id="class-all" class="container tab-pane p-0 active">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                            <?php
// Assume you have a database connection established as "$connect"

// Perform a JOIN query to retrieve class data along with the associated day, subject, and time names
$query = "SELECT classes.*, day.name AS day_name, subject.name AS subject_name, time.name AS time_name
          FROM classes
          INNER JOIN day ON classes.dayid = day.id
          INNER JOIN subject ON classes.subjectid = subject.id
          INNER JOIN time ON classes.timeid = time.id";

$result = mysqli_query($connect, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($connect));
}
?>

<!-- Display the class data in a table -->
<table class="table table-bordered table-lg m-0">
    <tr class="bg-secondary text-white text-center">
        <th>Day</th>
        <th>Subject</th>
        <th>Time</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td  class='bg-secondary text-white text-center'>" . $row['day_name'] . "</td>";
        echo "<td>" . $row['subject_name'] . "</td>";
        echo "<td>" . $row['time_name'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>
                    </div>
                </div>
              
            </div>
        </div>
    </div>


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