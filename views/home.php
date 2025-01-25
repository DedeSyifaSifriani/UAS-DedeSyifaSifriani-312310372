<section class="jumbotron text-center pt-5 " >
      <img src="images/logo.JPEG" alt="logo" width="400" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Warisan Rasa Daerah Nusantara</h1>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="10.7"
          d="M0,128L21.8,112C43.6,96,87,64,131,90.7C174.5,117,218,203,262,213.3C305.5,224,349,160,393,149.3C436.4,139,480,181,524,186.7C567.3,192,611,160,655,128C698.2,96,742,64,785,69.3C829.1,75,873,117,916,149.3C960,181,1004,203,1047,213.3C1090.9,224,1135,224,1178,186.7C1221.8,149,1265,75,1309,85.3C1352.7,96,1396,192,1418,240L1440,288L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"
        ></path>
      </svg>
</section>

<div class="container-fluid pb-5">
    
    
    <h2 class="fw-bolder  text-center fs-1 ">Makanan</h2>
    <div class="row justify-content-evenly pt-5">
        
        <?php
        // Koneksi ke database
        require 'includes/config.php';

        // Query untuk mengambil data gambar dan deskripsi minuman
        $query = "SELECT nama_makanan, daerah_makanan, gambar FROM tbl_makanan";
        $result = mysqli_query($conn, $query);

        // Periksa apakah ada data
        if (mysqli_num_rows($result) > 0) {
            // Tampilkan setiap data
            while ($row = mysqli_fetch_assoc($result)) {
                $imagePath = 'uploads/' . $row['gambar']; // Path gambar
                echo '
                <div class="col mb-3 ">
                    <div class="card" style="width: 18rem;">
                        <img src="' . $imagePath . '" class="card-img-top img-fluid object-fit-cover" alt="' . $row['nama_makanan'] . '" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title text-center">' . $row['nama_makanan'] . '</h5>
                            <p class="card-text text-center">' . $row['daerah_makanan'] . '</p>
                        </div>
                    </div>
                </div>';
            }
        } else {
            echo "<p>Tidak ada data makanan.</p>";
        }
        ?>
</div>

<div class="container-fluid pt-5">
    <h2 class="fw-bolder text-center fs-1">Minuman</h2>
    <div class="row justify-content-evenly pt-5">
        
        <?php
        
        require 'includes/config.php';

        // mengambil data gambar dan deskripsi minuman
        $query = "SELECT nama_minuman, daerah_minuman, gambar FROM tbl_minuman";
        $result = mysqli_query($conn, $query);

        // Periksa apakah ada data
        if (mysqli_num_rows($result) > 0) {
            // Tampilkan setiap data
            while ($row = mysqli_fetch_assoc($result)) {
                $imagePath = 'uploads/' . $row['gambar']; // Path gambar
                echo '
                <div class="col mb-3">
                    <div class="card " style="width: 18rem;">
                        <img src="' . $imagePath . '" class="card-img-top" alt="' . $row['nama_minuman'] . '" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title text-center">' . $row['nama_minuman'] . '</h5>
                            <p class="card-text text-center">' . $row['daerah_minuman'] . '</p>
                        </div>
                    </div>
                </div>';
            }
        } else {
            echo "<p>Tidak ada data minuman.</p>";
        }
        ?>
        
</div>
    

