 <?php
  $pageTitle = "Admin: Tambah Pengguna - SI-ORB";
  ob_start();

  ?>

 <div class="page-body">
   <div class="container-fluid pt-4">
     <div class="row">
       <div class="col-sm-12">
         <div class="card">
           <div class="card-header">
             <h5 class="m-b-0">Tambah Pengguna</h5>
           </div>
           <div class="card-body">
             <form>
               <div class="row g-4">
                 <!-- Kolom Kiri -->
                 <div class="col-md-6">
                   <div class="theme-form">
                     <div class="form-group">
                       <label class="col-form-label">Nama Pengguna</label>
                       <input class="form-control" type="text" name="username" placeholder="Masukkan nama pengguna" />
                     </div>

                     <div class="form-group">
                       <label class="col-form-label">Nama Lengkap</label>
                       <input class="form-control" type="text" name="nama_lengkap" placeholder="Masukkan nama lengkap" />
                     </div>

                     <div class="form-group">
                       <label class="col-form-label">Instansi</label>
                       <input class="form-control" type="text" name="instansi" placeholder="Masukkan instansi" />
                     </div>

                     <div class="form-group">
                       <label class="col-form-label">Bio</label>
                       <textarea class="form-control" name="bio" rows="3" placeholder="Deskripsi singkat"></textarea>
                     </div>

                     <div class="form-group">
                       <label class="col-form-label">Password</label>
                       <input class="form-control" type="password" name="password" placeholder="Password" />
                     </div>

                     <div class="form-group">
                       <label class="col-form-label">Konfirmasi Password</label>
                       <input class="form-control" type="password" name="password_confirm" placeholder="Konfirmasi Password" />
                     </div>
                   </div>
                 </div>

                 <!-- Kolom Kanan -->
                 <div class="col-md-6">
                   <div class="form-group">
                     <label class="col-form-label">Status</label>
                     <select class="form-control" name="status">
                       <option value="aktif">Aktif</option>
                       <option value="tidak_aktif">Tidak Aktif</option>
                     </select>
                   </div>

                   <div class="form-group">
                     <label class="col-form-label">Hak Akses</label>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="akses[]" value="RBBK:VIEW" id="akses1">
                       <label class="form-check-label" for="akses1">RBBK:VIEW</label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="akses[]" value="RBBK:EDIT" id="akses2">
                       <label class="form-check-label" for="akses2">RBBK:EDIT</label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="akses[]" value="PETA:ADMIN" id="akses3">
                       <label class="form-check-label" for="akses3">PETA:ADMIN</label>
                     </div>
                   </div>
                 </div>
               </div>

               <div class="text-end mt-4">
                 <button type="button" class="btn btn-primary" onclick="window.location.href='./admin-kelola-pengguna.php'">Simpan</button>
               </div>
             </form>
           </div> <!-- card-body -->
         </div>
       </div>
     </div>
   </div>
 </div>


 <?php
  $pageBody = ob_get_clean();
  include("./layout/index.php");
