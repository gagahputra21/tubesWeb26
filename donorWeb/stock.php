<?php
session_start();
include 'includes/koneksi.php';
include 'includes/header.php';
if (!isset($conn) && isset($koneksi)) {
    $conn = $koneksi;
}
?>

<div class="container py-4">

<div class="row g-4">

<div class="col-lg-4">

<div class="card">

<div class="card-header bg-danger text-white"> <h5 class="mb-0">Cari Stok Darah</h5> </div>

<div class="card-body">

<form method="POST">

<div class="mb-3"> <label>Golongan Darah</label>

<select class="form-select" name="goldar">

<option>A+</option> <option>A-</option> <option>B+</option> <option>B-</option> <option>AB+</option> <option>AB-</option> <option>O+</option> <option>O-</option>

</select> </div>

<div class="mb-3"> <label>Komponen Darah</label>

<select class="form-select" name="komponen">

<option value="AHF">AHF</option> <option value="FFP">FFP</option> <option value="FP">FP</option> <option value="PRC">PRC</option> <option value="TC">TC</option> <option value="WB">WB</option>

</select> </div>

<div class="mb-3"> <label>Lokasi UTD</label>

<select class="form-select" name="kota">

<option>Mataram</option> <option>Sumbawa</option> <option>Bima</option>

</select> </div>

<button type="submit" name="submit" class="btn btn-danger w-100">

Cari

</button>

</form>

</div>

</div>

</div>

<div class="col-lg-8">

<div class="card">

<div class="card-header bg-danger text-white"> <h5 class="mb-0">Data Stok Darah</h5> </div>

<div class="card-body">

<table class="table table-striped table-hover">

<thead>

<tr>

<th>No</th> <th>Alamat UTD</th> <th>Jumlah</th>

</tr>

</thead>

<tbody>

<?php if(isset($_POST['submit'])){ $goldar=$_POST['goldar']; $komponen=$_POST['komponen']; $kota=$_POST['kota']; $no=1; $db = isset($conn) ? $conn : (isset($koneksi) ? $koneksi : null); if ($db) { $query=mysqli_query($db, "SELECT * FROM stok_darah WHERE goldar='$goldar' AND utd='$kota' AND komponen='$komponen'"); while($row=mysqli_fetch_array($query)){ ?>

<tr>

<td><?= $no++; ?></td> <td><?= $row['alamat']; ?></td> <td><?= $row['jumlah']; ?></td>

</tr>

<?php } } } ?>

</tbody>

</table>

<a href="stockLengkap.php" class="btn btn-outline-danger">

Lihat Semua Stok

</a>

</div>

</div>

</div>

</div>

</div>

<!-- <?php include 'footer.php'; ?> -->