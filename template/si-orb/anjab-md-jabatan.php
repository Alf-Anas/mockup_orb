 <?php
  $pageTitle = "ANJAB: Jabatan - SI-ORB";
  ob_start();

  $jabatanList = [
    ["no" => 1, "nama_jabatan" => "Analis Kebijakan Ahli Muda", "kelas_jabatan" => 9, "kode_jabatan" => "JBT-001"],
    ["no" => 2, "nama_jabatan" => "Pranata Komputer", "kelas_jabatan" => 8, "kode_jabatan" => "JBT-002"],
    ["no" => 3, "nama_jabatan" => "Pengelola Data dan Informasi", "kelas_jabatan" => 7, "kode_jabatan" => "JBT-003"],
    ["no" => 4, "nama_jabatan" => "Verifikator Keuangan", "kelas_jabatan" => 6, "kode_jabatan" => "JBT-004"],
    ["no" => 5, "nama_jabatan" => "Penyusun Laporan", "kelas_jabatan" => 7, "kode_jabatan" => "JBT-005"],
    ["no" => 6, "nama_jabatan" => "Analis Sumber Daya Manusia", "kelas_jabatan" => 9, "kode_jabatan" => "JBT-006"],
    ["no" => 7, "nama_jabatan" => "Koordinator Evaluasi Kinerja", "kelas_jabatan" => 10, "kode_jabatan" => "JBT-007"],
    ["no" => 8, "nama_jabatan" => "Penyusun Program dan Anggaran", "kelas_jabatan" => 8, "kode_jabatan" => "JBT-008"],
    ["no" => 9, "nama_jabatan" => "Pengelola Layanan Administrasi", "kelas_jabatan" => 6, "kode_jabatan" => "JBT-009"],
    ["no" => 10, "nama_jabatan" => "Analis Pelaporan Kinerja", "kelas_jabatan" => 9, "kode_jabatan" => "JBT-010"],
    ["no" => 11, "nama_jabatan" => "Staf Administrasi Umum", "kelas_jabatan" => 5, "kode_jabatan" => "JBT-011"],
    ["no" => 12, "nama_jabatan" => "Pengelola Sarana dan Prasarana", "kelas_jabatan" => 6, "kode_jabatan" => "JBT-012"],
    ["no" => 13, "nama_jabatan" => "Analis Sistem Informasi", "kelas_jabatan" => 8, "kode_jabatan" => "JBT-013"],
    ["no" => 14, "nama_jabatan" => "Arsiparis", "kelas_jabatan" => 6, "kode_jabatan" => "JBT-014"],
    ["no" => 15, "nama_jabatan" => "Analis Organisasi dan Tata Laksana", "kelas_jabatan" => 9, "kode_jabatan" => "JBT-015"],
  ];

  ?>

 <div class="page-body">
   <div class="container-fluid">
     <div class="page-title">
       <div class="row">
         <div class="col-sm-6">
           <h3>Jabatan</h3>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb">
             <li class="breadcrumb-item">
               <a href="./beranda.php">
                 <i data-feather="home"></i>
               </a>
             </li>
             <li class="breadcrumb-item">ANJAB</li>
             <li class="breadcrumb-item active">
               Jabatan
             </li>
           </ol>
         </div>
       </div>
     </div>
   </div>
   <!-- Container-fluid starts-->
   <div class="container-fluid e-category">
     <div class="row">
       <div class="col-12">
         <div class="card">
           <div class="card-body">
             <div class="row g-3">
               <div class="col-md-3">
                 <label class="form-label">Kelas Jabatan</label>
                 <select class="form-select" aria-label="Select parent category">
                   <option selected="">--- Semua Kelas Jabatan ---</option>
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
                 </select>
               </div>
               <div class="col-md-2">
                 <label class="form-label" style="color: transparent">-</label>
                 <div class="col d-flex justify-content-start align-items-center">
                   <a class="btn btn-primary" href="#!">Filter</a>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="col-sm-12">
         <div class="card">
           <div class="card-header card-no-border text-end">
             <div class="card-header-right-icon">
               <button
                 class="btn btn-primary f-w-500"
                 type="button"
                 data-bs-toggle="modal"
                 data-bs-target="#exampleModalCenter1">
                 <i class="fa-solid fa-plus pe-2"></i>Tambah
               </button>
             </div>
           </div>
           <div class="card-body px-0 pt-0">
             <div class="list-product list-category">
               <div class="recent-table table-responsive custom-scrollbar">
                 <table class="table" id="project-status">
                   <thead>
                     <tr>
                       <th></th>
                       <th><span class="c-o-light f-w-600">No</span></th>
                       <th><span class="c-o-light f-w-600">Kode Jabatan</span></th>
                       <th><span class="c-o-light f-w-600">Nama Jabatan</span></th>
                       <th><span class="c-o-light f-w-600">Kelas Jabatan</span></th>
                       <th><span class="c-o-light f-w-600">Aksi</span></th>
                     </tr>
                   </thead>
                   <tbody>
                     <?php foreach ($jabatanList as $item): ?>
                       <tr class="product-removes inbox-data">
                         <td></td>
                         <td>
                           <p><?= $item['no'] ?></p>
                         </td>
                         <td>
                           <p class="f-light"><?= $item['kode_jabatan'] ?></p>
                         </td>
                         <td>
                           <p><?= $item['nama_jabatan'] ?></p>
                         </td>
                         <td>
                           <p class="f-light"><?= $item['kelas_jabatan'] ?></p>
                         </td>
                         <td>
                           <div class="common-align gap-2 justify-content-start">
                             <a href="#edit-<?= urlencode($item['nama_jabatan']) ?>"
                               data-bs-toggle="modal"
                               data-bs-target="#exampleModalCenter1">
                               <i data-feather="edit" style="width: 18px;"></i>
                             </a>
                             <a class="trash-3" href="#!">
                               <i data-feather="trash" style="width: 18px;"></i>
                             </a>
                           </div>
                         </td>
                       </tr>
                     <?php endforeach; ?>
                   </tbody>
                 </table>
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
             Tambah
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
                     <label class="form-label" for="projectName">Kode Jabatan</label>
                     <input class="form-control" id="projectName" type="text" placeholder="..." required="">
                   </div>

                   <div class="col-12">
                     <label class="form-label" for="projectName">Nama Jabatan</label>
                     <input class="form-control" id="projectName" type="text" placeholder="..." required="">
                   </div>

                   <div class="col-12">
                     <label class="form-label" for="projectName">Kelas Jabatan</label>
                     <input class="form-control" id="projectName" type="number" placeholder="..." required="">
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
             class="btn btn-primary"
             type="button"
             data-bs-dismiss="modal">
             Simpan
           </button>
         </div>
       </div>
     </div>
   </div>

 </div>


 <?php
  $pageBody = ob_get_clean();
  include("./layout/index.php");
