<?php
require_once 'php/connection.php';
session_start();

if ((!isset($_SESSION['type1']) && !isset($_SESSION['uid1']))) {
    header("Location: login.html");
}else{

}
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Tech Site - OTP Page</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
        <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="register.html"> Register  </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="about.html"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="work.html">Work </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="category.html"> Category </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="products.html"> services </a>
                </li>
              </ul>
          </div>
          <div>
            <div class="custom_menu-btn ">
              <button>
                <span class=" s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
   <!-- slider section -->
   <section class="slider_section ">
    <div class="carousel_btn-container">
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-5 offset-md-1">
                <div class="detail-box">
                    <h1>
                        Verify <br>
                        OTP <br>
                        
                      </h1>
                  
                  <div class="btn-box">
                    <a href="index.html" class="btn-1">
                      Back Home
                    </a>
                    
                  </div>
                </div>
              </div>
              <div class="offset-md-1 col-md-4 img-container">
                <div class="img-box">
                  <img src="images/tech1-slider-img.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item ">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-5 offset-md-1">
                <div class="detail-box">
                    <h1>
                        Verify <br>
                        OTP <br>
                        
                      </h1>
                  
                  <div class="btn-box">
                    <a href="index.html" class="btn-1">
                        Back Home
                      </a>
                  </div>
                </div>
              </div>
              <div class="offset-md-1 col-md-4 img-container">
                <div class="img-box">
                  <img src="images/robot-img.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item ">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-5 offset-md-1">
                <div class="detail-box">
                  <h1>
                    Verify <br>
                    OTP <br>
                    
                  </h1>
                  
                  <div class="btn-box">
                    <a href="index.html" class="btn-1">
                        Back Home
                      </a>
                  </div>
                </div>
              </div>
              <div class="offset-md-1 col-md-4 img-container">
                <div class="img-box">
                  <img src="images/tech2-slider-img.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>
  <!-- end slider section -->
  </div>

<!-- get started section -->

  <section class="info_section ">
    <div class="info_container layout_padding-top">
      <div class="container">
        <div class="info_top">
          <div class="info_logo">
            <span>
              Verify Account
            </span>
          </div>
        </div>

        <div class="info_main">
          <div class="row">

            <div class="col-md-12">
              <div class="info_form ">
                <h5>
                  Enter OTP Password
                </h5>
                <form action="php/authentication.php" method="POST">
                <input type="password" name="itp" required placeholder="OTP Password">
                <?php
                  if (isset($_SESSION['type']) && isset($_SESSION['uid'])) {
                    $uidd = $_SESSION['uid'];
                    $utype = $_SESSION['type'];
                  echo "<input type='hidden' required value='1' name='mod'>";
                  echo "<input type='hidden' required value='" . $uidd . "' name='uid'>";
                  echo "<input type='hidden' required value='". $utype ."' name='type'>";                  
                  }else if (isset($_SESSION['type1']) && isset($_SESSION['uid1'])){
                    $uidd = $_SESSION['uid1'];
                    $utype = $_SESSION['type1'];
                    echo "<input type='hidden' required value='3' name='mod'>";
                    echo "<input type='hidden' required value='" . $uidd . "' name='uid1'>";
                    echo "<input type='hidden' required value='". $utype ."' name='type1'>";                    
                  }
                  ?>
                  <button name="login" type="submit">
                    Submit
                  </button>
                  <br>
                </form>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end get started section -->

    <!-- info section -->

    <section class="info_section ">
        <div class="info_container layout_padding-top">
          <div class="container">
            <div class="info_top">
              <div class="info_logo">
                <img src="images/logo.png" alt="" />
                <span>
                  Tech Site
                </span>
              </div>
              <div class="social_box">
                <a href="#">
                  <img src="images/fb.png" alt="">
                </a>
                <a href="#">
                  <img src="images/twitter.png" alt="">
                </a>
                <a href="#">
                  <img src="images/linkedin.png" alt="">
                </a>
                <a href="#">
                  <img src="images/instagram.png" alt="">
                </a>
                <a href="#">
                  <img src="images/youtube.png" alt="">
                </a>
              </div>
            </div>
    
            <div class="info_main">
              <div class="row">
                <div class="col-md-3 col-lg-2">
                  <div class="info_link-box">
                    <h5>
                      Useful Link
                    </h5>
                    <ul>
                      <li class=" active">
                        <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="">
                        <a class="" href="about.html">About </a>
                      </li>
                      <li class="">
                        <a class="" href="work.html">Work </a>
                      </li>
                      <li class="">
                        <a class="" href="category.html">Category </a>
                      </li>
                      <li class="">
                        <a class="" href="products.html">Services </a>
                      </li>
                      <li class="">
                        <a class="" href="login.html">Login </a>
                      </li>
                      <li class="">
                        <a class="" href="register.html">Register </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3 ">
                  <h5>
                    Offices
                  </h5>
                  <p>
                    Currently there are no physical offices. We may connect over intercommunication platforms such as zoom or microsoft teams
                  </p>
                </div>
    
                <div class="col-md-3 col-lg-2 offset-lg-1">
                  <h5>
                    Information
                  </h5>
                  <p>
                    Tech Site empowers all those who wish to expand their reach into the internet. Threading the web of your site.
                  </p>
                </div>
    
               
              </div>
            </div>
            <div class="row">
              <div class="col-lg-9 col-md-10 mx-auto">
                <div class="info_contact layout_padding2">
                  <div class="row">
    
                    <div class="col-md-4">
                      <a href="#" class="link-box">
                        <div class="img-box">
                          <img src="images/mail.png" alt="">
                        </div>
                        <div class="detail-box">
                          <h6>
                            Tech Site@gmail.com
                          </h6>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-5">
                      <a href="#" class="link-box">
                        <div class="img-box">
                          <img src="images/call.png" alt="">
                        </div>
                        <div class="detail-box">
                          <h6>
                            Call +01 1234567890
                          </h6>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
          </div>
        </div>
      </section>
    
      <!-- end info section -->
  
    <!-- footer section -->
    <footer class="container-fluid footer_section ">
      <div class="container">
        <p>
          &copy; <span id="displayDate"></span> All Rights Reserved By
          <a href="#">Tech Site</a>
        </p>
      </div>
    </footer>
    <!-- end  footer section -->
  
  
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>
  
  
  </body>
  </body>
  
  </html>