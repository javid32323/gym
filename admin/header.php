<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="testimonail-list.php">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../img/icon.jpg" style="width: 80px;"
                                alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../img/icon.jpg" alt="homepage"
                                class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->

                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto">
                       
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <!--  -->

                            <?php
    if(isset($_SESSION['token']))
    {
        $email = $_SESSION['token'];
        $res = mysqli_fetch_assoc(mysqli_query($connect,"select * from register where email='$email'"));
        $image = $res['image'];
    }
                            ?>
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#"
                                id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><img src="upload/<?php echo $image; ?>" alt="user" class="" />
                                <span class="hidden-md-down"> &nbsp;</span> </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
  <a href='logout.php'><button type='button' class='btn btn-light mb-0'>logout</button></a>
  
  </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <script>

function choajax(cho)
      {
          xml = new XMLHttpRequest();
          xml.onreadystatechange = function()
          {
              document.getElementById("result").innerHTML = xml.responseText;
          }
          xml.open('GET','client_searchprocess.php?choid='+cho,true);
          xml.send();
      }

      </script>