 <?php
  $pageTitle = "RBBK: Visi & Misi - SI-ORB";
  ob_start();

  ?>

 <div class="page-body">
   <div class="container-fluid">
     <div class="page-title">
       <div class="row">
         <div class="col-sm-6">
           <h3>Visi & Misi</h3>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb">
             <li class="breadcrumb-item">
               <a href="./beranda.php">
                 <i data-feather="home"></i>
               </a>
             </li>
             <li class="breadcrumb-item">RBBK</li>
             <li class="breadcrumb-item">
               Akuntabilitas
             </li>
             <li class="breadcrumb-item active">
               Visi & Misi
             </li>
           </ol>
         </div>
       </div>
     </div>
   </div>
   <!-- Container-fluid starts-->
   <div class="container-fluid">
     <div class="row">
       <!-- Card for Visi -->
       <div class="col-md-12">
         <div class="card">
           <div class="card-header pb-0">
             <h5><i class="feather icon-eye me-2"></i>Visi</h5>
           </div>
           <div class="card-body">
             <p class="mb-0">
               Jakarta kota maju, lestari dan berbudaya yang warganya terlibat dalam mewujudkan keberadaban, keadilan dan kesejahteraan bagi semua.</p>
           </div>
         </div>
       </div>

       <!-- Card for Misi -->
       <div class="col-md-12">
         <div class="card">
           <div class="card-header pb-0">
             <h5><i class="feather icon-target me-2"></i>Misi</h5>
           </div>
           <div class="card-body">
             <ul class="list-group">
               <li class="list-group-item border-0 ps-0">✅ Menjadikan Jakarta kota yang aman, sehat, cerdas, berbudaya, dengan memperkuat nilai-nilai keluarga dan memberikan ruang kreativitas melalui kepemimpinan yang melibatkan, menggerakkan dan memanusiakan.</li>
               <li class="list-group-item border-0 ps-0">✅ Menjadikan Jakarta kota yang memajukan kesejahteraan umum melalui terciptanya lapangan kerja, kestabilan dan keterjangkauan kebutuhan pokok, meningkatnya keadilan sosial, percepatan pembangunan infrastruktur, kemudahan investasi dan berbisnis, serta perbaikan pengelolaan tata ruang.</li>
               <li class="list-group-item border-0 ps-0">✅ Menjadikan Jakarta tempat wahana aparatur negara yang berkarya, mengabdi, melayani, serta menyelesaikan berbagai permasalahan kota dan warga, secara efektif, meritokratis dan berintegritas.</li>
               <li class="list-group-item border-0 ps-0">✅ Menjadikan Jakarta kota yang lestari, dengan pembangunan dan tata kehidupan yang memperkuat daya dukung lingkungan dan sosial.</li>
               <li class="list-group-item border-0 ps-0">✅ Menjadikan Jakarta ibukota yang dinamis sebagai simpul kemajuan Indonesia yang bercirikan keadilan, kebangsaan dan kebhinekaan.</li>
             </ul>
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
