﻿<?php
include('php/connection.php');
 session_start();
 $tempId=$_SESSION['id'];
 $sql = "SELECT * FROM `users` NATURAL JOIN `userpicture`  WHERE  userID = '$tempId'"; 
 					$result = mysqli_query($conn, $sql); 
					$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<!-- Copied from http://admin.pixelstrap.com/endless/ltr/user-profile.html by Cyotek WebCopy 1.8.0.652, Friday, April 24, 2020, 6:53:54 AM -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="endless admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, endless admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Endless - Premium Admin Template</title>
    <!-- Google font-->
    <link href="../../css.css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="../../css-1.css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../../css-2.css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Font Awesome-->
    <!-- <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/photoswipe.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/light-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="loader bg-white">
        <div class="whirly-loader"> </div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row">
          <div class="main-header-left d-lg-none">
            <div class="logo-wrapper"><a href="index.html"><img src="../assets/images/endless-logo.png" alt=""></a></div>
          </div>
          <div class="mobile-sidebar d-block">
            <div class="media-body text-right switch-sm">
              <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
            </div>
          </div>
          <div class="nav-right col p-0">
            <ul class="nav-menus">
              <!-- <li>
                <form class="form-inline search-form" action="#" method="get">
                  <div class="form-group">
                    <div class="Typeahead Typeahead--twitterUsers">
                      <div class="u-posRelative">
                        <input class="Typeahead-input form-control-plaintext" id="demo-input" type="text" name="q" placeholder="Search...">
                        <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                      </div>
                      <div class="Typeahead-menu"></div>
                    </div>
                  </div>
                </form>
              </li> -->
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown"><a class="txt-dark" href="#">
                  <h6>EN</h6></a>
                <ul class="language-dropdown onhover-show-div p-20">
                  <li><a href="#" data-lng="en"><i class="flag-icon flag-icon-is"></i> English</a></li>
                  <li><a href="#" data-lng="es"><i class="flag-icon flag-icon-um"></i> Spanish</a></li>
                  <li><a href="#" data-lng="pt"><i class="flag-icon flag-icon-uy"></i> Portuguese</a></li>
                  <li><a href="#" data-lng="fr"><i class="flag-icon flag-icon-nz"></i> French</a></li>
                </ul>
              </li>
              <li class="onhover-dropdown"><i data-feather="bell"></i><span class="dot"></span>
                <ul class="notification-dropdown onhover-show-div">
                  <li>Notification <span class="badge badge-pill badge-primary pull-right">3</span></li>
                  <li>
                    <div class="media">
                      <div class="media-body">
                        <h6 class="mt-0"><span><i class="shopping-color" data-feather="shopping-bag"></i></span>Your order ready for Ship..!<small class="pull-right">9:00 AM</small></h6>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-body">
                        <h6 class="mt-0 txt-success"><span><i class="download-color font-success" data-feather="download"></i></span>Download Complete<small class="pull-right">2:30 PM</small></h6>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-body">
                        <h6 class="mt-0 txt-danger"><span><i class="alert-color font-danger" data-feather="alert-circle"></i></span>250 MB trash files<small class="pull-right">5:00 PM</small></h6>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                      </div>
                    </div>
                  </li>
                  <li class="bg-light txt-dark"><a href="#">All</a> notification</li>
                </ul>
              </li>
              <li><a href="#"><i class="right_side_toggle" data-feather="message-circle"></i><span class="dot"></span></a></li>
              <li class="onhover-dropdown">
                <div class="media align-items-center"><img class="align-self-center pull-right img-50 rounded-circle" src="../assets/images/dashboard/user.png" alt="header-user">
                  <div class="dotted-animation"><span class="animate-circle"></span><span class="main-circle"></span></div>
                </div>
                <ul class="profile-dropdown onhover-show-div p-20">
                  <li><a href="./edit-profile.php"><i data-feather="user"></i> Edit Profile</a></li>
                  <li><a href="#"><i data-feather="mail"></i> Inbox</a></li>
                  <li><a href="#"><i data-feather="lock"></i>Lock Screen</a></li>
                  <li><a href="#"><i data-feather="settings"></i> Settings</a></li>
                  <li><a href="php/logout.php"><i data-feather="log-out"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
            <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
          </div>
          <script id="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
          <script id="empty-template" type="text/x-handlebars-template">
            <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
            
          </script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
          <div class="main-header-left d-none d-lg-block">
            <div class="logo-wrapper"><a href="index.html"><img src="../assets/images/endless-logo.png" alt=""></a></div>
          </div>
          <div class="sidebar custom-scrollbar">
            <div class="sidebar-user text-center">
              <div><img class="img-60 rounded-circle" src="pic/<?php echo $row['propic']?>" alt="#">
                <div class="profile-edit"><a href="edit-profile.php" target="_blank"><i data-feather="edit"></i></a></div>
              </div>
              <h6 class="mt-3 f-14"><?php  echo $_SESSION ['username'];?> </h6>
              <p><?php  echo $row['profession'];?></p>
            </div>
            <ul class="sidebar-menu">
              <li><a class="sidebar-header" href="#"><i data-feather="home"></i><span>Dashboard</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="./user-profile.php"><i class="fa fa-circle"></i><span>Home</span></a></li>
                  <!-- <li><a href="dashboard-ecommerce.html"><i class="fa fa-circle"></i><span>E-commerce</span></a></li>
                  <li><a href="dashboard-university.html"><i class="fa fa-circle"></i><span>University</span></a></li>
                  <li><a href="dashboard-bitcoin.html"><i class="fa fa-circle"></i><span>Crypto</span></a></li>
                  <li><a href="dashboard-server.html"><i class="fa fa-circle"></i><span>Server</span></a></li>
                  <li><a href="dashboard-project.html"><i class="fa fa-circle"></i><span>Project</span></a></li> -->
               </ul>
              </li>
              <!--<li><a class="sidebar-header" href="#"><i data-feather="airplay"></i><span>Widgets</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="general-widget.html"><i class="fa fa-circle"></i>General</a></li>
                  <li><a href="chart-widget.html"><i class="fa fa-circle"></i>Chart</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="../starter-kit/layout-light.html"><i data-feather="anchor"></i><span> Starter kit</span></a></li>
              <li><a class="sidebar-header" href="#"><i data-feather="disc"></i><span>Color Version</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="layout-light.html"><i class="fa fa-circle"></i>Layout Light</a></li>
                  <li><a href="layout-dark.html"><i class="fa fa-circle"></i>Layout Dark</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="sidebar"></i><span>Sidebar</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="compact.html"><i class="fa fa-circle"></i>Compact Sidebar</a></li>
                  <li><a href="compact-small.html"><i class="fa fa-circle"></i>Compact Icon Sidebar</a></li>
                  <li><a href="sidebar-hidden.html"><i class="fa fa-circle"></i>Sidebar Hidden</a></li>
                  <li><a href="sidebar-fixed.html"><i class="fa fa-circle"></i>Sidebar Fixed</a></li>
                  <li><a class="disabled" href="" onclick="return false;"><i class="fa fa-circle"></i>Disable</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="layout"></i><span>Page layout</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="box-layout.html"><i class="fa fa-circle"></i>Boxed</a></li>
                  <li><a href="layout-rtl.html"><i class="fa fa-circle"></i>RTL</a></li>
                  <li><a href="1-column.html"><i class="fa fa-circle"></i>1 Column</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="align-justify"></i><span>Menu Options</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="hide-on-scroll.html"><i class="fa fa-circle"></i>Hide menu on Scroll</a></li>
                  <li><a href="vertical.html"><i class="fa fa-circle"></i>Vertical Menu</a></li>
                  <li><a href="mega-menu.html"><i class="fa fa-circle"></i>Mega Menu</a></li>
                  <li><a href="fix-header.html"><i class="fa fa-circle"></i>Fix header</a></li>
                  <li><a href="fix-header-sidebar.html"><i class="fa fa-circle"></i>Fix Header & sidebar</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="cloud-lightning"></i><span>Footers</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="footer-light.html"><i class="fa fa-circle"></i>Footer Light</a></li>
                  <li><a href="footer-dark.html"><i class="fa fa-circle"></i>Footer Dark</a></li>
                  <li><a href="footer-fixed.html"><i class="fa fa-circle"></i>Footer Fixed</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="pagebuild.html"><i data-feather="clipboard"></i><span>Page Builder</span></a></li>
              <li><a class="sidebar-header" href="#"><i data-feather="edit-3"></i><span>Form Builders</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="form-builder-1.html"><i class="fa fa-circle"></i>Form Builder 1</a></li>
                  <li><a href="form-builder-2.html"><i class="fa fa-circle"></i>Form Builder 2</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="button-builder.html"><i data-feather="bookmark"></i><span>Button Builder</span></a></li>
              <li><a class="sidebar-header" href="#"><i data-feather="box"></i><span> Base</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="state-color.html"><i class="fa fa-circle"></i>State color</a></li>
                  <li><a href="typography.html"><i class="fa fa-circle"></i>Typography</a></li>
                  <li><a href="avatars.html"><i class="fa fa-circle"></i>Avatars</a></li>
                  <li><a href="helper-classes.html"><i class="fa fa-circle"></i>helper classes</a></li>
                  <li><a href="grid.html"><i class="fa fa-circle"></i>Grid</a></li>
                  <li><a href="tag-pills.html"><i class="fa fa-circle"></i>Tag & pills</a></li>
                  <li><a href="progress-bar.html"><i class="fa fa-circle"></i>Progress</a></li>
                  <li><a href="modal.html"><i class="fa fa-circle"></i>Modal</a></li>
                  <li><a href="alert.html"><i class="fa fa-circle"></i>Alert</a></li>
                  <li><a href="popover.html"><i class="fa fa-circle"></i>Popover</a></li>
                  <li><a href="tooltip.html"><i class="fa fa-circle"></i>Tooltip</a></li>
                  <li><a href="loader.html"><i class="fa fa-circle"></i>Spinners</a></li>
                  <li><a href="dropdown.html"><i class="fa fa-circle"></i>Dropdown</a></li>
                  <li><a href="#"><i class="fa fa-circle"></i>Tabs<i class="fa fa-angle-down pull-right"></i></a>
                    <ul class="sidebar-submenu">
                      <li><a href="tab-bootstrap.html"><i class="fa fa-circle"></i>Bootstrap Tabs</a></li>
                      <li><a href="tab-material.html"><i class="fa fa-circle"></i>Line Tabs</a></li>
                    </ul>
                  </li>
                  <li><a href="according.html"><i class="fa fa-circle"></i>Accordion</a></li>
                  <li><a href="navs.html"><i class="fa fa-circle"></i>Navs</a></li>
                  <li><a href="box-shadow.html"><i class="fa fa-circle"></i>Shadow</a></li>
                  <li><a href="list.html"><i class="fa fa-circle"></i>Lists</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="folder-plus"></i><span> Advance</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="scrollable.html"><i class="fa fa-circle"></i>Scrollable</a></li>
                  <li><a href="tree.html"><i class="fa fa-circle"></i>Tree view</a></li>
                  <li><a href="bootstrap-notify.html"><i class="fa fa-circle"></i>Bootstrap Notify</a></li>
                  <li><a href="rating.html"><i class="fa fa-circle"></i>Rating</a></li>
                  <li><a href="dropzone.html"><i class="fa fa-circle"></i>dropzone</a></li>
                  <li><a href="tour.html"><i class="fa fa-circle"></i>Tour</a></li>
                  <li><a href="sweet-alert2.html"><i class="fa fa-circle"></i>SweetAlert2</a></li>
                  <li><a href="modal-animated.html"><i class="fa fa-circle"></i>Animated Modal</a></li>
                  <li><a href="owl-carousel.html"><i class="fa fa-circle"></i>Owl Carousel</a></li>
                  <li><a href="ribbons.html"><i class="fa fa-circle"></i>Ribbons</a></li>
                  <li><a href="pagination.html"><i class="fa fa-circle"></i>Pagination</a></li>
                  <li><a href="steps.html"><i class="fa fa-circle"></i>Steps</a></li>
                  <li><a href="breadcrumb.html"><i class="fa fa-circle"></i>Breadcrumb</a></li>
                  <li><a href="range-slider.html"><i class="fa fa-circle"></i>Range Slider</a></li>
                  <li><a href="image-cropper.html"><i class="fa fa-circle"></i>Image cropper</a></li>
                  <li><a href="sticky.html"><i class="fa fa-circle"></i>Sticky</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="cloud-drizzle"></i><span>Animation<span class="badge badge-danger ml-3">Hot</span></span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="animate.html"><i class="fa fa-circle"></i>Animate</a></li>
                  <li><a href="scroll-reval.html"><i class="fa fa-circle"></i>Scroll Reveal</a></li>
                  <li><a href="AOS.html"><i class="fa fa-circle"></i>AOS animation</a></li>
                  <li><a href="tilt.html"><i class="fa fa-circle"></i>Tilt Animation</a></li>
                  <li><a href="wow.html"><i class="fa fa-circle"></i>Wow Animation</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="command"></i><span>Icons</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="flag-icon.html"><i class="fa fa-circle"></i>Flag icon</a></li>
                  <li><a href="font-awesome.html"><i class="fa fa-circle"></i>Fontawesome Icon</a></li>
                  <li><a href="ico-icon.html"><i class="fa fa-circle"></i>Ico Icon</a></li>
                  <li><a href="themify-icon.html"><i class="fa fa-circle"></i>Thimify Icon</a></li>
                  <li><a href="feather-icon.html"><i class="fa fa-circle"></i>Feather icon</a></li>
                  <li><a href="whether-icon.html"><i class="fa fa-circle"></i>Whether Icon</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="cloud"></i><span>Buttons</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="buttons.html"><i class="fa fa-circle"></i>Default Style</a></li>
                  <li><a href="buttons-flat.html"><i class="fa fa-circle"></i>Flat Style</a></li>
                  <li><a href="buttons-edge.html"><i class="fa fa-circle"></i>Edge Style</a></li>
                  <li><a href="raised-button.html"><i class="fa fa-circle"></i>Raised Style</a></li>
                  <li><a href="button-group.html"><i class="fa fa-circle"></i>Button Group</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="file-text"></i><span>Forms</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="#"><i class="fa fa-circle"></i>Form Controls<i class="fa fa-angle-down pull-right"></i></a>
                    <ul class="sidebar-submenu">
                      <li><a href="form-validation.html"><i class="fa fa-circle"></i>Form Validation</a></li>
                      <li><a href="base-input.html"><i class="fa fa-circle"></i>Base Inputs</a></li>
                      <li><a href="radio-checkbox-control.html"><i class="fa fa-circle"></i>Checkbox & Radio</a></li>
                      <li><a href="input-group.html"><i class="fa fa-circle"></i>Input Groups</a></li>
                      <li><a href="megaoptions.html"><i class="fa fa-circle"></i>Mega Options</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-circle"></i>Form Widgets<i class="fa fa-angle-down pull-right"></i></a>
                    <ul class="sidebar-submenu">
                      <li><a href="datepicker.html"><i class="fa fa-circle"></i>Datepicker</a></li>
                      <li><a href="time-picker.html"><i class="fa fa-circle"></i>Timepicker</a></li>
                      <li><a href="datetimepicker.html"><i class="fa fa-circle"></i>Datetimepicker</a></li>
                      <li><a href="daterangepicker.html"><i class="fa fa-circle"></i>Daterangepicker</a></li>
                      <li><a href="touchspin.html"><i class="fa fa-circle"></i>Touchspin</a></li>
                      <li><a href="select2.html"><i class="fa fa-circle"></i>Select2</a></li>
                      <li><a href="switch.html"><i class="fa fa-circle"></i>Switch</a></li>
                      <li><a href="typeahead.html"><i class="fa fa-circle"></i>Typeahead</a></li>
                      <li><a href="clipboard.html"><i class="fa fa-circle"></i>Clipboard</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-circle"></i>Form Layout<i class="fa fa-angle-down pull-right"></i></a>
                    <ul class="sidebar-submenu">
                      <li><a href="default-form.html"><i class="fa fa-circle"></i>Default Forms</a></li>
                      <li><a href="form-wizard.html"><i class="fa fa-circle"></i>Form Wizard 1</a></li>
                      <li><a href="form-wizard-two.html"><i class="fa fa-circle"></i>Form Wizard 2</a></li>
                      <li><a href="form-wizard-three.html"><i class="fa fa-circle"></i>Form Wizard 3</a></li>
                      <li><a href="form-wizard-four.html"><i class="fa fa-circle"></i>Form Wizard 4</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="server"></i><span>Tables</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="#"><i class="fa fa-circle"></i>Bootstrap Tables<i class="fa fa-angle-down pull-right"></i></a>
                    <ul class="sidebar-submenu">
                      <li><a href="bootstrap-basic-table.html"><i class="fa fa-circle"></i>Basic Tables</a></li>
                      <li><a href="bootstrap-sizing-table.html"><i class="fa fa-circle"></i>Sizing Tables</a></li>
                      <li><a href="bootstrap-border-table.html"><i class="fa fa-circle"></i>Border Tables</a></li>
                      <li><a href="bootstrap-styling-table.html"><i class="fa fa-circle"></i>Styling Tables</a></li>
                      <li><a href="table-components.html"><i class="fa fa-circle"></i>Table components</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-circle"></i>Data Tables<i class="fa fa-angle-down pull-right"></i></a>
                    <ul class="sidebar-submenu">
                      <li><a href="datatable-basic-init.html"><i class="fa fa-circle"></i>Basic Init</a></li>
                      <li><a href="datatable-advance.html"><i class="fa fa-circle"></i>Advance Init</a></li>
                      <li><a href="datatable-styling.html"><i class="fa fa-circle"></i>Styling</a></li>
                      <li><a href="datatable-AJAX.html"><i class="fa fa-circle"></i>AJAX</a></li>
                      <li><a href="datatable-server-side.html"><i class="fa fa-circle"></i>Server Side</a></li>
                      <li><a href="datatable-plugin.html"><i class="fa fa-circle"></i>Plug-in</a></li>
                      <li><a href="datatable-API.html"><i class="fa fa-circle"></i>API</a></li>
                      <li><a href="datatable-data-source.html"><i class="fa fa-circle"></i>Data Sources</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-circle"></i>Extension Data Tables<i class="fa fa-angle-down pull-right"></i></a>
                    <ul class="sidebar-submenu">
                      <li><a href="datatable-ext-autofill.html"><i class="fa fa-circle"></i>Auto Fill</a></li>
                      <li><a href="datatable-ext-basic-button.html"><i class="fa fa-circle"></i>Basic Button</a></li>
                      <li><a href="datatable-ext-col-reorder.html"><i class="fa fa-circle"></i>Column Reorder</a></li>
                      <li><a href="datatable-ext-fixed-header.html"><i class="fa fa-circle"></i>Fixed Header</a></li>
                      <li><a href="datatable-ext-html-5-data-export.html"><i class="fa fa-circle"></i>HTML 5 Export</a></li>
                      <li><a href="datatable-ext-key-table.html"><i class="fa fa-circle"></i>Key Table</a></li>
                      <li><a href="datatable-ext-responsive.html"><i class="fa fa-circle"></i>Responsive</a></li>
                      <li><a href="datatable-ext-row-reorder.html"><i class="fa fa-circle"></i>Row Reorder</a></li>
                      <li><a href="datatable-ext-scroller.html"><i class="fa fa-circle"></i>Scroller</a></li>
                    </ul>
                  </li>
                  <li><a href="jsgrid-table.html"><i class="fa fa-circle"></i>Js Grid Table</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="book"></i><span>Cards</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="basic-card.html"><i class="fa fa-circle"></i>Basic Card</a></li>
                  <li><a href="creative-card.html"><i class="fa fa-circle"></i>Creative Card</a></li>
                  <li><a href="tabbed-card.html"><i class="fa fa-circle"></i>Tabbed Card</a></li>
                  <li><a href="dragable-card.html"><i class="fa fa-circle"></i>Draggable Card</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="sliders"></i><span>Timeline</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="timeline-v-1.html"><i class="fa fa-circle"></i>Timeline 1</a></li>
                  <li><a href="timeline-v-2.html"><i class="fa fa-circle"></i>Timeline 2</a></li>
                  <li><a href="timeline-small.html"><i class="fa fa-circle"></i>Timeline 3</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="bar-chart"></i><span>Charts</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="chart-google.html"><i class="fa fa-circle"></i>Google Chart</a></li>
                  <li><a href="chart-sparkline.html"><i class="fa fa-circle"></i>sparkline chart</a></li>
                  <li><a href="chart-flot.html"><i class="fa fa-circle"></i>Flot Chart</a></li>
                  <li><a href="chart-knob.html"><i class="fa fa-circle"></i>Knob Chart</a></li>
                  <li><a href="chart-morris.html"><i class="fa fa-circle"></i>Morris Chart</a></li>
                  <li><a href="chartjs.html"><i class="fa fa-circle"></i>chatjs Chart</a></li>
                  <li><a href="chartist.html"><i class="fa fa-circle"></i>chartist Chart</a></li>
                  <li><a href="chart-peity.html"><i class="fa fa-circle"></i>Peity Chart</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="map"></i><span>Maps</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="map-js.html"><i class="fa fa-circle"></i>Maps JS</a></li>
                  <li><a href="vector-map.html"><i class="fa fa-circle"></i>Vector Maps</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="printer"></i><span>Email Templates</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="#"><i class="fa fa-circle"></i>Basic<i class="fa fa-angle-down pull-right"></i></a>
                    <ul class="sidebar-submenu">
                      <li><a href="basic-template.html" target="_blank"><i class="fa fa-circle"></i>Basic Email</a></li>
                      <li><a href="email-header.html" target="_blank"><i class="fa fa-circle"></i>Basic With Header</a></li>
                    </ul>
                  </li>
                </ul> -->
                <!-- <ul class="sidebar-submenu">
                  <li><a href="#"><i class="fa fa-circle"></i>Ecommerce<i class="fa fa-angle-down pull-right"></i></a>
                    <ul class="sidebar-submenu">
                      <li><a href="template-email.html" target="_blank"><i class="fa fa-circle"></i>Email Template</a></li>
                      <li><a href="template-email-2.html" target="_blank"><i class="fa fa-circle"></i>Email Template 2</a></li>
                      <li><a href="ecommerce-templates.html" target="_blank"><i class="fa fa-circle"></i>Ecommerce Email</a></li>
                      <li><a href="email-order-success.html" target="_blank"><i class="fa fa-circle"></i>Order Success </a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="git-pull-request"></i><span>Editors</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="summernote.html"><i class="fa fa-circle"></i>Summer Note</a></li>
                  <li><a href="ckeditor.html"><i class="fa fa-circle"></i>CK editor</a></li>
                  <li><a href="simple-MDE.html"><i class="fa fa-circle"></i>MDE editor</a></li>
                  <li><a href="ace-code-editor.html"><i class="fa fa-circle"></i>ACE code editor</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="users"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="user-profile.html"><i class="fa fa-circle"></i>Users Profile</a></li>
                  <li><a href="edit-profile.html"><i class="fa fa-circle"></i>Users Edit</a></li>
                  <li><a href="user-cards.html"><i class="fa fa-circle"></i>Users Cards</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="calendar"></i><span>Calender</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="calendar.html"><i class="fa fa-circle"></i>Full Calender Basic</a></li>
                  <li><a href="calendar-event.html"><i class="fa fa-circle"></i>Full Calender Events</a></li>
                  <li><a href="calendar-advanced.html"><i class="fa fa-circle"></i>Full Calender Advance</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="internationalization.html"><i data-feather="aperture"></i><span>Internationalization</span></a></li>
              <li><a class="sidebar-header" href="#"><i data-feather="image"></i><span>Gallery</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="gallery.html"><i class="fa fa-circle"></i>Gallery Grid</a></li>
                  <li><a href="gallery-with-description.html"><i class="fa fa-circle"></i>Gallery Grid with Desc</a></li>
                  <li><a href="gallery-masonry.html"><i class="fa fa-circle"></i>Masonry Gallery</a></li>
                  <li><a href="masonry-gallery-with-disc.html"><i class="fa fa-circle"></i>Masonry Gallery Desc</a></li>
                  <li><a href="gallery-hover.html"><i class="fa fa-circle"></i>Hover Effects</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="mail"></i><span>Email</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="email-application.html"><i class="fa fa-circle"></i>Email App</a></li>
                  <li><a href="email-compose.html"><i class="fa fa-circle"></i>Email Compose</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="edit"></i><span> Blog</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="blog.html"><i class="fa fa-circle"></i>Blog Details</a></li>
                  <li><a href="blog-single.html"><i class="fa fa-circle"></i>Blog Single</a></li>
                  <li><a href="add-post.html"><i class="fa fa-circle"></i>Add Post</a></li>
                </ul>
              </li> -->
              <li><a class="sidebar-header" href="#"><i data-feather="message-square"></i><span>Chat</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="chat.php"><i class="fa fa-circle"></i>Messages</a></li>
                  <!-- <li><a href="chat-video.html"><i class="fa fa-circle"></i>Video chat</a></li> -->
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="search"></i><span>Search</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="search.php"><i class="fa fa-circle"></i>Search</a></li>
                  <!-- <li><a href="chat-video.html"><i class="fa fa-circle"></i>Video chat</a></li> -->
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="shopping-bag"></i><span>Payment</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="payment-details.php"><i class="fa fa-circle"></i>Payment</a></li>
                  <!-- <li><a href="chat-video.html"><i class="fa fa-circle"></i>Video chat</a></li> -->
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="user-plus"></i><span>Preferences</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="preferences.php"><i class="fa fa-circle"></i>Preferences</a></li>
                  <!-- <li><a href="chat-video.html"><i class="fa fa-circle"></i>Video chat</a></li> -->
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="user-plus"></i><span>About Me</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="aboutme.php"><i class="fa fa-circle"></i>About me</a></li>
                  <!-- <li><a href="chat-video.html"><i class="fa fa-circle"></i>Video chat</a></li> -->
                </ul>
              </li>
              <!-- <li><a class="sidebar-header" href="social-app.html"><i data-feather="chrome"></i><span>Social App</span></a></li>
              <li><a class="sidebar-header" href="#"><i data-feather="user-check"></i><span>Job Search</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="job-cards-view.html"><i class="fa fa-circle"></i>Cards view</a></li>
                  <li><a href="job-list-view.html"><i class="fa fa-circle"></i>List View</a></li>
                  <li><a href="job-details.html"><i class="fa fa-circle"></i>Job Details</a></li>
                  <li><a href="job-apply.html"><i class="fa fa-circle"></i>Apply</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="layers"></i><span>Learning</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="learning-list-view.html"><i class="fa fa-circle"></i>Learning List</a></li>
                  <li><a href="learning-detailed.html"><i class="fa fa-circle"></i>Detailed Course </a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="faq.html"><i data-feather="help-circle"></i><span>FAQ</span></a></li>
              <li><a class="sidebar-header" href="knowledgebase.html"><i data-feather="database"></i><span>Knowledgebase</span></a></li>
              <li><a class="sidebar-header" href="support-ticket.html"><i data-feather="headphones"></i><span>Support Ticket</span></a></li>
              <li><a class="sidebar-header" href="to-do.html"><i data-feather="mic"></i><span>To-Do</span></a></li>
              <li><a class="sidebar-header" href="landing-page.html" target="_blank"><i data-feather="navigation-2"></i><span>Landing page</span></a></li>
              <li><a class="sidebar-header" href="#"><i data-feather="shopping-bag"></i><span>Ecommerce</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="product.html"><i class="fa fa-circle"></i>Product</a></li>
                  <li><a href="product-page.html"><i class="fa fa-circle"></i>Product page</a></li>
                  <li><a href="list-products.html"><i class="fa fa-circle"></i>Product list</a></li>
                  <li><a href="payment-details.html"><i class="fa fa-circle"></i>Payment Details</a></li>
                  <li><a href="order-history.html"><i class="fa fa-circle"></i>Order History</a></li>
                  <li><a href="invoice-template.html"><i class="fa fa-circle"></i>Invoice</a></li>
                  <li><a href="cart.html"><i class="fa fa-circle"></i>Cart</a></li>
                  <li><a href="list-wish.html"><i class="fa fa-circle"></i>Wishlist</a></li>
                  <li><a href="checkout.html"><i class="fa fa-circle"></i>Checkout</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="pricing.html"><i data-feather="dollar-sign"></i><span> Pricing</span></a></li>
              <li><a class="sidebar-header" href="sample-page.html"><i data-feather="file"></i><span> Sample page</span></a></li>
              <li><a class="sidebar-header" href="#"><i data-feather="search"></i><span>Search Pages</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="search.html"><i class="fa fa-circle"></i>Search Website</a></li>
                  <li><a href="search-images.html"><i class="fa fa-circle"></i>Search Images</a></li>
                  <li><a href="search-video.html"><i class="fa fa-circle"></i>Search Video</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="alert-octagon"></i><span> Error Page</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="error-400.html" target="_blank"><i class="fa fa-circle"></i>Error 400</a></li>
                  <li><a href="error-401.html" target="_blank"><i class="fa fa-circle"></i>Error 401</a></li>
                  <li><a href="error-403.html" target="_blank"><i class="fa fa-circle"></i>Error 403</a></li>
                  <li><a href="error-404.html" target="_blank"><i class="fa fa-circle"></i>Error 404</a></li>
                  <li><a href="error-500.html" target="_blank"><i class="fa fa-circle"></i>Error 500</a></li>
                  <li><a href="error-503.html" target="_blank"><i class="fa fa-circle"></i>Error 503</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="unlock"></i><span> Authentication</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="login.html" target="_blank"><i class="fa fa-circle"></i>Login Simple</a></li>
                  <li><a href="login-image.html" target="_blank"><i class="fa fa-circle"></i>Login with Bg Image</a></li>
                  <li><a href="login-video.html" target="_blank"><i class="fa fa-circle"></i>Login with Bg video</a></li>
                  <li><a href="signup.html" target="_blank"><i class="fa fa-circle"></i>Register Simple</a></li>
                  <li><a href="signup-image.html" target="_blank"><i class="fa fa-circle"></i>Register with Bg Image</a></li>
                  <li><a href="signup-video.html" target="_blank"><i class="fa fa-circle"></i>Register with Bg video</a></li>
                  <li><a href="unlock.html" target="_blank"><i class="fa fa-circle"></i>Unlock User</a></li>
                  <li><a href="forget-password.html" target="_blank"><i class="fa fa-circle"></i>Forget Password</a></li>
                  <li><a href="reset-password.html" target="_blank"><i class="fa fa-circle"></i>Reset Password</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="#"><i data-feather="briefcase"></i><span>Coming Soon</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="comingsoon.html" target="_blank"><i class="fa fa-circle"></i>Coming Simple</a></li>
                  <li><a href="comingsoon-bg-video.html" target="_blank"><i class="fa fa-circle"></i>Coming with Bg video</a></li>
                  <li><a href="comingsoon-bg-img.html" target="_blank"><i class="fa fa-circle"></i>Coming with Bg Image</a></li>
                </ul>
              </li>
              <li><a class="sidebar-header" href="maintenance.html" target="_blank"><i data-feather="settings"></i><span> Maintenance</span></a></li> -->
            </ul>
          </div>
        </div>
        <!-- Page Sidebar Ends-->
        <!-- Right sidebar Start-->
        <div class="right-sidebar" id="right_side_bar">
          <div class="container p-0">
            <div class="modal-header p-l-20 p-r-20">
              <div class="col-sm-8 p-0">
                <h6 class="modal-title font-weight-bold">FRIEND LIST</h6>
              </div>
              <div class="col-sm-4 text-right p-0"><i class="mr-2" data-feather="settings"></i></div>
            </div>
          </div>
          <div class="friend-list-search mt-0">
            <input type="text" placeholder="search friend"><i class="fa fa-search"></i>
          </div>
          <div class="chat-box">
            <div class="people-list friend-list">
              <ul class="list">
                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/user/1.jpg" alt="">
                  <div class="status-circle online"></div>
                  <div class="about">
                    <div class="name">Vincent Porter</div>
                    <div class="status"> Online</div>
                  </div>
                </li>
                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/user/2.png" alt="">
                  <div class="status-circle away"></div>
                  <div class="about">
                    <div class="name">Ain Chavez</div>
                    <div class="status"> 28 minutes ago</div>
                  </div>
                </li>
                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/user/8.jpg" alt="">
                  <div class="status-circle online"></div>
                  <div class="about">
                    <div class="name">Kori Thomas</div>
                    <div class="status"> Online</div>
                  </div>
                </li>
                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/user/4.jpg" alt="">
                  <div class="status-circle online"></div>
                  <div class="about">
                    <div class="name">Erica Hughes</div>
                    <div class="status"> Online</div>
                  </div>
                </li>
                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/user/5.jpg" alt="">
                  <div class="status-circle offline"></div>
                  <div class="about">
                    <div class="name">Ginger Johnston</div>
                    <div class="status"> 2 minutes ago</div>
                  </div>
                </li>
                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/user/6.jpg" alt="">
                  <div class="status-circle away"></div>
                  <div class="about">
                    <div class="name">Prasanth Anand</div>
                    <div class="status"> 2 hour ago</div>
                  </div>
                </li>
                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/user/7.jpg" alt="">
                  <div class="status-circle online"></div>
                  <div class="about">
                    <div class="name">Hileri Jecno</div>
                    <div class="status"> Online</div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Right sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col">
                  <div class="page-header-left">
                    <h3>User Profile</h3>
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                      <li class="breadcrumb-item">Users</li>
                      <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                  </div>
                </div>
                <!-- Bookmark Start-->
                <div class="col">
                  <div class="bookmark pull-right">
                    <ul>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Calendar"><i data-feather="calendar"></i></a></li>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Mail"><i data-feather="mail"></i></a></li>
                      <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search,,,,,,">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Bookmark Ends-->
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="user-profile">
              <div class="row">
                <!-- user profile first-style start-->
                <div class="col-sm-12">
                  <div class="card hovercard text-center">
                    <div class="cardheader"></div>
                    <div class="user-image">
                      <div class="avatar"><img alt="" src="pic/<?php echo $row['propic']?>"></div>
                      <!-- <div class="icon-wrapper"><i class="icofont icofont-pencil-alt-5"></i></div> -->
                    </div>
                    <div class="info">
                      <div class="row">
                        <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="ttl-info text-left">
                                <h6><i class="fa fa-envelope"></i>   Email</h6><span>Marekjecno@yahoo.com</span>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="ttl-info text-left">
                                <h6><i class="fa fa-calendar"></i>   BOD</h6><span>02 January 1988</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                          <div class="user-designation">
                            <div class="title"><?php  echo $_SESSION ['username'];?> </div>
                            <div class="desc mt-2">designer</div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="ttl-info text-left">
                                <h6><i class="fa fa-phone"></i>   Contact Us</h6><span>India +91 123-456-7890</span>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="ttl-info text-left">
                                <h6><i class="fa fa-location-arrow"></i>   Location</h6><span>B69 Near Schoool Demo Home</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="social-media">
                        <ul class="list-inline">
                          <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                      </div>
                      <!-- <div class="follow">
                        <div class="row">
                          <div class="col-6 text-md-right border-right">
                            <div class="follow-num counter">25869</div><span>Follower</span>
                          </div>
                          <div class="col-6 text-md-left">
                            <div class="follow-num counter">659887</div><span>Following</span>
                          </div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
                <!-- cards -->
                <?php
                
                $sql_abt = "SELECT * FROM `aboutuser` WHERE userID = '$tempId'"; 
                $result = mysqli_query($conn, $sql_abt); 
               $row = mysqli_fetch_array($result);
               
                ?>
                <div class="col-sm-12 col-xl-6">
                <div class="card">
                  <div class="card-header b-t-success">
                    <h5>About Me</h5>
                  </div>
                  <div class="card-body">
                    <p><?php echo $row['aboutme']?>"</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6">
                <div class="card">
                  <div class="card-header b-t-success">
                    <h5>Person im looking for</h5>
                  </div>
                  <div class="card-body">
                    <p><?php echo $row['aboutyou']?></p>
                  </div>
                </div>
              </div>
              <!-- cards end -->
                <!-- user profile first-style end-->
                <!-- user profile second-style start-->
                <!-- <div class="col-sm-12">
                  <div class="card">
                    <div class="profile-img-style">
                      <div class="row">
                        <div class="col-sm-8">
                          <div class="media"><img class="img-thumbnail rounded-circle mr-3" src="../assets/images/user/7.jpg" alt="Generic placeholder image">
                            <div class="media-body align-self-center">
                              <h5 class="mt-0 user-name">JOHAN DIO</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 align-self-center">
                          <div class="float-sm-right"><small>10 Hours ago</small></div>
                        </div>
                      </div>
                      <hr>
                      <p>you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                      <div class="img-container">
                        <div class="my-gallery" id="aniimated-thumbnials" itemscope="">
                          <figure itemprop="associatedMedia" itemscope=""><a href="../assets/images/other-images/profile-style-img3.png" itemprop="contentUrl" data-size="1600x950"><img class="img-fluid rounded" src="../assets/images/other-images/profile-style-img3.png" itemprop="thumbnail" alt="gallery"></a>
                            <figcaption itemprop="caption description">Image caption  1</figcaption>
                          </figure>
                        </div>
                      </div>
                      <div class="like-comment">
                        <ul class="list-inline">
                          <li class="list-inline-item border-right pr-3">
                            <label class="m-0"><a href="#"><i class="fa fa-heart"></i></a>  Like</label><span class="ml-2 counter">2659</span>
                          </li>
                          <li class="list-inline-item ml-2">
                            <label class="m-0"><a href="#"><i class="fa fa-comment"></i></a>  Comment</label><span class="ml-2 counter">569</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- user profile second-style end-->
                <!-- user profile third-style start-->
                <!-- <div class="col-sm-12">
                  <div class="card">
                    <div class="profile-img-style">
                      <div class="row">
                        <div class="col-sm-8">
                          <div class="media"><img class="img-thumbnail rounded-circle mr-3" src="../assets/images/user/7.jpg" alt="Generic placeholder image">
                            <div class="media-body align-self-center">
                              <h5 class="mt-0 user-name">JOHAN DIO</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 align-self-center">
                          <div class="float-sm-right"><small>10 Hours ago</small></div>
                        </div>
                      </div>
                      <hr>
                      <p>you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                      <div class="row mt-4 pictures my-gallery" id="aniimated-thumbnials-2" itemscope="">
                        <figure class="col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/other-images/profile-style-img3.png" itemprop="contentUrl" data-size="1600x950"><img class="img-fluid rounded" src="../assets/images/other-images/profile-style-img.png" itemprop="thumbnail" alt="gallery"></a>
                          <figcaption itemprop="caption description">Image caption  1</figcaption>
                        </figure>
                        <figure class="col-sm-6" itemprop="associatedMedia" itemscope=""><a href="../assets/images/other-images/profile-style-img3.png" itemprop="contentUrl" data-size="1600x950"><img class="img-fluid rounded" src="../assets/images/other-images/profile-style-img.png" itemprop="thumbnail" alt="gallery"></a>
                          <figcaption itemprop="caption description">Image caption  2</figcaption>
                        </figure>
                      </div>
                      <div class="like-comment">
                        <ul class="list-inline">
                          <li class="list-inline-item border-right pr-3">
                            <label class="m-0"><a href="#"><i class="fa fa-heart"></i></a>  Like</label><span class="ml-2 counter">2659</span>
                          </li>
                          <li class="list-inline-item ml-2">
                            <label class="m-0"><a href="#"><i class="fa fa-comment"></i></a>  Comment</label><span class="ml-2 counter">569</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- user profile third-style end-->
                <!-- user profile fourth-style start-->
                <!-- <div class="col-sm-12">
                  <div class="card">
                    <div class="profile-img-style">
                      <div class="row">
                        <div class="col-sm-8">
                          <div class="media"><img class="img-thumbnail rounded-circle mr-3" src="../assets/images/user/7.jpg" alt="Generic placeholder image">
                            <div class="media-body align-self-center">
                              <h5 class="mt-0 user-name">JOHAN DIO</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 align-self-center">
                          <div class="float-sm-right"><small>10 Hours ago</small></div>
                        </div>
                      </div>
                      <hr>
                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source .Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>
                      <div class="like-comment mt-4">
                        <ul class="list-inline">
                          <li class="list-inline-item border-right pr-3">
                            <label class="m-0"><a href="#"><i class="fa fa-heart"></i></a>  Like</label><span class="ml-2 counter">2659</span>
                          </li>
                          <li class="list-inline-item ml-2">
                            <label class="m-0"><a href="#"><i class="fa fa-comment"></i></a>  Comment</label><span class="ml-2 counter">569</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- user profile fourth-style end-->
                <!-- user profile fifth-style start-->
                <!-- <div class="col-sm-12">
                  <div class="card">
                    <div class="profile-img-style">
                      <div class="row">
                        <div class="col-sm-8">
                          <div class="media"><img class="img-thumbnail rounded-circle mr-3" src="../assets/images/user/7.jpg" alt="Generic placeholder image">
                            <div class="media-body align-self-center">
                              <h5 class="mt-0 user-name">JOHAN DIO</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 align-self-center">
                          <div class="float-sm-right"><small>10 Hours ago</small></div>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-lg-12 col-xl-4">
                          <div class="my-gallery" id="aniimated-thumbnials-3" itemscope="">
                            <figure itemprop="associatedMedia" itemscope=""><a href="../assets/images/blog/img.png" itemprop="contentUrl" data-size="1600x950"><img class="img-fluid rounded" src="../assets/images/blog/img.png" itemprop="thumbnail" alt="gallery"></a>
                              <figcaption itemprop="caption description">Image caption  1</figcaption>
                            </figure>
                          </div>
                          <div class="like-comment mt-4 like-comment-sm-mb">
                            <ul class="list-inline">
                              <li class="list-inline-item border-right pr-3">
                                <label class="m-0"><a href="#"><i class="fa fa-heart"></i></a>  Like</label><span class="ml-2 counter">2659</span>
                              </li>
                              <li class="list-inline-item ml-2">
                                <label class="m-0"><a href="#"><i class="fa fa-comment"></i></a>  Comment</label><span class="ml-2 counter">569</span>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-xl-6">
                          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consecteturContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- user profile fifth-style end-->
                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="pswp__bg"></div>
                  <div class="pswp__scroll-wrap">
                    <div class="pswp__container">
                      <div class="pswp__item"></div>
                      <div class="pswp__item"></div>
                      <div class="pswp__item"></div>
                    </div>
                    <div class="pswp__ui pswp__ui--hidden">
                      <div class="pswp__top-bar">
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <div class="pswp__preloader">
                          <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                              <div class="pswp__preloader__donut"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                      </div>
                      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                      <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2018 © Endless All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="../assets/js/counter/jquery.counterup.min.js"></script>
    <script src="../assets/js/counter/counter-custom.js"></script>
    <script src="../assets/js/photoswipe/photoswipe.min.js"></script>
    <script src="../assets/js/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="../assets/js/photoswipe/photoswipe.js"></script>
    <script src="../assets/js/typeahead/handlebars.js"></script>
    <script src="../assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="../assets/js/typeahead/typeahead.custom.js"></script>
    <script src="../assets/js/chat-menu.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <script src="../assets/js/typeahead-search/handlebars.js"></script>
    <script src="../assets/js/typeahead-search/typeahead-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
  </body>
<!-- Copied from http://admin.pixelstrap.com/endless/ltr/user-profile.html by Cyotek WebCopy 1.8.0.652, Friday, April 24, 2020, 6:53:54 AM -->
</html>