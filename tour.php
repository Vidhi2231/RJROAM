<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Tours</title>
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
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }
    .card {
  width: 300px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.card-image {
  width: 100%;
  height: 150px;
  object-fit: cover;
}

.card-content {
  padding: 16px;
}

.card-title {
  margin: 0;
  font-size: 20px;
  font-weight: bold;
}

.card-description {
  margin: 8px 0 16px 0;
  font-size: 14px;
  color: #666;
}

.card-button {
  width: 100%;
  padding: 12px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  text-transform: uppercase;
  font-size: 14px;
  cursor: pointer;
}


.container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
            padding: 25px 20px;
        }

        .container .heading {
            font-size: 40px;
            color: #334;
            font-weight: 400;
        }

        .container .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 20px;
            margin-top: 50px;
        }

        .container .box-container .box {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            transition: all 0.5s ease;
            display: none;
        }

        .container .box-container .box:nth-child(1),
        .container .box-container .box:nth-child(2),
        .container .box-container .box:nth-child(3) {
            display: inline-block;
        }

        .container .box-container .box .image {
            margin-bottom: 20px;
            overflow: hidden;
            height: 250px;
            border-radius: 5px;
        }

        .container .box-container .box .image img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .container .box-container .box:hover {
            box-shadow: 0 0 10px rgba(103, 103, 103, 0.313);
        }

        .container .box-container .box:hover .image img {
            transform: scale(1.1);
        }

        .container .box-container .box .content h3 {
            font-size: 28px;
            font-weight: 400;
            color: #334;
            margin: 0;
        }

        .container .box-container .box .content p {
            font-size: 15px;
            color: #777;
            line-height: 2;
            padding: 15px 0;
        }

        .container .box-container .box .content .btn {
            display: inline-block;
            padding: 10px 30px;
            border: 1px solid #334;
            color: #334;
            font-size: 17px;
            animation: bodr 10s infinite;
        }

        .btn2 {
            color: black;
        }

        .btn2:hover {
            color: #25629f;
        }

        @keyframes bodr {
            0% {
                border: 2px solid #dd8c8c;
            }

            25% {
                border: 2px solid #000000;
            }

            50% {
                border: 2px solid #4763c9;
            }

            75% {
                border: 2px solid #b8d475;
            }

            100% {
                border: 2px solid #b8b8b8;
            }
        }

        .container .box-container .box .content .btn:hover {
            background-color: #25629f;
            color: #fff;
        }

        .container .box-container .box .content .icons {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #334;
        }

        .container .box-container .box .content .icons span {
            font-size: 14px;
            color: #777;
        }

        .container .box-container .box .content .icons span i {
            color: #25629f;
            padding-right: 5px;
        }

        .border {
            width: 220px;
            height: 5px;
            background: #2874bf;
            margin: 0 auto;
            margin-bottom: 20px;
        }

        #load-more {
            margin-top: 20px;
            display: inline-block;
            padding: 13px 30px;
            border: 1px solid #334;
            color: #334;
            font-size: 16px;
            background-color: #fff;
            cursor: pointer;
        }

        #load-more2 {
            margin-top: 20px;
            display: inline-block;
            padding: 13px 30px;
            border: 1px solid #334;
            color: #334;
            font-size: 16px;
            background-color: #fff;
            cursor: pointer;
            display: none;
        }

        #load-more:hover {
            background-color: #25629f;
            border-color: #25629f;
            color: #fff;
            box-shadow: 0 0 10px rgba(103, 103, 103, 0.466);
        }

        @media (max-width:450px) {

            .container .heading {
                font-size: 25px;
            }

            .container .box-container {
                grid-template-columns: 1fr;
            }

            .container .box-container .box .image {
                height: 200px;
            }

            .container .box-container .box .content p {
                font-size: 12px;
            }

            .container .box-container .box .content .icons span {
                font-size: 12px;
            }

        }

        /*---------end of load-----------*/
  </style>
</head>

<body>
  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
        src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
        alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
  </div>
  <div class="preloader">
    <div class="preloader-body">
      <div class="cssload-container">
        <div class="cssload-speeding-wheel"></div>
      </div>
      <p>Loading...</p>
    </div>
  </div>
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
                  <!--Brand--><a class="brand" href="index.php""><h1 style=" font-size:25px;"> <b
                      style="color:#01b3a7;">RJ</b><i>Roam</i> </h1></a>
                </div>
              </div>
              <div class="rd-navbar-aside-right rd-navbar-collapse">
                <ul class="rd-navbar-corporate-contacts">
                  <li>
                    <div class="unit unit-spacing-xs">
                      <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>

                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs">
                      <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                      <div class="unit-body"><a class="link-phone" href="tel:#">+91 7742167550</a></div>
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
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Home</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="aboutt.php">About</a>
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
          <h2 class="breadcrumbs-custom-title">Tours</h2>
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <li class="active">Tours</li>
          </ul>
        </div>
        <div class="box-position" style="background-image: url(img/New/hava1.jpg);"></div>
      </div>
    </section>
    <!-- Base tour-->
    <!-- Hot tours-->
    <section class="section section-sm bg-default">
      <div class="container">
        <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Popular Tour Plans</span></h3>
        <div class="row row-sm row-40 row-md-50">
          <div class="col-sm-6 col-md-12 wow fadeInRight">
            <!-- Product Big-->
            <article class="product-big">
              <div class="unit flex-column flex-md-row align-items-md-stretch">
                <div class="unit-left"><a class="product-big-figure" href="package.php"><img
                      src="img/pack1.png" alt="" width="600" height="366" /></a></div>
                <div class="unit-body">
                  <div class="product-big-body">
                    <h5 class="product-big-title"><a href="package.php">BlueCity</a></h5>
                    <div class="group-sm group-middle justify-content-start">
                      <div class="product-big-rating"><span class="icon material-icons-star"></span><span
                          class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span
                          class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span>
                      </div><a class="product-big-reviews" href="#">12 customer reviews</a>
                    </div>
                    <p class="product-big-text">Regular stress of city life tends to suck the energy out of the soul
                      pushing people towards chronic anxiety. Every once in a while, you must plan a vacation on a hill,
                      where the blue sky, unruly hilly rivers, and voluminous natural cascades can revive your soul.
                    </p><a class="button button-black-outline button-ujarak" href="package.php">Buy This Tour</a>
                    <div class="product-big-price-wrap"><span class="product-big-price">1299/-</span></div>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-12 wow fadeInLeft">
            <!-- Product Big-->
            <article class="product-big">
              <div class="unit flex-column flex-md-row align-items-md-stretch">
                <div class="unit-left"><a class="product-big-figure" href="package.php"><img
                      src="img/pack2.png" alt="" width="600" height="366" /></a></div>
                <div class="unit-body">
                  <div class="product-big-body">
                    <h5 class="product-big-title"><a href="package.php">Udaipur</a></h5>
                    <div class="group-sm group-middle justify-content-start">
                      <div class="product-big-rating"><span class="icon material-icons-star"></span><span
                          class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span
                          class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span>
                      </div><a class="product-big-reviews" href="#">5 customer reviews</a>
                    </div>
                    <p class="product-big-text">The beautiful and inviting culture drop’ at the conclusion of your safari. Indulge in the delightful scents of the fragrant...</p><a
                      class="button button-black-outline button-ujarak" href="package.php">Buy This Tour</a>
                    <div class="product-big-price-wrap"><span class="product-big-price">1499/-</span></div>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-12 wow fadeInLeft">
            <!-- Product Big-->
            <article class="product-big">
              <div class="unit flex-column flex-md-row align-items-md-stretch">
                <div class="unit-left"><a class="product-big-figure" href="package.php"><img
                      src="img/pack3.png" alt="" width="600" height="366" /></a></div>
                <div class="unit-body">
                  <div class="product-big-body">
                    <h5 class="product-big-title"><a href="package.php">PinkCity</a></h5>
                    <div class="group-sm group-middle justify-content-start">
                      <div class="product-big-rating"><span class="icon material-icons-star"></span><span
                          class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span
                          class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span>
                      </div><a class="product-big-reviews" href="#">5 customer reviews</a>
                    </div>
                    <p class="product-big-text">The beautiful and inviting at the conclusion of your experience. Indulge in the delightful scents of the fragrant...</p><a
                      class="button button-black-outline button-ujarak" href="package.php">Buy This Tour</a>
                    <div class="product-big-price-wrap"><span class="product-big-price">1599/-</span></div>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-12 wow fadeInLeft">
            <!-- Product Big-->
            <article class="product-big">
              <div class="unit flex-column flex-md-row align-items-md-stretch">
                <div class="unit-left"><a class="product-big-figure" href="package.php"><img
                      src="img/pack4.png" alt="" width="600" height="366" /></a></div>
                <div class="unit-body">
                  <div class="product-big-body">
                    <h5 class="product-big-title"><a href="package.php">Jodhpur</a></h5>
                    <div class="group-sm group-middle justify-content-start">
                      <div class="product-big-rating"><span class="icon material-icons-star"></span><span
                          class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span
                          class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span>
                      </div><a class="product-big-reviews" href="#">5 customer reviews</a>
                    </div>
                    <p class="product-big-text">The beautiful and inviting Jodhpur is an ideal ‘flop and
                      drop’ at the conclusion of your safari. Indulge in the delightful scents of the fragrant...</p><a
                      class="button button-black-outline button-ujarak" href="package.php">Buy This Tour</a>
                    <div class="product-big-price-wrap"><span class="product-big-price">2999/-</span></div>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-12 wow fadeInLeft">
            <!-- Product Big-->
            <article class="product-big">
              <div class="unit flex-column flex-md-row align-items-md-stretch">
                <div class="unit-left"><a class="product-big-figure" href="package.php"><img
                      src="img/pack6.png" alt="" width="600" height="366" /></a></div>
                <div class="unit-body">
                  <div class="product-big-body">
                    <h5 class="product-big-title"><a href="package.php">LakeCity</a></h5>
                    <div class="group-sm group-middle justify-content-start">
                      <div class="product-big-rating"><span class="icon material-icons-star"></span><span
                          class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span
                          class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span>
                      </div><a class="product-big-reviews" href="#">5 customer reviews</a>
                    </div>
                    <p class="product-big-text">The beautiful and inviting Udaipur is an ideal ‘flop and
                      drop’ at the conclusion of your safari. Indulge in the delightful scents of the fragrant...</p><a
                      class="button button-black-outline button-ujarak" href="package.php">Buy This Tour</a>
                    <div class="product-big-price-wrap"><span class="product-big-price">1999/-</span></div>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <div class="container">

      <h1 class="heading">--Best Packages--</h1>
      <div class="border"></div>
      <div class="box-container">

        <div class="box">
          <div class="image">
              <img src="img/nag3.jpg" alt="">
          </div>
          <div class="content">
              <h3>Nagour Festival</h3>
              <p style="padding: 0;">Nagour,Rajasthan </p>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
              <a href="package.php" class="btn">Book Now</a><br> <a href="aboutt.php" class="btn2">Read more</a>
              <div class="icons">
                <span> <i class="fas fa-calendar"></i> 1599/- </span>
                  <span> <i class="fas fa-user"></i> by admin </span>
              </div>
          </div>
      </div>

      <div class="box">
          <div class="image">
              <img src="img/PUSK1.jpg" alt="">
          </div>
          <div class="content">
              <h3>Pushkar,Festival</h3>
              <p style="padding: 0;">pushkar,Rajasthan</p>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
              <a href="package.php" class="btn">Book Now</a><br> <a href="aboutt.php" class="btn2">Read more</a>

              <div class="icons">
                <span> <i class="fas fa-calendar"></i>1999/- </span>
                  <span> <i class="fas fa-user"></i> by admin </span>
              </div>
          </div>
      </div>

      <div class="box">
          <div class="image">
              <img src="img/camelf.jpg" alt="">
          </div>
          <div class="content">
              <h3>Camel Festival</h3>
              <p style="padding: 0;"> Bikaner,Rajasthan</p>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
              <a href="package.php" class="btn">Book Now</a><br> <a href="aboutt.php" class="btn2">Read more</a>

              <div class="icons">
                <span> <i class="fas fa-calendar"></i> 1999/- </span>
                  <span> <i class="fas fa-user"></i> by admin </span>
              </div>
          </div>
      </div>

          <div class="box">
              <div class="image">
                  <img src="img/msb3.jpg" alt="">
              </div>
              <div class="content">
                  <h3>MountAbu</h3>
                  <p style="padding: 0;">Hill station rajasthan </p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
                  <a href="package.php" class="btn">Book Now</a><br> <a href="aboutt.php" class="btn2">Read more</a>
                  <div class="icons">
                    <span> <i class="fas fa-calendar"></i> 3999/- </span>
                      <span> <i class="fas fa-user"></i> by admin </span>
                  </div>
              </div>
          </div>

          <div class="box">
              <div class="image">
                  <img src="img/udaipr.jpg" alt="">
              </div>
              <div class="content">
                  <h3>Udaipur</h3>
                  <p style="padding: 0;">Rajasthan</p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
                  <a href="package.php" class="btn">Book Now</a><br> <a href="aboutt.php" class="btn2">Read more</a>

                  <div class="icons">
                      <span> <i class="fas fa-calendar"></i> 2999/- </span>
                      <span> <i class="fas fa-user"></i> by admin </span>
                  </div>
              </div>
          </div>

          <div class="box">
              <div class="image">
                  <img src="img/udaipur2.jpg" alt="">
              </div>
              <div class="content">
                  <h3>Jodhpur</h3>
                  <p style="padding: 0;">Rajasthan</p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
                  <a href="package.php" class="btn">Book Now</a><br> <a href="aboutt.php" class="btn2">Read more</a>

                  <div class="icons">
                    <span> <i class="fas fa-calendar"></i> 2499/- </span>
                      <span> <i class="fas fa-user"></i> by admin </span>
                  </div>
              </div>
          </div>

          <div class="box">
              <div class="image">
                  <img src="img/temple.jpg" alt="">
              </div>
              <div class="content">
                  <h3>Temple</h3>
                  <p style="padding: 0;">rajasthan</p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
                  <a href="package.php" class="btn">Book Now</a><br> <a href="aboutt.php" class="btn2">Read more</a>

                  <div class="icons">
                    <span> <i class="fas fa-calendar"></i> 1999/- </span>
                      <span> <i class="fas fa-user"></i> by admin </span>
                  </div>
              </div>
          </div>

          <div class="box">
              <div class="image">
                  <img src="img/pk1.jpg" alt="">
              </div>
              <div class="content">
                  <h3>Raj Mahal</h3>
                  <p style="padding: 0;">Ajmer</p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
                  <a href="package.php" class="btn">Book Now</a><br> <a href="aboutt.php" class="btn2">Read more</a>

                  <div class="icons">
                    <span> <i class="fas fa-calendar"></i> 3999/- </span>
                      <span> <i class="fas fa-user"></i> by admin </span>
                  </div>
              </div>
          </div>

          <div class="box">
              <div class="image">
                  <img src="img/slide.jpg" alt="">
              </div>
              <div class="content">
                  <h3>Thar desser</h3>
                  <p style="padding: 0;">Jaipur</p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
                  <a href="package.php" class="btn">Book Now</a><br> <a href="aboutt.php" class="btn2">Read more</a>

                  <div class="icons">
                    <span> <i class="fas fa-calendar"></i> 4999/- </span>
                      <span> <i class="fas fa-user"></i> by admin </span>
                  </div>
              </div>
          </div>

          <div class="box">
              <div class="image">
                  <img src="img/hava2.jpg" alt="">
              </div>
              <div class="content">
                  <h3>Jaipur</h3>
                  <p style="padding: 0;">Rajasthan</p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
                  <a href="package.php" class="btn">Book Now</a><br> <a href="aboutt.php" class="btn2">Read more</a>

                  <div class="icons">
                    <span> <i class="fas fa-calendar"></i> 3999/- </span>
                      <span> <i class="fas fa-user"></i> by admin </span>
                  </div>
              </div>
          </div>

          <div class="box">
              <div class="image">
                  <img src="img/rank.jpg" alt="">
              </div>
              <div class="content">
                  <h3>Tradition tour </h3>
                  <p style="padding: 0;">South Destination</p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
                  <a href="package.php" class="btn">Book Now</a><br> <a href="aboutt.php" class="btn2">Read more</a>

                  <div class="icons">
                      <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
                      <span> <i class="fas fa-user"></i> by admin </span>
                  </div>
              </div>
          </div>

          <div class="box">
              <div class="image">
                  <img src="img/New/rajasthan-3122949_1920.jpg" alt="">
              </div>
              <div class="content">
                  <h3>Jaisalmer</h3>
                  <p style="padding: 0;">Rajasthan</p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
                  <a href="package.php" class="btn">Book Now</a><br> <a href="aboutt.php" class="btn2">Read more</a>

                  <div class="icons">
                    <span> <i class="fas fa-calendar"></i> 5999/- </span>
                      <span> <i class="fas fa-user"></i> by admin </span>
                  </div>
              </div>
          </div>

      </div>

      <div id="load-more"> Load more </div>
      <div id="load-more2">Back</div>
  </div>




    <!-- Lists and Blockquote-->
    <section class="section section-sm section-last bg-default text-left">
      <div class="container">
        <div class="row row-60 row-md-80 row-lg-90">
          <div class="col-lg-8 col-xl-6">
            <h3>Our Services & Products</h3>
            <div class="row row-sm row-30">
              <div class="col-sm-6">
                <ul class="list-marked">
                  <li>Consultancy</li>
                  <li>Customer Service</li>
                  <li>Innovation</li>
                  <li>Management</li>
                  <li>Hotel Booking</li>
                </ul>
              </div>
              <div class="col-sm-6">
                <ul class="list-marked">
                  <li>Travel Accessories</li>
                  <li>Transport</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-xl-6">
            <div class="offset-left-xl-65">
              <h3>Great minds think alike!</h3>
              <!-- Quote Classic-->
              <article class="quote-classic">
                <div class="quote-classic-text">
                  <p class="q">Once a year, go someplace you've never been before.</p>
                </div>
                <h6 class="quote-classic-cite">RJ</h6>
              </article>
            </div>
          </div>
        </div>
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
                        <div class="unit-body"><a class="link-phone" href="tel:#">+91 7742167550</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit">
                        <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                        <div class="unit-body"><a class="link-aemail" href="mailto:#">info@RjRoam.org</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit">
                        <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                        <div class="unit-body"><a class="link-location" href="#">Pali,Rajasthan</a></div>
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
                     
                    </div>
                  </article>
                  <!-- Post Minimal 2-->
                  <article class="post post-minimal-2">
                    <p class="post-minimal-2-title"><a href="#">Top 10 Hotels: Rating by RjRoam' Travel Experts</a></p>
                    <div class="post-minimal-2-time">
                      
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
                  class="copyright-year"></span><span>&nbsp;</span><span>RJRoam</span>. All Rights Reserved. Design by
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
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script>
    let loadMoreBtn = document.querySelector('#load-more');
        let loadMoreBtn2 = document.querySelector('#load-more2');
        let currentItem = 3;

        loadMoreBtn.onclick = () => {
            let boxes = [...document.querySelectorAll('.container .box-container .box')];
            for (var i = currentItem; i < currentItem + 3; i++) {
                boxes[i].style.display = 'inline-block';
            }
            currentItem += 3;

            if (currentItem >= boxes.length) {
                loadMoreBtn.style.display = 'none';
                loadMoreBtn2.style.display = 'block';
                currentItem = 9;
            }
        }

        loadMoreBtn2.onclick = () => {
            let boxes = [...document.querySelectorAll('.container .box-container .box')];
            for (var i = currentItem; i > currentItem - 3; i--) {
                boxes[i].style.display = 'none';
            }
            currentItem -= 3;

            if (currentItem >= 3) {
                loadMoreBtn.style.display = 'block';
                loadMoreBtn2.style.display = 'none';
            }
        }
        
    document.getElementById("exp").onclick = function() {
        var secondDiv = document.getElementById("secondDiv");
        if (secondDiv.style.display === "none") {
            secondDiv.style.display = "block";
        } else {
            secondDiv.style.display = "none";
        }
    };

  </script>
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>