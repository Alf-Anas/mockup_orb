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
             <li class="breadcrumb-item"><a href="./anjab-info-jabatan-orb-validator.php">Info Jabatan</a></li>
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
                       <span class="badge bg-secondary">Menunggu Persetujuan Biro ORB</span>
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
                             Terima Laporan
                           </button>
                           <button type="button" class="btn btn-danger btn-lg" data-bs-toggle="modal"
                             data-bs-target="#exampleModalCenter1">
                             Tolak/Perbaiki Laporan
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
                                     Menunggu Persetujuan Biro ORB ...
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
   <!-- Modal -->
   <div
     class="modal fade"
     id="exampleModalCenter1"
     tabindex="-1"
     role="dialog"
     aria-labelledby="exampleModalCenter1"
     aria-hidden="true">
     <div
       class="modal-dialog modal-dialog-centered"
       role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5
             class="modal-title"
             id="exampleModalLongTitle">
             Tolak/Perbaiki Laporan
           </h5>
           <button
             class="btn-close py-0"
             type="button"
             data-bs-dismiss="modal"
             aria-label="Close"></button>
         </div>
         <div class="modal-body">
           <div
             class="modal-toggle-wrapper">
             <div class="row">
               <div class="col-12 col-lg-12">
                 <form class="row g-3 " novalidate="">
                   <div class="col-12">
                     <label class="form-label" for="projectName">Catatan</label>
                     <input class="form-control" id="projectName" type="text" placeholder="..." required="">
                   </div>
                 </form>
               </div>
             </div>
           </div>
         </div>
         <div class="modal-footer">
           <button
             class="btn btn-secondary"
             type="button"
             data-bs-dismiss="modal">
             Batal
           </button>
           <button
             class="btn btn-danger"
             type="button"
             data-bs-dismiss="modal">
             Tolak/Perbaiki
           </button>
         </div>
       </div>
     </div>
   </div>

 </div>


 <?php
  $pageBody = ob_get_clean();
  include("./layout/index.php");
