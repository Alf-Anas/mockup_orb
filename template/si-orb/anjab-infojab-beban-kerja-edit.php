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
           <div class="card-header pb-0">
             <h5>Detail Jabatan</h5>
           </div>
           <div class="card-body">
             <form>
               <div class="mb-3">
                 <label class="form-label">Nama Jabatan</label>
                 <input type="text" class="form-control" value="Kepala Subbagian Umum" disabled>
               </div>
               <div class="mb-3">
                 <label class="form-label">Kode Jabatan</label>
                 <input type="text" class="form-control" value="JBT-00123" disabled>
               </div>
               <div class="mb-3">
                 <label class="form-label">Perangkat Daerah</label>
                 <input type="text" class="form-control" value="Dinas Pendidikan" disabled>
               </div>
             </form>

             <div class="d-flex justify-content-end mt-3">
               <a href="./anjab-info-jabatan-pd-operator-view.php" class="btn btn-primary btn-sm">Selengkapnya</a>
             </div>

           </div>
         </div>
       </div>
       <div class="col-md-12">
         <div class="card">
           <div class="card-header pb-0">
             <h5>Analisis Beban Kerja</h5>
           </div>
           <div class="card-body">
             <div class="col-md-12">
               <?php
                $editorId = 'editor8';
                $toolbarId = "toolbar8";
                $editorContent = "";
                include './layout/wysiwyg.php';
                ?>
               <div class="text-end mt-1">
                 <button type="button" class="btn btn-success">Simpan</button>
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
