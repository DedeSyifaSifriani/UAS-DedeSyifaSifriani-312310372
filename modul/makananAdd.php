<?php
require "includes/config.php"; 

// Cek apakah tombol submit sudah diklik atau belum
if (isset($_POST['submit'])) {
    // Ambil data dari formulir dan sanitasi input
    $nama_makanan = mysqli_real_escape_string($conn, $_POST['nama_makanan']);
    $daerah_makanan = mysqli_real_escape_string($conn, $_POST['daerah_makanan']);

    // Cek apakah file gambar ada
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
        // Folder tujuan untuk menyimpan file gambar
        $uploadDir = "uploads/";
        
        // Cek apakah folder sudah ada, jika belum buat folder
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true); // Membuat folder dengan izin tulis
        }

        // Nama file dan path tujuan
        $fileName = basename($_FILES['gambar']['name']);
        $targetFilePath = $uploadDir . $fileName;

        // Ekstensi file yang diizinkan
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Validasi file
        if (in_array(strtolower($fileType), $allowedTypes)) {
            // Pindahkan file ke folder tujuan
            if (move_uploaded_file($_FILES['gambar']['tmp_name'], $targetFilePath)) {
                // Simpan data ke database dengan path gambar
                $query = "INSERT INTO tbl_makanan (nama_makanan, daerah_makanan, gambar) VALUES ('$nama_makanan', '$daerah_makanan', '$fileName')";
                $sql = mysqli_query($conn, $query);

                // Apakah proses simpan berhasil?
                if ($sql) {
                    echo "<script>alert('Data berhasil ditambah!'); 
                    window.location='?page=makanan';</script>";
                } else {
                    echo "<script>alert('Gagal menyimpan data ke database!'); 
                    window.location='?page=makanan';</script>";
                }
            } else {
                echo "<script>alert('Gagal mengunggah gambar!'); 
                window.location='?page=makanan';</script>";
            }
        } else {
            echo "<script>alert('Format file tidak didukung! Hanya jpg, jpeg, png, dan gif.'); 
            window.location='?page=makanan';</script>";
        }
    } else {
        echo "<script>alert('Harap unggah file gambar!'); 
        window.location='?page=makanan';</script>";
    }
    
}

?>



<div class="p-4">
    <div class="d-flex justify-content-center">
        <div class="col-12 col-md-6 col-lg-4 mx-auto"> 
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0">Tambah Daftar makanan</h5>
                </div>
                <div class="card-body">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama_makanan" class="form-label">Nama Makanan</label>
                        <input type="text" class="form-control" name="nama_makanan" required>
                    </div>
                    <div class="mb-3">
                        <label for="daerah_makanan" class="form-label">Daerah Makanan</label>
                        <input type="text" class="form-control" name="daerah_makanan" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar Makanan</label>
                        <input type="file" class="form-control" name="gambar" accept="image/*" required>
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" name="submit" class="btn btn-success waves-effect waves-light mx-2" style="width: 6em; height:2.4em">Submit</button>
                        <a class="btn btn-danger" href="?page=makanan" style="width: 6em; height:2.4em">Cancel</a>
                    </div>                
                </form>
 
                    
                    
                </div>
            </div>
        </div>
    </div>

</div>