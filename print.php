<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
 <title>Cetak Data</title>
 <style>
 h1 {
 text-align: center;
 }
 table,
 td,
 th {
 border: 1px solid #ddd;
 text-align: left;
 }
 table {
 border-collapse: collapse;
 width: 100%;
 }
 th,
 td {
 padding: 15px;
 }
 </style>
</head>
<body>
 <h1>Laporan Data Absensi Mahasiswa</h1>
 <table>
 <thead>
 <tr>
 <th>No.</th>
 <th>Tglabsen</th>
 <th>Masuk</th>
 <th>Keluar</th>
 <th>Kodedosen</th>
 <th>Sesi</th>
 <th>Kelassesi</th>
 </tr>
 </thead>
 <tbody>
 <?php
$result = $model->tampil_data();
 if (!empty($result)) {
 foreach ($result as $data) : ?>
 <tr>
 <td><?= $index++ ?></td>
 <td><?= $data->tglabsen ?></td>
 <td><?= $data->masuk ?></td>
 <td><?= $data->keluar ?></td>
 <td><?= $data->kodedosen ?></td>
 <td><?= $data->sesi ?></td>
 <td><?= $data->kelassesi ?></td>

 </tr>
 <?php endforeach;
 } else { ?>
 <tr>
 <td colspan="9">Belum ada data pada tabel nilai mah
asiswa.</td>
 </tr>
 <?php } ?>
 </tbody>
 </table>
 <script>
 window.print();
 </script>
</body>
</html>