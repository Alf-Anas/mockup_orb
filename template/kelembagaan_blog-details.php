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
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
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
            <div class="notification-slider"></div>
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
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
          <div>
            <div class="logo-wrapper">
              <a href="index.html">
                <img class="img-fluid for-light" src="../assets/images/logo/logo_orb.png" alt="" style="max-height: 35px;"> ORB LOGO <img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="">
              </a>
              <div class="back-btn">
                <i class="fa-solid fa-angle-left"></i>
              </div>
              <!--<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"></i></div>-->
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
                        <a href="#">Digital Information</a>
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
                        <a href="kelembagaan_quisioner.html">Form Evaluasi</a>
                      </li>
                      <li>
                        <a href="kelembagaan_blog-details.php">Rekap Evaluasi</a>
                      </li>
                      <li>
                        <a href="kelembagaan_form_kematangan.html">Form Kematangan ORG</a>
                      </li>
                      <li>
                        <a href="kelembagaan_survey_kematangan.html">Rekap Kematangan ORG</a>
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
                  <h3><?php if ($auth==0):?> Pengisian <?php else :?> Review <?php endif; ?> Form Evaluasi</h3>
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
                    <li class="breadcrumb-item">Kelembagaan</li>
                    <li class="breadcrumb-item">
                      <a href="kelembagaan_survey.html">Rekap Evaluasi</a>
                    </li>
                    <li class="breadcrumb-item active"><?php if ($auth==0):?> Pengisian <?php else :?> Review <?php endif; ?>  Form Evaluasi</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <div class="blog-single">
                      <div class="blog-box blog-details">
                        <!--<img class="img-fluid w-100" src="../assets/images/logo/page_detail.jpg" alt="blog-main">-->
                        <div class="blog-details">
                          <!--<ul class="blog-social"><li>15 July 2025</li><li><i class="icofont icofont-user"></i>Dinas Perhubungan
                            </li><li><i class="icofont icofont-thumbs-up"></i>Undang-Undang
                            </li><li><i class="icofont icofont-ui-chat"></i>598 Comments
                            </li></ul>-->
                          <h5>Form Perangkat Daerah </h5>
                          <div class="single-blog-content-top">
                            <br />
                            <strong>KETERANGAN</strong>
                            <!--<p>Description dari quisionare <br />
                            To produce aesthetically striking photos, it entails the deft use of light, composition, and subject matter. Technology breakthroughs have made photography more widely available to the public, enabling people to express their creativity and share their own viewpoints with a global audience.They use meticulous attention to details like colour balance, depth of focus, and framing to produce aesthetically stunning photos that arouse feelings and convey tales.
                          </p>-->
                            <table class="table">
                              <tr>
                                <td>Tugas</td>
                                <td>: Diisi tugas- tugas yang tercantum dalam Pergub OTK dan tugas- tugas yang selama tahun 2024 dilaksanakan tetapi tidak termasuk kedalam Pergub OTK</td>
                              </tr>
                              <tr>
                                <td>Uraian Tugas</td>
                                <td>: Diisi uraian tugas yang dilaksanakan dalam rangka pelaksanaan tugas. Untuk pejabat eselon IV agar menggunakan kata kerja "memproses, menyusun, melaksanakan"</td>
                              </tr>
                              <tr>
                                <td>Output</td>
                                <td>: Diisi jenis output pelaksanaan uraian tugas pada tahun 2024. Output harus dilengkapi dengan dokumen fisik untuk masing- masing uraian tugas </td>
                              </tr>
                              <tr>
                                <td>Volume/ Frekuensi</td>
                                <td>: Diisi jumlah berapa kali uraian tugas dalam kolom (4) dilaksanakan dalam Tahun 2024</td>
                              </tr>
                              <tr>
                                <td>Waktu (Menit)</td>
                                <td>: Diisi waktu yang diperlukan dalam melaksanakan setiap uraian tugas</td>
                              </tr>
                              <tr>
                                <td>Total</td>
                                <td>: Volume * Waktu</td>
                              </tr>
                              <tr>
                                <td>Data Pendukung</td>
                                <td>: Diisi link lampiran pendukung dari dokumen output uraian tugas</td>
                              </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                      <hr />
                      <div class="card-header bg-light-primary">
                        <h5>Tugas 1</h5>
                        <p class="f-m-light mt-1">Diisi tugas- tugas yang tercantum dalam Pergub OTK dan tugas- tugas yang selama tahun 2024 dilaksanakan tetapi tidak termasuk kedalam Pergub OTK</p>
                        <div class="card-header-right">
                          
                        </div>
                      </div>
                      <div class="card-body bg-light-primary" style="color: black;">
                        <div class="row">
                          <div class="col-md-12">
                            <label class="form-label" for="projectName">
                              <strong></strong>
                            </label>
                            <select class="form-select">
                              <option>Pilih Tugas</option>
                              <option> Mengoordinasikan, merumuskan dan menyusun kebijakan penyelenggaraan urusan pemerintahan bidang... </option>
                              <option> Mengoordinasikan, merumuskan dan menyusun kebijakan penyelenggaraan urusan pemerintahan bidang... </option>
                            </select>
                            <br />
                            <textarea class="form-control" id="otherNotes1" rows="3">pekerjaan umum dan penataan ruang (pada sub urusan bidang jalan), penyelenggaraan penerangan jalan umum, jaringan utilitas dan infrastruktur transportasi (prasarana dan sarana transportasi darat dan transportasi laut)</textarea>
                          </div>
                        </div>
                        <br />
                            <div class="row">
                              <div class="col-md-7">
                                <div class="card">
                                  <div class="card-header ">
                                    <h5>Uraian Tugas 1 <?php if ($auth != '1'): ?><a class="btn btn-danger pull-right" data-bs-toggle="modal" data-bs-target="#confirm_del">
                                        <i class="fa fa-trash"></i>
                                      </a><?php endif; ?>
                                    </h5>
                                    <br />
                                   <?php if ($auth != '1'): ?><p class="f-m-light mt-1">Diisi uraian tugas yang dilaksanakan dalam rangka pelaksanaan tugas. Untuk pejabat eselon IV agar menggunakan kata kerja "memproses, menyusun, melaksanakan"</p><?php endif; ?>
                                  </div>
                                  <div class="card-body" style="color: black;"> <?php if ($auth != '1'): ?> <br />
                                    <br /> <?php endif;?> <div class="row">
                                      <div class="col-md-3" style="margin-bottom: 30px"> Uraian </div>
                                      <div class="col-md-9" style="margin-bottom: 10px">
                                        <select class="form-select" id="mySelect">
                                          <option>Pilih Uraian Tugas</option>
                                          <option value="1">Memeriksa dan memperbaiki Notulensi dan atau Nodin pembahasan tim pertimbangan penetapan Nama Jalan, Taman dan Bangunan Umum</option>
                                          <option value="2"> Memeriksa dan memperbaiki Notulensi dan atau Nodin Pembahasan Pembangunan Jalan Tol Ir. Wiyoto Wiyono, M.Sc Section Harbour Road II Ruas Ancol Pluit (Elevated) pada Trase Jalan Lodan Timur (Pintu Gerbang Utama Ancol Barat) </option>
                                        </select>
                                      </div>
                                      <div class="col-md-3" style="margin-bottom: 30px"> Output </div>
                                      <div class="col-md-9">
                                        <input class="form-control" id="targetOutput" type="text" placeholder="Output" value="">
                                      </div>
                                      <div class="col-md-3" style="margin-bottom: 30px"> Volume/Frekuensi </div>
                                      <div class="col-md-9">
                                        <input class="form-control" id="targetVol" type="text" placeholder="Volume" value="">
                                      </div>
                                      <div class="col-md-3" style="margin-bottom: 30px"> Waktu(Menit) </div>
                                      <div class="col-md-9">
                                        <input class="form-control" id="targetWaktu" type="text" placeholder="Waktu" value="">
                                      </div>
                                      <div class="col-md-3" style="margin-bottom: 30px"> Total </div>
                                      <div class="col-md-9">
                                        <input class="form-control" id="targetTotal" type="text" placeholder="Total" value="">
                                      </div>
                                      <div class="col-md-3"> Data Pendukung </div>
                                      <div class="col-md-9">
                                        <input class="form-control" id="projectName" type="text" placeholder="Data Pendukung" value="https://drive.google.com">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="card">
                                  <div class="card-header ">
                                    <h5>Uraian Tugas 2 <?php if ($auth != '1'): ?> <a class="btn btn-danger pull-right" data-bs-toggle="modal" data-bs-target="#confirm_del">
                                        <i class="fa fa-trash"></i> <?php endif; ?>
                                      </a>
                                    </h5>
                                    <br />
                                    <?php if ($auth != '1'): ?><p class="f-m-light mt-1">Diisi uraian tugas yang dilaksanakan dalam rangka pelaksanaan tugas. Untuk pejabat eselon IV agar menggunakan kata kerja "memproses, menyusun, melaksanakan"</p><?php endif; ?>
                                  </div>
                                  <div class="card-body" style="color: black;"> <?php if ($auth != '1'): ?> <br />
                                    <br /> <?php endif;?> <div class="row">
                                      <div class="col-md-3" style="margin-bottom: 30px"> Uraian </div>
                                      <div class="col-md-9" style="margin-bottom: 10px">
                                        <select class="form-select" id="mySelect">
                                          <option>Pilih Uraian Tugas</option>
                                          <option value="1">Memeriksa dan memperbaiki Notulensi dan atau Nodin pembahasan tim pertimbangan penetapan Nama Jalan, Taman dan Bangunan Umum</option>
                                          <option value="2"> Memeriksa dan memperbaiki Notulensi dan atau Nodin Pembahasan Pembangunan Jalan Tol Ir. Wiyoto Wiyono, M.Sc Section Harbour Road II Ruas Ancol Pluit (Elevated) pada Trase Jalan Lodan Timur (Pintu Gerbang Utama Ancol Barat) </option>
                                        </select>
                                      </div>
                                      <div class="col-md-3" style="margin-bottom: 30px"> Output </div>
                                      <div class="col-md-9">
                                        <input class="form-control" id="targetOutput" type="text" placeholder="Output" value="">
                                      </div>
                                      <div class="col-md-3" style="margin-bottom: 30px"> Volume/Frekuensi </div>
                                      <div class="col-md-9">
                                        <input class="form-control" id="targetVol" type="text" placeholder="Volume" value="">
                                      </div>
                                      <div class="col-md-3" style="margin-bottom: 30px"> Waktu(Menit) </div>
                                      <div class="col-md-9">
                                        <input class="form-control" id="targetWaktu" type="text" placeholder="Waktu" value="">
                                      </div>
                                      <div class="col-md-3" style="margin-bottom: 30px"> Total </div>
                                      <div class="col-md-9">
                                        <input class="form-control" id="targetTotal" type="text" placeholder="Total" value="">
                                      </div>
                                      <div class="col-md-3"> Data Pendukung </div>
                                      <div class="col-md-9">
                                        <input class="form-control" id="projectName" type="text" placeholder="Data Pendukung" value="https://drive.google.com">
                                      </div>
                                    </div>
                                  </div>
                                </div> <?php if ($auth != '1'): ?> <a class="btn btn-success" href="#!" style="margin-bottom:10px" onclick="document.getElementById('form2').style.display = 'block'">+ Tambah Uraian Tugas</a> <?php endif;?>
                              </div>
                              <?php if ($auth == '1'): ?>
                                <div class="col-md-5">
                                  <div class="card">
                                    <div class="card-header bg-light-warning">
                                      <h5>Review Tugas 1 

                                      </h5>
                                      <br />
                                      <p class="f-m-light mt-1" style="color:white"></p>
                                    </div>
                                    <div class="card-body bg-light-warning" style="color: black;"> <?php if ($auth != '1'): ?> <br />
                                      <br /> <?php endif;?> <div class="row">
                                        <div class="col-md-3" style="margin-bottom: 30px"> Uraian </div>
                                        <div class="col-md-9" style="margin-bottom: 10px">
                                          <select class="form-select" id="mySelect">
                                            <option>Pilih Status</option>
                                            <option value="1">Yes</option>
                                            <option value="2"> No </option>
                                          </select>
                                        </div>
                                        <div class="col-md-3" style="margin-bottom: 30px"> Output </div>
                                        <div class="col-md-9">
                                          <input class="form-control" id="targetOutput" type="text" placeholder="Review Output" value="">
                                        </div>
                                        <div class="col-md-3" style="margin-bottom: 30px"> Volume </div>
                                        <div class="col-md-9">
                                           <select class="form-select">
                                              <option>Review Volume</option>
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3" style="margin-bottom: 30px"> Waktu(Menit) </div>
                                        <div class="col-md-9">
                                            <select class="form-select">
                                              <option>Review Waktu</option>
                                              <option>60</option>
                                              <option>120</option>
                                              <option>240</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3" style="margin-bottom: 30px"> Total </div>
                                        <div class="col-md-9">
                                          <input class="form-control" id="targetTotal" type="text" placeholder="Review Total" value="">
                                        </div>
                                        <div class="col-md-3"> Data Pendukung </div>
                                        <div class="col-md-9">
                                          <input class="form-control" id="projectName" type="text" placeholder=" Review Data Pendukung" value="">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-header bg-light-warning">
                                      <h5>Review Tugas 2 <?php if ($auth != '1'): ?><a class="btn btn-danger pull-right" data-bs-toggle="modal" data-bs-target="#confirm_del">
                                          <i class="fa fa-trash"></i>
                                        </a><?php endif; ?>
                                      </h5>
                                      <br />
                                      
                                    </div>
                                    <div class="card-body bg-light-warning" style="color: black;"> <?php if ($auth != '1'): ?> <br />
                                      <br /> <?php endif;?> <div class="row">
                                        <div class="col-md-3" style="margin-bottom: 30px"> Uraian </div>
                                        <div class="col-md-9" style="margin-bottom: 10px">
                                          <select class="form-select" id="mySelect">
                                            <option>Pilih Status</option>
                                            <option value="1">Yes</option>
                                            <option value="2"> No </option>
                                          </select>
                                        </div>
                                        <div class="col-md-3" style="margin-bottom: 30px"> Output </div>
                                        <div class="col-md-9">
                                          <input class="form-control" id="targetOutput" type="text" placeholder="Review Output" value="">
                                        </div>
                                        <div class="col-md-3" style="margin-bottom: 30px"> Volume </div>
                                        <div class="col-md-9">
                                           <select class="form-select">
                                              <option>Review Volume</option>
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3" style="margin-bottom: 30px"> Waktu(Menit) </div>
                                        <div class="col-md-9">
                                            <select class="form-select">
                                              <option>Review Waktu</option>
                                              <option>60</option>
                                              <option>120</option>
                                              <option>240</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3" style="margin-bottom: 30px"> Total </div>
                                        <div class="col-md-9">
                                          <input class="form-control" id="targetTotal" type="text" placeholder="Review Total" value="">
                                        </div>
                                        <div class="col-md-3"> Data Pendukung </div>
                                        <div class="col-md-9">
                                          <input class="form-control" id="projectName" type="text" placeholder=" Review Data Pendukung" value="">
                                        </div>
                                      </div>
                                    </div>
                                    <?php if ($auth != '1'): ?> <a class="btn btn-success" href="#!" style="margin-bottom:10px" onclick="document.getElementById('form2').style.display = 'block'">+ Tambah Uraian Tugas</a> <?php endif;?>
                                </div>
                              <?php endif; ?>
                            </div>
                            <br />  
                            <br />
  
                            <br />
                             <?php if ($status == 'revisi'): ?> <div class="col-md-5">
                                <span class="badge badge-danger" style="font-size: 15px;">120 Menit Terlalu Lama. Tolong kurangi jadi 60 Menit</span>
                              </div> <?php endif; ?> </div>

                      </div>
                    <hr />

                    <div class="card-header bg-light-primary">
                      <h5>Tugas 2</h5>
                      <p class="f-m-light mt-1">Diisi tugas- tugas yang tercantum dalam Pergub OTK dan tugas- tugas yang selama tahun 2024 dilaksanakan tetapi tidak termasuk kedalam Pergub OTK</p>
                      <div class="card-header-right">
                       
                      </div>
                    </div>
                    <div class="card-body bg-light-primary" style="color: black;">
                      <div class="row">
                        <div class="col-md-12">
                          <label class="form-label" for="projectName">
                            <strong></strong>
                          </label>
                          <select class="form-select">
                            <option>Pilih Tugas</option>
                            <option> Mengoordinasikan, merumuskan dan menyusun kebijakan penyelenggaraan urusan pemerintahan bidang... </option>
                            <option> Mengoordinasikan, merumuskan dan menyusun kebijakan penyelenggaraan urusan pemerintahan bidang... </option>
                          </select>
                          <br />
                          <textarea class="form-control" id="otherNotes1" rows="3">pekerjaan umum dan penataan ruang (pada sub urusan bidang jalan), penyelenggaraan penerangan jalan umum, jaringan utilitas dan infrastruktur transportasi (prasarana dan sarana transportasi darat dan transportasi laut)</textarea>
                        </div>
                      </div>
                      <br />
                      <div class="row">
                        <div class="col-md-7">
                          <div class="card">
                            <div class="card-header ">
                              <h5>Uraian Tugas 3 <?php if($auth!="1"): ?> <a class="btn btn-danger pull-right" data-bs-toggle="modal" data-bs-target="#confirm_del">
                                  <i class="fa fa-trash"></i>
                                </a><?php endif; ?>
                              </h5>
                              <br />
                              <?php if($auth!="1"): ?> <p class="f-m-light mt-1">Diisi uraian tugas yang dilaksanakan dalam rangka pelaksanaan tugas. Untuk pejabat eselon IV agar menggunakan kata kerja "memproses, menyusun, melaksanakan"</p><?php endif; ?>
                            </div>
                            <div class="card-body" style="color: black;"> <?php if ($auth != '1'): ?> <br />
                              <br /> <?php endif;?> <div class="row">
                                <div class="col-md-3" style="margin-bottom: 30px"> Uraian </div>
                                <div class="col-md-9" style="margin-bottom: 10px">
                                  <select class="form-select" id="mySelect">
                                    <option>Pilih Uraian Tugas</option>
                                    <option value="1">Memeriksa dan memperbaiki Notulensi dan atau Nodin pembahasan tim pertimbangan penetapan Nama Jalan, Taman dan Bangunan Umum</option>
                                    <option value="2"> Memeriksa dan memperbaiki Notulensi dan atau Nodin Pembahasan Pembangunan Jalan Tol Ir. Wiyoto Wiyono, M.Sc Section Harbour Road II Ruas Ancol Pluit (Elevated) pada Trase Jalan Lodan Timur (Pintu Gerbang Utama Ancol Barat) </option>
                                  </select>
                                </div>
                                <div class="col-md-3" style="margin-bottom: 30px"> Output </div>
                                <div class="col-md-9">
                                  <input class="form-control" id="targetOutput" type="text" placeholder="Output" value="">
                                </div>
                                <div class="col-md-3" style="margin-bottom: 30px"> Volume/Frekuensi </div>
                                <div class="col-md-9">
                                  <input class="form-control" id="targetVol" type="text" placeholder="Volume" value="">
                                </div>
                                <div class="col-md-3" style="margin-bottom: 30px"> Waktu(Menit) </div>
                                <div class="col-md-9">
                                  <input class="form-control" id="targetWaktu" type="text" placeholder="Waktu" value="">
                                </div>
                                <div class="col-md-3" style="margin-bottom: 30px"> Total </div>
                                <div class="col-md-9">
                                  <input class="form-control" id="targetTotal" type="text" placeholder="Total" value="">
                                </div>
                                <div class="col-md-3"> Data Pendukung </div>
                                <div class="col-md-9">
                                  <input class="form-control" id="projectName" type="text" placeholder="Data Pendukung" value="https://drive.google.com">
                                </div>
                              </div>
                            </div>
                          </div> 
                        </div>
                         <?php if ($auth==1): ?>
                        <div class="col-md-5">
                          <div class="card">
                            <div class="card-header bg-light-warning">
                                        <h5>Review Tugas 3

                                        </h5>
                                        <br />
                                        <p class="f-m-light mt-1" style="color:white"></p>
                                      </div>
                                      <div class="card-body bg-light-warning" style="color: black;"> <?php if ($auth != '1'): ?> <br />
                                        <br /> <?php endif;?> <div class="row">
                                          <div class="col-md-3" style="margin-bottom: 30px"> Uraian </div>
                                          <div class="col-md-9" style="margin-bottom: 10px">
                                            <select class="form-select" id="mySelect">
                                              <option>Pilih Status</option>
                                              <option value="1">Yes</option>
                                              <option value="2"> No </option>
                                            </select>
                                          </div>
                                          <div class="col-md-3" style="margin-bottom: 30px"> Output </div>
                                          <div class="col-md-9">
                                            <input class="form-control" id="targetOutput" type="text" placeholder="Review Output" value="">
                                          </div>
                                          <div class="col-md-3" style="margin-bottom: 30px"> Volume </div>
                                          <div class="col-md-9">
                                             <select class="form-select">
                                                <option>Review Volume</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                              </select>
                                          </div>
                                          <div class="col-md-3" style="margin-bottom: 30px"> Waktu(Menit) </div>
                                          <div class="col-md-9">
                                              <select class="form-select">
                                                <option>Review Waktu</option>
                                                <option>60</option>
                                                <option>120</option>
                                                <option>240</option>
                                              </select>
                                          </div>
                                          <div class="col-md-3" style="margin-bottom: 30px"> Total </div>
                                          <div class="col-md-9">
                                            <input class="form-control" id="targetTotal" type="text" placeholder="Review Total" value="">
                                          </div>
                                          <div class="col-md-3"> Data Pendukung </div>
                                          <div class="col-md-9">
                                            <input class="form-control" id="projectName" type="text" placeholder=" Review Data Pendukung" value="">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                        </div>
                      <?php endif; ?>
                      </div>

                      <div class="row" id="form2" style="display:none">
                        <div class="col-md-7">
                          <div class="card">
                            <div class="card-header ">
                              <h5>Uraian Tugas 4 <a class="btn btn-danger pull-right" data-bs-toggle="modal" data-bs-target="#confirm_del">
                                  <i class="fa fa-trash"></i>
                                </a>
                              </h5>
                              <br />
                              <p class="f-m-light mt-1">Diisi uraian tugas yang dilaksanakan dalam rangka pelaksanaan tugas. Untuk pejabat eselon IV agar menggunakan kata kerja "memproses, menyusun, melaksanakan"</p>
                            </div>
                            <div class="card-body" style="margin-top:-50px;color: black;"> <?php if ($auth != '1'): ?> <br />
                              <br /> <?php endif;?> <div class="row">
                                <div class="col-md-3" style="margin-bottom: 30px"> Uraian </div>
                                <div class="col-md-9" style="margin-bottom: 10px">
                                  <select class="form-select" id="mySelect">
                                    <option>Pilih Uraian Tugas</option>
                                    <option value="1">Memeriksa dan memperbaiki Notulensi dan atau Nodin pembahasan tim pertimbangan penetapan Nama Jalan, Taman dan Bangunan Umum</option>
                                    <option value="2"> Memeriksa dan memperbaiki Notulensi dan atau Nodin Pembahasan Pembangunan Jalan Tol Ir. Wiyoto Wiyono, M.Sc Section Harbour Road II Ruas Ancol Pluit (Elevated) pada Trase Jalan Lodan Timur (Pintu Gerbang Utama Ancol Barat) </option>
                                  </select>
                                </div>
                                <div class="col-md-3" style="margin-bottom: 30px"> Output </div>
                                <div class="col-md-9">
                                  <input class="form-control" id="targetOutput" type="text" placeholder="Output" value="">
                                </div>
                                <div class="col-md-3" style="margin-bottom: 30px"> Volume/Frekuensi </div>
                                <div class="col-md-9">
                                  <input class="form-control" id="targetVol" type="text" placeholder="Volume" value="">
                                </div>
                                <div class="col-md-3" style="margin-bottom: 30px"> Waktu(Menit) </div>
                                <div class="col-md-9">
                                  <input class="form-control" id="targetWaktu" type="text" placeholder="Waktu" value="">
                                </div>
                                <div class="col-md-3" style="margin-bottom: 30px"> Total </div>
                                <div class="col-md-9">
                                  <input class="form-control" id="targetTotal" type="text" placeholder="Total" value="">
                                </div>
                                <div class="col-md-3"> Data Pendukung </div>
                                <div class="col-md-9">
                                  <input class="form-control" id="projectName" type="text" placeholder="Data Pendukung" value="https://drive.google.com">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <?php if ($auth != '1'): ?> <a class="btn btn-success" href="#!" style="margin-bottom:10px" onclick="document.getElementById('form2').style.display = 'block'">+ Tambah Uraian Tugas</a> <?php endif;?>

                      

                    </div>

                    <div class="row" style="margin-top:10px">
                      <?php if ($auth != '1'): ?>
                      <div class="col-md-3">
                         <a class="btn btn-warning" href="#!" style="margin-bottom:10px" onclick="document.getElementById('form2').style.display = 'block'">+ Tambah Tugas</a> 
                      </div>
                      <?php endif;?>
                    </div>

                    <div class="row" style=>
                      <div class="col-sm-7">
                        <div class="col d-flex justify-content-start align-items-center" style="margin-top:30px"> <?php if ($auth != '1'): ?> <a class="btn btn-primary f-w-500 " data-bs-toggle="modal" data-bs-target="#dashboard8">Submit</a>
                          <a class="btn btn-secondary f-w-500" style="margin-left: 10px;" href="#!">Draft</a> <?php endif;?>
                        </div>
                      </div>
                     
                    </div>

                  <?php if ($auth == '1'): ?>

                    <div class="row">
                       <div class="card" style="color:black;">


                            <div class="card-body bg-light-success" style="color:black;">
                              <div  class="row">
                                  <div class="col-md-7">
                                <strong><center>Summary Responden</center></strong>
                                <table class="table">
                                    <tr>
                                      <td>Total Volume</td>
                                      <td>: 5</td>
                                    </tr>
                                    <tr>
                                      <td>Total Waktu</td>
                                      <td>: 200 Menit</td>
                                    </tr>
                                    <tr>
                                      <td>Total Keseluruhan</td>
                                      <td>: 1.000 Menit</td>
                                    </tr>
                                  </table>
                              </div>
                              <div class="col-md-5">
                                <strong><center>Summary ORB</center></strong>
                                <table class="table">
                                    <tr>
                                      <td>Total Volume</td>
                                      <td>: 5</td>
                                    </tr>
                                    <tr>
                                      <td>Total Waktu</td>
                                      <td>: 200 Menit</td>
                                    </tr>
                                    <tr>
                                      <td>Total Keseluruhan</td>
                                      <td>: 1.000 Menit</td>
                                    </tr>
                                  </table>
                              </div>
                              </div>
                               
                            </div>
                            <div class="card-footer bg-light-success">
                              <center><a class="btn btn-success" href="#!" style="margin-top:30px">Approved</a> </center>
                            </div>
                      </div>
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
                                  <div class="col-md-12"> Data tidak bisa diubah ketika ter-submit <div class="invalid-feedback"> Please enter a category name.</div>
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
                    <!--<section class="comment-box pb-0"><h5>Comment</h5><hr><ul><li><div class="d-flex align-self-center"><img class="align-self-center" src="../assets/images/blog/comment.jpg" alt="Generic placeholder image"><div class="flex-grow-1"><div class="row"><div class="col-md-4"><h6 class="mt-0">Selena Levy <span> ( Designer )</span></h6></div><div class="col-md-8"><ul class="comment-social float-start float-md-end"><li><i class="icofont icofont-thumbs-up"></i>02 Hits
                                      </li><li><i class="icofont icofont-ui-chat"></i>598 Comments
                                      </li></ul></div></div><p>To create aesthetically striking photos, one must have a strong grasp of composition and lighting in addition to technical proficiency and creative vision. A professional photographer has to have an excellent eye for detail and be able to tell stories and convey emotions via their images.</p></div></div></li><li><ul><li><div class="d-flex"><img class="align-self-center" src="../assets/images/blog/9.jpg" alt="Generic placeholder image"><div class="flex-grow-1"><div class="row"><div class="col-xl-12"><h6 class="mt-0">Yara Bravo <span> ( Designer )</span></h6></div></div><p>They meticulously plan each shot, considering factors such as lighting, angles, and props to convey the desired message effectively. Commercial photographers are adept at using their technical expertise to highlight the unique features and qualities of their subjects, often manipulating lighting and post-processing techniques to achieve the desired aesthetic.</p></div></div></li></ul></li><li><div class="d-flex"><img class="align-self-center" src="../assets/images/blog/4.jpg" alt="Generic placeholder image"><div class="flex-grow-1"><div class="row"><div class="col-md-4"><h6 class="mt-0">Fox Rios <span> ( Designer )</span></h6></div><div class="col-md-8"><ul class="comment-social float-start float-md-end"><li><i class="icofont icofont-thumbs-up"></i>02 Hits
                                      </li><li><i class="icofont icofont-ui-chat"></i>598 Comments
                                      </li></ul></div></div><p>In addition to technical expertise and artistic vision, one needs a firm command of composition and lighting to produce visually arresting images. A professional photographer needs to be incredibly detail-oriented and capable of telling narratives and evoking strong feelings through their photos.</p></div></div></li><li><div class="d-flex"><img class="align-self-center" src="../assets/images/blog/12.png" alt="Generic placeholder image"><div class="flex-grow-1"><div class="row"><div class="col-md-4"><h6 class="mt-0">Jay Dudley <span> ( Designer )</span></h6></div><div class="col-md-8"><ul class="comment-social float-start float-md-end"><li><i class="icofont icofont-thumbs-up"></i>02 Hits
                                      </li><li><i class="icofont icofont-ui-chat"></i>598 Comments
                                      </li></ul></div></div><p>They meticulously plan each shot, considering factors such as lighting, angles, and props to convey the desired message effectively. Commercial photographers are adept at using their technical expertise to highlight the unique features and qualities of their subjects, often manipulating lighting and post-processing techniques to achieve the desired aesthetic.</p></div></div></li><li><div class="d-flex"><img class="align-self-center" src="../assets/images/blog/14.png" alt="Generic placeholder image"><div class="flex-grow-1"><div class="row"><div class="col-md-4"><h6 class="mt-0">Joe Pena <span> ( Designer )</span></h6></div><div class="col-md-8"><ul class="comment-social float-start float-md-end"><li><i class="icofont icofont-thumbs-up"></i>02 Hits
                                      </li><li><i class="icofont icofont-ui-chat"></i>598 Comments
                                      </li></ul></div></div><p>Web design is a broad field, thus there are many topics to discuss and factors to take into account. It suggests that the look, layout, overall ambience, content, user experience, and accessibility have all been successfully integrated. To satisfy the timeline and the clients' expectations, hundreds of different yet related jobs must be completed.</p></div></div></li><li class="cmt-box p-0"><label class="form-label" for="exampleFormControlTextarea1">Post A Comment</label><div class="common-f-start gap-1"><textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Comment Here.."></textarea><i class="fa-solid fa-paper-plane"></i></div></li></ul></section>-->
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
            <div class="col-md-12 footer-copyright text-center">
              <p class="mb-0"> BIRO ORB Jakarta </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    </div>
    <!-- latest jquery-->
    <script type="text/javascript">
      const select = document.getElementById('mySelect');
      const targetOutput = document.getElementById('targetOutput');
      const targetVol = document.getElementById('targetVol');
      const targetWaktu = document.getElementById('targetWaktu');
      const targetTotal = document.getElementById('targetTotal');
      select.addEventListener('change', function() {
        const selectedValue = select.value;
        if (selectedValue == '1') {
          targetOutput.value = 'Notulen';
          targetVol.value = 1;
          targetWaktu.value = 120;
          targetTotal.value = 120;
        } else if (selectedValue == '2') {
          targetOutput.value = 'Pergub';
          targetVol.value = 3;
          targetWaktu.value = 60;
          targetTotal.value = 180;
        }
        //alert('a');
      });
    </script>
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
    <script src="../assets/js/prism/prism.min.js"></script>
    <script src="../assets/js/clipboard/clipboard.min.js"></script>
    <script src="../assets/js/custom-card/custom-card.js"></script>
    <script src="../assets/js/height-equal.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/script1.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
  </body>
</html>