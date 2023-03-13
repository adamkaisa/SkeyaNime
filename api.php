<?php
// Query untuk mengambil data dari tabel images
$sql = "SELECT * FROM images ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

// Simpan hasil query ke dalam array
$data = array();
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $image = "uploads/" . $row["filename"];
        $name = $row["namagambar"];
        $id = $row["id"];
        $data[] = array(
            "id" => $id,
            "name" => $name,
            "url" => $image
        );
    }
}

// Konversi array ke format JSON dan kirimkan sebagai response
header('Content-Type: application/json');
echo json_encode($data, JSON_UNESCAPED_SLASHES);

// Tutup koneksi ke database
mysqli_close($conn);
?>
