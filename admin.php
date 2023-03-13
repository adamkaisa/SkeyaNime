<!DOCTYPE html>
<html lang="en">
<head>
    <title>NimeSkuy | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <style>
		.thumbnail img {
			width: 100%;
			height: 200px;
			object-fit: cover;
			border-radius: 8px;
		}
        .navbar-brand {
            font-weight: bold;
            font-size: 24px;
        }
        h1 {
            margin-top: 40px;
            margin-bottom: 40px;
            text-align: center;
            font-weight: bold;
            font-size: 36px;
        }
        .thumbnail {
            border: none;
            border-radius: 0;
            box-shadow: none;
            text-align: center;
            margin-bottom: 40px;
            background-color: transparent;
        }
        .thumbnail img {
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }
        .thumbnail h4 {
            margin-top: 20px;
            font-weight: bold;
            font-size: 24px;
        }
    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: rgba(255, 255, 255, 0.9);">
    <div class="container">
        <a class="navbar-brand" href="#">NimeSkuy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="upload.php">Upload</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="restapi.php">API</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tos.php">Terms</a>
                </li>
            </ul>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <form class="d-flex" method="GET" action="search.php">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="q">
                  <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
              </li>
            </ul>
          </div>
        </form>
        </div>
        </div>
    </div>
</nav>
<body>
<div class="container">
    <br><br>
    <h1>NimeSkuy</h1>
    <div class="row">
    <?php
// Cek apakah method request adalah POST dan id gambar tersedia
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'skeya');

    // Ambil data gambar yang akan dihapus
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $result = mysqli_query($conn, "SELECT * FROM images WHERE id='$id'");
    $image = mysqli_fetch_array($result);

    // Hapus data gambar dari database
    mysqli_query($conn, "DELETE FROM images WHERE id='$id'");

    // Hapus file gambar dari direktori upload
    $filename = $image['filename'];
    $filepath = 'uploads/' . $filename;
    unlink($filepath);
}

// Ambil data gambar dari database
$conn = mysqli_connect('localhost', 'root', '', 'skeya');
$result = mysqli_query($conn, 'SELECT * FROM images ORDER BY id DESC');

        // Tampilkan data gambar
        while ($image = mysqli_fetch_array($result)) {
            echo '
            <div class="col-md-3">
                <div class="thumbnail" style="border-radius: 8px; border: 1px solid #ddd;">
                    <a href="uploads/' . $image['filename'] . '" target="_blank">
                        <img src="uploads/' . $image['filename'] . '">
                    </a>
                    <h4>' . $image['namagambar'] . '</h4>
                    <form method="POST" onsubmit="return confirm(\'Anda yakin ingin menghapus gambar ini?\')">
                        <input type="hidden" name="id" value="' . $image['id'] . '">
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                    <br>
                </div>
            </div>';
        }
        ?>
    </div>
    <br>
</div>

<!-- Tambahkan kode untuk tombol dan perintah hapus gambar -->
<script type="text/javascript" src="vanilla-tilt.js"></script>
<script type="text/javascript">
	VanillaTilt.init(document.querySelector(".thumbnail"), {
		max: 25,
		speed: 400
	});
	
	//It also supports NodeList
	VanillaTilt.init(document.querySelectorAll(".thumbnail"));
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>