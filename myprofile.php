<?php
  session_start();
  if (!isset($_SESSION['name'])){
    header('location:login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <title>My Profile</title>
</head>
<body class="main-layout">
    <style>
        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
             background-color: #ddd;
    }

        .dropdown:hover .dropdown-content {
            display: block;
    }
        .float-right{
            top:30%;
        }
    </style>
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.html"><img src="images/logo.jpeg" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
              <div class="header_information">
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="active"> <a href="home.php">Home</a> </li>
                      <li> <a href="courses.php">My Courses </a> </li>
                     </ul>
                   </nav>
                 </div>
               </div> 
               <div class="mean-last">
                    <div class="dropdown">
                        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                             Bienvenu chez vous <?=$_SESSION['name'] ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="myprofile.php">My Profile</a>
                                <a class="dropdown-item" href="modifyprofile.php">Modify Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                       
                </div>
             </div>
           </div>
         </div>
       </div>
     </div>
    </header>
    <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="container-fluid padding_dd"><br>
                    <h1 style="color:#409fbf;">My Profile</h1><hr>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                    <div class="float-right" style="top:10%;">
                        <h6 class="text-info">
                            <div  class="text-info">
                                <h2 style="color:#7B68EE;">Contact :</h2>
                            </div>
                        </h6>
                        <hr>
                        <ul>
                            <li><h3 style="color:black;">E_mail: &nbsp;&nbsp;&nbsp;<?=$_SESSION['email'] ?><h3></li>
                            <li><h3 style="color:black;">Adresse: &nbsp;&nbsp;&nbsp;<?=$_SESSION['country'] ?></h3></li>
                        </ul>
                        <br><br>
                        <h6 class="text-info">
                            <div  class="text-info">
                                <h2 style="color:#7B68EE;">Informations personnelles:</h2>
                            </div>
                        </h6>
                        <hr>
                        <ul>
                            <li><h3 style="color:black;">Date De Naissance : &nbsp;&nbsp;&nbsp;<?=$_SESSION['birth'] ?><h3></li>
                            <li><h3 style="color:black;">Nom d'université : &nbsp;&nbsp;&nbsp;<?=$_SESSION['university'] ?></h3></li>
                        </ul>
                    </div>
                      <figure><img src="images/profile.jpg" style="border-radius:50% ;height:300px;width:250px"><br>
                      <div style="color:#9932CC;margin-left:15%;font-family: Georgia, serif;"><h2><?=$_SESSION['name'] ?></h2>
                    </figure>
                    </div>
                  </div>

              </div>
            </div>

          </div>

</section>
</div>
</header>
    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3 class="text-warning"><br>Contact us </h3>
                    <ul class="loca">
                      <li>
                        <a href="#"><img src="icon/loc.png" alt="#" /></a>Tunisia
                        </li>
                        <li>
                          <a href="#"><img src="icon/email.png" alt="#" /></a>EduCasa@gmail.com </li>
                          <li>
                            <a href="#"><img src="icon/call.png" alt="#" /></a>12 345 678 </li>
                          </ul>
                          <ul class="social_link">
                            <li><a href="#"><img src="icon/fb.png"></a></li>
                            <li><a href="#"><img src="icon/tw.png"></a></li>
                            <li><a href="#"><img src="icon/instagram.png"></a></li>
                          </ul>

                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="address">
                          <h3 class="text-warning"><br>Universities</h3>
                          <ul class="Menu_footer">
                            <li><a href="https://www.universitecentrale.net/">Centrale university</a> </li>
                            <li><a href="https://esprit.tn/">Esprit university</a> </li>
                            <li><a href="https://www.harvard.edu/">Harvard university</a> </li>
                            <li><a href="https://www.bu.edu/">Boston university</a> </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="address">
                          <h3 class="text-warning"><br> Popular subject </h3>
                          <ul class="Links_footer">
                            <li><a href="#">Computer science</a> </li>
                            <li><a href="#">Language</a> </li>
                            <li><a href="#"> Business</a> </li>
                            <li><a href="#">Humanities</a> </li>
                          </ul>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <div class="address"><br>
                          <a href="index.html"> <img src="images/logo.jpeg" alt="logo"></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </footr>
          <!-- end footer -->
     <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>