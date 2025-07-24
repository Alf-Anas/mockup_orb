<?php
$auth = $_GET['auth'] ?? '';
$status = $_GET['status'] ?? '';
$status_rev = $_GET['status_rev'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/select/bootstrap-select.min.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    <script defer src="../assets/css/color-1.js"></script>
    <script defer src="../assets/css/color-2.js"></script>
    <script defer src="../assets/css/color-3.js"></script>
    <script defer src="../assets/css/color-4.js"></script>
    <script defer src="../assets/css/color-5.js"></script>
    <script defer src="../assets/css/color-6.js"></script>
    <script defer src="../assets/css/responsive.js"></script>
    <script defer src="../assets/css/style.js"></script>
    <link href="../assets/css/color-1.css" rel="stylesheet">
    <link href="../assets/css/color-2.css" rel="stylesheet">
    <link href="../assets/css/color-3.css" rel="stylesheet">
    <link href="../assets/css/color-4.css" rel="stylesheet">
    <link href="../assets/css/color-5.css" rel="stylesheet">
    <link href="../assets/css/color-6.css" rel="stylesheet">
    <link href="../assets/css/responsive.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="loader-index">
        <span></span>
      </div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"></fecolormatrix>
        </filter>
      </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top">
      <i data-feather="chevrons-up"></i>
    </div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper default-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Anything Here..." name="q" title="" autofocus>
                  <div class="spinner-border Typeahead-spinner" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"></div>
              </div>
            </div>
          </form>
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper">
              <a href="index.html">
                <img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt="">
                <img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="">
              </a>
            </div>
            <div class="toggle-sidebar">
              <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
            </div>
          </div>
          <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
            <div class="notification-slider">
             
            </div>
          </div>
          <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
            <ul class="nav-menus">
              <li class="profile-nav onhover-dropdown pe-0 py-0">
                <div class="d-flex profile-media">
                  <img class="b-r-10" src="../assets/images/dashboard/profile.png" alt="">
                  <div class="flex-grow-1">
                    <span>Radzi</span>
                    <p class="mb-0">Admin <i class="middle fa-solid fa-angle-down"></i>
                    </p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li>
                    <a href="login.html">
                      <i data-feather="log-in"></i>
                      <span>Log out</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template"> <div class="ProfileCard u-cf">
																																																	<div class="ProfileCard-avatar">
																																																		<svg
																																																			xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0">
																																																			<path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
																																																			<polygon points="12 15 17 21 7 21 12 15"></polygon>
																																																		</svg>
																																																	</div>
																																																	<div class="ProfileCard-details">
																																																		<div class="ProfileCard-realName">{{name}}</div>
																																																	</div>
																																																</div>
																																															</script>
          <script class="empty-template" type="text/x-handlebars-template"> <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
																																															</script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper default-menu default-menu">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
          <div>
            <div class="logo-wrapper">
              <a href="index.html">
                <img class="img-fluid for-light" src="../assets/images/logo/logo_orb.png" alt="" style="max-height: 35px;"> ORB LOGO
                <img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="">
              </a>
              <div class="back-btn">
                <i class="fa-solid fa-angle-left"></i>
              </div>
              <!--<div class="toggle-sidebar">
                <i class="status_toggle middle sidebar-toggle" data-feather="grid"></i>
              </div>-->
            </div>
            <div class="logo-icon-wrapper">
              <a href="index.html">
                <img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt="">
              </a>
            </div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow">
                <i data-feather="arrow-left"></i>
              </div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn">
                    <a href="index.html">
                      <img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt="">
                    </a>
                    <div class="mobile-back text-end">
                      <span>Back</span>
                      <i class="fa-solid fa-angle-right ps-2" aria-hidden="true"></i>
                    </div>
                  </li>
                  <li class="pin-title sidebar-main-title">
                    <div>
                      <h6>Pinned</h6>
                    </div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <!--<h6 class="lan-1">General</h6>-->
                    </div>
                  </li>
                  <li class="sidebar-list">
                    <i class="fa-solid fa-thumbtack"></i>
                    <!--<label class="badge badge-light-primary">13</label>-->
                    <a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-home"></use>
                      </svg>
                      <span class="">Tata Laksana </span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li>
                        <a href="index.html">Dashboard</a>
                      </li>
                      <li>
                        <a href="chart-widget.html">Submenu-1</a>
                      </li>
                       <li>
                        <a href="chart-widget.html">Submenu-2</a>
                      </li>
                       <li>
                        <a href="#.html">Digital Information</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <i class="fa-solid fa-thumbtack"></i>
                    <a class="sidebar-link sidebar-title active" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-widget"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-widget"></use>
                      </svg>
                      <span class="">Reformasi Birokrasi</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li>
                        <a href="general-widget.html">Dashboard</a>
                      </li>
                      <li>
                        <a href="chart-widget.html">Submenu-1</a>
                      </li>
                       <li>
                        <a href="chart-widget.html">Submenu-2</a>
                      </li>
                       <li>
                        <a href="chart-widget.html">Digital Information</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <i class="fa-solid fa-thumbtack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-layout"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-layout"></use>
                      </svg>
                      <span class="">Analisis Jabatan</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li>
                        <a href="">Dashboard</a>
                      </li>
                      <li>
                        <a href="anjab_createnew.php">Penyusunan Analisa Jabatan</a>
                      </li>
                       <li>
                        <a href="chart-widget.html">Submenu-2</a>
                      </li>
                       <li>
                        <a href="#.html">Digital Information</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                    <i class="fa-solid fa-thumbtack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="../assets/svg/icon-sprite.svg#stroke-reports"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#fill-reports"></use>
                      </svg>
                      <span class="">Kelembagaan</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li>
                        <a href="general-widget.html">Dashboard</a>
                      </li>
                      <li>
                        <a href="kelembagaan_createnew.html">Form Evaluasi</a>
                      </li>
                       <li>
                        <a href="kelembagaan_blog-details.html">Survey Evaluasi</a>
                      </li>
                       <li>
                        <a href="chart-widget.html">Digital Information</a>
                      </li>
                    </ul>
                  </li>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6">
                  <h3> Tambah Form</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="dashboard-11.html">
                        <svg class="stroke-icon">
                          <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg>
                      </a>
                    </li>
                    <li class="breadcrumb-item">Analisa Jabatan</li>
                    <li class="breadcrumb-item"><a href=anjab_quisioner.html>Penyusunan Analisa Jabatan</a></li>
                    <li class="breadcrumb-item active">Tambah Form </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card create-project-form custom-input">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12" >
                        <span style="font-size: 20px;"><strong>Form Info Jabatan</strong></span><br /><br />

                      <?php if ($auth == '0'): ?>
                        <form class="row g-3 needs-validation" novalidate="">
                           <div class="col-md-6">
                            <label class="form-label" for="projectName">Nama Jabatan</label>
                            <select class="form-select" id="projectPriority" required="">
                              <option selected="" disabled="" value="">Choose...</option>
                              <option>A</option>
                              <option>B</option>
                            </select>
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="projectName">Kode Jabatan</label>
                            <input class="form-control" id="projectName" type="text" placeholder="Kode Jabatan" required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="col-md-12">
                            <label class="form-label" for="projectName">Unit Kerja</label>
                          </div>
                          <div class="col-md-6">
                            <table class="table">
                              <tr>
                                <td>A. JPT Utama</td>
                                <td><input class="form-control" id="projectName" type="text" placeholder="" required=""></td>
                              </tr>
                              <tr>
                                <td>B. JPT Madya</td>
                                <td><input class="form-control" id="projectName" type="text" placeholder="" value="Sekda DKI Jakarta"></td>
                              </tr>
                              <tr>
                                <td>C. JPT Pratama</td>
                                <td> <select class="form-select" aria-label="Select parent category">
                                      <option selected="">All</option>
                                      <option value="1">PUPR SDA</option>
                                      <option value="2">PUPR Bina Marga</option>
                                    </select>
                                </td>
                              </tr>
                              <tr>
                                <td>D. Administrator</td>
                                <td><input class="form-control" id="projectName" type="text" placeholder="" required=""></td>
                              </tr>
                              <tr>
                                <td>E. Pengawas</td>
                                <td><select class="form-select" aria-label="Select parent category">
                                      <option selected="">Nama Jabatan</option>
                                      <option value="1">PUPR SDA</option>
                                      <option value="2">PUPR Bina Marga</option>
                                    </select></td>
                              </tr>
                              <tr>
                                <td>F. Pelaksana</td>
                                <td><input class="form-control" id="projectName" type="text" placeholder="" required=""></td>
                              </tr>
                              <tr>
                                <td>G. Jabatan Fungsional</td>
                                <td><input class="form-control" id="projectName" type="text" placeholder="" required=""></td>
                              </tr>
                            </table>
                          </div>
                        
                          <div class="col-12">
                            <label class="form-label" for="validationTextarea">Ikhtisar Jabatan</label>
                            <textarea class="form-control" id="validationTextarea" placeholder="Enter quisionare details" required="" rows="4"></textarea>
                            <div class="invalid-feedback">Please enter ikhtisar jabatan</div>
                          </div>
                          
                       

                        </form>

                      <?php else: ?>
                        <form class="row g-3 needs-validation" novalidate="">
                           <div class="col-md-6">
                            <label class="form-label" for="projectName">Nama Jabatan</label>
                            <select class="form-select" id="projectPriority" required="">
                              <option selected="" disabled="" value="">Choose...</option>
                              <option selected="selected">PJLP PUPR SDA</option>
                              <option>B</option>
                            </select>
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="projectName">Kode Jabatan</label>
                            <input class="form-control" id="projectName" type="text" placeholder="Kode Jabatan" value="AAAAA">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="col-md-12">
                            <label class="form-label" for="projectName">Unit Kerja</label>
                          </div>
                          <div class="col-md-6">
                            <table class="table">
                              <tr>
                                <td>A. JPT Utama</td>
                                <td><input class="form-control" id="projectName" type="text" placeholder="" value="BBBB"></td>
                              </tr>
                              <tr>
                                <td>B. JPT Madya</td>
                                <td><input class="form-control" id="projectName" type="text" placeholder="" value="Sekda DKI Jakarta"></td>
                              </tr>
                              <tr>
                                <td>C. JPT Pratama</td>
                                <td> <select class="form-select" aria-label="Select parent category">
                                      <option selected="">All</option>
                                      <option value="1" selected="selected">PUPR SDA</option>
                                      <option value="2">PUPR Bina Marga</option>
                                    </select>
                                </td>
                              </tr>
                              <tr>
                                <td>D. Administrator</td>
                                <td><input class="form-control" id="projectName" type="text" placeholder="" required="" value="CCC"></td>
                              </tr>
                              <tr>
                                <td>E. Pengawas</td>
                                <td><select class="form-select" aria-label="Select parent category">
                                      <option selected="">Nama Perangkat Daerah</option>
                                      <option value="1" selected="selected">PUPR SDA</option>
                                      <option value="2">PUPR Bina Marga</option>
                                    </select></td>
                              </tr>
                              <tr>
                                <td>F. Pelaksana</td>
                                <td><input class="form-control" id="projectName" type="text" placeholder="" required="" value="DDD"></td>
                              </tr>
                              <tr>
                                <td>G. Jabatan Fungsional</td>
                                <td><input class="form-control" id="projectName" type="text" placeholder="" required="" value="EEE"></td>
                              </tr>
                            </table>
                          </div>
                        
                          <div class="col-12">
                            <label class="form-label" for="validationTextarea">Ikhtisar Jabatan</label>
                            <textarea class="form-control" id="validationTextarea" placeholder="Enter quisionare details" required="" rows="4">Details Ikhtisar Jabatan</textarea>
                            <div class="invalid-feedback"></div>
                          </div>
                          
                       

                        </form>
                       <?php endif; ?>
                      </div>
                    </div>
                    <br /> <br /> <br />

                    <!--<div class="row">
                      <div class="col-md-12">
                        <span style="font-size: 20px;"><strong>Form Analisis Beban Kerja</strong></span><br /><br />
                         <div class="col-12">
                            <label class="form-label" for="validationTextarea">Analisis Beban Kerja</label>
                            <textarea class="form-control" id="validationTextarea" placeholder="Enter quisionare details" required="" rows="4">Details Analisis Beban Kerja
                            </textarea>
                            <div class="invalid-feedback">Please enter analisis beban kerja</div>
                          </div>
                      </div>
                    </div>

                    <br /> <br /> <br />

                    <div class="row">
                      <div class="col-md-12">
                        <span style="font-size: 20px;"><strong>Form Informasi Faktor Jabatan</strong></span><br /><br />
                         <div class="col-12">
                            <label class="form-label" for="validationTextarea">Informasi Faktor Jabatan</label>
                            <textarea class="form-control" id="validationTextarea" placeholder="Enter quisionare details" required="" rows="4">Details Informasi Faktor Jabatan
                            </textarea>
                            <div class="invalid-feedback">Please informasi faktor jabatan</div>
                          </div>
                      </div>
                    </div>

                    <br /><hr />-->
                    <?php if ($status == 'review' && $auth==1): ?>
                    <div class="row">
                      <div class="col-md-12">
                        <span style="font-size: 20px;"><strong>Review Kelompok Analisis</strong></span><br /><br />

                          <div class="col-12">
                            <label class="form-label" for="validationTextarea">Review Info Jabatan</label>
                            <textarea class="form-control" id="validationTextarea" placeholder="Enter quisionare details" required="" rows="4">Details Review Informasi Jabatan 
                            </textarea>
                            <div class="invalid-feedback">Please informasi faktor jabatan</div>
                          </div><br /><br />
                          <div class="col-12">
                            <label class="form-label" for="validationTextarea">Review Analisa Beban Kerja</label>
                            <textarea class="form-control" id="validationTextarea" placeholder="Enter quisionare details" required="" rows="4">Details Review Analisa Beban Kerja 
                            </textarea>
                            <div class="invalid-feedback">Please informasi faktor jabatan</div>
                          </div><br /><br />
                          <div class="col-12">
                            <label class="form-label" for="validationTextarea">Review Faktor Jabtan</label>
                            <textarea class="form-control" id="validationTextarea" placeholder="Enter quisionare details" required="" rows="4">Details Review Faktor Jabtan
                            </textarea>
                            <div class="invalid-feedback">Please informasi faktor jabatan</div>
                          </div><br /><br />
                      </div>
                    </div>
                  <?php endif; ?>

                  <?php if ($status == 'revisi' && $auth==1): ?>
                    <div class="row">
                      <div class="col-md-12">
                        <span style="font-size: 20px;"><strong>Review Kelompok Analisis</strong></span><br /><br />

                          <div class="col-12">
                            <label class="form-label" for="validationTextarea">Review Info Jabatan</label><br />
                            <p class="badge badge-danger"> Info jabatan kurang lengkap, mohon dilengkapi details: a, b, c, d</p>
                            <div class="invalid-feedback">Please informasi faktor jabatan</div>
                          </div><br /><br />
                          <div class="col-12">
                            <label class="form-label" for="validationTextarea">Review Analisa Beban Kerja</label><br />
                              <p class="badge badge-danger">Detail beban kurang lengkap, mohon dilengkapi details: a, b, c, d</p>
                            <div class="invalid-feedback">Please informasi faktor jabatan</div>
                          </div><br /><br />
                          <div class="col-12">
                            <label class="form-label" for="validationTextarea">Review Faktor Jabtan</label><br />
                            <p class="badge badge-danger">Detail faktor jabatan kurang lengkap, mohon dilengkapi details: a, b, c, d</p>
                            <div class="invalid-feedback">Please informasi faktor jabatan</div>
                          </div><br /><br />
                      </div>
                    </div>
                  <?php endif; ?>




                    <br /> <br /> <br />
                     <?php if ($status != 'review'): ?>
                     <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-primary f-w-500"  data-bs-toggle="modal" data-bs-target="#dashboard8">Submit</a>  
                            <a  class="btn btn-secondary f-w-500" style="margin-left: 10px;" href="#!">Draft</a> 
                           
                        </div>
                      </div>
                    <?php else: ?>
                      <div class="row">
                        <div class="col-md-6">
                            <?php if ($status != 'review'): ?>
                            <a class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#dashboard8">Revisi</a>  
                           <?php endif; ?>

                           <?php if ($status == 'review' && $status_rev=="kaj"): ?>

                            <a class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#dashboard8">Revisi</a>  
                            <a  class="btn btn-success" style="margin-left: 10px;" href="#!">Approve</a> 

                           <?php else: ?>
                             <a  class="btn btn-success" style="margin-left: 10px;" href="#!">Validate</a> 
                           
                           <?php endif; ?>
                        </div>
                      </div>

                      <?php endif; ?> 


                    <div class="modal fade" id="dashboard8" tabindex="-1" aria-labelledby="dashboard8" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                          <div class="modal-content category-popup">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modaldashboard">Apakah Anda Yakin?</h5>
                              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-0 custom-input">
                              <div class="text-start">
                                <div class="p-20">
                                  <form class="row g-3 needs-validation" novalidate="">
                                    <div class="col-md-12">
                                     Data tidak bisa diubah ketika ter-submit
                                     
                                      <div class="invalid-feedback"> Please enter a category name.</div>
                                      <div class="valid-feedback">Looks good!</div>
                                    </div>

                                    <div class="col-md-6 d-flex ">
                                      <button class="btn btn-primary" type="submit">Submit </button>
                                      <button style="margin-left: 10px" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancel </button>
                                    </div>
                                   
                                       
                                    
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
       <!-- footer start--><footer class="footer"><div class="container-fluid"><div class="row"><div class="col-md-12 footer-copyright text-center"><p class="mb-0"> BIRO ORB Jakarta </p></div></div></div></footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../assets/js/scrollbar/simplebar.min.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/sidebar-pin.js"></script>
    <script src="../assets/js/slick/slick.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <script src="../assets/js/header-slick.js"></script>
    <script src="../assets/js/form-validation-custom.js"></script>
    <script src="../assets/js/select/bootstrap-select.min.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/script1.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
  </body>
</html>