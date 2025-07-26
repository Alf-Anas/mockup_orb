 <?php
  $pageTitle = "RBBK: LKIP Perangkat Daerah - SI-ORB";
  ob_start();

  $data_lkip = [
    [
      'judul' => 'LKIP PD A',
      'perangkat_daerah' => 'PUPR SDA',
      'tahun' => 2025,
      'keterangan' => '',
      'status' => 'Aktif',
      'tanggal_unggah' => '2025-07-25 20:15',
      'gambar' => '../../assets/images/dashboard-8/product-categories/phone.png'
    ],
    [
      'judul' => 'LKIP PD B',
      'perangkat_daerah' => 'PUPR Bina Marga',
      'tahun' => 2025,
      'keterangan' => '',
      'status' => 'Tidak Aktif',
      'tanggal_unggah' => '2025-07-20 10:30',
      'gambar' => '../../assets/images/product/11.png'
    ]
  ];

  ?>

 <div class="page-body">
   <div class="container-fluid">
     <div class="page-title">
       <div class="row">
         <div class="col-sm-6">
           <h3>Repository LKIP Perangkat Daerah</h3>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb">
             <li class="breadcrumb-item">
               <a href="./beranda.php">
                 <i data-feather="home"></i>
               </a>
             </li>
             <li class="breadcrumb-item">RBBK</li>
             <li class="breadcrumb-item active">
               LKIP Perangkat Daerah
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
                 <label class="form-label">Tahun</label>
                 <select class="form-select" aria-label="Select parent category">
                   <option selected="">--- Semua Tahun ---</option>
                   <option value="2025">2025</option>
                   <option value="2024">2024</option>
                   <option value="2023">2023</option>
                   <option value="2022">2022</option>
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
               <a class="btn btn-primary f-w-500" href="./rbbk-lkip-create.php">
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
                       <th><span class="c-o-light f-w-600">Judul</span></th>
                       <th><span class="c-o-light f-w-600">Perangkat Daerah</span></th>
                       <th><span class="c-o-light f-w-600">Tahun</span></th>
                       <th><span class="c-o-light f-w-600">Keterangan</span></th>
                       <th><span class="c-o-light f-w-600">Status</span></th>
                       <th><span class="c-o-light f-w-600">Tanggal Unggah</span></th>
                       <th><span class="c-o-light f-w-600">Aksi</span></th>
                     </tr>
                   </thead>
                   <tbody>
                     <?php foreach ($data_lkip as $item): ?>
                       <tr class="product-removes inbox-data">
                         <td></td>
                         <td>
                           <div class="product-names">
                             <div class="light-product-box">
                               <img class="img-fluid" src="<?= $item['gambar'] ?>" alt="thumbnail">
                             </div>
                             <p><?= $item['judul'] ?></p>
                           </div>
                         </td>
                         <td>
                           <p class="f-light"><?= $item['perangkat_daerah'] ?></p>
                         </td>
                         <td>
                           <p class="f-light"><?= $item['tahun'] ?></p>
                         </td>
                         <td>
                           <p class="f-light"><?= $item['keterangan'] ?></p>
                         </td>
                         <td>
                           <?php
                            $badgeClass = $item['status'] == 'Aktif' ? 'badge-success' : ($item['status'] == 'Tidak Aktif' ? 'badge-danger' : 'badge-secondary');
                            ?>
                           <p class="f-light badge <?= $badgeClass ?>"><?= $item['status'] ?></p>
                         </td>
                         <td>
                           <p class="f-light"><?= $item['tanggal_unggah'] ?></p>
                         </td>
                         <td>
                           <div class="common-align gap-2 justify-content-start">
                             <a href="./rbbk-lkip-view.php">
                               <i data-feather="eye" style="width: 18px;"></i>
                             </a>
                             <a href="#edit-<?= urlencode($item['judul']) ?>">
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
