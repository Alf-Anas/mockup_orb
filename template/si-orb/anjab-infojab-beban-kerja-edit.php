 <?php
  $pageTitle = "ANJAB: Edit Analisis Beban Kerja- SI-ORB";
  ob_start();

  ?>

 <div class="page-body">
   <div class="container-fluid">
     <div class="page-title">
       <div class="row">
         <div class="col-sm-6">
           <h3>Edit Analisis Beban Kerja: Nama Jabatan</h3>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb">
             <li class="breadcrumb-item">
               <a href="./beranda.php">
                 <i data-feather="home"></i>
               </a>
             </li>
             <li class="breadcrumb-item">ANJAB</li>
             <li class="breadcrumb-item"><a href="./anjab-infojab-beban-kerja.php">Analisis Beban Kerja</a></li>
             <li class="breadcrumb-item active">Edit</li>
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
                 <div class="blog-details">
                   <ul style="display: flex; gap: 1rem; margin-top: 1rem;">
                     <li style="border-right: 1px solid #898989; padding-right: 1rem;">15 July 2025</li>
                     <li style="border-right: 1px solid #898989; padding-right: 1rem;">
                       <i class="icofont icofont-user"></i> Perangkat Daerah
                     </li>
                     <li>
                       <span class="badge bg-warning">Dalam Pengerjaan / Perbaikan</span>
                     </li>
                   </ul>
                   <div>
                     Work In Progress

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


 <?php
  $pageBody = ob_get_clean();
  include("./layout/index.php");
