<?php
session_start();
include 'includes/koneksi.php';

if (!isset($conn) && isset($koneksi)) {
    $conn = $koneksi;
}

if (!isset($conn) || !$conn) {
    die('Database connection not available.');
}

$message = '';

if(isset($_POST['submit'])){

    $nik = mysqli_real_escape_string(
        $conn,
        $_POST['nik']
    );

    $query = mysqli_query(
        $conn,
        "SELECT * FROM pengguna
        WHERE nik='$nik'"
    );

    if(mysqli_num_rows($query)>0){

        mysqli_query(
            $conn,
            "UPDATE pengguna
            SET forgotpass='0'
            WHERE nik='$nik'"
        );

        header(
            "Location: forgotpassconfirm.php"
        );
        exit;
    }else{
        $message = "NIK tidak ditemukan";
    }
}

include 'includes/header.php';
?>

<div class="container py-5">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card">

<div class="card-header bg-danger text-white">
Reset Password
</div>

<div class="card-body">

<?php if($message!=''): ?>

<div class="alert alert-danger">
<?= $message ?>
</div>

<?php endif; ?>

<form method="POST">

<div class="mb-3">

<label>NIK</label>

<input
type="text"
name="nik"
class="form-control"
required>

</div>

<button
name="submit"
class="btn btn-danger w-100">

Kirim

</button>

</form>

</div>
</div>
</div>
</div>
</div>

<?php include 'includes/footer.php'; ?>