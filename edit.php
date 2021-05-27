<?php
$id = $_GET['idabsen'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">
<head>
 <title>Edit Absesnsi Mahasiswa</title>
</head>
<body>
 <h1>Edit Absensi Mahasiswa</h1>
 <a href="index.php">Kembali</a>
 <br><br>
 <form action="proses.php" method="post">
 <label>Tglabsen</label>
 <br>
 <input type="text" name="tglabsen" value="<?php echo $data->tglabsen ?>">
 <br>
<label>Masuk</label>
 <br>
 <input type="text" name="masuk" value="<?php echo $data->masuk ?>">
 <br>
 <label>Keluar</label>
 <br>
 <input type="text" name="keluar" value="<?php echo $data->keluar ?>">
 <br>
 <label>Kodedosen</label>
 <br>
 <input type="text" name="kodedosen" value="<?php echo $data->kodedosen ?>">
 <br>
 <label>Sesi</label>
 <br>
 <input type="text" name="sesi" value="<?php echo $data->sesi ?>">
 <br>
 <label>KelasSesi</label>
 <br>
 <input type="text" name="kelassesi" value="<?php echo $data->kelassesi ?>">
 <br><br>
 <button type="submit" name="submit_edit">Submit</button>
 </form>
</body>
</html>