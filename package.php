<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Booking</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
      content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
      href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="css/css2/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/css2/s3.css">


</head>
<style>
  #book{
    width: 100vw;
    height: 100vh;
    padding: 20px;
    margin-top: 30px;
  }
  .booking{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
  
  }
.book-form h3{
  margin-bottom: 20px;
}
  .book-form{
   padding-top: 20px;
    width: 80%;
    height: 100%;
    box-shadow: 2px 2px 8px rgba(53, 53, 53, 0.37);
    background-color: #f7f7f7;
  }

  .flex{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
  }
  .inputBox{
    
    width: 50%;
    height: auto;
    padding: 20px;
  }
  .inputBox span{
    text-align: left;
    font-size: 18px;
  }
  .inputBox input{
    border: 1px solid black;
    width: 100%;
    height: 70%;
    padding: 10px;
  }
  .booking .book-form .flex .inputBox input:focus::placeholder{
   color:var(--light-white);
}

.booking .book-form .flex .inputBox span{
   font-size: 1.2rem;
   color:var(--light-black);
}

.booking .book-form .btn{
  color: black;
  margin-top: 40px;
   font-size: 20px;
   width: 150px;
   height: 50px;
   border-radius: 0;
   border: 2px solid black;
   transition: .15s ease-in-out;

}
.booking .book-form .flex .inputBox input:focus{
   background: var(--black);
   color:var(--white);
}
.btn:hover{
  background-color:#01b3a7;
  box-shadow: 2px 2px 6px rgba(68, 67, 67, 0.267);
}
</style>
<body>


<div class="page">
<!-- Page Header<a class="banner banner-top" href="#" alt=""/></a>-->
<header class="section page-header">
  <!-- RD Navbar-->
  <div class="rd-navbar-wrap">
    <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
      data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
      data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
      data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
      data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px"
      data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
      <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse">
        <span></span>
      </div>
      <div class="rd-navbar-aside-outer">
        <div class="rd-navbar-aside">
          <!-- RD Navbar Panel-->
          <div class="rd-navbar-panel">
            <!-- RD Navbar Toggle-->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
            <!-- RD Navbar Brand-->
            <div class="rd-navbar-brand">
              <!--Brand--><a class="brand" href="index.php">
                <h1> Aibo </h1>
              </a>
            </div>
          </div>
          <div class="rd-navbar-aside-right rd-navbar-collapse">
            <ul class="rd-navbar-corporate-contacts">
              <li>
                <div class="unit unit-spacing-xs">
                  <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                  <div class="unit-body">
                    <p>09:00<span>am</span> — 05:00<span>pm</span></p>
                  </div>
                </div>
              </li>
              <li>
                <div class="unit unit-spacing-xs">
                  <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                  <div class="unit-body"><a class="link-phone" href="tel:#">+92 3111458029</a></div>
                </div>
              </li>
            </ul><a class="button button-md button-default-outline-2 button-ujarak" href="login.php"> Login </a>
          </div>
        </div>
      </div>
      <div class="rd-navbar-main-outer">
        <div class="rd-navbar-main">
          <div class="rd-navbar-nav-wrap">
            <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
              <li><a class="icon fa fa-facebook" href="#"></a></li>
              <li><a class="icon fa fa-twitter" href="#"></a></li>
              <li><a class="icon fa fa-google-plus" href="#"></a></li>
              <li><a class="icon fa fa-instagram" href="#"></a></li>
            </ul>
            <!-- RD Navbar Nav-->
            <ul class="rd-navbar-nav">
              <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Home</a>
              </li>
              <li class="rd-nav-item active"><a class="rd-nav-link" href="aboutt.php">About</a>
              </li>
              <li class="rd-nav-item"><a class="rd-nav-link" href="tour.php">Tours</a>
              </li>
              <li class="rd-nav-item"><a class="rd-nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>
<!-- Breadcrumbs -->
<section class="breadcrumbs-custom-inset">
  <div class="breadcrumbs-custom context-dark bg-overlay-60">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">Booking</h2>
      <ul class="breadcrumbs-custom-path">
        <li><a href="index.php">Home</a></li>
        <li class="active">About</li>
      </ul>
    </div>
    <div class="box-position" style="background-image: url(img/bookb1.png);"></div>
  </div>
</section>
    


<section id="book">

  <div class="booking">
  
   <form action="booking.php" method="post" class="book-form">
        
    <div class="head">
          <h3>Book Now</h3>
        </div>
    
        <div class="flex">
           <div class="inputBox">
              <span>NAME :</span>
              <input type="text" placeholder="Enter your name" required name="name">
           </div>
           <div class="inputBox">
              <span>EMAIL :</span>
              <input type="email" placeholder="Enter your email" required name="email">
           </div>
           <div class="inputBox">
              <span>PHONE :</span>
              <input type="text" placeholder="Enter your number" required name="phone">
           </div>
           <div class="inputBox">
              <span>ADDRESS :</span>
              <input type="text" placeholder="Enter your address" required name="address">
           </div>
           <div class="inputBox">
              <span>WHERE TO :</span>
              <input type="text" placeholder="Place you want to visit" required name="location">
           </div>
           <div class="inputBox">
              <span>HOW MANY :</span>
              <input type="number" placeholder="Number of member" required name="guests">
           </div>
           <div class="inputBox">
              <span>ARRIVALS :</span>
              <input type="date" required name="arrivals">
           </div>
           <div class="inputBox">
              <span>LEAVING :</span>
              <input type="date" required name="leaving">
           </div>
        </div>
  
        <input type="submit" value="BOOK" class="btn" name="send">
  
     
      
    </form>
  </div>

</section>






    <section class="gallery" id="gallery">
        <div class="container">

          <p class="section-subtitle">Photo Gallery</p>

          <h2 class="h2 section-title">Photo's From Travellers</h2>

          <p class="section-text">
            
          </p>

          <ul class="gallery-list">

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="img/kutub.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="img/kumalg3.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="img/mountchotu.png" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="img/kashmir.jpeg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="img/bgsand.jpg" alt="Gallery image">
              </figure>
            </li>
            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="img/cmf6.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="img/desrt1.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="img/rajchotu.png" alt="Gallery image">
              </figure>
            </li>

          </ul>

        </div>
      </section>
      

    <!-- Page Footer<a class="banner" href="#" target="_blank"><img src="images/intense_big_02.jpg" alt=""/></a>-->
    <footer class="section footer-corporate context-dark">
      <div class="footer-corporate-inset">
        <div class="container">
          <div class="row row-40 justify-content-lg-between">
            <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
              <div class="oh-desktop">
                <div class="wow slideInRight" data-wow-delay="0s">
                  <h6 class="text-spacing-100 text-uppercase">Contact us</h6>
                  <ul class="footer-contacts d-inline-block d-sm-block">
                    <li>
                      <div class="unit">
                        <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                        <div class="unit-body"><a class="link-phone" href="tel:#">+92 3111458029</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit">
                        <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                        <div class="unit-body"><a class="link-aemail" href="mailto:#">info@aibo.org</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit">
                        <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                        <div class="unit-body"><a class="link-location" href="#">3114 SUST campus, Sylhet, BD</a></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3 col-xl-4">
              <div class="oh-desktop">
                <div class="wow slideInDown" data-wow-delay="0s">
                  <h6 class="text-spacing-100 text-uppercase">Popular news</h6>
                  <!-- Post Minimal 2-->
                  <article class="post post-minimal-2">
                    <p class="post-minimal-2-title"><a href="#">Your Personal Guide to 5 Best Places to Visit on
                        Earth</a></p>
                    <div class="post-minimal-2-time">
                      <time datetime="2021-05-04">May 04, 2021</time>
                    </div>
                  </article>
                  <!-- Post Minimal 2-->
                  <article class="post post-minimal-2">
                    <p class="post-minimal-2-title"><a href="#">Top 10 Hotels: Rating by RJ Roam' Travel Experts</a></p>
                    <div class="post-minimal-2-time">
                      <time datetime="2021-05-04">May 04, 2021</time>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
              <div class="oh-desktop">
                <div class="wow slideInLeft" data-wow-delay="0s">
                  <h6 class="text-spacing-100 text-uppercase">Quick links</h6>
                  <ul class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2">
                    <li><a href="aboutt.php">About us</a></li>
                    <li><a href="#">Our Tours</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Blog</a></li>
                  </ul>
                  <div class="group-md group-middle justify-content-sm-start"><a
                      class="button button-lg button-primary button-ujarak" href="contact.php">Get in touch</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-corporate-bottom-panel">
        <div class="container">
          <div class="row justfy-content-xl-space-berween row-10 align-items-md-center2">
            <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
              <div>
                <ul class="list-inline list-inline-sm footer-social-list-2">
                  <li><a class="icon fa fa-facebook" href="#"></a></li>
                  <li><a class="icon fa fa-twitter" href="#"></a></li>
                  <li><a class="icon fa fa-google-plus" href="#"></a></li>
                  <li><a class="icon fa fa-instagram" href="#"></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 order-sm-first">
              <!-- Rights-->
              <p class="rights"><span>&copy;&nbsp;</span><span
                  class="copyright-year"></span><span>&nbsp;</span><span>RJ Roam</span>. All Rights Reserved. Design by
                vidhi</a></p>
            </div>
            <div class="col-sm-6 col-md-4 text-md-right">
              <p class="rights"><a href="#">Privacy Policy</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</body>
</html>