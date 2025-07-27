 <?php
  $pageTitle = "ANJAB: Info Jabatan Detail - SI-ORB";
  ob_start();

  ?>

 <div class="page-body">
   <div class="container-fluid">
     <div class="page-title">
       <div class="row">
         <div class="col-sm-6">
           <h3>Laporan Info Jabatan: Nama Jabatan</h3>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb">
             <li class="breadcrumb-item">
               <a href="./beranda.php">
                 <i data-feather="home"></i>
               </a>
             </li>
             <li class="breadcrumb-item">ANJAB</li>
             <li class="breadcrumb-item"><a href="./anjab-info-jabatan-pd-pimpinan.php">Info Jabatan</a></li>
             <li class="breadcrumb-item active">Laporan</li>
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
                       <span class="badge bg-primary">Menunggu Persetujuan Kepala Perangkat Daerah</span>
                     </li>
                   </ul>
                   <div>
                     <h5>Nama Jabatan</h5>
                     <div class="row">

                       <div class="col-lg-8">
                         <a class="btn btn-primary" style="margin-top: 1rem; margin-bottom: 8px; margin-right: 0; float: right;" href="../../assets/pdf/Form-Infojab.pdf" target="_blank"><i class="fa fa-download"></i> Unduh Berkas</a>
                         <iframe
                           src="../../assets/pdf/Form-Infojab.pdf"
                           width="100%"
                           height="750px"
                           style="border: none;">
                         </iframe>
                         <div class="d-flex gap-2 mt-4 mx-auto w-full justify-content-center text-center">
                           <button type="button" class="btn btn-success btn-lg">
                             Kirim ke Biro ORB
                           </button>
                         </div>

                       </div>

                       <div
                         class="col-lg-4 box-col-3 notification main-timeline">
                         <div class="card height-equal">
                           <div class="card-header">
                             <h5>Riwayat Persetujuan</h5>
                           </div>
                           <div
                             class="card-body dark-timeline basic-timeline">
                             <ul>
                               <li class="d-flex">
                                 <div
                                   class="timeline-dot-primary"></div>
                                 <div class="w-100 ms-3">
                                   <p
                                     class="d-flex gap-2 mb-2">
                                     <span
                                       class="date-content light-background">2 Feb 2024</span><span class="date-content light-background">7:00 AM </span>
                                   </p>
                                   <h6 class="mb-0">
                                     Kota Administrasi Jakarta Pusat<span
                                       class="dot-notification"></span>
                                   </h6>
                                   <p class="f-light">
                                     Pengusulan Form Info Jabatan
                                   </p>
                                 </div>
                               </li>
                               <li class="d-flex">
                                 <div
                                   class="timeline-dot-secondary"></div>
                                 <div class="w-100 ms-3">
                                   <p
                                     class="d-flex gap-2 mb-2">
                                     <span
                                       class="date-content light-background">22 March 2024</span><span class="date-content light-background">3:45 PM</span>
                                   </p>
                                   <h6 class="mb-0">
                                     Kepala Perangkat Daerah<span
                                       class="dot-notification"></span>
                                   </h6>
                                   <p class="f-light">
                                     Menyetujui Form Info Jabatan
                                   </p>
                                 </div>
                               </li>
                               <li class="d-flex">
                                 <div
                                   class="timeline-dot-success"></div>
                                 <div class="w-100 ms-3">
                                   <p
                                     class="d-flex gap-2 mb-2">
                                     <span
                                       class="date-content light-background">16 May 2024</span><span class="date-content light-background">1:22 AM</span>
                                   </p>
                                   <h6 class="mb-0">
                                     Biro ORB<span
                                       class="dot-notification"></span>
                                   </h6>
                                   <p class="f-light">
                                     Menolak dan Meninta Revisi Form Info Jabatan
                                   </p>
                                 </div>
                               </li>
                               <li class="d-flex">
                                 <div
                                   class="timeline-dot-warning"></div>
                                 <div class="w-100 ms-3">
                                   <p
                                     class="d-flex gap-2 mb-2">
                                     <span
                                       class="date-content light-background">23 Nov 2024</span><span class="date-content light-background">6:56 AM</span>
                                   </p>
                                   <h6 class="mb-0">
                                     Kota Administrasi Jakarta Pusat<span
                                       class="dot-notification"></span>
                                   </h6>
                                   <p class="f-light">
                                     Melakukan Perbaikan Form Info Jabatan
                                   </p>
                                 </div>
                               </li>
                               <li class="d-flex">
                                 <div
                                   class="timeline-dot-info"></div>
                                 <div class="w-100 ms-3">
                                   <p
                                     class="d-flex gap-2 mb-2">
                                     <span
                                       class="date-content light-background">12 Dec 2024</span><span class="date-content light-background">12:05 AM</span>
                                   </p>
                                   <h6 class="mb-0">
                                     Kepala Perangkat Daerah
                                     <span
                                       class="dot-notification"></span>
                                   </h6>
                                   <p class="f-light">
                                     Menunggu Persetujuan Kepala Perangkat Daerah ...
                                   </p>
                                 </div>
                               </li>
                             </ul>
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
     </div>
   </div>
   <!-- Container-fluid Ends-->
 </div>


 <?php
  $pageBody = ob_get_clean();
  include("./layout/index.php");
