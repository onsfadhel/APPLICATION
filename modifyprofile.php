<?php
  session_start();
  if (!isset($_SESSION['name'])){
    header('location:login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css"></link>
    <link rel="stylesheet" href="css\style.css">
    <title>register</title>
</head>
<body>
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
        <hr><br>
     <section class="slider_section">
         <form id="border" style="height: 600px;width: 480px; padding:20px;border: 15px solid white;"  action="processModify.php" method="post" enctype="multipart/form-data">
            <div class="form-row" >
                <div style="text-align:center;color:pink;">
                   Fill all the blanks
                </div><hr>
                <div style="color:red;text-align:center;" id="erreur"></div><br>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input name="email" type="email" class="form-control" id="inputEmail" value=<?=$_SESSION['email'] ?>>
                </div>
            </div>
            <div class="form-group">
                 <label for="inputUsername" >UserName</label>
                <input name="username" type="text" class="form-control" id="inputUsername" value=<?=$_SESSION['name'] ?>>
            </div>
            <div class="form-group col-md-6">
                <label for="inputBirth">Birth Date</label>
                <input name="birth" type="date" class="form-control" id="inputBirth" value=<?=$_SESSION['birth'] ?>>
            </div>
            <div class="form-group ">
                 <label for="inputCountry">Country</label>
                 <input name="country" type="text" class="form-control" id="inputCountry" value=<?=$_SESSION['country'] ?>>
                 
            </div>
            <div class="form-group">
                 <label for="inputUniversity">University</label>
                 <input name="university" type="text" class="form-control" id="inputUniversity" value=<?=$_SESSION['university'] ?>>
            </div>
           <br>
            <div style="text-align:center;">
                <button id="submit" type="submit" class="btn btn-warning" >Modifier</button>
            </div>
        </form>
      </div>
      </section>
   </div>
        
<script src="js/modify.js"></script>
<?php
    include_once('fragments/footer.php');
    ?>