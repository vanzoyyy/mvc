<?php
// Sample initialization for $isiTabelPasien
// This should be replaced with your actual data fetching logic
$isiTabelPasien = []; // Assume this is fetched from the database
$no = 1; // Initialize the row number

// Example data (remove this in actual implementation)
// $isiTabelPasien = [
//     ['idPasien' => 1, 'nmPasien' => 'John Doe', 'jk' => 'L', 'alamat' => 'Address 1'],
//     ['idPasien' => 2, 'nmPasien' => 'Jane Smith', 'jk' => 'P', 'alamat' => 'Address 2'],
// ];

?>
<html>
<head>
   <title>My App | Halaman Utama</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
   <div class="container">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
           <div class="container-fluid">
               <a href="pasien.php" class="navbar-brand">My App</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       <li class="nav-item">
                           <a href="pasien.php" class="nav-link" aria-current="page">Pasien</a>
                       </li>
                       <li class="nav-item">
                           <a href="#" class="nav-link">Dokter</a>
                       </li>
                       <li class="nav-item">
                           <a href="#" class="nav-link">Kunjungan</a>
                       </li>
                   </ul>
               </div>
           </div>
       </nav>
       <div class="row mt-3">
           <div class="col-sm">
               <h3>Tabel Pasien</h3>
           </div>
       </div>
       <div class="row">
           <div class="col">
               <a href="tambahpasien.php" class="btn btn-primary btn-sm d-flex justify-content-center">Tambah Data</a>
           </div>
       </div>
       <div class="row mt-3">
           <div class="col">
               <table class="table table-striped table-hover tabel-sm">
                   <tr>
                       <th>No</th>
                       <th>ID Pasien</th>
                       <th>Nama Pasien</th>
                       <th>Jenis Kelamin</th>
                       <th>Alamat</th>
                       <th>Action</th>
                   </tr>
                   <?php
                   if (!empty($isiTabelPasien)) {
                       foreach ($isiTabelPasien as $row) {
                           ?>
                           <tr>
                               <td><?php echo $no++; ?></td>
                               <td><?php echo $row['idPasien']; ?></td>
                               <td><?php echo $row['nmPasien']; ?></td>
                               <td><?php echo $row['jk']; ?></td>
                               <td><?php echo $row['alamat']; ?></td>
                               <td>
                                   <a href="editpasien.php?edit=<?= $row['idPasien']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                   <a href="koneksi.php?idPasien=<?= $row['idPasien']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                               </td>
                           </tr>
                           <?php
                       }
                   } else {
                       echo '<tr><td colspan="6" class="text-center">No data available</td></tr>';
                   }
                   ?>
               </table>
           </div>
       </div>
   </div>
</body>
</html>
