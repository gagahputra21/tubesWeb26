<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
$conn = null;
include 'includes/koneksi.php';
if (!isset($conn) && isset($koneksi)) {
    $conn = $koneksi;
}
if (!isset($_SESSION['pengguna_nik'])) { header("location:login.php"); exit; } include 'includes/header.php'; ?>

<div class="container py-4">

<div class="row g-4">

<div class="col-lg-4">

<div class="card">

<div class="card-header bg-danger text-white"> <h5 class="mb-0">Cari Pendonor</h5> </div>

<div class="card-body">

<form method="POST">

<div class="mb-3"> <label class="form-label">Golongan Darah</label> <select class="form-select" name="goldar">

<option value="A+">A+</option> <option value="A-">A-</option> <option value="B+">B+</option> <option value="B-">B-</option> <option value="AB+">AB+</option> <option value="AB-">AB-</option> <option value="O+">O+</option> <option value="O-">O-</option>

</select> </div>

<div class="mb-3"> <label class="form-label">Kabupaten/Kota</label>

<select class="form-select" name="kota">

<option value="Mataram">Mataram</option> <option value="Lombok Barat">Lombok Barat</option> <option value="Lombok Timur">Lombok Timur</option> <option value="Lombok Tengah">Lombok Tengah</option> <option value="Lombok Utara">Lombok Utara</option> <option value="Sumbawa">Sumbawa</option> <option value="Bima">Bima</option>

</select> </div>

<button class="btn btn-danger w-100"> Cari Pendonor </button>

</form>

</div>

</div>

</div>

<div class="col-lg-8">

<div class="card">

<div class="card-header bg-danger text-white"> <h5 class="mb-0">Data Pendonor</h5> </div>

<div class="card-body">

<table class="table table-striped table-hover">

<thead>

<tr> <th>No</th> <th>Nama</th> <th>No Telepon</th> </tr>

</thead>

<tbody>

<?php
if (isset($_POST['goldar'])) {
    $goldar = $_POST['goldar'];
    $kota = $_POST['kota'];
    $no = 1;
    if ($conn instanceof mysqli) {
        $query = mysqli_query($conn, "SELECT * FROM pengguna WHERE goldar='$goldar' AND kota='$kota' AND status='1' AND verify='1'");
        while ($row = mysqli_fetch_array($query)) {
?>

<tr> <td><?= $no++; ?></td> <td><?= $row['nama']; ?></td> <td><?= $row['telfon']; ?></td> </tr>

<?php } } } ?>

</tbody>

</table>

<a href="data lengkap.php" class="btn btn-outline-danger">

Data Pendonor Lengkap

</a>

</div>

</div>

</div>

</div>

</div>

<!-- <?php include 'includes/footer.php'; ?> -->