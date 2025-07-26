 <?php
  $pageTitle = "RBBK: Master Data Akuntabilitas - SI-ORB";
  ob_start();

  $defaultIku = [
    [
      "text" => "Terwujudnya Regenerasi Kota yang Berketahanan dan Berkelanjutan",
      "ikus" => [
        "Indeks Kota Layak Huni"
      ],
      "sasaran" => [
        [
          "text" => "Terbangunnya Infrasstruktur dan Layanan Dasar Perkotaan yang berkualitas",
          "ikus" => [
            "Persentase pemenuhan layanan dasar perkotaan"
          ]
        ],
        [
          "text" => "Tercapainya perbaikan pola aktifitas dan mobilitas melalui pengembangan kota berorientasi transit",
          "ikus" => [
            "Persentase perjalanan penduduk menggunakan moda transportasi publik"
          ]
        ],
        [
          "text" => "Tercapainya pemulihan ekosistem kota dan implementasi pembangunan rendah karbon",
          "ikus" => [
            "Indeks kualitas lingkungan hidup"
          ]
        ],
        [
          "text" => "Meningkatnya stabilitas dan ketahanan kota",
          "ikus" => [
            "Persentase penurunan emisi gas rumah kaca"
          ]
        ]
      ]
    ],
    [
      "text" => "Terbangunnya perekonomian inklusif yang berdaya saing disertai penghidupan layak dan pemerataan kesejahteraan",
      "ikus" => [
        "Indeks Pembangunan Ekonomi Inklusif"
      ],
      "sasaran" => [
        [
          "text" => "Tumbuhnya ekonomi dan sektor usaha berbasis pengalaman dan nilai tambah",
          "ikus" => [
            "Laju pertumbuhan ekonomi"
          ]
        ],
        [
          "text" => "Meningkatnya kesempatan kerja dan adaptabilitas tenaga kerja",
          "ikus" => [
            "Tingkat pengangguran terbuka (Periode Agustus)"
          ]
        ],
        [
          "text" => "Berkurangnya ketimpangan serta terjaminnya pemenuhan kebutuhan dasar dan perlindungan sosial",
          "ikus" => [
            "Rasio Gini",
            "Tingkat Kemiskinan",
            "Tingkat Kemiskinan Ektrem"
          ]
        ],
        [
          "text" => "Menguatnya Daya Saing Kota melalui Inovasi dan Kolaborasi",
          "ikus" => [
            "Indeks Daya Saing Daerah"
          ]
        ]
      ]
    ]
  ];

  $normalizedIku = [
    [
      "tujuan" => "Terwujudnya Regenerasi Kota yang Berketahanan dan Berkelanjutan",
      "sasaran" => "",
      "iku" => "Indeks Kota Layak Huni"
    ],
    [
      "tujuan" => "",
      "sasaran" => "Terbangunnya Infrasstruktur dan Layanan Dasar Perkotaan yang berkualitas",
      "iku" => "Persentase pemenuhan layanan dasar perkotaan"
    ],
    [
      "tujuan" => "",
      "sasaran" => "Tercapainya perbaikan pola aktifitas dan mobilitas melalui pengembangan kota berorientasi transit",
      "iku" => "Persentase perjalanan penduduk menggunakan moda transportasi publik"
    ],
    [
      "tujuan" => "",
      "sasaran" => "Tercapainya pemulihan ekosistem kota dan implementasi pembangunan rendah karbon",
      "iku" => "Indeks kualitas lingkungan hidup"
    ],
    [
      "tujuan" => "",
      "sasaran" => "Meningkatnya stabilitas dan ketahanan kota",
      "iku" => "Persentase penurunan emisi gas rumah kaca"
    ],
    [
      "tujuan" => "Terbangunnya perekonomian inklusif yang berdaya saing disertai penghidupan layak dan pemerataan kesejahteraan",
      "sasaran" => "",
      "iku" => "Indeks Pembangunan Ekonomi Inklusif"
    ],
    [
      "tujuan" => "",
      "sasaran" => "Tumbuhnya ekonomi dan sektor usaha berbasis pengalaman dan nilai tambah",
      "iku" => "Laju pertumbuhan ekonomi"
    ],
    [
      "tujuan" => "",
      "sasaran" => "Meningkatnya kesempatan kerja dan adaptabilitas tenaga kerja",
      "iku" => "Tingkat pengangguran terbuka (Periode Agustus)"
    ],
    [
      "tujuan" => "",
      "sasaran" => "Berkurangnya ketimpangan serta terjaminnya pemenuhan kebutuhan dasar dan perlindungan sosial",
      "iku" => "Rasio Gini"
    ],
    [
      "tujuan" => "",
      "sasaran" => "",
      "iku" => "Tingkat Kemiskinan"
    ],
    [
      "tujuan" => "",
      "sasaran" => "",
      "iku" => "Tingkat Kemiskinan Ektrem"
    ],
    [
      "tujuan" => "",
      "sasaran" => "Menguatnya Daya Saing Kota melalui Inovasi dan Kolaborasi",
      "iku" => "Indeks Daya Saing Daerah"
    ]
  ];


  ?>

 <div class="page-body">
   <div class="container-fluid">
     <div class="page-title">
       <div class="row">
         <div class="col-sm-6">
           <h3>Master Data Akuntabilitas</h3>
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
               Master Data
             </li>
           </ol>
         </div>
       </div>
     </div>
   </div>
   <!-- Container-fluid starts-->
   <div class="container-fluid">
     <div class="row">
       <!-- Card for Visi -->
       <div class="col-md-12">
         <div class="card">
           <div class="card-header pb-0">
             <h5><i class="feather icon-eye me-2"></i>Visi</h5>
           </div>
           <div class="card-body">
             <div class="col-md-12">
               <?php
                $editorId = 'editor8';
                $toolbarId = "toolbar8";
                $editorContent = "Jakarta kota maju, lestari dan berbudaya yang warganya terlibat dalam mewujudkan keberadaban, keadilan dan kesejahteraan bagi semua.";
                include './layout/wysiwyg.php';
                ?>
               <div class="text-end">
                 <button type="button" class="btn btn-success">Simpan</button>
               </div>
             </div>
           </div>
         </div>
       </div>

       <!-- Card for Misi -->
       <div class="col-md-12">
         <div class="card">
           <div class="card-header pb-0">
             <h5><i class="feather icon-target me-2"></i>Misi</h5>
           </div>
           <div class="card-body">
             <div class="col-md-12">
               <?php
                $editorId = 'editor4';
                $toolbarId = "toolbar4";
                $editorContent = "✅ Menjadikan Jakarta kota yang aman, sehat, cerdas, berbudaya, dengan memperkuat nilai-nilai keluarga dan memberikan ruang kreativitas melalui kepemimpinan yang melibatkan, menggerakkan dan memanusiakan.\n
✅ Menjadikan Jakarta kota yang memajukan kesejahteraan umum melalui terciptanya lapangan kerja, kestabilan dan keterjangkauan kebutuhan pokok, meningkatnya keadilan sosial, percepatan pembangunan infrastruktur, kemudahan investasi dan berbisnis, serta perbaikan pengelolaan tata ruang.\n
✅ Menjadikan Jakarta tempat wahana aparatur negara yang berkarya, mengabdi, melayani, serta menyelesaikan berbagai permasalahan kota dan warga, secara efektif, meritokratis dan berintegritas.\n
✅ Menjadikan Jakarta kota yang lestari, dengan pembangunan dan tata kehidupan yang memperkuat daya dukung lingkungan dan sosial.\n
✅ Menjadikan Jakarta ibukota yang dinamis sebagai simpul kemajuan Indonesia yang bercirikan keadilan, kebangsaan dan kebhinekaan.";
                include './layout/wysiwyg.php';
                ?>
               <div class="text-end">
                 <button type="button" class="btn btn-success">Simpan</button>
               </div>
             </div>
           </div>
         </div>
       </div>

       <div class="col-12">
         <div class="card">
           <div class="card-header">
             <h5>Tujuan, Sasaran, dan IKU</h5>
           </div>
           <div class="card-body">
             <div class="row">
               <div class="col-lg-8 col-12">
                 <div id="tree-container" class="mb-3"></div>
                 <button class="btn btn-primary btn-sm" onclick="addTujuan()">+ Tambah Tujuan</button>
                 <div class="text-end">
                   <button type="button" class="btn btn-success">Simpan</button>
                 </div>
               </div>
               <div class="col-lg-4 col-12">
                 <h5>Output Data Object</h5>
                 <pre id="data-output"></pre>
               </div>
             </div>
           </div>
         </div>
       </div>

     </div>
   </div>

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
                         <td><?= $iku["iku"]   ?></td>
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

 <style>
   .node-controls button {
     margin-left: 4px;
   }

   .node {
     margin-left: 20px;
   }
 </style>

 <script>
   let data = [];

   function generateTree() {
     const container = document.getElementById('tree-container');
     container.innerHTML = '';
     data.forEach((tujuan, i) => {
       const tujuanDiv = document.createElement('div');
       tujuanDiv.className = 'mb-2';

       const tujuanInput = document.createElement('input');
       tujuanInput.value = tujuan.text;
       tujuanInput.className = 'form-control d-inline-block w-50 bg-primary';
       tujuanInput.oninput = e => tujuan.text = e.target.value;

       const tujuanControls = makeControls(() => {
         addIKUToTujuan(i);
       }, () => {
         addSasaran(i);
       }, () => moveUp(data, i), () => moveDown(data, i), () => deleteItem(data, i));

       tujuanDiv.appendChild(tujuanInput);
       tujuanDiv.appendChild(tujuanControls);

       // IKUs in Tujuan
       tujuan.ikus.forEach((iku, ii) => {
         const ikuDiv = document.createElement('div');
         ikuDiv.className = 'node';

         const ikuInput = document.createElement('input');
         ikuInput.value = iku;
         ikuInput.className = 'form-control d-inline-block w-50';
         ikuInput.oninput = e => tujuan.ikus[ii] = e.target.value;

         const ikuControls = makeControls(null, null, () => moveUp(tujuan.ikus, ii), () => moveDown(tujuan.ikus, ii), () => deleteItem(tujuan.ikus, ii));

         //  ikuDiv.appendChild(document.createTextNode('---'));
         ikuDiv.appendChild(ikuInput);
         ikuDiv.appendChild(ikuControls);
         tujuanDiv.appendChild(ikuDiv);
       });

       // Sasaran
       tujuan.sasaran.forEach((sasaran, si) => {
         const sasaranDiv = document.createElement('div');
         sasaranDiv.className = 'node';

         const sasaranInput = document.createElement('input');
         sasaranInput.value = sasaran.text;
         sasaranInput.className = 'form-control d-inline-block w-50 bg-info';
         sasaranInput.oninput = e => sasaran.text = e.target.value;

         const sasaranControls = makeControls(() => addIKUToSasaran(i, si), null, () => moveUp(tujuan.sasaran, si), () => moveDown(tujuan.sasaran, si), () => deleteItem(tujuan.sasaran, si));

         //  sasaranDiv.appendChild(document.createTextNode('--'));
         sasaranDiv.appendChild(sasaranInput);
         sasaranDiv.appendChild(sasaranControls);

         sasaran.ikus.forEach((iku, iii) => {
           const ikuDiv = document.createElement('div');
           ikuDiv.className = 'node';

           const ikuInput = document.createElement('input');
           ikuInput.value = iku;
           ikuInput.className = 'form-control d-inline-block w-50';
           ikuInput.oninput = e => sasaran.ikus[iii] = e.target.value;

           const ikuControls = makeControls(null, null, () => moveUp(sasaran.ikus, iii), () => moveDown(sasaran.ikus, iii), () => deleteItem(sasaran.ikus, iii));

           //  ikuDiv.appendChild(document.createTextNode('---'));
           ikuDiv.appendChild(ikuInput);
           ikuDiv.appendChild(ikuControls);
           sasaranDiv.appendChild(ikuDiv);
         });

         tujuanDiv.appendChild(sasaranDiv);
       });

       container.appendChild(tujuanDiv);
     });

     document.getElementById('data-output').textContent = JSON.stringify(data, null, 2);
   }

   function addTujuan() {
     data.push({
       text: 'Tujuan Baru',
       sasaran: [],
       ikus: []
     });
     generateTree();
   }

   function addSasaran(tIndex) {
     data[tIndex].sasaran.push({
       text: 'Sasaran Baru',
       ikus: []
     });
     generateTree();
   }

   function addIKUToTujuan(tIndex) {
     data[tIndex].ikus.push('IKU Baru');
     generateTree();
   }

   function addIKUToSasaran(tIndex, sIndex) {
     data[tIndex].sasaran[sIndex].ikus.push('IKU Baru');
     generateTree();
   }

   function deleteItem(arr, index) {
     arr.splice(index, 1);
     generateTree();
   }

   function moveUp(arr, index) {
     if (index > 0)[arr[index - 1], arr[index]] = [arr[index], arr[index - 1]];
     generateTree();
   }

   function moveDown(arr, index) {
     if (index < arr.length - 1)[arr[index + 1], arr[index]] = [arr[index], arr[index + 1]];
     generateTree();
   }

   function makeControls(onAddIKU = null, onAddSasaran = null, onUp, onDown, onDelete) {
     const div = document.createElement('span');
     div.className = 'node-controls btn-group btn-group-square';

     if (onUp) div.appendChild(makeBtn('⬆', onUp));
     if (onDown) div.appendChild(makeBtn('⬇', onDown));
     if (onDelete) div.appendChild(makeBtn('x', onDelete));
     if (onAddIKU) div.appendChild(makeBtn('+ IKU', onAddIKU));
     if (onAddSasaran) div.appendChild(makeBtn('+ Sasaran', onAddSasaran));

     return div;
   }

   function makeBtn(label, onclick) {
     const btn = document.createElement('button');
     btn.className = 'btn btn-sm btn-outline-secondary';
     btn.textContent = label;
     btn.onclick = onclick;
     return btn;
   }

   // Inisialisasi
   data = <?php echo json_encode($defaultIku, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE); ?>;
   generateTree();
 </script>


 <?php
  $pageBody = ob_get_clean();
  include("./layout/index.php");
