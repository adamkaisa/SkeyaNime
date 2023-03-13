<!DOCTYPE html>
<html>
<head>
    <title>NimeSkuy</title>
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
          background: transparent;
          border: 2px solid rgba(255, 255, 255, .5);
          border-radius: 20px;
          backdrop-filter: blur(20px);
          box-shadow: 0 0 30px rgba(0, 0, 0, .5);
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
                    <a class="nav-link active" href="#">Home</a>
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

<div class="container">
    <br><br>
    <h1>NimeSkuy</h1>

    <div class="row">
        </div>

        <br>
    </div>
<script type="text/javascript" src="vanilla-tilt.js"></script>
<script type="text/javascript">
// Ambil data dari API
fetch('api.php')
  .then(response => response.json())
  .then(data => {
    // Looping data dan tampilkan gambar pada halaman
    data.forEach(image => {
      const thumbnail = document.createElement('div');
      thumbnail.classList.add('col-md-3');
      thumbnail.innerHTML = `
        <div class="thumbnail" style="border-radius: 8px; border: 1px solid #ddd;">
          <a href="${image.url}" target="_blank">
            <img src="${image.url}" alt="${image.name}">
          </a>
          <div class="caption">
            <h4>${image.name}</h4>
          </div>
        </div>
      `;
      document.querySelector('.row').appendChild(thumbnail);
    });
    
    // Inisialisasi library VanillaTilt
    VanillaTilt.init(document.querySelector(".thumbnail"), {
        max: 25,
        speed: 400
    });
    VanillaTilt.init(document.querySelectorAll(".thumbnail"));
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
