 <?php
  $pageTitle = "RBBK: Master Data Akuntabilitas - SI-ORB";
  ob_start();


  $normalizedIku = [
    [
      "tujuan" => "Terwujudnya Regenerasi Kota yang Berketahanan dan Berkelanjutan",
      "sasaran" => "",
      "iku" => "Indeks Kota Layak Huni",
      "satuan" => "Indeks",
      "target" => 80,
      "realisasi" => 75,
      "capaian" => 93.75
    ],
    [
      "tujuan" => "",
      "sasaran" => "Terbangunnya Infrasstruktur dan Layanan Dasar Perkotaan yang berkualitas",
      "iku" => "Persentase pemenuhan layanan dasar perkotaan",
      "satuan" => "%",
      "target" => 90,
      "realisasi" => 85,
      "capaian" => 94.44
    ],
    [
      "tujuan" => "",
      "sasaran" => "Tercapainya perbaikan pola aktifitas dan mobilitas melalui pengembangan kota berorientasi transit",
      "iku" => "Persentase perjalanan penduduk menggunakan moda transportasi publik",
      "satuan" => "%",
      "target" => 40,
      "realisasi" => 38,
      "capaian" => 95
    ],
    [
      "tujuan" => "",
      "sasaran" => "Tercapainya pemulihan ekosistem kota dan implementasi pembangunan rendah karbon",
      "iku" => "Indeks kualitas lingkungan hidup",
      "satuan" => "Indeks",
      "target" => 72,
      "realisasi" => 70,
      "capaian" => 97.22
    ],
    [
      "tujuan" => "",
      "sasaran" => "Meningkatnya stabilitas dan ketahanan kota",
      "iku" => "Persentase penurunan emisi gas rumah kaca",
      "satuan" => "%",
      "target" => 10,
      "realisasi" => 8,
      "capaian" => 80
    ],
    [
      "tujuan" => "Terbangunnya perekonomian inklusif yang berdaya saing disertai penghidupan layak dan pemerataan kesejahteraan",
      "sasaran" => "",
      "iku" => "Indeks Pembangunan Ekonomi Inklusif",
      "satuan" => "Indeks",
      "target" => 0.75,
      "realisasi" => 0.70,
      "capaian" => 93.33
    ],
    [
      "tujuan" => "",
      "sasaran" => "Tumbuhnya ekonomi dan sektor usaha berbasis pengalaman dan nilai tambah",
      "iku" => "Laju pertumbuhan ekonomi",
      "satuan" => "%",
      "target" => 5.5,
      "realisasi" => 5.0,
      "capaian" => 90.91
    ],
    [
      "tujuan" => "",
      "sasaran" => "Meningkatnya kesempatan kerja dan adaptabilitas tenaga kerja",
      "iku" => "Tingkat pengangguran terbuka (Periode Agustus)",
      "satuan" => "%",
      "target" => 6.0,
      "realisasi" => 6.5,
      "capaian" => 92.31
    ],
    [
      "tujuan" => "",
      "sasaran" => "Berkurangnya ketimpangan serta terjaminnya pemenuhan kebutuhan dasar dan perlindungan sosial",
      "iku" => "Rasio Gini",
      "satuan" => "Rasio",
      "target" => 0.38,
      "realisasi" => 0.39,
      "capaian" => 97.44
    ],
    [
      "tujuan" => "",
      "sasaran" => "",
      "iku" => "Tingkat Kemiskinan",
      "satuan" => "%",
      "target" => 9,
      "realisasi" => 9.5,
      "capaian" => 94.74
    ],
    [
      "tujuan" => "",
      "sasaran" => "",
      "iku" => "Tingkat Kemiskinan Ektrem",
      "satuan" => "%",
      "target" => 3,
      "realisasi" => 2.5,
      "capaian" => 100
    ],
    [
      "tujuan" => "",
      "sasaran" => "Menguatnya Daya Saing Kota melalui Inovasi dan Kolaborasi",
      "iku" => "Indeks Daya Saing Daerah",
      "satuan" => "Indeks",
      "target" => 70,
      "realisasi" => 66,
      "capaian" => 94.29
    ]
  ];
  ?>

 <div class="page-body">
   <div class="container-fluid">
     <div class="page-title">
       <div class="row">
         <div class="col-sm-6">
           <h3>Data Capaian Akuntabilitas</h3>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb">
             <li class="breadcrumb-item">
               <a href="./beranda.php">
                 <i data-feather="home"></i>
               </a>
             </li>
             <li class="breadcrumb-item">RBBK</li>
             <li class="breadcrumb-item">
               Akuntabilitas
             </li>
             <li class="breadcrumb-item active">
               Data Capaian Akuntabilitas
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
               <div style="color: transparent;">-</div>
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
                       <th>-</th>
                       <th><span class="c-o-light f-w-600">NO</span></th>
                       <th><span class="c-o-light f-w-600">TUJUAN/SASARAN</span></th>
                       <th><span class="c-o-light f-w-600">INDIKATOR KINERJA UTAMA (IKU)</span></th>
                       <th><span class="c-o-light f-w-600">SATUAN</span></th>
                       <th><span class="c-o-light f-w-600">TARGET</span></th>
                       <th><span class="c-o-light f-w-600">REALISASI</span></th>
                       <th><span class="c-o-light f-w-600">CAPAIAN</span></th>
                       <th><span class="c-o-light f-w-600">AKSI</span></th>
                     </tr>
                   </thead>
                   <tbody>
                     <?php $nomor = 0 ?>
                     <?php foreach ($normalizedIku as $index => $iku): ?>
                       <?php if (!empty($iku["tujuan"])) $nomor++; ?>
                       <tr class="product-removes inbox-data">
                         <td></td>
                         <td></td>
                         <td>
                           <?php if (!empty($iku["tujuan"])): ?>
                             <?= $nomor; ?>
                           <?php else: ?>
                           <?php endif; ?>
                         </td>
                         <td><?= !empty($iku["tujuan"]) ? $iku["tujuan"] : "-- " . $iku["sasaran"] ?></td>
                         <td><?= $iku["iku"] ?></td>
                         <td><?= $iku["satuan"] ?></td>
                         <td><?= $iku["target"] ?></td>
                         <td><?= $iku["realisasi"] ?></td>
                         <td><?= $iku["capaian"] ?></td>
                         <td>
                           <div class="common-align gap-2 justify-content-start">
                             <a href="#">
                               <i data-feather="eye" style="width: 18px;"></i>
                             </a>
                             <a href="#">
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
