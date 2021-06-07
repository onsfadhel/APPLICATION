<?php
  session_start();
  if (!isset($_SESSION['name'])){
    header('location:login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>EduCasa</title>
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
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

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
     <!-- end header inner -->

     <!-- end header -->
     <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1>Know More About </h1>
                      <p>Université Centrale</p>
                      <a href="https://www.universitecentrale.net/">Consulter</a> 
                    </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <figure><img src="images/centrale.jpg"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">

                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1>Know More About</h1>
                      <p>Esprit</p>
                      <a href="https://esprit.tn/">Consulter</a>
                    </div>
                  </div>

                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <figure><img src="images/esprit.jpg"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption ">
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1>Know More about</h1>
                      <p>Harvard</p>
                      <a href="https://www.harvard.edu/">Consulter</a>
                     </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                          <div class="images_box">
                          <figure><img src="images/harvard.jpg"></figure>
                        </div>
                     </div>
                   </div>
                  </div>
                </div>
              </div>
           </div>
         </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

  </section>
</div>
</header>
<!-- about  -->
<div id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <h2><strong class="yellow">Subject</strong></h2><hr>
          <div class="float-right" style="top:10%;">
            <div class="address">
                <h4 style="color:#7B68EE;">Business</h4>
                <ul>
                    <li><a href="#">Economics</a> </li>
                    <li><a href="#">Finance</a> </li>
                    <li><a href="#">Management</a> </li>
                 </ul><br>
                 <h4 style="color:#7B68EE;">Humanities</h4>
                <ul>
                    <li><a href="#">History</a> </li>
                    <li><a href="#">Psychology</a> </li>
                 </ul>
             </div>
          </div>
          <h4 style="color:#7B68EE;">Computer Science</h4>
          <ul>
            <li><a href="javacourse.php">Java</a></li>
            <li><a href="htmlcourse.php">Html</a></li>
            <li><a href="courses/css.php">CSS</a></li>
            <li><a href="courses/php.php">Php</a></li>
          </ul><br>
          <h4 style="color:#7B68EE;">Language</h4>
          <ul>
            <li><a href="#">Francais</a></li>
            <li><a href="#">Anglais</a></li>
          </ul>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <figure><img src="images/subject.jpg" alt="#" /></figure>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- end abouts -->



<!-- our -->
<div id="important" class="important">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2>Some <strong class="yellow">important facts</strong></h2>
          <span>luptatum. Libero eligendi molestias iure error animi totam laudantium, aspernatur similique id eos a
          t consectetur illo culpa,</span>
        </div>
      </div>
    </div>
  </div>
  <div class="important_bg">
    <div class="container">
      <div class="row">

        <div class="col col-xs-12">
          <div class="important_box">
            <h3>200+</h3>
            <span>Teachers</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>20+</h3>
            <span>Colleges</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>50+</h3>
            <span>Courses</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>200+</h3>
            <span>Members</span>
          </div>
        </div>
        <div class="col col-xs-12">
          <div class="important_box">
            <h3>10+</h3>
            <span>countries</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
          <!-- Javascript files-->
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


          <script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.

</script>




</body>

</html>