<?php
    $pageTitle = 'Courses';
    include_once('fragments/header.php');
    include_once('fragments/menu.php');
    ?>
        <style>
            .gallery {
                display: grid;
                grid-template-columns: repeat(8, 1fr);
                grid-template-rows: repeat(8, 5vw);
                grid-gap: 15px;
            }
            .gallery__img {
                width: 100%;
                height: 100%;
                 object-fit: cover;
            }
        </style>
        <section class="slider_section">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <h1 style="text-align:center;color:#409fbf;"><strong>Join Our courses(100+)</strong></h1><hr>
                <div class="gallery">
                    
                    <figure class="gallery__item gallery__item--1">
                            <img src="images/java.png" class="gallery__img" alt="Image 1">
                            <div class="textbox1">
                                <h3 style="color:#8A2BE2;"><a href="javacourse.php">Java</a></h3>
                                <p style="color:#8A2BE2;">Join Our Java course </p>
                            </div>
                    </figure>
                                    
                    <figure class="gallery__item gallery__item--2">
                        <img src="images/html.jpg" class="gallery__img" alt="Image 2">
                        <div class="textbox2">
                            <h3 style="color:#8A2BE2;"><a href="htmlcourse.php">HTML</a></h3>
                            <p style="color:#8A2BE2;">Join Our html course </p>
                        </div>
                    </figure>
                    <figure class="gallery__item gallery__item--3">
                        <img src="images/css.jpg" class="gallery__img" alt="Image 3">
                        <div class="textbox3">
                            <h3 style="color:#8A2BE2;"><a href="courses/css.php">CSS</a></h3>
                            <p style="color:#8A2BE2;">Join Our css course </p>
                        </div>
                    </figure>
                    <figure class="gallery__item gallery__item--4">
                         <img src="images/php.jpg" class="gallery__img" alt="Image 4">
                         <div class="textbox4">
                            <h3 style="color:#8A2BE2;"><a href="courses/php.php">PHP</a></h3>
                            <p style="color:#8A2BE2;">Join Our PHP course </p>
                        </div>
                    </figure>
                    <figure class="gallery__item gallery__item--5">
                        <img src="images/history.jpg" class="gallery__img" alt="Image 5">
                        <div class="textbox1" style="top:98%;">
                            <h3 style="color:#8A2BE2;"><a href="#">History</a></h3>
                            <p style="color:#8A2BE2;">Join Our history course </p>
                        </div>
                    </figure>
                    <figure class="gallery__item gallery__item--6">
                        <img src="images/finance.jpg" class="gallery__img" alt="Image 6">                
                        <div class="textbox2" style="top:98%;">
                            <h3 style="color:#8A2BE2;"><a href="#">Finance</a></h3>
                            <p style="color:#8A2BE2;">Join Our Finance course </p>
                        </div>
                    </figure>
                    <figure class="gallery__item gallery__item--7">
                        <img src="images/management.jpg" class="gallery__img" alt="Image 7">
                        <div class="textbox3" style="top:98%;">
                            <h3 style="color:#8A2BE2;"><a href="#">Management</a></h3>
                            <p style="color:#8A2BE2;">Join Our Management course </p>
                        </div>
                    </figure>
                    <figure class="gallery__item gallery__item--8">
                        <img src="images/francais.jpg" class="gallery__img" alt="Image 8">
                        <div class="textbox4"style="top:98%;">
                            <h3 style="color:#8A2BE2;"><a href="#">Francais</a></h3>
                            <p style="color:#8A2BE2;">Join Our French course </p>
                        </div>
                    </figure>
                </div>
                
            </div>

  </section>
  </header><br><br>
<!-- about  -->
<div id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <h1 style="text-align:center;color:#7B68EE;"> <strong class="yellow">Choose your course by subject</strong></h1><hr>
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
            <li><a href="java.php">Java</a></li>
            <li><a href="html.php">Html</a></li>
            <li><a href="css.php">CSS</a></li>
            <li><a href="php.php">Php</a></li>
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
</div>
<!-- about  -->


  </div>
</div>
<!-- end abouts -->
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



<!-- our -->

    <?php
    include_once('fragments/footer.php');
    ?>
