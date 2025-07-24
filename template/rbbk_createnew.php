<?php
$auth = $_GET['auth'] ?? '';
$status = $_GET['status'] ?? '';
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
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/select2.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/dropzone.min.css">
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
  <style>

</style>

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
                        <a href="rbbk_createnew.php">Akuntabilitas Kinerja</a>
                      </li>
                       <li>
                        <a href="rbbk_lkip.html">LKIP</a>
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
                  <?php if ($status!= 'review'):?>
                    <h3> Tambah Data</h3>
                  <?php else:?>
                    <h3> Revisi Data</h3>
                  <?php endif;?>

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
                    <li class="breadcrumb-item">RBBK</li>
                    <li class="breadcrumb-item"><a href=rbbk_quisioner.html>Data Akuntabilitas</a></li>
                    <li class="breadcrumb-item active"> <?php if ($status!= 'review'):?>
                    Tambah Data
                  <?php else:?>
                    Revisi Data
                  <?php endif;?></li>
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
                          <div class="col-md-12">
                            <label class="form-label" for="projectPriority">Title</label>

                            <p>
                              <input class="form-control" placeholder="Input Title"  <?php if ($status== 'review'):?> value="Data Akuntabilitas 2024" <?php endif; ?> >
                            </p>
                            <div class="invalid-feedback">Please select a valid priority</div>
                          </div>
                          
                          <div class="col-md-6">
                            <label class="form-label" for="projectPriority">Perangkat Daerah</label>
                             <?php if ($status!= 'review'):?>
                            <p>
                              <select class="form-control">
                                <option>Choose</option>
                                <option>PUPR SDA</option>
                                <option>PUPR Bina Marga</option>
                                <option>PUPR Gedung</option>
                              </select>
                            </p>
                          <?php else: ?>
                            <input class="form-control" style="color: black;" value="PUPR SDA"  disabled="disabled"/>
                             <?php endif; ?> 
                           
                            <!---->
                           
                            <div class="invalid-feedback">Please select a valid priority</div>
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="projectPriority">Visi</label>
                              <select class="form-select">
                                <option>Pilih</option>
                                <option <?php if ($status == 'review'): ?> selected="selected"<?php endif;?> >Jakarta kota maju, lestari dan berbudaya yang warganya terlibat dalam mewujudkan keberadaban, keadilan dan kesejahteraan bagi semua.</option>
                              </select>
                          </div>
                          <br />
                          <br />
                          <br />
                          <br />
                          <div class="col-md-12">
                              <div class="email-wrapper">
                                <div class="theme-form">
                                  <div class="mb-4">
                                    <label class="w-100">Narasi</label>
                                    <div class="toolbar-box">
                                      <div id="toolbar8">
                                        <span class="ql-formats">
                                          <select class="ql-size">
                                            <option value="small">Small</option>
                                            <option selected="">Normal</option>
                                            <option value="large">Large</option>
                                            <option value="huge">Huge</option>
                                          </select>
                                        </span>
                                        <span class="ql-formats">
                                          <button class="ql-bold">Bold</button>
                                          <button class="ql-italic">Italic</button>
                                          <button class="ql-underline">Underline</button>
                                          <button class="ql-strike">Strike</button>
                                          <button class="ql-script" value="sub"></button>
                                          <button class="ql-script" value="super"></button>
                                        </span>
                                        <span class="ql-formats">
                                          <button class="ql-header" value="1"></button>
                                          <button class="ql-header" value="2"></button>
                                        </span>
                                        <span class="ql-formats">
                                          <button class="ql-list" value="ordered">List</button>
                                          <button class="ql-list" value="bullet">Bullet</button>
                                          <button class="ql-indent" value="-1"></button>
                                          <button class="ql-indent" value="+1"></button>
                                        </span>
                                        <span class="ql-formats">
                                          <button class="ql-link">Link</button>
                                          <button class="ql-image">Image</button>
                                          <button class="ql-video">Video</button>
                                          <select class="ql-color"></select>
                                          <select class="ql-background"></select>
                                        </span>
                                        <!-- Add more options here-->
                                        <span class="ql-formats">
                                          <button class="ql-blockquote">Blockquote</button>
                                          <button class="ql-code-block"></button>
                                        </span>
                                        <span class="ql-formats">
                                          <button class="ql-align" value=""></button>
                                          <button class="ql-align" value="center"></button>
                                          <button class="ql-align" value="right"></button>
                                          <button class="ql-align" value="justify"></button>
                                        </span>
                                        <span class="ql-formats">
                                          <button class="ql-clean"></button>
                                        </span>
                                      </div>
                                      <div id="editor8"><?php if ($status == 'review'): ?> 
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                      <?php endif; ?></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                         
                        <hr />
                       
                      <div class="col-12">
                        <form class="row g-3 needs-validation" novalidate="">



                        <!-- form visi -->
                         <table class="table">
                              <tr>
                                <td>No</td>
                                <td style="width: 30%;">Misi</td>
                                <td style="width: 20%;">Indikator</td>
                                <td>Target</td>
                                <td>Realisasi</td>
                                <td>Anggaran</td>
                                <td>Action</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <?php if ($status != 'review'): ?>
                                  <td>
                                    <select class="form-select">
                                          <option>Pilih</option>
                                 <option>Menjadikan Jakarta kota yang aman, sehat, cerdas, berbudaya, dengan memperkuat nilai-nilai keluarga dan memberikan ruang kreativitas melalui kepemimpinan yang melibatkan, menggerakkan dan memanusiakan.</option>
                                      <option>Menjadikan Jakarta kota yang memajukan kesejahteraan umum melalui terciptanya lapangan kerja, kestabilan dan keterjangkauan kebutuhan pokok, meningkatnya keadilan sosial, percepatan pembangunan infrastruktur, kemudahan investasi dan berbisnis, serta perbaikan pengelolaan tata ruang.</option>
                                      <option>Menjadikan Jakarta tempat wahana aparatur negara yang berkarya, mengabdi, melayani, serta menyelesaikan berbagai permasalahan kota dan warga, secara efektif, meritokratis dan berintegritas.</option>
                                      <option>Menjadikan Jakarta kota yang lestari, dengan pembangunan dan tata kehidupan yang memperkuat daya dukung lingkungan dan sosial.</option>
                                      <option>Menjadikan Jakarta ibukota yang dinamis sebagai simpul kemajuan Indonesia yang bercirikan keadilan, kebangsaan dan kebhinekaan.</option>
                                  </select>
                                </td>
                                  <td>
                                    <select class="form-select" id="mySelect">
                                      <option>Pilih</option>
                                      <option value="1">Indeks Kota Layak Huni</option>
                                      <option value="2">Persentase pemenuhan layanan dasar perkotaan</option>
                                      <option value="3">Indikator 3</option>
                                  </select>
                                  </td>
                                  <td><span id="target"></span></td>
                                  <td><input class="form-control" id="projectName" type="text" placeholder="Realisasi" required=""></td>
                                  <td>
                                    <input class="form-control" id="projectName" type="text" placeholder="Anggaran" required="">
                                  </td>
                                <?php else:?>
                                  <td><select class="form-select">
                                    <option>Pilih</option>
                                 <option selected="seelcted">Menjadikan Jakarta kota yang aman, sehat, cerdas, berbudaya, dengan memperkuat nilai-nilai keluarga dan memberikan ruang kreativitas melalui kepemimpinan yang melibatkan, menggerakkan dan memanusiakan.</option>
                                      <option>Menjadikan Jakarta kota yang memajukan kesejahteraan umum melalui terciptanya lapangan kerja, kestabilan dan keterjangkauan kebutuhan pokok, meningkatnya keadilan sosial, percepatan pembangunan infrastruktur, kemudahan investasi dan berbisnis, serta perbaikan pengelolaan tata ruang.</option>
                                      <option>Menjadikan Jakarta tempat wahana aparatur negara yang berkarya, mengabdi, melayani, serta menyelesaikan berbagai permasalahan kota dan warga, secara efektif, meritokratis dan berintegritas.</option>
                                      <option>Menjadikan Jakarta kota yang lestari, dengan pembangunan dan tata kehidupan yang memperkuat daya dukung lingkungan dan sosial.</option>
                                      <option>Menjadikan Jakarta ibukota yang dinamis sebagai simpul kemajuan Indonesia yang bercirikan keadilan, kebangsaan dan kebhinekaan.</option>
                                  </select></td>
                                  <td> <select class="form-select" id="mySelect">
                                      <option>Pilih</option>
                                      <option value="1" selected="selected">Indeks Kota Layak Huni</option>
                                      <option value="2">Persentase pemenuhan layanan dasar perkotaan</option>
                                      <option value="3">Indikator 3</option>
                                  </select></td>
                                  <td><input class="form-control" id="projectName" type="text" placeholder="Target" value="71" disabled="disabled"></td>
                                  <td><input class="form-control" id="projectName" type="text" placeholder="Realisasi" value="78"></td>
                                  <td>
                                    <input class="form-control" id="projectName" type="text" placeholder="Anggaran" value="15.235.527.878.470">
                                  </td>
                                <?php endif;?>
                                <td>
                                  <?php if ($status != 'review'): ?>
                                   <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirm_del"><i class="fa fa-trash"></i> </a>
                                  <?php endif;?>
                                  <?php if ($status == 'review'): ?>
                                    <p class="badge badge-danger">Mohon di cek ulang, realisasi terlalu bagus</p>
                                  <?php endif;?>
                                </td>
                                
                              </tr>
                              <tr id="form2" <?php if ($status != 'review'): ?> style="display: none;" <?php endif; ?>>
                                <td>2</td>
                                <?php if ($status != 'review'): ?>
                                   <td>
                                    <select class="form-select">
                                          <option>Pilih</option>
                                         <option>Menjadikan Jakarta kota yang aman, sehat, cerdas, berbudaya, dengan memperkuat nilai-nilai keluarga dan memberikan ruang kreativitas melalui kepemimpinan yang melibatkan, menggerakkan dan memanusiakan.</option>
                                              <option>Menjadikan Jakarta kota yang memajukan kesejahteraan umum melalui terciptanya lapangan kerja, kestabilan dan keterjangkauan kebutuhan pokok, meningkatnya keadilan sosial, percepatan pembangunan infrastruktur, kemudahan investasi dan berbisnis, serta perbaikan pengelolaan tata ruang.</option>
                                              <option>Menjadikan Jakarta tempat wahana aparatur negara yang berkarya, mengabdi, melayani, serta menyelesaikan berbagai permasalahan kota dan warga, secara efektif, meritokratis dan berintegritas.</option>
                                              <option>Menjadikan Jakarta kota yang lestari, dengan pembangunan dan tata kehidupan yang memperkuat daya dukung lingkungan dan sosial.</option>
                                              <option>Menjadikan Jakarta ibukota yang dinamis sebagai simpul kemajuan Indonesia yang bercirikan keadilan, kebangsaan dan kebhinekaan.</option>
                                    </select>
                                </td>
                                  <td> <select class="form-select" id="mySelect2">
                                      <option>Pilih</option>
                                      <option value="1">Indeks Kota Layak Huni</option>
                                      <option value="2">Persentase pemenuhan layanan dasar perkotaan</option>
                                      <option value="3">Indikator 3</option>
                                  </select></td>
                                  <td><span id="target2"></span></td>
                                  <td><input class="form-control" id="projectName" type="text" placeholder="Realisasi" required=""></td>
                                  <td>
                                    <input class="form-control" id="projectName" type="text" placeholder="Anggaran" required="">
                                  </td>
                                <?php else:?>
                                  <td><select class="form-select">
                                          <option>Pilih</option>
                                         <option>Menjadikan Jakarta kota yang aman, sehat, cerdas, berbudaya, dengan memperkuat nilai-nilai keluarga dan memberikan ruang kreativitas melalui kepemimpinan yang melibatkan, menggerakkan dan memanusiakan.</option>
                                              <option selected="selected">Menjadikan Jakarta kota yang memajukan kesejahteraan umum melalui terciptanya lapangan kerja, kestabilan dan keterjangkauan kebutuhan pokok, meningkatnya keadilan sosial, percepatan pembangunan infrastruktur, kemudahan investasi dan berbisnis, serta perbaikan pengelolaan tata ruang.</option>
                                              <option>Menjadikan Jakarta tempat wahana aparatur negara yang berkarya, mengabdi, melayani, serta menyelesaikan berbagai permasalahan kota dan warga, secara efektif, meritokratis dan berintegritas.</option>
                                              <option>Menjadikan Jakarta kota yang lestari, dengan pembangunan dan tata kehidupan yang memperkuat daya dukung lingkungan dan sosial.</option>
                                              <option>Menjadikan Jakarta ibukota yang dinamis sebagai simpul kemajuan Indonesia yang bercirikan keadilan, kebangsaan dan kebhinekaan.</option>
                                    </select></td>
                                  <td><select class="form-select" id="mySelect2">
                                      <option>Pilih</option>
                                      <option value="1">Indeks Kota Layak Huni</option>
                                      <option value="2">Persentase pemenuhan layanan dasar perkotaan</option>
                                      <option value="3" selected="selected">Indikator 3</option>
                                  </select></td>
                                  <td><input class="form-control" id="projectName" type="text" placeholder="Target" value="77,24" disabled="disabled"></td>
                                  <td><input class="form-control" id="projectName" type="text" placeholder="Realisasi" value="77,66"></td>
                                  <td>
                                    <input class="form-control" id="projectName" type="text" placeholder="Anggaran" value="1.134.124.797.340">
                                  </td>
                                <?php endif;?>
                                <td>
                                  <?php if ($status != 'review'): ?>
                                   <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirm_del"><i class="fa fa-trash"></i> </a>
                                  <?php endif;?>
                                  <?php if ($status == 'review'): ?>
                                    <p class="badge badge-success">approved</p>
                                  <?php endif;?>
                                </td>
                              </tr>
                            </table>
                          
                        <!--
                          <div class="col-md-6">
                            <label class="form-label" for="projectName">Title</label>
                            <input class="form-control" id="projectName" type="text" placeholder="Title" required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <hr />
                          <div class="col-md-6">
                            <label class="form-label" for="projectName">Visi</label>
                            <input class="form-control" id="projectName" type="text" placeholder="Visi" required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="projectName">Misi</label>
                            <input class="form-control" id="projectName" type="text" placeholder="Misi" required="">
                          </div>
                           <div class="col-md-6">
                            <label class="form-label" for="projectName">Indikator</label>
                            <input class="form-control" id="projectName" type="text" placeholder="Indikator" required="">
                          </div>
                           <div class="col-md-6">
                            <label class="form-label" for="projectName">Target</label>
                            <input class="form-control" id="projectName" type="text" placeholder="Target" required="">
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="projectName">Narasi</label>
                            <input class="form-control" id="projectName" type="text" placeholder="Narasi" required="">
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="projectName">Realisasi</label>
                            <input class="form-control" id="projectName" type="text" placeholder="Realisasi" required="">
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="projectName">Anggaran</label>
                            <input class="form-control" id="projectName" type="text" placeholder="Anggaran" required="">
                          </div>
                        -->
                         

                          
                        <!-- end form visi -->
                        
                        <!-- form visi -->
                        <div id ="form3" style="display: none;">
                          <br />
                          <hr />
                        <div class="row">
                          <div class="col-md-6">
                            <label class="form-label" for="projectName">Visi</label>
                            <select class="form-control">
                              <option>Jakarta kota maju, lestari dan berbudaya yang warganya terlibat dalam mewujudkan keberadaban, keadilan dan kesejahteraan bagi semua.</option>
                            </select>
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="projectName">Misi</label>
                            <input class="form-control" id="projectName" type="text" placeholder="Misi" required="">
                          </div>
                          <br />
                           <div class="col-md-6">
                            <label class="form-label" for="projectName">Indikator</label>
                            <input class="form-control" id="projectName" type="text" placeholder="Indikator" required="">
                          </div>
                           <div class="col-md-6">
                            <label class="form-label" for="projectName">Target</label>
                            <input class="form-control" id="projectName" type="text" placeholder="Target" required="">
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="projectName">Narasi</label>
                            <input class="form-control" id="projectName" type="text" placeholder="Narasi" required="">
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="projectName">Realisasi</label>
                            <input class="form-control" id="projectName" type="text" placeholder="Realisasi" required="">
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="projectName">Anggaran</label>
                            <input class="form-control" id="projectName" type="text" placeholder="Anggaran" required="">
                          </div>
                           <div class="col-md-6">
                            <label class="form-label" for="projectName" style="color:white;">Anggaran</label>
                            <p><a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirm_del">Delete Indicator </a></p>
                          </div>
                        </div>
                        </div>
                        <!-- end form visi -->

                         <?php if ($status != 'review'): ?>
                          <div class="row">
                              <div class="col-md-6">
                              <label class="form-label" for="projectName" style="color: white;">Anggaran</label>

                              <p> <a class="btn btn-success" onclick="document.getElementById('form2').removeAttribute('style');">+ Tambah Baris</a></p>
                            </div>
                          </div>
                        <?php endif; ?>
                        <br />
                        <br />
                       <hr />
                          <div class="row">
                            <div class="col-md-6">
                            <a class="btn btn-primary f-w-500"  data-bs-toggle="modal" data-bs-target="#dashboard8">Submit</a>  <a  class="btn btn-secondary f-w-500" style="margin-left: 10px;" href="#!">Draft</a> 
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>

        <div class="modal fade" id="confirm_del" tabindex="-1" aria-labelledby="confirm_del" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                          <div class="modal-content category-popup">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modaldashboard">Apakah Anda Yakin?</h5>
                              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-0 custom-input">
                              <div class="text-start">
                                <div class="p-20">
                                    <div class="col-md-12">
                                  
                                     
                                      <div class="invalid-feedback"> Please enter a category name.</div>
                                      <div class="valid-feedback">Looks good!</div>
                                    </div>

                                    <div class="col-md-6 d-flex ">
                                      <button class="btn btn-primary" onclick="document.getElementById('form2').style.display = 'none'" data-bs-dismiss="modal">Yes </button>
                                      <button style="margin-left: 10px" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancel </button>
                                    </div>
                                   
                                       
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
        

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


       <!-- footer start--><footer class="footer"><div class="container-fluid"><div class="row"><div class="col-md-12 footer-copyright text-center"><p class="mb-0"> BIRO ORB Jakarta </p></div></div></div></footer>
      </div>
    </div>

    <script>
      const select = document.getElementById('mySelect');
      const target = document.getElementById('target');

      select.addEventListener('change', function () {
        const valueMap = {
          "1": "71",
          "2": "77,24",
          "3": "60"
        };

        target.textContent = valueMap[this.value] || "-";
      });

      const select2 = document.getElementById('mySelect2');
      const target2 = document.getElementById('target2');

      select2.addEventListener('change', function () {
        const valueMap = {
          "1": "71",
          "2": "77,24",
          "3": "60"
        };

        target2.textContent = valueMap[this.value] || "-";
      });
    </script>
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
    <script src="../assets/js/dropzone/dropzone.min.js"></script>
    <script src="../assets/js/dropzone/dropzone-script.js"></script>
    <script src="../assets/js/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2/select2-custom.js"></script>
    <script src="../assets/js/editors/quill.js"></script>
    <script src="../assets/js/custom-add-product4.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/script1.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
  </body>
</html>