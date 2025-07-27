 <?php
  $pageTitle = "TLPP: Standar Pelayanan - SI-ORB";
  ob_start();

  $data_sp = [
    [
      "nama_layanan" => "Penerbitan KTP Elektronik",
      "unit_pelaksana" => "Dinas Kependudukan dan Catatan Sipil",
      "perangkat_daerah" => "Disdukcapil Kota XYZ",
      "tanggal_ditetapkan" => "2023-01-15",
      "status" => "Aktif",
      "keterangan" => "Layanan pencetakan e-KTP untuk penduduk usia 17+",
    ],
    [
      "nama_layanan" => "Perizinan Usaha Mikro Kecil (IUMK)",
      "unit_pelaksana" => "Dinas Koperasi dan UMKM",
      "perangkat_daerah" => "Dinas Koperasi dan UKM",
      "tanggal_ditetapkan" => "2022-07-10",
      "status" => "Aktif",
      "keterangan" => "Layanan legalitas usaha mikro",
    ],
    [
      "nama_layanan" => "Pembuatan Akta Kelahiran",
      "unit_pelaksana" => "Dinas Kependudukan dan Catatan Sipil",
      "perangkat_daerah" => "Disdukcapil Kabupaten ABC",
      "tanggal_ditetapkan" => "2021-05-20",
      "status" => "Nonaktif",
      "keterangan" => "Sementara ditutup karena sistem migrasi",
    ],
    [
      "nama_layanan" => "Pengajuan Bantuan Sosial Tunai",
      "unit_pelaksana" => "Dinas Sosial",
      "perangkat_daerah" => "Dinas Sosial Provinsi DEF",
      "tanggal_ditetapkan" => "2023-09-01",
      "status" => "Aktif",
      "keterangan" => "Bagi keluarga miskin terdampak pandemi",
    ],
    [
      "nama_layanan" => "Perpanjangan Izin Mendirikan Bangunan (IMB)",
      "unit_pelaksana" => "Dinas Penataan Ruang dan Bangunan",
      "perangkat_daerah" => "Dinas PUPR",
      "tanggal_ditetapkan" => "2020-11-30",
      "status" => "Nonaktif",
      "keterangan" => "Digantikan oleh PBG (Persetujuan Bangunan Gedung)",
    ],
  ];

  ?>

 <div class="page-body">
   <div class="container-fluid">
     <div class="page-title">
       <div class="row">
         <div class="col-sm-6">
           <h3>Standar Pelayanan</h3>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb">
             <li class="breadcrumb-item">
               <a href="./beranda.php">
                 <i data-feather="home"></i>
               </a>
             </li>
             <li class="breadcrumb-item">TLPP</li>
             <li class="breadcrumb-item active">
               Standar Pelayanan
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
                 <label class="form-label">Perangkat Daerah</label>
                 <select class="form-select" aria-label="Select parent category">
                   <option selected="">--- Semua Perangkat Daerah ---</option>
                   <option value="1">PUPR SDA</option>
                   <option value="2">PUPR Bina Marga</option>
                   <option value="3">PUPR LH</option>
                   <option value="4">PUPR Gedung</option>
                 </select>
               </div>
               <div class="col-md-3">
                 <label class="form-label">Status</label>
                 <select class="form-select" aria-label="Select parent category">
                   <option selected="">--- Semua Status ---</option>
                   <option value="1">Aktif</option>
                   <option value="0">Tidak Aktif</option>
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
               <a class="btn btn-primary f-w-500" href="./tlpp-sp-create.php">
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
                       <th><span class="c-o-light f-w-600">Nama Layanan</span></th>
                       <th><span class="c-o-light f-w-600">Unit Pelaksana</span></th>
                       <th><span class="c-o-light f-w-600">Perangkat Daerah</span></th>
                       <th><span class="c-o-light f-w-600">Tanggal Ditetapkan</span></th>
                       <th><span class="c-o-light f-w-600">Status</span></th>
                       <th><span class="c-o-light f-w-600">Keterangan</span></th>
                       <th><span class="c-o-light f-w-600">Aksi</span></th>
                     </tr>
                   </thead>
                   <tbody>
                     <?php foreach ($data_sp as $item): ?>
                       <tr class="product-removes inbox-data">
                         <td></td>
                         <td>
                           <p><?= $item['nama_layanan'] ?></p>
                         </td>
                         <td>
                           <p class="f-light"><?= $item['unit_pelaksana'] ?></p>
                         </td>
                         <td>
                           <p class="f-light"><?= $item['perangkat_daerah'] ?></p>
                         </td>
                         <td>
                           <p class="f-light"><?= $item['tanggal_ditetapkan'] ?></p>
                         </td>
                         <td>
                           <?php
                            $badgeClass = $item['status'] == 'Aktif' ? 'badge-success' : ($item['status'] == 'Tidak Aktif' ? 'badge-danger' : 'badge-secondary');
                            ?>
                           <p class="f-light badge <?= $badgeClass ?>"><?= $item['status'] ?></p>
                         </td>
                         <td>
                           <p class="f-light"><?= $item['keterangan'] ?></p>
                         </td>
                         <td>
                           <div class="common-align gap-2 justify-content-start">
                             <a href="./tlpp-sp-view.php">
                               <i data-feather="eye" style="width: 18px;"></i>
                             </a>
                             <a href="#edit-<?= urlencode($item['nama_layanan']) ?>">
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
 </div>


 <?php
  $pageBody = ob_get_clean();
  include("./layout/index.php");
