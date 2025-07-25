 <?php
  $pageTitle = "Beranda - SI-ORB";
  ob_start();

  $cards = [
    [
      "icon" => "users",
      "title" => "KELEMBAGAAN",
      "description" => "",
      "bg" => "bg-light-primary",
      "url" => "kelembagaan.php"
    ],
    [
      "icon" => "briefcase",
      "title" => "ANJAB",
      "description" => "(Analisis Jabatan)",
      "bg" => "bg-light-secondary",
      "url" => "anjab.php"
    ],
    [
      "icon" => "activity",
      "title" => "RBBK",
      "description" => "(Reformasi Birokrasi dan Budaya Kerja)",
      "bg" => "bg-light-warning",
      "url" => "rbbk.php"
    ],
    [
      "icon" => "settings",
      "title" => "TLPP",
      "description" => "(Tata Laksana dan Pelayanan Publik)",
      "bg" => "bg-light-success",
      "url" => "tlpp.php"
    ]
  ];
  ?>

 <div class="page-body">
   <div class="container-fluid">
     <div class="page-title">
       <div class="row">
         <div class="col-sm-6">
           <h3>Selamat Datang di SI-ORB</h3>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb">
             <li class="breadcrumb-item">
               Beranda
             </li>
           </ol>
         </div>
       </div>
     </div>
   </div>
   <!-- Container-fluid starts-->
   <div class="container-fluid">
     <div class="row effective-card height-equal">
       <?php foreach ($cards as $card): ?>
         <div class="col-xxl-6 col-xl-6 col-md-6 col-12 box-col-4">
           <div class="card common-hover">
             <div class="card-body">
               <a class="effect-card <?= $card['bg'] ?>" href="<?= $card['url'] ?>">
                 <div class="common-box1 common-align">
                   <i data-feather="<?= $card['icon'] ?>"></i>
                   <h5><?= $card['title'] ?></h5>
                 </div>
                 <p class="mb-0"><?= $card['description'] ?></p>
                 <div class="go-corner">
                   <div class="go-arrow"></div>
                 </div>
               </a>
             </div>
           </div>
         </div>
       <?php endforeach; ?>
     </div>
   </div>
 </div>

 <?php
  $pageBody = ob_get_clean();
  include("./layout/index.php");
