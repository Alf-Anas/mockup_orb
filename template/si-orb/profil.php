 <?php
  $pageTitle = "Profil - SI-ORB";
  ob_start();

  ?>

 <div class="page-body">
   <!-- Container-fluid starts-->
   <div class="container-fluid pt-4">
     <div class="row">
       <div class="col-sm-12">
         <div class="card">
           <div class="card-header">
             <h5 class="m-b-0">Profil</h5>
           </div>
           <div class="card-body">
             <div class="row g-4">
               <!-- Kolom Kiri -->
               <div class="col-md-6">
                 <div class="theme-form">
                   <div class="form-group">
                     <label class="col-form-label">Nama Pengguna</label>
                     <input class="form-control" type="text" value="admin_orb_001" readonly />
                   </div>

                   <div class="form-group">
                     <label class="col-form-label">Nama Lengkap</label>
                     <input class="form-control" type="text" value="User 001" readonly />
                   </div>

                   <div class="form-group">
                     <label class="col-form-label">Instansi</label>
                     <input class="form-control" type="text" value="Biro ORB" readonly />
                   </div>

                   <div class="form-group">
                     <label class="col-form-label">Bio</label>
                     <textarea class="form-control" rows="3" readonly>Akun Administrator</textarea>
                   </div>
                 </div>
               </div>

               <!-- Kolom Kanan -->
               <div class="col-md-6">

                 <div class="form-group">
                   <label class="col-form-label">Tanggal Dibuat</label>
                   <input class="form-control" type="text" value="12 Feb 2025, 10:45" readonly />
                 </div>

                 <div class="form-group">
                   <label class="col-form-label">Status</label>
                   <input class="form-control" type="text" value="Aktif" readonly />
                 </div>

                 <div class="form-group">
                   <label class="col-form-label">Hak Akses</label>
                   <ol class="list-group list-group-numbered scroll-rtl">
                     <li class="list-group-item d-flex align-items-start flex-wrap">
                       <div class="ms-2 me-auto">RBBK:VIEW</div>
                     </li>
                     <li class="list-group-item d-flex align-items-start flex-wrap">
                       <div class="ms-2 me-auto">RBBK:EDIT</div>
                     </li>
                     <li class="list-group-item d-flex align-items-start flex-wrap">
                       <div class="ms-2 me-auto">PETA:ADMIN</div>
                     </li>
                   </ol>
                 </div>
               </div>
             </div>
           </div>

         </div>
       </div>
     </div>
   </div>
 </div>

 <?php
  $pageBody = ob_get_clean();
  include("./layout/index.php");
