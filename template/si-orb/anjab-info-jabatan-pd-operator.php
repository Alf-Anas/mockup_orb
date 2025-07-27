 <?php
  $pageTitle = "ANJAB: Info Jabatan - SI-ORB";
  ob_start();

  $data_infojab = [
    [
      'no' => 1,
      'nama_jabatan' => 'Analis Kebijakan',
      'kode_jabatan' => 'JK001',
      'perangkat_daerah' => 'Dinas Pendidikan DKI Jakarta',
      'status_form' => 'FINISH',
      'status_laporan' => 'Menunggu Persetujuan Kepala Perangkat Daerah',
    ],
    [
      'no' => 2,
      'nama_jabatan' => 'Pengelola Data',
      'kode_jabatan' => 'JK002',
      'perangkat_daerah' => 'Dinas Kesehatan DKI Jakarta',
      'status_form' => 'DRAFT',
      'status_laporan' => 'Dalam Pengerjaan',
    ],
    [
      'no' => 3,
      'nama_jabatan' => 'Ahli Pratama - Perencana',
      'kode_jabatan' => 'JK003',
      'perangkat_daerah' => 'Badan Perencanaan Pembangunan Daerah',
      'status_form' => 'FINISH',
      'status_laporan' => 'Menunggu Persetujuan Biro ORB',
    ],
    [
      'no' => 4,
      'nama_jabatan' => 'Staff Administrasi',
      'kode_jabatan' => 'JK004',
      'perangkat_daerah' => 'Dinas Sosial DKI Jakarta',
      'status_form' => 'DRAFT',
      'status_laporan' => 'Dalam Pengerjaan',
    ],
    [
      'no' => 5,
      'nama_jabatan' => 'Analis Kepegawaian',
      'kode_jabatan' => 'JK005',
      'perangkat_daerah' => 'BKD DKI Jakarta',
      'status_form' => 'FINISH',
      'status_laporan' => 'Menunggu Persetujuan Kepala Perangkat Daerah',
    ],
    [
      'no' => 6,
      'nama_jabatan' => 'Penyusun Program',
      'kode_jabatan' => 'JK006',
      'perangkat_daerah' => 'Dinas Perhubungan DKI Jakarta',
      'status_form' => 'FINISH',
      'status_laporan' => 'Selesai',
    ],
    [
      'no' => 7,
      'nama_jabatan' => 'Pengawas Konstruksi',
      'kode_jabatan' => 'JK007',
      'perangkat_daerah' => 'Dinas Bina Marga DKI Jakarta',
      'status_form' => 'FINISH',
      'status_laporan' => 'Menunggu Persetujuan Kepala Biro ORB',
    ],
    [
      'no' => 8,
      'nama_jabatan' => 'Petugas Pengaduan Masyarakat',
      'kode_jabatan' => 'JK008',
      'perangkat_daerah' => 'Dinas Komunikasi dan Informatika DKI Jakarta',
      'status_form' => 'DRAFT',
      'status_laporan' => 'Dalam Pengerjaan',
    ],
    [
      'no' => 9,
      'nama_jabatan' => 'Auditor Ahli Muda',
      'kode_jabatan' => 'JK009',
      'perangkat_daerah' => 'Inspektorat Provinsi DKI Jakarta',
      'status_form' => 'FINISH',
      'status_laporan' => 'Menunggu Persetujuan Kepala Perangkat Daerah',
    ],
  ];

  ?>

 <div class="page-body">
   <div class="container-fluid">
     <div class="page-title">
       <div class="row">
         <div class="col-sm-6">
           <h3>Info Jabatan</h3>
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
               Info Jabatan
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
               <a class="btn btn-primary f-w-500" href="./anjab-info-jabatan-pd-operator-create.php">
                 <i class="fa-solid fa-plus pe-2"></i>Tambah Data</a>
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
                       <th><span class="c-o-light f-w-600">Nama Jabatan</span></th>
                       <th><span class="c-o-light f-w-600">Kode Jabatan</span></th>
                       <th><span class="c-o-light f-w-600">Perangkat Daerah</span></th>
                       <th><span class="c-o-light f-w-600">Status Form</span></th>
                       <th><span class="c-o-light f-w-600">Status Laporan</span></th>
                       <th><span class="c-o-light f-w-600">Aksi</span></th>
                     </tr>
                   </thead>
                   <tbody>
                     <?php foreach ($data_infojab as $item): ?>
                       <tr class="product-removes inbox-data">
                         <td></td>
                         <td>
                           <p><?= $item['no'] ?></p>
                         </td>
                         <td>
                           <p><?= $item['nama_jabatan'] ?></p>
                         </td>
                         <td>
                           <p class="f-light"><?= $item['kode_jabatan'] ?></p>
                         </td>
                         <td>
                           <p class="f-light"><?= $item['perangkat_daerah'] ?></p>
                         </td>
                         <td>

                           <?php
                            $badgeClassForm = match ($item['status_form']) {
                              'DRAFT' => 'bg-secondary',
                              'FINISH' => 'bg-success',
                              default => 'bg-light text-dark'
                            };
                            ?>
                           <span class="badge <?= $badgeClassForm ?>"><?= $item['status_form'] ?></span>
                         </td>
                         <td>
                           <?php
                            $badgeClassLaporan = match ($item['status_laporan']) {
                              'Dalam Pengerjaan' => 'bg-warning text-dark',
                              'Menunggu Persetujuan Kepala Perangkat Daerah' => 'bg-primary',
                              'Menunggu Persetujuan Biro ORB' => 'bg-secondary',
                              'Menunggu Persetujuan Kepala Biro ORB' => 'bg-info text-dark',
                              'Selesai' => 'bg-success',
                              default => 'bg-light text-dark'
                            };
                            ?>
                           <span class="badge <?= $badgeClassLaporan ?>"><?= $item['status_laporan'] ?></span>
                         </td>
                         <td>
                           <div class="common-align gap-2 justify-content-start">
                             <a href="./anjab-info-jabatan-pd-operator-view.php">
                               <i data-feather="eye" style="width: 18px;"></i>
                             </a>
                             <a href="./anjab-info-jabatan-pd-operator-view.php#edit-<?= urlencode($item['nama_jabatan']) ?>">
                               <i data-feather="edit" style="width: 18px;"></i>
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
 </div>


 <?php
  $pageBody = ob_get_clean();
  include("./layout/index.php");
