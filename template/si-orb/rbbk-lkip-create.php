 <?php
  $pageTitle = "RBBK: Tambah Data LKIP Perangkat Daerah - SI-ORB";
  ob_start();

  ?>

 <div class="page-body">
   <div class="container-fluid">
     <div class="page-title">
       <div class="row">
         <div class="col-sm-6">
           <h3>Tambah Data LKIP Perangkat Daerah</h3>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb">
             <li class="breadcrumb-item">
               <a href="./beranda.php">
                 <i data-feather="home"></i>
               </a>
             </li>
             <li class="breadcrumb-item">RBBK</li>
             <li class="breadcrumb-item"><a href="./rbbk-lkip.php">LKIP Perangkat Daerah</a></li>
             <li class="breadcrumb-item active">Tambah Data</li>
           </ol>
         </div>
       </div>
     </div>
   </div>
   <!-- Container-fluid starts-->
   <div class="container-fluid">
     <div class="row">
       <div class="col-12">
         <div class="card  custom-input">
           <div class="card-body">
             <div class="row">
               <div class="col-12 col-lg-8">
                 <form class="row g-3 " novalidate="">
                   <div class="col-12">
                     <label class="form-label" for="projectName">Judul</label>
                     <input class="form-control" id="projectName" type="text" placeholder="LKIP PD" required="">
                   </div>

                   <div class="col-12">
                     <label class="form-label" for="projectPriority">Perangkat Daerah</label>
                     <select class="form-select">
                       <option value="">--- Pilih Perangkat Daerah ---</option>
                       <option>PUPR SDA</option>
                       <option>PUPR Gedung</option>
                       <option>PUPR Bina Marga</option>
                     </select>
                   </div>

                   <div class="col-6">
                     <label class="form-label" for="projectPriority">Tahun</label>
                     <input type="number" class="form-control" name="" />
                   </div>

                   <div class="col-6">
                     <label class="form-label" for="projectPriority">Status</label>
                     <select class="form-select">
                       <option value="">--- Pilih Status ---</option>
                       <option>Aktif</option>
                       <option>Tidak Aktif</option>
                     </select>
                   </div>

                   <div class="col-12">
                     <label class="form-label" for="validationTextarea">Keterangan</label>
                     <textarea class="form-control" id="validationTextarea" placeholder="Keterangan/Catatan Singkat" required="" rows="2"></textarea>
                   </div>

                   <div class="col-12">
                     <label class="form-label" for="projectPriority">Gambar Tajuk</label>
                     <input class="form-control" id="formFile1" type="file" accept="image/*">
                   </div>

                   <div class="col-12">
                     <label class="form-label" for="validationTextarea">Ikhtisar</label>
                     <textarea class="form-control" id="validationTextarea" placeholder="Ikhtisar/Ringkasan" required="" rows="4"></textarea>
                   </div>

                   <div class="col-12">
                     <label class="form-label" for="projectPriority">Unggah Berkas LKIP</label>
                     <input class="form-control" id="formFile1" type="file" accept=".pdf">
                   </div>

                   <div class="col-md-12 d-flex justify-content-end">
                     <button class="btn btn-primary" type="button" onclick="window.location.href='./rbbk-lkip.php'">Simpan</button>
                   </div>
                 </form>
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
