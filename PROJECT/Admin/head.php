<?php
include("sessionvalidation.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Homepage</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../Assets/Templates/Admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../Assets/Templates/Admin/assets/vendors/flag-icon-css/css/flag-icons.min.css">
    <link rel="stylesheet" href="../Assets/Templates/Admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../Assets/Templates/Admin/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../Assets/Templates/Admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../Assets/Templates/Admin/assets/css/vertical-light-layout/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../Assets/Templates/Admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo" href="../index.php"><img src="../Assets/Templates/Admin/assets/images/logo.svg" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="../index.php"><img src="../Assets/Templates/Admin/assets/images/logo-mini.svg" alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    
    <ul class="navbar-nav navbar-nav-right">
      
      
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
          <div class="nav-profile-img">
            <img src="../Assets/Templates/Admin/contact.png" alt="image">
          </div>
          <div class="nav-profile-text">
            <p class="mb-1 text-black"><?php echo $_SESSION['aname'] ?></p>
          </div>
        </a>
        <div class="dropdown-menu navbar-dropdown dropdown-menu-end p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
          <div class="p-3 text-center bg-primary">
            <img class="img-avatar img-avatar48 img-avatar-thumb" src="../Assets/Templates/Admin/contact.png" alt="">
          </div>
          <div class="p-2">
            
            <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="../Guest/logout.php">
              <span>Log Out</span>
              <i class="mdi mdi-logout ms-1"></i>
            </a>
          </div>
        </div>
      </li>
      
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
              <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-category">Main</li>
    <li class="nav-item">
      <a class="nav-link" href="Home page.php">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item nav-category">View</li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
        <span class="menu-title">Adventure Park</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">          
          <li class="nav-item"> <a class="nav-link" href="../Admin/Adventurepark.php">Adventure Park Registration</a></li>
          <li class="nav-item"> <a class="nav-link" href="../Admin/View adventurepark.php">View Adventure Park</a></li> 
          <li class="nav-item"> <a class="nav-link" href="../Admin/Category1.php">Add Rides</a></li>         
          <li class="nav-item"> <a class="nav-link" href="../Admin/Adv Complaint.php">View Complaints</a></li>          
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
        <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
        <span class="menu-title">User</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="icons">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../Admin/New users.php">Users</a></li>
          <li class="nav-item"> <a class="nav-link" href="../Admin/Viewbooking.php">Bookings</a></li>
          <li class="nav-item"> <a class="nav-link" href="../Admin/View Feedback.php">Feedback</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">
        <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
        <span class="menu-title">Location</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="forms">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../Admin/District.php">District</a></li>
          <li class="nav-item"> <a class="nav-link" href="../Admin/Place.php">Place</a></li>          
        </ul>
      </div>
    </li>
   
    <li class="nav-item sidebar-user-actions">
      <div class="user-details">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <div class="d-flex align-items-center">
              <div class="sidebar-profile-img">
              </div>
              <div class="sidebar-profile-text">
              </div>
            </div>
          </div>
          <!-- <div class="badge badge-danger">3</div> -->
        </div>
      </div>
    </li>
      <!--<li class="nav-item sidebar-user-actions">
      <div class="sidebar-user-menu">
        <a href="#" class="nav-link"><i class="mdi mdi-weather-sunny menu-icon"></i>
          <span class="menu-title">Settings</span>
        </a>
      </div>
    </li>
   <li class="nav-item sidebar-user-actions">
      <div class="sidebar-user-menu">
        <a href="#" class="nav-link"><i class="mdi mdi-speedometer menu-icon"></i>
          <span class="menu-title">Take Tour</span></a>
      </div>
    </li> -->
    <li class="nav-item sidebar-user-actions">
      <div class="sidebar-user-menu">
        <a href="../Guest/logout.php" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
          <span class="menu-title">Log Out</span></a>
      </div>
    </li>
  </ul>
</nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">