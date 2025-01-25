<?php
require "includes/config.php";

// Ambil id dari query string dan sanitasi input
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Buat query untuk ambil data dari database
$query = "SELECT * FROM tbl_makanan WHERE id_makanan = $id";
$sql = mysqli_query($conn, $query);

// Cek apakah data yang di-edit ditemukan
if (mysqli_num_rows($sql) < 1) {
    die("Data tidak ditemukan...");
}

// Ambil data untuk ditampilkan di formulir
$data = mysqli_fetch_assoc($sql);

// Skrip Proses Update
// Cek apakah tombol update sudah diklik atau belum
if (isset($_POST['update'])) {
    // Ambil data dari formulir dan sanitasi input
    $id2 = $_POST['id'];
    $nama_makanan = mysqli_real_escape_string($conn, $_POST['nama_makanan']);
    $daerah_makanan = mysqli_real_escape_string($conn, $_POST['daerah_makanan']);

    // Update data
    $query2 = "UPDATE tbl_makanan SET nama_makanan='$nama_makanan', daerah_makanan='$daerah_makanan' WHERE id_makanan='$id2'";
    $sql2 = mysqli_query($conn, $query2);

    // Apakah proses update berhasil?
    if ($sql2) {
        echo "<script>alert('Data berhasil diupdate!');
        window.location='?page=makanan';</script>";
    } else {
        echo "<script>alert('Gagal update data!');
        window.location='?page=makanan';</script>";
    }
}
?>

<div class="p-4">
    <div class="d-flex justify-content-center">
        <div class="row-12 w-75">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0">Update Data Daftar Makanan</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        <!-- Menampung nilai id yang akan di edit -->
                        <input type="hidden" name="id" value="<?= $data['id_makanan']; ?>" />

                        <div class="row">
                            <div class="mb-3">
                                <label for="nama_makanan" class="form-label">Nama Makanan</label>
                                <input type="text" class="form-control" name="nama_makanan" id="nama_makanan" value="<?= htmlspecialchars($data['nama_makanan']); ?>" required />
                            </div>
                            <div class="mb-3">
                                <label for="daerah_makanan" class="form-label">Daerah Makanan</label>
                                <input type="text" class="form-control" name="daerah_makanan" id="daerah_makanan" value="<?= htmlspecialchars($data['daerah_makanan']); ?>" required />
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <button type="submit" name="update" class="btn btn-success waves-effect waves-light mx-2" style="width: 6em; height:2.4em">Update</button>
                            <a class="btn btn-danger" href="?page=makanan" style="width: 6em; height:2.4em">Cancel</a>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>