 <?php
  $pageTitle = "ANJAB: Formasi Jabatan - SI-ORB";
  ob_start();

  $formasiJabatan = [
    ["no" => "1", "perangkat_daerah" => "Dinas Kesehatan DKI Jakarta", "kategori_jabatan" => "Jabatan Fungsional", "nama_jabatan" => "Dokter Umum"],
    ["no" => "2", "perangkat_daerah" => "Dinas Pendidikan DKI Jakarta", "kategori_jabatan" => "Jabatan Fungsional", "nama_jabatan" => "Guru Matematika"],
    ["no" => "3", "perangkat_daerah" => "Badan Perencanaan Pembangunan Daerah", "kategori_jabatan" => "Jabatan Struktural", "nama_jabatan" => "Kepala Subbagian Perencanaan"],
    ["no" => "4", "perangkat_daerah" => "Dinas Lingkungan Hidup DKI Jakarta", "kategori_jabatan" => "Jabatan Teknis", "nama_jabatan" => "Analis Pengelolaan Sampah"],
    ["no" => "5", "perangkat_daerah" => "Dinas Perhubungan DKI Jakarta", "kategori_jabatan" => "Jabatan Pelaksana", "nama_jabatan" => "Petugas Lalu Lintas"],
    ["no" => "6", "perangkat_daerah" => "Badan Kepegawaian Daerah", "kategori_jabatan" => "Jabatan Struktural", "nama_jabatan" => "Kasubbag Kepegawaian"],
    ["no" => "7", "perangkat_daerah" => "Sekretariat Daerah", "kategori_jabatan" => "Jabatan Pimpinan Tinggi", "nama_jabatan" => "Sekretaris Daerah"],
  ];

  // Ekstrak unique value untuk select option
  $perangkatDaerahList = array_unique(array_column($formasiJabatan, 'perangkat_daerah'));
  $kategoriJabatanList = array_unique(array_column($formasiJabatan, 'kategori_jabatan'));
  $namaJabatanList = array_unique(array_column($formasiJabatan, 'nama_jabatan'));

  ?>

 <div class="page-body">
   <div class="container-fluid">
     <div class="page-title">
       <div class="row">
         <div class="col-sm-6">
           <h3>Formasi Jabatan</h3>
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
               Formasi Jabatan
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
                 <label class="form-label">Wilayah Kerja Perangkat Daerah</label>
                 <select class="form-select" aria-label="Select parent category">
                   <option selected="">--- Semua Wilayah Kerja ---</option>
                   <option value="jakarta-pusat">Kota Administrasi Jakarta Pusat</option>
                   <option value="jakarta-utara">Kota Administrasi Jakarta Utara</option>
                   <option value="jakarta-barat">Kota Administrasi Jakarta Barat</option>
                   <option value="jakarta-selatan">Kota Administrasi Jakarta Selatan</option>
                   <option value="jakarta-timur">Kota Administrasi Jakarta Timur</option>
                   <option value="kepulauan-seribu">Kabupaten Administrasi Kepulauan Seribu</option>
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
                       <th><span class="c-o-light f-w-600">Perangkat Daerah</span></th>
                       <th><span class="c-o-light f-w-600">Kategori</span></th>
                       <th><span class="c-o-light f-w-600">Nama Jabatan</span></th>
                       <th><span class="c-o-light f-w-600">Aksi</span></th>
                     </tr>
                   </thead>
                   <tbody>
                     <?php foreach ($formasiJabatan as $item): ?>
                       <tr class="product-removes inbox-data">
                         <td></td>
                         <td>
                           <p><?= $item['no'] ?></p>
                         </td>
                         <td>
                           <p class="f-light"><?= $item['perangkat_daerah'] ?></p>
                         </td>
                         <td>
                           <p class="f-light"><?= $item['kategori_jabatan'] ?></p>
                         </td>
                         <td>
                           <p><?= $item['nama_jabatan'] ?></p>
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
                   <!-- Select Perangkat Daerah -->
                   <div class="col-12">
                     <label class="form-label">Perangkat Daerah</label>
                     <select class="form-select" aria-label="Select perangkat daerah">
                       <option selected disabled>--- Pilih Perangkat Daerah ---</option>
                       <?php foreach ($perangkatDaerahList as $pd): ?>
                         <option value="<?= htmlspecialchars($pd) ?>"><?= $pd ?></option>
                       <?php endforeach; ?>
                     </select>
                   </div>

                   <!-- Select Kategori Jabatan -->
                   <div class="col-12">
                     <label class="form-label">Kategori Jabatan</label>
                     <select class="form-select" aria-label="Select kategori jabatan">
                       <option selected disabled>--- Pilih Kategori Jabatan ---</option>
                       <?php foreach ($kategoriJabatanList as $kat): ?>
                         <option value="<?= htmlspecialchars($kat) ?>"><?= $kat ?></option>
                       <?php endforeach; ?>
                     </select>
                   </div>

                   <!-- Select Nama Jabatan -->
                   <div class="col-12">
                     <label class="form-label">Nama Jabatan</label>
                     <select class="form-select" aria-label="Select nama jabatan">
                       <option selected disabled>--- Pilih Nama Jabatan ---</option>
                       <?php foreach ($namaJabatanList as $jab): ?>
                         <option value="<?= htmlspecialchars($jab) ?>"><?= $jab ?></option>
                       <?php endforeach; ?>
                     </select>
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
