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
                   <div class="form-check">
                     <input class="form-check-input" type="checkbox" checked disabled>
                     <label class="form-check-label" for="akses3">ADMIN:MANAGE-USER</label>
                   </div>
                   <div class="form-check">
                     <input class="form-check-input" type="checkbox" checked disabled>
                     <label class="form-check-label" for="akses3">KELEMBAGAAN:PE-PD</label>
                   </div>
                   <div class="form-check">
                     <input class="form-check-input" type="checkbox" checked disabled>
                     <label class="form-check-label" for="akses3">KELEMBAGAAN:PE-ORB</label>
                   </div>
                   <div class="form-check">
                     <input class="form-check-input" type="checkbox" checked disabled>
                     <label class="form-check-label" for="akses3">KELEMBAGAAN:KO-PD</label>
                   </div>
                   <div class="form-check">
                     <input class="form-check-input" type="checkbox" checked disabled>
                     <label class="form-check-label" for="akses3">KELEMBAGAAN:KO-ORB</label>
                   </div>
                   <div class="form-check">
                     <input class="form-check-input" type="checkbox" checked disabled>
                     <label class="form-check-label" for="akses3">ANJAB:PD-OPERATOR</label>
                   </div>
                   <div class="form-check">
                     <input class="form-check-input" type="checkbox" checked disabled>
                     <label class="form-check-label" for="akses3">ANJAB:PD-PIMPINAN</label>
                   </div>
                   <div class="form-check">
                     <input class="form-check-input" type="checkbox" checked disabled>
                     <label class="form-check-label" for="akses3">ANJAB:ORB-VALIDATOR</label>
                   </div>
                   <div class="form-check">
                     <input class="form-check-input" type="checkbox" checked disabled>
                     <label class="form-check-label" for="akses3">ANJAB:ORB-PIMPINAN</label>
                   </div>
                   <div class="form-check">
                     <input class="form-check-input" type="checkbox" checked disabled>
                     <label class="form-check-label" for="akses2">RBBK:OPERATOR</label>
                   </div>
                   <div class="form-check">
                     <input class="form-check-input" type="checkbox" checked disabled>
                     <label class="form-check-label" for="akses2">RBBK:EDITOR</label>
                   </div>
                   <div class="form-check">
                     <input class="form-check-input" type="checkbox" checked disabled>
                     <label class="form-check-label" for="akses1">RBBK:VERIFIKATOR</label>
                   </div>
                   <div class="form-check">
                     <input class="form-check-input" type="checkbox" checked disabled>
                     <label class="form-check-label" for="akses2">RBBK:PIMPINAN</label>
                   </div>
                   <div class="form-check">
                     <input class="form-check-input" type="checkbox" checked disabled>
                     <label class="form-check-label" for="akses3">TLPP:PD</label>
                   </div>
                   <div class="form-check">
                     <input class="form-check-input" type="checkbox" checked disabled>
                     <label class="form-check-label" for="akses3">TLPP:ORB</label>
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

 <?php
  $pageBody = ob_get_clean();
  include("./layout/index.php");
