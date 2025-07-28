 <?php
  $pageTitle = "Kelembagaan: Unit Kerja Perangkat Daerah - SI-ORB";
  ob_start();

  $kategoriJabatan = [
    ["no" => 1, "nama" => "Unit A"],
    ["no" => 2, "nama" => "Unit B"],
    ["no" => 3, "nama" => "Unit C"],
    ["no" => 4, "nama" => "Unit D"],
    ["no" => 5, "nama" => "Unit E"],
  ];

  ?>

 <div class="page-body">
   <div class="container-fluid">
     <div class="page-title">
       <div class="row">
         <div class="col-sm-6">
           <h3>Unit Kerja Perangkat Daerah (UKPD)</h3>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb">
             <li class="breadcrumb-item">
               <a href="./beranda.php">
                 <i data-feather="home"></i>
               </a>
             </li>
             <li class="breadcrumb-item">Kelembagaan</li>
             <li class="breadcrumb-item active">
               Unit Kerja Perangkat Daerah
             </li>
           </ol>
         </div>
       </div>
     </div>
   </div>
   <!-- Container-fluid starts-->
   <div class="container-fluid e-category">
     <div class="row">
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
                       <th><span class="c-o-light f-w-600">Nama</span></th>
                       <th><span class="c-o-light f-w-600">Aksi</span></th>
                     </tr>
                   </thead>
                   <tbody>
                     <?php foreach ($kategoriJabatan as $item): ?>
                       <tr class="product-removes inbox-data">
                         <td></td>
                         <td>
                           <p><?= $item['no'] ?></p>
                         </td>
                         <td>
                           <p><?= $item['nama'] ?></p>
                         </td>
                         <td>
                           <div class="common-align gap-2 justify-content-start">
                             <a href="#edit-<?= urlencode($item['nama']) ?>"
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
                     <label class="form-label" for="projectName">Unit Kerja Perangkat Daerah</label>
                     <input class="form-control" id="projectName" type="text" placeholder="..." required="">
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
