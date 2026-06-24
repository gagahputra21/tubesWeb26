<?php
session_start();
include 'includes/koneksi.php';
include 'includes/header.php';

$query = mysqli_query($conn,"SELECT * FROM stok_darah ORDER BY utd ASC");
?>

<div class="container py-5">

    <div class="row mb-4">
        <div class="col">
            <h2 class="fw-bold text-danger">
                Stok Darah Lengkap
            </h2>
            <p class="text-muted">
                Informasi stok darah dari seluruh Unit Transfusi Darah (UTD) PMI di NTB.
            </p>
        </div>
    </div>

    <div class="card shadow border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-danger">

                        <tr>
                            <th>No</th>
                            <th>UTD</th>
                            <th>Golongan</th>
                            <th>Komponen</th>
                            <th>Jumlah Kantong</th>
                            <th>Alamat</th>
                        </tr>

                    </thead>

                    <tbody>

                    <?php
                    $no=1;

                    while($row=mysqli_fetch_assoc($query)){
                    ?>

                    <tr>

                        <td><?= $no++; ?></td>

                        <td><?= $row['utd']; ?></td>

                        <td>
                            <span class="badge bg-danger">
                                <?= $row['goldar']; ?>
                            </span>
                        </td>

                        <td><?= $row['komponen']; ?></td>

                        <td>
                            <strong>
                                <?= $row['jumlah']; ?>
                            </strong>
                        </td>

                        <td><?= $row['alamat']; ?></td>

                    </tr>

                    <?php } ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<?php include 'includes/footer.php'; ?>