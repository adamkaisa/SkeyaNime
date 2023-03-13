<!DOCTYPE html>
<html>
<head>
	<title>NimeSkuy</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

	<!-- Bootstrap 5 CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">

	<!-- Custom CSS -->
	<style>
		/* Styling untuk thumbnail gambar */
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
<body>
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
<br><br>
	<div class="container my-5">
		<div class="row">
			<?php
			// Koneksi ke database
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "skeya";

			$conn = mysqli_connect($servername, $username, $password, $dbname);

			// Cek koneksi
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			// Cek apakah ada inputan search dari user
			if(isset($_GET["q"])) {
				$search = $_GET["q"];
				// Query untuk mencari gambar berdasarkan nama
				$sql = "SELECT * FROM images WHERE namagambar LIKE '%$search%' ORDER BY id DESC";
			} else {
				// Jika tidak ada inputan search, tampilkan semua gambar
				$sql = "SELECT * FROM images ORDER BY id DESC";
			}

			$result = mysqli_query($conn, $sql);

            // Tampilkan gambar yang sudah diupload sebelumnya
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $image = "uploads/" . $row["filename"];
                    $name = $row["namagambar"];
                    ?>
                    <div class="col-md-3">
                        <div class="thumbnail" style="border-radius: 8px; border: 1px solid #ddd;">
                            <a href="<?php echo $image; ?>" target="_blank">
                                <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
                            </a>
                            <div class="caption">
                                <h4><?php echo $name; ?></h4>
                            </div>
                        </div>
                    </div>
                <?php
                }
            } else {
                echo "No images found.";
            }

			mysqli_close($conn);
			?>
		</div>
	</div>
    <script type="text/javascript" src="vanilla-tilt.js"></script>
    <script type="text/javascript">
	VanillaTilt.init(document.querySelector(".thumbnail"), {
		max: 25,
		speed: 400
	});
	
	//It also supports NodeList
	VanillaTilt.init(document.querySelectorAll(".thumbnail"));
    </script>
	<!-- Bootstrap 5 JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>