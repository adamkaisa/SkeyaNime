<!DOCTYPE html>
<html>
<head>
    <title>NimeSkuy | Terms</title>
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
<body style="overflow-x: hidden;">
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
                    <a class="nav-link active" href="#">Terms</a>
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
    <h1>Terms and Conditions</h1>
    <pre data-tilt data-tilt-max="25" data-tilt-speed="300" class="bold language-javascript tilt" style="color: rgb(238, 215, 230);"><code>
    <h3 style="color: rgb(68, 50, 62);">Terms and Conditions</h3>
    Welcome to NimeSkuy!

    The following terms and conditions explain the rules and conditions for using the NimeSkuy Website. By accessing this website, we assume you have agreed to these terms and conditions. Do not continue using NimeSkuy if you refuse to agree to all the terms and conditions stated on this page.    <hr>
    <h3 style="color: rgb(68, 50, 62);">Licence</h3>
    You have the right to post, download or use the API from NimeSkuy with the limitations set in these terms and conditions.
    You are prohibited from:

    - This website is a third party from the existing images. Therefore you have no right to sell posts from NimeSkuy.
    - We allow image creators to claim Copyright if the image owner objects to posts on NimeSkuy.
    - For image creators. We allow you to ask to delete or edit posts if you object (By showing proof of ownership).

    Some parts of this website offer the opportunity for users to post images according to anime criteria. NimeSkuy will not filter or edit. NimeSkuy reserves the right to monitor all posted images and remove any posted images deemed inappropriate, offensive, or cause a violation of these Terms and Conditions.

    You must warrant and represent that:
    - Image files (for posting) do not contain content that is defamatory or offensive.
    - Image files (for posting) will not be used to persuade or promote business or introduce commercial activities.
    - Image files (for posting) are anime in nature. other than that NimeSkuy has the right to delete it.
    <h3 style="color: rgb(68, 50, 62);">Removal of links from our website</h3>
    If you find a link on our Website offensive for any reason, you are free to contact and let us know at any time. We will consider requests to remove links, but we are under no obligation to respond to you directly.

    We do not ensure that the information on this website is correct. We do not guarantee its completeness or accuracy, nor do we promise to ensure that the website remains available.
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
