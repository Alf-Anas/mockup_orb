 <?php
  $pageTitle = "ANJAB: Tambah Info Jabatan - SI-ORB";
  ob_start();

  ?>

 <div class="page-body">
   <div class="container-fluid">
     <div class="page-title">
       <div class="row">
         <div class="col-sm-6">
           <h3>Tambah Info Jabatan: Nama Jabatan</h3>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb">
             <li class="breadcrumb-item">
               <a href="./beranda.php">
                 <i data-feather="home"></i>
               </a>
             </li>
             <li class="breadcrumb-item">ANJAB</li>
             <li class="breadcrumb-item"><a href="./anjab-info-jabatan-pd-operator.php">Info Jabatan</a></li>
             <li class="breadcrumb-item active">Tambah</li>
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
           <div class="card-header">
             <h5>Form Info Jabatan</h5>
           </div>
           <div class="card-body">
             <form class="row g-3 needs-validation" novalidate="">
               <div class="col-md-8">
                 <label class="form-label" for="projectName">Nama Jabatan</label>
                 <select class="form-select" id="projectPriority" required="">
                   <option selected="" disabled="" value="">Choose...</option>
                   <option>A</option>
                   <option>B</option>
                 </select>
                 <div class="valid-feedback">Looks good!</div>
               </div>
               <div class="col-md-8">
                 <label class="form-label" for="projectName">Kode Jabatan</label>
                 <input class="form-control" id="projectName" type="text" placeholder="Kode Jabatan" required="">
                 <div class="valid-feedback">Looks good!</div>
               </div>
               <div class="col-md-8">
                 <label class="form-label" for="projectName">Unit Kerja</label>
               </div>
               <div class="col-md-8">
                 <table class="table">
                   <tr>
                     <td>A. JPT Utama</td>
                     <td><input class="form-control" id="projectName" type="text" placeholder="" required=""></td>
                   </tr>
                   <tr>
                     <td>B. JPT Madya</td>
                     <td><input class="form-control" id="projectName" type="text" placeholder="" value="Sekda DKI Jakarta"></td>
                   </tr>
                   <tr>
                     <td>C. JPT Pratama</td>
                     <td> <select class="form-select" aria-label="Select parent category">
                         <option selected="">All</option>
                         <option value="1">PUPR SDA</option>
                         <option value="2">PUPR Bina Marga</option>
                       </select>
                     </td>
                   </tr>
                   <tr>
                     <td>D. Administrator</td>
                     <td><input class="form-control" id="projectName" type="text" placeholder="" required=""></td>
                   </tr>
                   <tr>
                     <td>E. Pengawas</td>
                     <td><select class="form-select" aria-label="Select parent category">
                         <option selected="">Nama Jabatan</option>
                         <option value="1">PUPR SDA</option>
                         <option value="2">PUPR Bina Marga</option>
                       </select></td>
                   </tr>
                   <tr>
                     <td>F. Pelaksana</td>
                     <td><input class="form-control" id="projectName" type="text" placeholder="" required=""></td>
                   </tr>
                   <tr>
                     <td>G. Jabatan Fungsional</td>
                     <td><input class="form-control" id="projectName" type="text" placeholder="" required=""></td>
                   </tr>
                 </table>
               </div>
               <div class="col-12">
                 <label class="form-label" for="validationTextarea">Ikhtisar Jabatan</label>
                 <textarea class="form-control" id="validationTextarea" placeholder="Enter quisionare details" required="" rows="4"></textarea>
                 <div class="invalid-feedback">Please enter ikhtisar jabatan</div>
               </div>
             </form>

           </div>
         </div>
       </div>

       <div class="col-sm-12">
         <div class="card">
           <div class="card-body">
             <div class="blog-single">
               <div class="blog-box blog-details">
                 <div class="blog-details">
                   <div>
                     <!-- FORM INFO JABATAN -->
                     <div class="form-section">

                       <div class="mb-3">
                         <label class="form-label">5. Kualifikasi Jabatan</label>
                         <div class="mb-2">
                           <label>a. Pendidikan Formal</label>
                           <select class="form-select">
                             <option selected>S1, S3, SMA, D3</option>
                           </select>
                         </div>
                         <div class="mb-2">
                           <label>b. Pendidikan dan Pelatihan</label>
                           <input type="text" class="form-control" placeholder="1. Penjenjangan">
                           <input type="text" class="form-control mt-1" placeholder="2. Teknis">
                         </div>
                         <div class="mb-2">
                           <label>c. Pengalaman Kerja</label>
                           <input type="text" class="form-control" placeholder="Free text">
                         </div>
                       </div>
                     </div>

                     <!-- TANGGUNG JAWAB -->
                     <div class="form-section">
                       <div class="section-title">10. Tanggung Jawab</div>

                       <div class="mb-3">
                         <label class="form-label">Tanggung Jawab 1</label>
                         <input type="text" class="form-control" value="Tersedianya dokumen data jabatan">
                         <input type="text" class="form-control mt-1" placeholder="Uraian Tanggung Jawab 1">
                       </div>

                       <div class="mb-3">
                         <label class="form-label">Tanggung Jawab 2</label>
                         <input type="text" class="form-control" value="Tersajinya hasil telaah suatu jabatan">
                         <input type="text" class="form-control mt-1" placeholder="Uraian Tanggung Jawab 2">
                       </div>

                       <div class="mb-3">
                         <button class="btn btn-sm btn-orange">+ Tambah Tanggung Jawab</button>
                       </div>
                     </div>

                     <!-- WEWENANG -->
                     <div class="form-section">
                       <div class="section-title">11. Wewenang</div>

                       <div class="mb-3">
                         <label class="form-label">Wewenang 1</label>
                         <input type="text" class="form-control" value="Menentukan bahan telaah jabatan">
                         <input type="text" class="form-control mt-1" placeholder="Uraian Wewenang 1">
                       </div>

                       <div class="mb-3">
                         <label class="form-label">Wewenang 2</label>
                         <input type="text" class="form-control" value="Menentukan metode telaah data jabatan">
                       </div>

                       <div class="mb-3">
                         <input type="text" class="form-control" placeholder="Uraian Wewenang 3">
                         <button class="btn btn-sm btn-orange mt-2">+ Tambah Wewenang</button>
                       </div>
                     </div>

                     <!-- KORELASI JABATAN -->
                     <div class="form-section">
                       <div class="section-title">12. Korelasi Jabatan</div>

                       <div class="mb-3">
                         <label class="form-label">Korelasi Jabatan 1</label>
                         <input type="text" class="form-control" value="Menentukan bahan telaah jabatan">
                         <input type="text" class="form-control mt-1" value="Jabatan Administrator">
                         <input type="text" class="form-control mt-1" value="Unit Kerja Intern">
                         <input type="text" class="form-control mt-1" value="Konsultasi pelaksanaan tugas">
                       </div>

                       <div class="mb-3">
                         <label class="form-label">Korelasi Jabatan 2</label>
                         <input type="text" class="form-control" value="Pengawas">
                         <input type="text" class="form-control mt-1" value="Jabatan Fungsional dan Pelaksana Lain">
                         <input type="text" class="form-control mt-1" value="Unit Kerja Intern">
                         <input type="text" class="form-control mt-1" value="Konsultasi pelaksanaan tugas">
                       </div>

                       <div class="mb-3">
                         <button class="btn btn-sm btn-orange">+ Tambah Korelasi Jabatan</button>
                       </div>
                     </div>

                     <!-- KONDISI LINGKUNGAN KERJA -->
                     <div class="form-section">
                       <div class="section-title">13. Kondisi Lingkungan Kerja</div>

                       <div class="mb-3">
                         <label class="form-label">Kondisi 1</label>
                         <input type="text" class="form-control" value="Tempat Kerja">
                         <input type="text" class="form-control mt-1" value="Dalam Ruangan">
                       </div>

                       <div class="mb-3">
                         <label class="form-label">Kondisi 2</label>
                         <input type="text" class="form-control" value="Suhu">
                         <input type="text" class="form-control mt-1" value="Udara Sejuk">
                       </div>

                       <button class="btn btn-sm btn-orange">+ Tambah Kondisi</button>
                     </div>

                   </div>
                 </div>


               </div>
             </div>
             <div class="text-end mt-1">
               <button type="button" class="btn btn-success">Simpan</button>
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
