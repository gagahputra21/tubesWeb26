<?php
session_start();

include 'includes/koneksi.php';
include 'includes/header.php';

if (!$conn) {
    die("Koneksi database gagal");
}

$kota = "";

if(isset($_POST['submit'])){

    $kota = mysqli_real_escape_string(
        $conn,
        $_POST['kota']
    );

    $query = mysqli_query(
        $conn,
        "SELECT * FROM event
         WHERE lokasi='$kota'"
    );

}else{

    $query = mysqli_query(
        $conn,
        "SELECT * FROM event"
    );
}
?>
<div class="container py-4">

<div class="card mb-4">

<div class="card-header bg-danger text-white"> <h4 class="mb-0">Kegiatan Donor Darah</h4> </div>

<div class="card-body">

<form method="POST">

<div class="row">

<div class="col-md-10">

<select name="kota" class="form-select">

<option value=""> Semua Lokasi </option>

<option>Mataram</option> <option>Lombok Barat</option> <option>Lombok Timur</option> <option>Lombok Tengah</option> <option>Lombok Utara</option> <option>Sumbawa</option> <option>Bima</option>

</select>

</div>

<div class="col-md-2">

<button name="submit" class="btn btn-danger w-100">

Cari

</button>

</div>

</div>

</form>

</div>

</div>

<div class="row g-4">

<?php while($row=mysqli_fetch_array($query)){ ?>

<div class="col-lg-4">

<div class="card h-100">

<img src="assets/images/<?php echo $row['foto']; ?>" class="card-img-top" style="height:250px;object-fit:cover;">

<div class="card-body">

<h5 class="card-title"> <?php echo $row['lokasi']; ?> </h5>

<p> <strong>Waktu :</strong><br> <?php echo $row['waktu']; ?> </p>

<p> <?php echo $row['keterangan']; ?> </p>

</div>

</div>

</div>

<?php } ?>

</div>

</div>

<!-- <?php include 'includes/footer.php'; ?> -->
