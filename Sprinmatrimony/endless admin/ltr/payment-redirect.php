<?php 
include('php/connection.php');
session_start();
$tempId=$_SESSION['id'];
$sql = "SELECT * FROM `package`";  
?>
<!DOCTYPE html>
<html lang="en">
<!-- Copied from http://admin.pixelstrap.com/endless/ltr/payment-details.html by Cyotek WebCopy 1.8.0.652, Friday, April 24, 2020, 6:53:54 AM -->
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
    <link rel="stylesheet" type="text/css" href="../assets/css/datatables.css">
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
                  <li><a href="#"><i data-feather="user"></i>                                    Edit Profile</a></li>
                  <li><a href="#"><i data-feather="mail"></i>                                    Inbox</a></li>
                  <li><a href="#"><i data-feather="lock"></i>                                    Lock Screen</a></li>
                  <li><a href="#"><i data-feather="settings"></i>                                    Settings</a></li>
                  <li><a href="#"><i data-feather="log-out"></i>                                    Logout</a></li>
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
              <div><img class="img-60 rounded-circle" src="../assets/images/user/1.jpg" alt="#">
                <div class="profile-edit"><a href="edit-profile.html" target="_blank"><i data-feather="edit"></i></a></div>
              </div>
              <h6 class="mt-3 f-14">ELANA</h6>
              <p>general manager.</p>
            </div>
            <ul class="sidebar-menu">
              
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
                    <h3>Payment Details</h3>
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                      <li class="breadcrumb-item">Ecommerce</li>
                      <li class="breadcrumb-item active">Payment Details</li>
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
                            <input type="text" placeholder="Search..">
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
          <div class="container-fluid credit-card">
            <div class="row">
              <!-- Individual column searching (text inputs) Starts-->
              <!-- <div class="col-xl-8">
                <div class="card height-equal">
                  <div class="card-header">
                    <h5>Credit card </h5>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-4 text-center"><img class="img-fluid" src="../assets/images/ecommerce/card.png" alt=""></div>
                      <div class="col-md-8">
                        <form class="theme-form mega-form">
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Card number">
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="First Name">
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="date">
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Full Name">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- Individual column searching (text inputs) Ends-->
              <!-- Debit Card Starts-->
              <div class="col-xl-4 col-lg-6 debit-card">
                <div class="card height-equal">
                  <div class="card-header">
                    <h5>Payment Page</h5>
                  </div>
                  <div class="card-body">
                    <form class="theme-form e-commerce-form row" method="POST" action="php/paymentupdate.php">
                      <!-- <div class="form-group col-6 p-r-0">
                        <input class="form-control" type="text" placeholder="Full name here">
                      </div> -->
                      <div class="form-group col-12">
                        <input class="form-control" type="text" id="amt" name="amt" placeholder="Amount">
                      </div>
                      <!-- <div class="form-group col-6 p-r-0">
                        <input class="form-control" type="text" placeholder="CVV number">
                      </div>
                      <div class="form-group col-6">
                        <input class="form-control" type="text" placeholder="CVC">
                      </div>
                      <div class="col-12">
                        <label class="col-form-label p-t-0">Expiration Date</label>
                      </div>
                      <div class="form-group col-6 p-r-0">
                        <select class="form-control" size="1">
                          <option>Select Month</option>
                          <option>Jan</option>
                          <option>Fab</option>
                          <option>March</option>
                          <option>April</option>
                        </select>
                      </div>
                      <div class="form-group col-6">
                        <select class="form-control" size="1">
                          <option>Select Year</option>
                          <option>2015</option>
                          <option>2016</option>
                          <option>2017</option>
                          <option>2018</option>
                          <option>2019</option>
                        </select>
                      </div> -->
                      <div class="col-12">
                        <button class="btn btn-primary-gradien btn-block" id="pay" name="pay" type="submit">Pay</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Debit Card Ends-->
              <!-- COD Starts-->
              <!-- <div class="col-xl-4 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h5>COD</h5>
                  </div>
                  <div class="card-body">
                    <form class="theme-form row">
                      <div class="form-group col-6 p-r-0">
                        <input class="form-control" type="text" placeholder="First Name">
                      </div>
                      <div class="form-group col-6">
                        <input class="form-control" type="text" placeholder="Last name">
                      </div>
                      <div class="form-group col-6 p-r-0">
                        <input class="form-control" type="text" placeholder="Pincode">
                      </div>
                      <div class="form-group col-6">
                        <input class="form-control" type="number" placeholder="Enter mobile number">
                      </div>
                      <div class="form-group col-6 p-r-0">
                        <input class="form-control" type="text" placeholder="State">
                      </div>
                      <div class="form-group col-6">
                        <input class="form-control" type="text" placeholder="City">
                      </div>
                      <div class="form-group col-12">
                        <textarea class="form-control" rows="3" placeholder="Address"></textarea>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary-gradien btn-block" type="button">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div> -->
              <!-- COD Ends-->
              <!-- EMI Starts-->
              <!-- <div class="col-xl-4 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h5>EMI</h5>
                  </div>
                  <div class="card-body">
                    <form class="theme-form row">
                      <div class="form-group col-6 p-r-0">
                        <input class="form-control" type="text" placeholder="First Name">
                      </div>
                      <div class="form-group col-6">
                        <input class="form-control" type="text" placeholder="Last name">
                      </div>
                      <div class="form-group col-6 p-r-0">
                        <input class="form-control" type="text" placeholder="Pincode">
                      </div>
                      <div class="form-group col-6">
                        <select class="form-control" size="1">
                          <option>Bank Name</option>
                          <option>SBI</option>
                          <option>ICICI</option>
                          <option>KOTAK</option>
                          <option>BOB</option>
                        </select>
                      </div>
                      <div class="form-group col-12">
                        <select class="form-control" size="1">
                          <option>Select Card</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                      <div class="form-group col-12">
                        <select class="form-control" size="1">
                          <option>Select Duration</option>
                          <option>2015-2016</option>
                          <option>2016-2017</option>
                          <option>2017-2018</option>
                          <option>2018-2019</option>
                        </select>
                      </div>
                      <div class="form-group col-12">
                        <ul class="payment-opt">
                          <li><img src="../assets/images/ecommerce/mastercard.png" alt=""></li>
                          <li><img src="../assets/images/ecommerce/visa.png" alt=""></li>
                          <li><img src="../assets/images/ecommerce/paypal.png" alt=""></li>
                        </ul>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary-gradien btn-block" type="button">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div0-->
              <!-- EMI Ends-->
              <!-- EMI Starts-->
              <!-- <div class="col-xl-4 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Net Banking</h5>
                  </div>
                  <div class="card-body">
                    <form class="theme-form row">
                      <div class="form-group col-12">
                        <input class="form-control" type="text" placeholder="AC Holder name">
                      </div>
                      <div class="form-group col-12">
                        <input class="form-control" type="text" placeholder="Account number">
                      </div>
                      <div class="form-group col-6 p-r-0">
                        <select class="form-control" size="1">
                          <option>Select Bank</option>
                          <option>SBI</option>
                          <option>ICICI</option>
                          <option>KOTAK</option>
                          <option>BOB</option>
                        </select>
                      </div>
                      <div class="form-group col-6">
                        <input class="form-control" type="text" placeholder="ICFC code">
                      </div>
                      <div class="form-group col-12">
                        <input class="form-control" type="number" placeholder="Enter mobile number">
                      </div>
                      <div class="form-group col-12">
                        <input class="form-control" type="text" placeholder="Other Details">
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary-gradien btn-block" type="button">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div> --> 
              <!-- EMI Ends-->
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
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/typeahead/handlebars.js"></script>
    <script src="../assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="../assets/js/typeahead/typeahead.custom.js"></script>
    <script src="../assets/js/chat-menu.js"></script>
    <script src="../assets/js/height-equal.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <script src="../assets/js/typeahead-search/handlebars.js"></script>
    <script src="../assets/js/typeahead-search/typeahead-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
  </body>
<!-- Copied from http://admin.pixelstrap.com/endless/ltr/payment-details.html by Cyotek WebCopy 1.8.0.652, Friday, April 24, 2020, 6:53:54 AM -->
</html>