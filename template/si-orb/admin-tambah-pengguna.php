 <?php
  $pageTitle = "Admin: Tambah Pengguna - SI-ORB";
  ob_start();

  ?>

 <div class="page-body">
   <div class="container-fluid">
     <div class="page-title">
       <div class="row">
         <div class="col-sm-6">
           <h3>Tambah Pengguna</h3>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb">
             <li class="breadcrumb-item">
               <a href="./beranda.php">
                 <i data-feather="home"></i>
               </a>
             </li>
             <li class="breadcrumb-item">Admin</li>
             <li class="breadcrumb-item active">
               Tambah Pengguna
             </li>
           </ol>
         </div>
       </div>
     </div>
   </div>

   <div class="container-fluid">
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
                       <input class="form-check-input" type="checkbox" name="akses[]" value="ADMIN:MANAGE-USER" id="akses3">
                       <label class="form-check-label" for="akses3">ADMIN:MANAGE-USER</label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="akses[]" value="KELEMBAGAAN:PE-PD" id="akses3">
                       <label class="form-check-label" for="akses3">KELEMBAGAAN:PE-PD</label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="akses[]" value="KELEMBAGAAN:PE-ORB" id="akses3">
                       <label class="form-check-label" for="akses3">KELEMBAGAAN:PE-ORB</label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="akses[]" value="KELEMBAGAAN:KO-PD" id="akses3">
                       <label class="form-check-label" for="akses3">KELEMBAGAAN:KO-PD</label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="akses[]" value="KELEMBAGAAN:KO-ORB" id="akses3">
                       <label class="form-check-label" for="akses3">KELEMBAGAAN:KO-ORB</label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="akses[]" value="ANJAB:PD-OPERATOR" id="akses3">
                       <label class="form-check-label" for="akses3">ANJAB:PD-OPERATOR</label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="akses[]" value="ANJAB:PD-PIMPINAN" id="akses3">
                       <label class="form-check-label" for="akses3">ANJAB:PD-PIMPINAN</label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="akses[]" value="ANJAB:ORB-VALIDATOR" id="akses3">
                       <label class="form-check-label" for="akses3">ANJAB:ORB-VALIDATOR</label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="akses[]" value="ANJAB:ORB-PIMPINAN" id="akses3">
                       <label class="form-check-label" for="akses3">ANJAB:ORB-PIMPINAN</label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="akses[]" value="RBBK:OPERATOR" id="akses2">
                       <label class="form-check-label" for="akses2">RBBK:OPERATOR</label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="akses[]" value="RBBK:EDITOR" id="akses2">
                       <label class="form-check-label" for="akses2">RBBK:EDITOR</label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="akses[]" value="RBBK:VERIFIKATOR" id="akses1">
                       <label class="form-check-label" for="akses1">RBBK:VERIFIKATOR</label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="akses[]" value="RBBK:PIMPINAN" id="akses2">
                       <label class="form-check-label" for="akses2">RBBK:PIMPINAN</label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="akses[]" value="TLPP:PD" id="akses3">
                       <label class="form-check-label" for="akses3">TLPP:PD</label>
                     </div>
                     <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="akses[]" value="TLPP:ORB" id="akses3">
                       <label class="form-check-label" for="akses3">TLPP:ORB</label>
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
