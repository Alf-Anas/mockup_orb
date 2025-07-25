 <?php
  $pageTitle = "Admin: Kelola Pengguna - SI-ORB";
  ob_start();

  $users = [
    [
      'username' => 'rudiwijaya',
      'fullname' => 'Rudi Wijaya',
      'instansi' => 'Dinas Pendidikan Kota A',
      'akses' => ['RBBK:VIEW', 'RBBK:EDIT'],
      'created_at' => '2024-12-01 08:00',
      'status' => 'Aktif'
    ],
    [
      'username' => 'ani_safitri',
      'fullname' => 'Ani Safitri',
      'instansi' => 'BKD Provinsi B',
      'akses' => ['RBBK:VIEW'],
      'created_at' => '2025-01-20 09:15',
      'status' => 'Tidak Aktif'
    ],
    [
      'username' => 'agusprasetyo',
      'fullname' => 'Agus Prasetyo',
      'instansi' => 'Inspektorat Kabupaten C',
      'akses' => ['RBBK:EDIT'],
      'created_at' => '2025-02-12 10:45',
      'status' => 'Aktif'
    ]
  ];

  ?>

 <div class="page-body">
   <div class="container-fluid">
     <div class="page-title">
       <div class="row">
         <div class="col-sm-6">
           <h3>Kelola Pengguna</h3>
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
               Kelola Pengguna
             </li>
           </ol>
         </div>
       </div>
     </div>
   </div>
   <!-- Container-fluid starts-->
   <div class="container-fluid user-list-wrapper">
     <div class="row">
       <div class="col-12">
         <div class="card">
           <div
             class="card-header card-no-border text-end">
             <div class="card-header-right-icon">
               <a
                 class="btn btn-primary f-w-500"
                 href="./admin-tambah-pengguna.php"><i
                   class="fa-solid fa-plus pe-2"></i>Tambah</a>
             </div>
           </div>
           <div class="card-body pt-0 px-0">
             <div
               class="list-product user-list-table">
               <div
                 class="table-responsive custom-scrollbar">
                 <table class="table" id="roles-permission">
                   <thead>
                     <tr>
                       <th></th>
                       <th><span class="c-o-light f-w-600">Nama Pengguna</span></th>
                       <th><span class="c-o-light f-w-600">Nama Lengkap</span></th>
                       <th><span class="c-o-light f-w-600">Instansi</span></th>
                       <th><span class="c-o-light f-w-600">Hak Akses</span></th>
                       <th><span class="c-o-light f-w-600">Tanggal Dibuat</span></th>
                       <th><span class="c-o-light f-w-600">Status</span></th>
                       <th><span class="c-o-light f-w-600">Aksi</span></th>
                     </tr>
                   </thead>
                   <tbody>
                     <?php foreach ($users as $user): ?>
                       <tr class="product-removes inbox-data">
                         <td></td>
                         <td><a href="./admin-tambah-pengguna.php?u="><?= htmlspecialchars($user['username']) ?></a></td>
                         <td>
                           <p><?= htmlspecialchars($user['fullname']) ?></p>
                         </td>
                         <td>
                           <p><?= htmlspecialchars($user['instansi']) ?></p>
                         </td>
                         <td>
                           <p><?= htmlspecialchars(implode(', ', $user['akses'])) ?></p>
                         </td>
                         <td>
                           <p><?= date('d M Y, H:i', strtotime($user['created_at'])) ?></p>
                         </td>
                         <td>
                           <span class="badge <?= $user['status'] == 'Aktif' ? 'badge-light-success' : 'badge-light-danger' ?>">
                             <?= $user['status'] ?>
                           </span>
                         </td>
                         <td>
                           <div class="common-align gap-2 justify-content-start">
                             <a href="./admin-tambah-pengguna.php?u=<?= urlencode($user['username']) ?>">
                               <i data-feather="eye" style="width: 18px;"></i>
                             </a>
                             <a href="./admin-tambah-pengguna.php?=<?= urlencode($user['username']) ?>">
                               <i data-feather="edit" style="width: 18px;"></i>
                             </a>
                             <a href="#">
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
