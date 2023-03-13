<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NimeSkuy | Upload</title>
  <!-- Load Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
  <style>
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
                    <a class="nav-link active" href="#">Upload</a>
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
    <?php

        // Membuat koneksi ke database
        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Proses upload gambar
        $msg = "";

        // Jika tombol "Upload Image" ditekan
        if (isset($_POST["upload"])) {
            // Nama file yang ditargetkan
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
            // Cek apakah file gambar
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    $uploadOk = 1;
                } else {
                    $msg = '<div class="alert alert-danger" role="alert">File yang diupload bukan gambar.</div>';
                    $uploadOk = 0;
                }
            }
    
            // Cek apakah file sudah ada
            if (file_exists($target_file)) {
                $msg = '<div class="alert alert-danger" role="alert">File sudah ada.</div>';
                $uploadOk = 0;
            }
    
            // Cek ukuran file
            if ($_FILES["fileToUpload"]["size"] > 5000000) {
                $msg = '<div class="alert alert-danger" role="alert">Ukuran file terlalu besar (maksimal 5 MB).</div>';
                $uploadOk = 0;
            }
    
            // Cek format file
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                $msg = '<div class="alert alert-danger" role="alert">Hanya file JPG, JPEG, dan PNG yang diperbolehkan.</div>';
                $uploadOk = 0;
            }
    
            // Jika tidak terdapat kesalahan pada proses upload, lakukan penyimpanan ke database
            if ($uploadOk == 1) {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $filename = basename($_FILES["fileToUpload"]["name"]);
                    $namagambar = $_POST['namagambar'];
                    $query = "INSERT INTO images (filename, namagambar, upload_time) VALUES ('$filename', '$namagambar', NOW())";
                    if (mysqli_query($conn, $query)) {
                        $msg = '<div class="alert alert-success" role="alert">The file '. htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). ' has been uploaded.</div>';
                    } else {
                        $msg = '<div class="alert alert-danger" role="alert">Error: ' . $query . '<br>' . mysqli_error($conn) . '</div>';
                    }
                } else {
                    $msg = '<div class="alert alert-danger" role="alert">Sorry, there was an error uploading your file.</div>';
                }
            } else {
                $msg = '<div class="alert alert-danger" role="alert">Sorry, your file was not uploaded.';
            }
        }
    ?>
    <br><br><br>
    <div class="container">
    <h2>Upload Gambar</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
        <label for="namagambar" class="form-label">Nama Gambar:</label>
        <input type="text" class="form-control" id="namagambar" name="namagambar">
        </div>
        <div class="mb-3">
        <label for="fileToUpload" class="form-label">Pilih Gambar:</label>
        <input type="file" class="form-control" id="fileToUpload" name="fileToUpload">
        </div>
        <button type="submit" class="btn btn-primary" name="upload">Upload</button>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Menampilkan pesan kesalahan atau sukses -->
    <p><?php echo $msg; ?></p>

    </body>
    </html>