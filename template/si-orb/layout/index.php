<!DOCTYPE html>
<html lang="id">

<head>
  <title><?= $pageTitle ?? 'SI-ORB : Sistem Informasi Biro ORB DKI Jakarta' ?></title>
  <?php include("./layout/head-src.html"); ?>
</head>

<body>
  <!-- loader starts-->
  <?php include("./layout/loading.html"); ?>
  <!-- loader ends-->

  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php include("./layout/header.html"); ?>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <?php include("./layout/sidebar.html"); ?>
      <!-- Page Sidebar Ends-->

      <?= $pageBody ?>

      <?php include("./layout/footer.html"); ?>
    </div>
  </div>

  <?php include("./layout/body-src.html"); ?>
</body>

</html>