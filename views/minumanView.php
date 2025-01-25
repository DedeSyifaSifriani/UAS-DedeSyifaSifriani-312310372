<div class="card card-primary card-outline mt-4 mb-5">

    <div class="card-header">
        <h5 class="float-start mt-2 fw-bold">Daftar Minuman Daerah</h5>
        <div class="float-end mt-2"> 
            <a title="Tambah data" href="?page=minumanAdd" class="btn btn-sm btn-success">Tambah Data</a>
        </div>
    </div>

    <div class="card-body">
        <table id="example" class="display table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">No.</th>
                    <th class="text-center">Nama Minuman</th>
                    <th class="text-center">Asal Daerah</th>
                    <th class="text-center">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Query untuk mengambil data dari tabel
                $query = "SELECT * FROM tbl_minuman ORDER BY id_minuman";
                $sql = mysqli_query($conn, $query); 

                $nomor = 1;
                // Cek apakah ada hasil dari query
                if (mysqli_num_rows($sql) > 0) {
                    while ($val = mysqli_fetch_assoc($sql)) {
                        ?>
                        <tr>
                            <td class="text-center"><?= $nomor++; ?></td>
                            <td class="text-center"><?= htmlspecialchars($val['nama_minuman']); ?></td>
                            <td class="text-center"><?= htmlspecialchars($val['daerah_minuman']); ?></td>
                            <td class="text-center p-2">
                                <a href="?page=minumanUpdate&id=<?= $val['id_minuman']; ?>" class="btn btn-sm btn-warning">Update</a>
                                <a href="?page=minumanDelete&id=<?= $val['id_minuman']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    // Jika tidak ada data
                    echo '<tr><td colspan="4" class="text-center">Tidak ada data</td></tr>';
                }
                ?>
            </tbody>
            
        </table>
    </div>
</div>
                                      