<?php
include 'model_absen.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
 <title>Data Absen Mahasiswa</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
 <div>
 
<ul class="nav nav-pills">
  <li role="presentation" ><a href="index.php">Absen</a></li>
</ul>
<h1>Data Absen Mahasiswa</h1>
 <a href="create.php">Tambah Data</a>
 <br>
<a href="print.php" target="_blank">Cetak Data</a>
 <br>
 <table border="1" width=80%>
 <thead>
 <tr>
 <center>
 <th>No.</th>
 <th>TanggalAbsen</th>
 <th>Masuk</th>
 <th>Keluar</th>
 <th>KodeDosen</th>
 <th>Sesi</th>
 <th>KelasSesi</th>
 <th>Aksi</th>
 </center>
 </tr>
 </thead>
 <tbody>
 <?php
 $result = $model->tampil_data();
 if (!empty($result)) {
 foreach ($result as $data) : ?>
 <tr align="center">
 <td><?= $index++ ?></td>
 <td><?= $data->tglabsen ?></td>
 <td><?= $data->masuk ?></td>
 <td><?= $data->keluar ?></td>
 <td><?= $data->kodedosen ?></td>
 <td><?= $data->sesi ?></td>
 <td><?= $data->kelassesi ?></td>


 <td>
 <a name="edit" id="edit" href="edit.php
?idabsen=<?= $data->idabsen ?>">Edit</a>
 <a name="hapus" id="hapus" href="proses.php?idabsen=<?= $data->idabsen ?>">Delete</a>
 </td>
 </tr>
 <?php endforeach;
 } else { ?>
 <tr>
 <td colspan="9">Belum ada data pada tabel nilai
mahasiswa.</td>
 </tr>
<?php } ?>
 </tbody>
 </table>
 </div>
</body>
</html>
