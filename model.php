<?php
include 'connection.php';
class Model extends Connection
{
 public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 public function insert($nim, $nama, $uts, $uas, $tugas)
 {
 $na = $this->na($uts, $tugas, $uas);
 $status = $this->status($na);
 $sql = "INSERT INTO tbl_nilai (nim, nama, uts, uas, tugas, na, status) VALUES ('$nim', '$nama',
 '$uts', '$uas', '$tugas', '$na', '$status')";
 $this->conn->query($sql);
 }
 public function na($uts, $tugas, $uas)
 {
 $na = (0.3 * $uts) + (0.3 * $tugas) + (0.4 * $uas);
 return $na;
 }
 public function status($na)
 {
 $status = "";
 if ($na >= 60 && $na <= 100) {
 $status = "Lulus";
 } else {
 $status = "Tidak Lulus";
 }
 return $status;
 }
 public function tampil_data()
 {
 $sql = "SELECT * FROM tblabsen";
$bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris[] = $obj;
 }
 if (!empty($baris)) {
 return $baris;
 }
 }
 public function edit($id)
 {
 $sql = "SELECT * FROM tblabsen WHERE idabsen='$id'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
 }
 public function update($idabsen, $tglabsen, $masuk, $tkeluar, $kodedosen, $sesi, $kelassesi)
 {
 $sql = "UPDATE tglabsen SET tglabsen='$tglabsen', masuk='$masuk', keluar='$keluar',
  kodedosen='$kodedosen', sesi='$sesi',kelassesi='$kelassesi' WHERE idabsen='$idabsen'";
 $this->conn->query($sql);
 }
 public function delete($idabsen)
 {
 $sql = "DELETE FROM tblabsen WHERE idabsen='$idabsen'";
 $this->conn->query($sql);
 }
}