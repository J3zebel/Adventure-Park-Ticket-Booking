<?php
include("../Assets/Connection/Connection.php");
session_start();
$sel="select * from tbl_adventure where adv_id=".$_SESSION["advid"];
$result=$conn->query($sel);
$data=$result->fetch_assoc();

?>
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Adventure Homepage</title>
</head>

<body>
Welcome <?php echo $data["adv_name"] ?><br>
<a href="View Complaint.php">Post Complaint</a>
</body>
</html>-->

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><h ead>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Book your outdoor adventure, About Us, ​Find your next getaway, Our Services, ​Plan Your Camping Trip, ​How to plan a camping trip, Contact Us, INTUITIVE">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="../Assets/Templates/Main/nicepage.css" media="screen">
<link rel="stylesheet" href="../Assets/Templates/Main/index.css" media="screen">
    <script class="u-script" type="text/javascript" src="../Assets/Templates/Main/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../Assets/Templates/Main/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.18.4, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="../Assets/Templates/Main">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "../Assets/Templates/Main/images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-home-page="Home.html" data-home-page-title="Home" data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-4c83"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="#`" class="u-image u-logo u-image-1">
          <img src="../Assets/Templates/Main/images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Homepage1.php" style="padding: 10px 20px;">Home</a>
            <!-- </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href=".php" style="padding: 10px 20px;">Profile</a> -->
            </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Rides.php" style="padding: 10px 20px;">Add Rides</a>
            </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Slot.php" style="padding: 10px 20px;">Add Timing</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="View Booking.php" style="padding: 10px 20px;">Bookings</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="View Complaint.php" style="padding: 10px 20px;">Complaints</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="View Feedback.php" style="padding: 10px 20px;">Feedbacks</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="../Guest/logout.php" style="padding: 10px 20px;">Logout</a>
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="./">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Myprofile.php">My Profile </a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">Contact</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
      <section class="skrollable skrollable-between u-align-center u-clearfix u-container-align-center u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-image u-shading u-section-1" src="" id="carousel_d2c3" data-image-width="1980" data-image-height="1131">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250"> VISIT WITH WINGS</h1>
        <p class="u-align-center-md u-align-center-sm u-align-center-xs u-large-text u-text u-text-variant u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">Book your adventure using  Visit With Wings&nbsp;</p>
        <div class="u-clearfix u-expanded-width-xs u-layout-custom-sm u-layout-custom-xs u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-right u-container-align-center-xs u-container-align-right u-container-style u-layout-cell u-left-cell u-size-30-lg u-size-30-md u-size-30-sm u-size-30-xl u-size-60-xs u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                  <a href="BookRides.php" class="u-align-center-xs u-border-2 u-border-palette-2-base u-btn u-btn-round u-button-style u-palette-2-base u-radius-50 u-btn-1">Book now</a>
                </div>
              </div>
              <div class="u-align-left u-container-align-center-xs u-container-align-left u-container-style u-layout-cell u-right-cell u-size-30-lg u-size-30-md u-size-30-sm u-size-30-xl u-size-60-xs u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">
                <!--<div class="u-container-layout u-valign-top u-container-layout-2">
                  <a href="#" class="u-active-white u-align-center-xs u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-white u-none u-radius-50 u-text-active-black u-text-hover-black u-btn-2"> How to Camp</a>
                </div>-->
              </div>
            </div>
          </div>
        </div>
        <!-- <p class="u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-default u-text-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">Images from <a href="https://www.freepik.com/photos/nature" class="u-active-none u-border-1 u-border-no-left u-border-no-right u-border-no-top u-border-white u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-alt-color u-top-left-radius-0 u-top-right-radius-0 u-btn-3" target="_blank">Freepik</a>
        </p> -->
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-palette-2-base u-radius-22 u-repeater-item u-shape-round u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3"><span class="u-align-center u-file-icon u-icon u-text-white u-icon-1"><img src="../Assets/Templates/Main/images/images/2325148-28c38e53.png" alt=""></span>
                <h4 class="u-align-center u-custom-font u-text u-text-font u-text-4">Trekking</h4>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-palette-2-base u-radius-22 u-repeater-item u-shape-round u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-4"><span class="u-align-center u-file-icon u-icon u-text-white u-icon-2"><img src="../Assets/Templates/Main/images/images/Paragliding.png" alt=""></span>
                <h4 class="u-align-center u-custom-font u-text u-text-font u-text-5">Paragliding</h4>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-palette-2-base u-radius-22 u-repeater-item u-shape-round u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-5"><span class="u-align-center u-file-icon u-icon u-text-white u-icon-3"><img src="../Assets/Templates/Main/images/images/Zipline.png" alt=""></span>
                <h4 class="u-align-center u-custom-font u-text u-text-font u-text-6">Zipline</h4>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-palette-2-base u-radius-22 u-repeater-item u-shape-round u-list-item-4" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-6"><span class="u-align-center u-file-icon u-icon u-text-white u-icon-4"><img src="../Assets/Templates/Main/images/images/Kayaking.png" alt=""></span>
                <h4 class="u-align-center u-custom-font u-text u-text-font u-text-7">Kayaking</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- <section class="u-clearfix u-section-2" id="sec-d02b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-image u-layout-cell u-size-30 u-image-1" data-image-width="400" data-image-height="265">
                <div class="u-container-layout u-container-layout-1"></div>
              </div>
              <div class="u-container-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <h2 class="u-align-center u-text u-text-default u-text-1">Sample Headline</h2>
                  <p class="u-align-center u-text u-text-default u-text-2">Sample text. Click to select the Text Element.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <section class="u-clearfix u-container-align-center u-section-3" id="carousel_cd2c">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-align-center u-container-style u-layout-cell u-left-cell u-size-23-lg u-size-23-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <div alt="" class="u-border-10 u-border-palette-2-base u-image u-image-circle u-image-1" src="" data-image-width="740" data-image-height="1110" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"></div>
                </div>
              </div>
             <div class="u-align-left u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-container-align-left u-container-style u-layout-cell u-right-cell u-size-37-lg u-size-37-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <h2 class="u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">About Us</h2>
                  <p class="u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-2">Welcome to Visit with Wings, your trusted partner for booking unforgettable adventure experiences !! At Visit With Wings, we believe in turning your adventurous dreams into reality, providing a platform that makes discovering and booking thrill-packed activities easy and accessible.</p>
                  <!-- <p class="u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-text u-text-default u-text-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">Image from <a href="https://www.freepik.com" class="u-border-1 u-border-active-palette-2-base u-border-black u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-none u-radius-0 u-text-body-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1" target="_blank">Freepik</a>
                  </p> -->
                  <a href="BookRides.php" class="u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-border-2 u-border-palette-2-base u-btn u-btn-round u-button-style u-palette-2-base u-radius-50 u-btn-2">Book now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-palette-2-base u-section-4" id="carousel_957a">
      
      
    <!--  <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0"> Find your next getaway</h2>
        <p class="u-align-center u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-align-center u-container-style u-image u-list-item u-repeater-item u-shading u-shape-rectangle u-image-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" data-image-width="800" data-image-height="533">
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
                <div class="u-black u-container-align-center u-container-style u-expanded-width u-group u-opacity u-opacity-50 u-group-1" data-animation-name="pulse" data-animation-duration="1500" data-animation-direction="" data-animation-delay="500">
                  <div class="u-container-layout u-valign-middle u-container-layout-2">
                    <h4 class="u-align-center u-text u-text-3" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500"> Best RV camping</h4>
                    <p class="u-align-center u-text u-text-4" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">Sample text. Click to select the Text Element.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-image u-list-item u-repeater-item u-shading u-shape-rectangle u-image-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" data-image-width="800" data-image-height="533">
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3">
                <div class="u-black u-container-style u-expanded-width u-group u-opacity u-opacity-50 u-group-2" data-animation-name="pulse" data-animation-duration="1500" data-animation-direction="" data-animation-delay="500">
                  <div class="u-container-layout u-valign-middle u-container-layout-4">
                    <h4 class="u-align-center u-text u-text-5" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500"> Lake camping</h4>
                    <p class="u-align-center u-text u-text-6" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">Sample text. Click to select the Text Element.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-image u-list-item u-repeater-item u-shading u-shape-rectangle u-image-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" data-image-width="626" data-image-height="533">
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-5">
                <div class="u-black u-container-align-center u-container-style u-expanded-width u-group u-opacity u-opacity-50 u-group-3" data-animation-name="pulse" data-animation-duration="1500" data-animation-direction="" data-animation-delay="500">
                  <div class="u-container-layout u-valign-middle u-container-layout-6">
                    <h4 class="u-align-center u-text u-text-7" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500"> Beach stays</h4>
                    <p class="u-align-center u-text u-text-8" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">Sample text. Click to select the Text Element.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-image u-list-item u-repeater-item u-shading u-shape-rectangle u-image-4" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" data-image-width="740" data-image-height="925">
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-7">
                <div class="u-black u-container-style u-expanded-width u-group u-opacity u-opacity-50 u-group-4" data-animation-name="pulse" data-animation-duration="1500" data-animation-direction="" data-animation-delay="500">
                  <div class="u-container-layout u-valign-middle u-container-layout-8">
                    <h4 class="u-align-center u-text u-text-9" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500"> Backyard Camping</h4>
                    <p class="u-align-center u-text u-text-10" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">Sample text. Click to select the Text Element.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-image u-list-item u-repeater-item u-shading u-shape-rectangle u-image-5" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" data-image-width="740" data-image-height="925">
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-9">
                <div class="u-black u-container-style u-expanded-width u-group u-opacity u-opacity-50 u-group-5" data-animation-name="pulse" data-animation-duration="1500" data-animation-direction="" data-animation-delay="500">
                  <div class="u-container-layout u-valign-middle u-container-layout-10">
                    <h4 class="u-align-center u-text u-text-11" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500"> car camping</h4>
                    <p class="u-align-center u-text u-text-12" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">Sample text. Click to select the Text Element.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-image u-list-item u-repeater-item u-shading u-shape-rectangle u-image-6" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" data-image-width="740" data-image-height="925">
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-11">
                <div class="u-black u-container-style u-expanded-width u-group u-opacity u-opacity-50 u-group-6" data-animation-name="pulse" data-animation-duration="1500" data-animation-direction="" data-animation-delay="500">
                  <div class="u-container-layout u-valign-middle u-container-layout-12">
                    <h4 class="u-align-center u-text u-text-13" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500"> Wilderness Camping</h4>
                    <p class="u-align-center u-text u-text-14" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">Sample text. Click to select the Text Element.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="u-align-center u-text u-text-default u-text-15" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">Image from <a href="https://www.freepik.com" class="u-border-1 u-border-active-palette-2-light-2 u-border-hover-palette-2-light-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-none u-radius-0 u-text-body-alt-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1" target="_blank">Freepik</a>
        </p>
      </div>
    </section>-->
    <section class="u-align-center u-clearfix u-container-align-center u-section-5" id="carousel_b788">
      <div class="u-container-style u-expanded-width u-group u-image u-shading u-image-1" data-image-width="1620" data-image-height="1080">
        <div class="u-container-layout u-valign-top u-container-layout-1">
          <h2 class="u-align-center u-text u-text-default u-text-1">Our Rides</h2>
        </div>
      </div>
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-center u-border-1 u-border-palette-2-base u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
              <img class="u-expanded-width u-image u-image-default u-image-2" src="../Assets/Templates/Main/images/images/paragliding main.jpg" alt="" data-image-width="900" data-image-height="600">
              <h4 class="u-hover-feature u-text u-text-4">Paragliding </h4>
              <p class="u-hover-feature u-text u-text-3">One of the most exciting activity near the glass bridge is paragliding.</p>
              <!-- <a href="#" class="u-border-1 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-hover-feature u-none u-radius-0 u-text-active-palette-2-base u-text-hover-palette-2-base u-text-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-1">more</a> -->
            </div>
          </div>
          <div class="u-align-center u-border-1 u-border-palette-2-base u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-2">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
              <img class="u-expanded-width u-image u-image-default u-image-3" src="../Assets/Templates/Main/images/images/glass bridge main.jpeg" alt="" data-image-width="900" data-image-height="600">
              <h4 class="u-hover-feature u-text u-text-4">Glass Bridge </h4>
              <p class="u-hover-feature u-text u-text-3"> The Vagamon Glass Bridge is one of the unique Glass Bridge Skywalks in India among many others.</p>
              <!-- <a href="#" class="u-border-1 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-hover-feature u-none u-radius-0 u-text-active-palette-2-base u-text-hover-palette-2-base u-text-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-2">more</a> -->
            </div>
          </div>
          <div class="u-align-center u-border-1 u-border-palette-2-base u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-3">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
              <img class="u-expanded-width u-image u-image-default u-image-4" src="../Assets/Templates/Main/images/images/zipline main.webp" alt="" data-image-width="900" data-image-height="600">
              <h4 class="u-hover-feature u-text u-text-4"> Zipline</h4>
              <p class="u-hover-feature u-text u-text-3">Experience the thrill of ziplining over Vagamon's breathtaking panoramic mountain views.</p>
              <!-- <a href="#" class="u-border-1 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-hover-feature u-none u-radius-0 u-text-active-palette-2-base u-text-hover-palette-2-base u-text-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-3">more</a> -->
            </div>
          </div>
          <div class="u-align-center u-border-1 u-border-palette-2-base u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-4">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
              <img class="u-expanded-width u-image u-image-default u-image-4" src="../Assets/Templates/Main/images/images/Gaint Swing.jpeg" alt="" data-image-width="900" data-image-height="600">
              <h4 class="u-hover-feature u-text u-text-4"> Gaint Swing</h4>
              <p class="u-hover-feature u-text u-text-3">The Giant Swing in Vagamon offers thrilling freefall and panoramic views of hills and valleys.</p>
              <!-- <a href="#" class="u-border-1 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-hover-feature u-none u-radius-0 u-text-active-palette-2-base u-text-hover-palette-2-base u-text-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-3">more</a> -->
            </div>
          </div>
          <div class="u-align-center u-border-1 u-border-palette-2-base u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-5">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
              <img class="u-expanded-width u-image u-image-default u-image-4" src="../Assets/Templates/Main/images/images/trekking.jpeg" alt="" data-image-width="900" data-image-height="600">
              <h4 class="u-hover-feature u-text u-text-4"> Trekking</h4>
              <p class="u-hover-feature u-text u-text-3">Trekking in Vagamon offers scenic trails through lush hills, pine forests, and meadows, with stunning mountain views.</p>
              <!-- <a href="#" class="u-border-1 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-hover-feature u-none u-radius-0 u-text-active-palette-2-base u-text-hover-palette-2-base u-text-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-3">more</a> -->
            </div>
          </div>
          <div class="u-align-center u-border-1 u-border-palette-2-base u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-6">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
              <img class="u-expanded-width u-image u-image-default u-image-4" src="../Assets/Templates/Main/images/images/Sky Roller.jpeg" alt="" data-image-width="900" data-image-height="600">
              <h4 class="u-hover-feature u-text u-text-4"> Sky Roller</h4>
              <p class="u-hover-feature u-text u-text-3">The Sky Roller in Vagamon offers thrilling aerial twists, speed, and stunning views over valleys.</p>
              <!-- <a href="#" class="u-border-1 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-hover-feature u-none u-radius-0 u-text-active-palette-2-base u-text-hover-palette-2-base u-text-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-3">more</a> -->
            </div>
          </div>
          <div class="u-align-center u-border-1 u-border-palette-2-base u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-3">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
              <img class="u-expanded-width u-image u-image-default u-image-4" src="../Assets/Templates/Main/images/images/Sky Cycle.jpeg" alt="" data-image-width="900" data-image-height="600">
              <h4 class="u-hover-feature u-text u-text-4"> Sky Cycle</h4>
              <p class="u-hover-feature u-text u-text-3">The Sky Cycle in Vagamon allows riders to pedal above scenic landscapes, enjoying breathtaking views.</p>
              <!-- <a href="#" class="u-border-1 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-hover-feature u-none u-radius-0 u-text-active-palette-2-base u-text-hover-palette-2-base u-text-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-3">more</a> -->
            </div>
          </div>
          
         
          <div class="u-align-center u-border-1 u-border-palette-2-base u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-4">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
              <img class="u-expanded-width u-image u-image-default u-image-5" src="../Assets/Templates/Main/images/images/kayaking main.webp" alt="" data-image-width="900" data-image-height="600">
              <h4 class="u-hover-feature u-text u-text-4"> Kayaking</h4>
              <p class="u-hover-feature u-text u-text-3">Kayaking in Vagamon features serene waters and stunning natural landscapes.</p>
              <!-- <a href="#" class="u-border-1 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-hover-feature u-none u-radius-0 u-text-active-palette-2-base u-text-hover-palette-2-base u-text-palette-2-base u-top-left-radius-0 u-top-right-radius-0 u-btn-4">more</a> -->
            </div>
          </div>
        </div>
      </div>
      <!-- <p class="u-align-center u-text u-text-10">Images from <a href="https://www.freepik.com/" class="u-border-1 u-border-active-palette-3-base u-border-black u-border-hover-palette-3-base u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-none u-radius-0 u-text-body-color u-top-left-radius-0 u-top-right-radius-0 u-btn-5" target="_blank">Freepik</a>
      </p> -->
     
    </section>
    <section class="u-clearfix u-white u-section-6" id="carousel_3ac0">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h3 class="u-text u-text-1"> Instructions for rides:</h3>
                  <ul class="u-custom-list u-file-icon u-text u-text-2">
                    <li style="padding-left: 7px;">
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-c38d"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div> Timings for the days are between 9:00 AM to 6 PM.
                    </li>
                    <li style="padding-left: 7px;">
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-c38d"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>Visitors are restricted to visit the outer tourist zone.
                    </li>
                    <!-- <li style="padding-left: 7px;">
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-c38d"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>
                    </li> -->
                    <li style="padding-left: 7px;">
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-c38d"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>Follow the rules and regulations given by the authorities.
                    </li>
                    <li style="padding-left: 7px;">
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-c38d"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>There is no height or weight standard. 
                    </li>
                    <li style="padding-left: 7px;">
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-c38d"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>Parking fees at the activity location is not included.
                    </li>
                    <!-- <li style="padding-left: 7px;">
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-c38d"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>
                    </li> -->
                    <li style="padding-left: 7px;">
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-c38d"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>Listen carefully to your instructor during the safety briefing.
                    </li>
                    <li style="padding-left: 7px;">
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-c38d"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>Pack a small bag with essentials.
                    </li>
                    <!-- <li style="padding-left: 7px;">
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-c38d"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>
                    </li>
                     <li style="padding-left: 7px;">
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-c38d"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>internet access
                    </li>  -->
                  </ul>
                </div>
              </div>
               <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <!-- <h3 class="u-text u-text-3"> In the campsite, you can:&nbsp;<br>
                  </h3>
                  <ul class="u-custom-list u-text u-text-4" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
                    <li style="padding-left: 7px;">
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-f00d"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div> hire a climbing instructor 
                    </li>
                    <li style="padding-left: 7px;">
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-f00d"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>buy kayaking permits(price list) 
                    </li>
                    <li style="padding-left: 7px;">
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-f00d"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>buy fishing permits (price list)
                    </li>
                  </ul>
                  <h3 class="u-text u-text-5"> Info centre for paragliders:<br>
                  </h3> -->
                  <ul class="u-custom-list u-text u-text-6" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
                    <li style="padding-left: 7px;">
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-f00d"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div> If you have any medical conditions or concerns (such as heart issues, fear of heights, or recent surgeries), consult with your doctor before participating in any activities.
                    </li>
                    <li style="padding-left: 7px;">
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-f00d"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>Wear comfortable clothing and sturdy shoes suitable for outdoor activities.
                    </li>
                    <li style="padding-left: 7px;">
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-f00d"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>Avoid consuming heavy food or alcoholic beverages before the activity.
                    </li>
                    <li style="padding-left: 7px;">
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-f00d"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>Ticket Cancellation is not available.
                    </li>
                  </ul> 
                  <!-- <a href="#" class="u-align-center-xs u-border-2 u-border-palette-2-base u-btn u-btn-round u-button-style u-palette-2-base u-radius-50 u-btn-1">Learn More</a>  -->
                </div>
               </div> 
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0"> Find your next place to Visit</h2>
        <p class="u-align-center u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250"> Other famous places in Vagamon to visit during your vacation</p>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-align-center u-container-style u-image u-list-item u-repeater-item u-shading u-shape-rectangle u-image-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" data-image-width="800" data-image-height="533">
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
                <div class="u-black u-container-align-center u-container-style u-expanded-width u-group u-opacity u-opacity-50 u-group-1" data-animation-name="pulse" data-animation-duration="1500" data-animation-direction="" data-animation-delay="500">
                  <div class="u-container-layout u-valign-middle u-container-layout-2">
                    <h4 class="u-align-center u-text u-text-3" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500"> Pinevalley </h4>
                    <!-- <p class="u-align-center u-text u-text-4" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">Sample text. Click to select the Text Element.</p> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-image u-list-item u-repeater-item u-shading u-shape-rectangle u-image-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" data-image-width="800" data-image-height="533">
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3">
                <div class="u-black u-container-style u-expanded-width u-group u-opacity u-opacity-50 u-group-2" data-animation-name="pulse" data-animation-duration="1500" data-animation-direction="" data-animation-delay="500">
                  <div class="u-container-layout u-valign-middle u-container-layout-4">
                    <h4 class="u-align-center u-text u-text-5" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">Vagamon Meadows</h4>
                    <!-- <p class="u-align-center u-text u-text-6" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">Sample text. Click to select the Text Element.</p> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-image u-list-item u-repeater-item u-shading u-shape-rectangle u-image-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" data-image-width="626" data-image-height="533">
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-5">
                <div class="u-black u-container-align-center u-container-style u-expanded-width u-group u-opacity u-opacity-50 u-group-3" data-animation-name="pulse" data-animation-duration="1500" data-animation-direction="" data-animation-delay="500">
                  <div class="u-container-layout u-valign-middle u-container-layout-6">
                    <h4 class="u-align-center u-text u-text-7" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500"> Thangalpara</h4>
                    <!-- <p class="u-align-center u-text u-text-8" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">Sample text. Click to select the Text Element.</p> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-image u-list-item u-repeater-item u-shading u-shape-rectangle u-image-4" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" data-image-width="740" data-image-height="925">
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-7">
                <div class="u-black u-container-style u-expanded-width u-group u-opacity u-opacity-50 u-group-4" data-animation-name="pulse" data-animation-duration="1500" data-animation-direction="" data-animation-delay="500">
                  <div class="u-container-layout u-valign-middle u-container-layout-8">
                    <h4 class="u-align-center u-text u-text-9" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500"> Palozhukumpara</h4>
                    <!-- <p class="u-align-center u-text u-text-10" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">Sample text. Click to select the Text Element.</p> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-image u-list-item u-repeater-item u-shading u-shape-rectangle u-image-5" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" data-image-width="740" data-image-height="925">
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-9">
                <div class="u-black u-container-style u-expanded-width u-group u-opacity u-opacity-50 u-group-5" data-animation-name="pulse" data-animation-duration="1500" data-animation-direction="" data-animation-delay="500">
                  <div class="u-container-layout u-valign-middle u-container-layout-10">
                    <h4 class="u-align-center u-text u-text-11" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500"> Illikkal kallu</h4>
                    <!-- <p class="u-align-center u-text u-text-12" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">Sample text. Click to select the Text Element.</p> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-image u-list-item u-repeater-item u-shading u-shape-rectangle u-image-6" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" data-image-width="740" data-image-height="925">
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-11">
                <div class="u-black u-container-style u-expanded-width u-group u-opacity u-opacity-50 u-group-6" data-animation-name="pulse" data-animation-duration="1500" data-animation-direction="" data-animation-delay="500">
                  <div class="u-container-layout u-valign-middle u-container-layout-12">
                    <h4 class="u-align-center u-text u-text-13" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500"> Kurishumala</h4>
                    <!-- <p class="u-align-center u-text u-text-14" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">Sample text. Click to select the Text Element.</p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <p class="u-align-center u-text u-text-default u-text-15" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500">Image from <a href="https://www.freepik.com" class="u-border-1 u-border-active-palette-2-light-2 u-border-hover-palette-2-light-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-none u-radius-0 u-text-body-alt-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1" target="_blank">Freepik</a>
        </p> -->
      </div>
    </section>
    <!-- <section class="u-clearfix u-section-10" id="sec-b02b">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section> -->
    <!-- <section class="u-align-center u-clearfix u-container-align-center u-image u-shading u-section-11" id="sec-62c2">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-center u-text u-text-default u-title u-text-1">INTUITIVE</h1>
        <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-2">Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
        <a href="#" class="u-align-center u-btn u-button-style u-palette-2-base u-btn-1">Read More</a>
      </div>
    </section> -->
    
    
    
    <footer class="u-align-center u-clearfix u-container-align-center u-footer u-grey-80 u-footer" id="sec-78cc"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">copyright © 2024 . All rights reserved.</p>
      </div></footer>
    <!-- <section class="u-backlink u-clearfix u-grey-80">
      <p class="u-text">
        <span>This site was created with the </span>
        <a class="u-link" href="https://nicepage.com/" target="_blank" rel="nofollow">
          <span>Nicepage</span>
        </a>
      </p>
    </section> -->
  
</body></html>