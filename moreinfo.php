<?php
  session_start();
  if (! isset($_SESSION['login'])){
    $_SESSION['login'] = false;
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>MeLaundry By Nedroid</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="Logo.png" rel="icon" />
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="animate.min.css" rel="stylesheet" />
    <link href="owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="nedroid.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="stylepopup.css">
      <!-- Demo CSS -->
      <link rel="stylesheet" href="css/demo.css">
    
  </head>

  <body>
    
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5"
    >
      <a href="index.php" class="navbar-brand d-flex align-items-center">
        <h2 class="m-0 text-primary">
          <img
            class="img-fluid me-2"
            src="Logo.png"
            alt=""
            style="width: auto"
          />
        </h2>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-4 py-lg-0">
        <?php
              if(! $_SESSION['login']){
                echo "<a href='index.php' class='nav-item nav-link active'>Home</a>
                <a href='order.php' class='nav-item nav-link disabled'>Order</a>
                <a href='activity.php' class='nav-item nav-link disabled'>Activity</a>
                <div class='nav-item dropdown'>
                  <a href='#' class='nav-link dropdown-toggle' data-bs-toggle='dropdown'>Features</a>
                  <div class='dropdown-menu shadow-sm m-0'>
                      <a href='menu.php' class='dropdown-item'>Menu</a>
                      <a href='moreinfo.php' class='dropdown-item'>More info</a>";
              }
              else{
                echo "<a href='index.php' class='nav-item nav-link active'>Home</a>
                <a href='order.php' class='nav-item nav-link'>Order</a>
                <a href='activity.php' class='nav-item nav-link'>Activity</a>
                <div class='nav-item dropdown'>
                  <a href='#' class='nav-link dropdown-toggle' data-bs-toggle='dropdown'>Features</a>
                  <div class='dropdown-menu shadow-sm m-0'>
                      <a href='account.php' class='dropdown-item'>Account</a>
                      <a href='menu.php' class='dropdown-item'>Menu</a>
                      <a href='moreinfo.php' class='dropdown-item'>More info</a>";
              }
        ?>
            </div>
        </div>
            <nav class="collapse navbar-collapse"> 
            <?php

              if(! $_SESSION['login']){
                echo "<button data-toggle='modal' data-target='#loginModal' class='btn btn-outline-success' style='color: rgb(0, 213, 255);width: 90px; border-color: rgb(0, 213, 255);' type='button' >Login</button>";
              }
              else{
                echo "<a href='controller_logout.php' class='btn btn-outline-success' style='color: rgb(0, 213, 255);width: 90px; border-color: rgb(0, 213, 255);' >Logout</a>";
              }
            ?>      
            </nav>
    </nav id="pakaian">
    <!-- Navbar End -->
    <!-- history -->
    <h1 id="WOM" style="text-align: center ; color: rgb(255, 221, 0);  margin-bottom: -100px; margin-top: 50px;">What's on Melaundry?</h1>
    <div   class="container py-5">
        <div class="main-timeline-4 text-white">
          <div class="timeline-4 left-4">
            <div class="card gradient-custom">
              <div class="card-body p-4">
                <img src="fashion.png" alt="">
                <h4 style="color:white ;" >PAKAIAN</h4>
                <p  id="boneka"> Di melaundry kita bisa mencuci pakaian dengan jenis jenis kain yang sangat beragam.
                  Mulai dari kain pakaian yang lembut,sedikit kasar ,hingga betul - betul berteksur.
                  Dengan berbagai macam pewangi yang telah kami sediakan!
                </p>
              </div>
            </div>
          </div>
          <div class="timeline-4 right-4">
            <div class="card gradient-custom-4">
              <div class="card-body p-4">
                <img src="bear.png" alt="">
                <h4 style="color:white ;">BONEKA </h4>
                <p  id="sepatu">Di melaundry kita bisa mencuci boneka dengan berbagai macam ukuran.
                  Kami menggunakan teknik handwash secara manual untuk menjaga bulu boneka anda mengalami kerusakan.
                  Dengan berbagai macam pewangi yang telah kami sediakan!
                </p>
              </div>
            </div>
          </div>
          <div class="timeline-4 left-4">
            <div class="card gradient-custom">
              <div class="card-body p-4">
                <img src="shoes.png" alt="">
                <h4  style="color:white ;">SEPATU</h4>
                <p  id="topi" >Di melaundry kita bisa menangani sepatu anda secara prefesional agar sepatu anda tidak rusak jika dicuci sendiri.
                  Disini kita juga menggunakan tiga macam cara pengerjaan yaitu proses wet clean, dry clean , dan wet & dry.
                </p>
              </div >
            </div>
          </div>
          <div  class="timeline-4 right-4">
            <div class="card gradient-custom-4">
              <div class="card-body p-4">
               <img src="cowboy.png" alt="">
                <h4 style="color:white ;">TOPI</h4>
                <p  id="tas">Di melaundry kita bisa menangani pencucian khusus untuk topi. 
                  Disini kita melakukan teknik handwash secara manual sehingga aman untuk semua jenis topi.
                  Dengan berbagai macam pewangi yang telah kami sediakan! 
                </p>
              </div>
            </div>
          </div>
          <div class="timeline-4 left-4">
            <div class="card gradient-custom">
              <div class="card-body p-4">
                <img src="backpack.png" style="width: 60px;" alt="">
                <h4 style="color:white ;" >TAS </h4>
                <p  id="bedcover" >Di melaundry kita siap melayani semua jenis tas yang anda berikan! kita akan menyesuaikan metode serta bahan pembersih 
                  dan perawatan sesuai jenis tas yang anda berikan.
                </p>
              </div>
            </div>
            
          </div>
          
          <div class="timeline-4 right-4">
            <div class="card gradient-custom-4">
              <div class="card-body p-4">
                <img src="blanket.png" style="width: 60px ;" alt="">
                <h4 style="color:white ;">BED COVER </h4>
                <p>Di melaundry kita melayani semua jenis BED COVER yang anda berikan!
                Kita menggunakan proses pencucian dengan menggunakan peralatan modern, dengan berbagai macam pewangi yang telah kami sediakan!
                Dijamin BED COVER anda bersih & wangi!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- history end -->
    
    <!-- Footer Start -->
    <div class="container-fluid bg-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6">
                    <h1 class="text-primary mb-4"><img class="img-fluid me-2" src="Logo.png" alt=""

                            style="width: auto;"></h1>
                    <span>Serahkan segala masalah cucian anda kepada kami, karena MeLaundry adalah platform Laundry yang aman dan Praktis.</span>
                </div>
                <div class="col-md-6">
                    <h5 class="mb-4">Daftar Sekarang</h5>
                    <p>Jadilah bagian dari kami.</p>
                    <div class="position-relative">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Hubungi Kami</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Kabupaten Sleman, DIY</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+62 812-3456-789</p>
                    <p><i class="fa fa-envelope me-3"></i>cs@melaundry.id</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">MeLaundry</h5>
                    <a class="btn btn-link" href="index.php">Home</a>
                    <a class="btn btn-link" href="order.php">Order</a>
                    <a class="btn btn-link" href="activity.php">Activity</a>
                    <a class="btn btn-link" href="account.php">Account</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Bantuan & Panduan</h5>
                    <a class="btn btn-link" href="">Syarat & Ketentuan</a>
                    <a class="btn btn-link" href="">Kebijakan Privasi</a>
                    <a class="btn btn-link" href="">Disclaimer</a>
                    <a class="btn btn-link" href="">Hubungi Kami</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Ikuti Kami</h5>
                    <div class="d-flex">
                        <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">MeLaundry</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="http://127.0.0.1:5500/index.php">Nedroid</a> Distributed By <a
                            href="https://themewagon.com">Melaundry</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

         <!-- partial:index.partial.php -->
         <div  class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-title text-center">
                  <h4>Login</h4>
                </div>
                <div class="d-flex flex-column text-center">
                  <form action="validatelogin.php" method="post">
                  <div class="form-group">
                        <input type="email" class="form-control" id="email1"placeholder="Your email address..." name="loginemail">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="password1" placeholder="Your password..." name="loginpassword">
                      </div>
                      <button style="color: white;" type="submit" class="btn btn-info btn-block btn-round" name="login">Login</button>
                    </form>
                  
                  <div class="text-center text-muted delimiter">or connect with</div>
                  <div class="d-flex justify-content-center social-buttons">
                    <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
                      <i class="fab fa-twitter"></i>
                    </button>
                    <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
                      <i class="fab fa-facebook"></i>
                    </button>
                    <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
                      <i class="fab fa-linkedin"></i>
                    </button>
                  </di>
                </div>
              </div>
            </div>
              <div class="modal-footer d-flex justify-content-center">
                <div class="signup-section">Don't have an account? <a href="login.php" class="text-info"> Sign Up</a>.</div>
              </div>
          </div>
        </div>
        <!-- partial -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="wow.min.js"></script>
    <script src="easing.min.js"></script>
    <script src="waypoints.min.js"></script>
    <script src="owl.carousel.min.js"></script>
    <script src="counterup.min.js"></script>
<!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
 <!-- Custom Script -->      
<script  src="js/script.js"></script>
    <!-- Template Javascript -->
    <script src="main.js"></script>
</body>

</html>