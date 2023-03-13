<!DOCTYPE html>
<html>
<head>
    <title>NimeSkuy | API</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styleAPI.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism.min.css" integrity="sha512-AcC3QgNG2vcLHEhklYXHFTcugSwBJx7eaeGcFJaz7JJTmyT+WdzJ7Vl+NCtTFh7LZ0tA1Auk1sliiNjrqQ/zcg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <style>
        .thumbnail img {
          width: 100%;
          height: 200px;
          object-fit: cover;
          border-radius: 8px;
        }
        .navbar-brand {
          color: rgb(238, 215, 230)!important; /* ubah warna teks menjadi putih */
        }
        .navbar-nav .nav-link {
          color: rgb(238, 215, 230)!important;
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
<body style="overflow: hidden;">
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
                    <a class="nav-link active" href="#">API</a>
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
    <pre data-tilt data-tilt-max="25" data-tilt-speed="400" class="bold language-javascript tilt"><code>
    Endpoint Get RANDOM image wtih name:
    https://nimeskuy.000webhostapp.com/waifu
    <hr>
    Response:
    Here is an example response for this endpoint
    {
      "id":"18",
      "name":"Shirakami Fubuki",
      "url":"https:\/\/nimeskuy.000webhostapp.com\/img\/fubuki.jpg"
    }
    </code></pre>
    </p>
    </div>
<script type="text/javascript" src="vanilla-tilt.js"></script>
<script type="text/javascript">
  const tiltElements = document.querySelectorAll('[data-tilt]');
  tiltElements.forEach(function(el) {
    VanillaTilt.init(el, {
      max: el.getAttribute('data-tilt-max'),
      speed: el.getAttribute('data-tilt-speed'),
    });
    el.addEventListener('mousemove', function() {
      window.requestAnimationFrame(function() {
        VanillaTilt.tilt(el);
      });
    });
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js" integrity="sha512-V5S/l90S8pKjR6Esz4TwIc4Ed4X8E8BSPxtnkzF47cpgfhCbj8WyGzeQLjvdrb/QYOSfD9XqI8HlQx5/5b5SQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
