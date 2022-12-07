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
    <link rel="stylesheet" href="payment.css">
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

      <!-- Style CSS -->
      <link rel="stylesheet" href="stylepopup.css">
      <!-- Demo CSS -->
      <link rel="stylesheet" href="css/demo.css">
      <link rel="stylesheet" href="map.css">
    
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
          <a href="index.php" class="nav-item nav-link ">Home</a>
          <a href="order.php" class="nav-item nav-link ">Order</a>
          <a href="activity.php" class="nav-item nav-link ">Activity</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" >Features</a>
            <div class="dropdown-menu shadow-sm m-0">
                <a href="account.php" class="dropdown-item">Account</a>
                <a href="menu.php" class="dropdown-item">Menu</a>
                <a href="moreinfo.php" class="dropdown-item">More info</a>
            </div>
        </div>
            <nav class="collapse navbar-collapse"> 
            <a href='controller_logout.php' class='btn btn-outline-success' style='color: rgb(0, 213, 255);width: 90px; border-color: rgb(0, 213, 255);' >Logout</a>       
            </nav>
    </nav id="pakaian">
    <!-- Navbar End -->

    <!-- history -->
    
    <div class="container"> 
        <div class="row m-0"> 
            <div class="col-md-7 col-12">
                 <div class="row"> <div class="col-12 mb-4">
                     <div class="row box-right">
                         <div class="col-md-8 ps-0 "> 
                            <p class="ps-3 textmuted fw-bold h6 mb-0">TOTAL RECIEVED</p> 
                            <p class="h1 fw-bold d-flex"> 
                                <span class=" fas fa-dollar-sign textmuted pe-1 h6 align-text-top mt-1">

                                </span>84,254 
                                <span class="textmuted">.58</span> 
                            </p> <p class="ms-3 px-2 bg-green">+10% since last month</p> 
                        </div> <div class="col-md-4">
                             <p class="p-blue"> 
                                <span class="fas fa-circle pe-2">

                                </span>Pending </p>
                                 <p class="fw-bold mb-3">
                                    <span class="fas fa-dollar-sign pe-1">

                                    </span>1254 <span class="textmuted">.50</span> 
                                </p> <p class="p-org"><span class="fas fa-circle pe-2">

                                </span>On drafts</p> <p class="fw-bold">
                                    <span class="fas fa-dollar-sign pe-1">

                                    </span>00<span class="textmuted">.00</span>
                                </p> </div> </div> </div> <div class="col-12 px-0 mb-4">
                                     <div class="box-right"> <div class="d-flex pb-2">
                                         <p class="fw-bold h7">
                                            <span class="textmuted">quickpay.to/</span>Publicnote</p>
                                             <p class="ms-auto p-blue">
                                                <span class=" bg btn btn-primary fas fa-pencil-alt me-3"></span>
                                                 <span class=" bg btn btn-primary far fa-clone"></span> 
                                                </p> </div> <div class="bg-blue p-2"> 
                                                    <P class="h8 textmuted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum recusandae dolorem voluptas nemo, modi eos minus nesciunt.
                                                         <p class="p-blue bg btn btn-primary h8">LEARN MORE</p>
                                                         </P> 
                                                        </div> 
                                                    </div>
                                                 </div>
                                                  <div class="col-12 px-0"> 
                                                    <div class="box-right"> 
                                                        <div class="d-flex mb-2"> 
                                                            <p class="fw-bold">Create new invoice</p>
                                                             <p class="ms-auto textmuted">
                                                                <span class="fas fa-times">

                                                                </span></p> 
                                                            </div> <div class="d-flex mb-2">
                                                                 <p class="h7">#AL2545</p>
                                                                  <p class="ms-auto bg btn btn-primary p-blue h8">
                                                                    <span class="far fa-clone pe-2"></span>COPY PAYMENT LINK </p>
                                                                 </div> <div class="row"> <div class="col-12 mb-2"> 
                                                                    <p class="textmuted h8">Project / Description</p>
                                                                     <input class="form-control" type="text" placeholder="Legal Consulting"> </div> 
                                                                     <div class="col-6"> <p class="textmuted h8">Issused on</p>
                                                                         <input class="form-control" type="text" placeholder="Oct 25, 2020"> </div> 
                                                                         <div class="col-6"> <p class="textmuted h8">Due on</p>
                                                                             <input class="form-control" type="text" placeholder="Oct 25, 2020"> </div> 
                                                                            </div> 
                                                                        </div> 
                                                                    </div>
                                                                 </div> 
                                                                </div> 
                                                                <div class="col-md-5 col-12 ps-md-5 p-0 ">
                                                                     <div class="box-left"> 
                                                                        <p class="textmuted h8">Invoice</p>
                                                                         <p class="fw-bold h7">Hasan Rama Sagita</p> 
                                                                         <p class="textmuted h8">Jl.Kaliurang km 7 joho,Belakang pasar Kolombo</p>
                                                                          <p class="textmuted h8 mb-2">Ngaglik Kab.Sleman DIY</p>
                                                                           <div class="h8"> <div class="row m-0 border mb-3">
                                                                             <div class="col-6 h8 pe-0 ps-2"> 
                                                                                <p class="textmuted py-2">Items</p>
                                                                                 <span class="d-block py-2 border-bottom">Royale Pass</span>
                                                                                  
                                                                                </div> 
                                                                                <div class="col-2 text-center p-0">
                                                                                     <p class="textmuted p-2">Qty</p>
                                                                                      <span class="d-block p-2 border-bottom">1</span>
                                                                                     
                                                                                     </div> 
                                                                                     <div class="col-2 p-0 text-center h8 border-end"> 
                                                                                        <p class="textmuted p-2">Price</p> 
                                                                                        <span class="d-block border-bottom py-2">
                                                                                            <span class="fas" >Rp </span>250.000</span> 
                                                                                            <span class="d-block py-2 ">
                                                                                               
                                                                                             </div> 
                                                                                             <div class="col-2 p-0 text-center"> 
                                                                                                <p class="textmuted p-2">Total</p> 
                                                                                                <span class="d-block py-2 border-bottom">
                                                                                                    <span class="fas">Rp </span>250.000</span> 
                                                                                                
                                                                                                </div> 
                                                                                            </div> 
                                                                                            <div class="d-flex h7 mb-2"> 
                                                                                                <p class="">Total Amount</p>
                                                                                                 <p class="ms-auto">
                                                                                                    <span class="fas">Rp </span>250.000</p>
                                                                                                 </div>
                                                                                                  <div class="h8 mb-5">
                                                                                                     <p class="textmuted">Dengan ini saya telah menyetujui berlangganan Royale Pass Melaundry.  </p>
                                                                                                     </div>
                                                                                                     </div> 
                                                                                                     <div class="">
                                                                                                         <p class="h7 fw-bold mb-1">Pay this Invoice</p>
                                                                                                          <p class="textmuted h8 mb-2">Make payment for this invoice by filling in the details</p> 
                                                                                                          <div class="form">
                                                                                                             <div class="row"> 
                                                                                                                <div class="col-12">
                                                                                                                     <div class="card border-0">
                                                                                                                         <input class="form-control ps-5" type="text" placeholder="Card number">
                                                                                                                          <span class="far fa-credit-card"></span> 
                                                                                                                        </div> 
                                                                                                                    </div>
                                                                                                                     <div class="col-6"> 
                                                                                                                        <input class="form-control my-3" type="text" placeholder="MM/YY"> 
                                                                                                                    </div> 
                                                                                                                    <div class="col-6"> 
                                                                                                                        <input class="form-control my-3" type="text" placeholder="cvv"> 
                                                                                                                    </div>
                                                                                                                     <p class="p-blue h8 fw-bold mb-3">MORE PAYMENT METHODS</p>
                                                                                                                     </div>
                                                                                                                      <div class="btn btn-primary d-block h8">Bayar Sekarang 
                                                                                                                        <span class="fas">Rp 
                                                                                                                        </span>250.000<span class="ms-3 fas fa-arrow-right"></span>
                                                                                                                    </div> 
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
                  <form>
                    <div class="form-group">
                      <input type="email" class="form-control" id="email1"placeholder="Your email address...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password1" placeholder="Your password...">
                    </div>
                    <button style="color:white ;" type="button" class="btn btn-info btn-block btn-round">Login</button>
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
        <!-- Template Javascript -->
        <script src="main.js"></script>
        <!-- jQuery -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <!-- Popper JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
    <!-- Bootstrap JS -->
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
     <!-- Custom Script -->      
    <script  src="js/script.js"></script>

</body>

</html>