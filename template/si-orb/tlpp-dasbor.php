 <?php
  $pageTitle = "TLPP: Dasbor - SI-ORB";
  ob_start();

  ?>

 <div class="page-body">
   <div class="container-fluid">
     <div class="page-title">
       <div class="row">
         <div class="col-sm-6">
           <h3>TLPP Dasbor</h3>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb">
             <li class="breadcrumb-item">
               <a href="./beranda.php">
                 <i data-feather="home"></i>
               </a>
             </li>
             <li class="breadcrumb-item">TLPP</li>
             <li class="breadcrumb-item active">
               Dasbor
             </li>
           </ol>
         </div>
       </div>
     </div>
   </div>
   <!-- Container-fluid starts-->
   <div class="container-fluid">
     <div class="row general-widget-wrapper">
       <div class="col-sm-6 col-xl-3 col-lg-6 box-col-3">
         <div class="card widget-1">
           <div class="card-body">
             <div class="widget-content">
               <div class="widget-round secondary">
                 <div class="bg-round">
                   <svg>
                     <use href="../../assets/svg/icon-sprite.svg#c-revenue"></use>
                   </svg>
                   <svg class="half-circle svg-fill">
                     <use href="../../assets/svg/icon-sprite.svg#halfcircle"></use>
                   </svg>
                 </div>
               </div>
               <div>
                 <h4> Rp <span class="counter" data-target="45195500300">0</span>
                 </h4>
                 <span class="f-light">Efisiensi 2025</span>
               </div>
             </div>
             <div class="font-success f-w-500">
               <i class="bookmark-search me-1" data-feather="trending-up"></i>
               <span class="txt-success">+50% </span>
             </div>
           </div>
         </div>
       </div>
       <div class="col-sm-6 col-xl-3 col-lg-6 box-col-3">
         <div class="card widget-1">
           <div class="card-body">
             <div class="widget-content">
               <div class="widget-round success">
                 <div class="bg-round">
                   <svg>
                     <use href="../../assets/svg/icon-sprite.svg#c-customer"></use>
                   </svg>
                   <svg class="half-circle svg-fill">
                     <use href="../../assets/svg/icon-sprite.svg#halfcircle"></use>
                   </svg>
                 </div>
               </div>
               <div>
                 <h4>
                   <span class="counter" data-target="845">0</span>+
                 </h4>
                 <span class="f-light">Standar Pelayanan Terunggah</span>
               </div>
             </div>
             <div class="font-danger f-w-500">
               <i class="bookmark-search me-1" data-feather="trending-down"></i>
               <span class="txt-danger">-40%</span>
             </div>
           </div>
         </div>
       </div>
       <div class="col-sm-6 col-xl-3 col-lg-6 box-col-3">
         <div class="card widget-1">
           <div class="card-body">
             <div class="widget-content">
               <div class="widget-round warning">
                 <div class="bg-round">
                   <svg>
                     <use href="../../assets/svg/icon-sprite.svg#c-profit"></use>
                   </svg>
                   <svg class="half-circle svg-fill">
                     <use href="../../assets/svg/icon-sprite.svg#halfcircle"></use>
                   </svg>
                 </div>
               </div>
               <div>
                 <h4>
                   <span class="counter" data-target="80">0</span>%
                 </h4>
                 <span class="f-light">Indeks Kinerja</span>
               </div>
             </div>
             <div class="font-danger f-w-500">
               <i class="bookmark-search me-1" data-feather="trending-down"></i>
               <span class="txt-danger">-20%</span>
             </div>
           </div>
         </div>
       </div>
       <div class="col-sm-6 col-xl-3 col-lg-6 box-col-3">
         <div class="card widget-1">
           <div class="card-body">
             <div class="widget-content">
               <div class="widget-round primary">
                 <div class="bg-round">
                   <svg class="fill-primary">
                     <use href="../../assets/svg/icon-sprite.svg#c-invoice"></use>
                   </svg>
                   <svg class="half-circle svg-fill">
                     <use href="../../assets/svg/icon-sprite.svg#halfcircle"></use>
                   </svg>
                 </div>
               </div>
               <div>
                 <h4 class="counter" data-target="10905">0</h4>
                 <span class="f-light">Data Capaian</span>
               </div>
             </div>
             <div class="font-success f-w-500">
               <i class="bookmark-search me-1" data-feather="trending-up"></i>
               <span class="txt-success">+50%</span>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-12 box-col-12">
         <div class="card o-hidden">
           <div class="card-header">
             <h5>Rekapitulasi Monitoring & Evaluasi</h5>
           </div>
           <div class="bar-chart-widget">
             <div class="bottom-content card-body">
               <div class="row">
                 <div class="col-12">
                   <div
                     id="chart-widget4"></div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="col-xl-5 col-lg-12 box-col-12">
         <div class="card">
           <div class="card-header">
             <h5>Rata-Rata Indeks Pelayanan</h5>
           </div>
           <div class="card-body">
             <div
               class="chart-container column-container">
               <div id="columnchart"></div>
             </div>
           </div>
         </div>
       </div>
       <div class="col-xl-7 col-lg-12 box-col-6">
         <div class="card">
           <div class="card-header">
             <h5>Realisasi Monitoring & Evaluasi</h5>
           </div>
           <div class="card-body">
             <div class="chart-container">
               <div id="linechart"></div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- Container-fluid Ends-->
 </div>


 <?php
  $pageBody = ob_get_clean();
  include("./layout/index.php");
