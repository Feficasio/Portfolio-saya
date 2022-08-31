<!DOCTYPE html>
<html lang="en">
  <head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link  rel="stylesheet" href="css/style.css">

    <title>Portfolio</title>
  </head>
  <style>
    .img-hover-zoom--brightness img {
      transition: transform 1s, filter 1.5s ease-in-out;
      transform-origin: center center;
      filter: brightness(40%);
    }

    /* The Transformation */
    .img-hover-zoom--brightness:hover img {
      filter: brightness(100%);
      transform: scale(1.1);
    }
  </style>
  <body style="background: url(img/bg.jpg); width:100%;">
    <!-- Navbar -->
    <section id="navbar">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="img/logofefi.png" alt="fefi" width="130"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item px-3">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link" href="skill.php">My Skill</a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link active" href="project.php">Project</a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <!-- Close Navbar -->

    <!-- Project -->
    <div class="container">
        <div class="row mt-5">
            <div class="mt-2 text-center">
              <h2 class="mb-4">Project Terbaru</h2>
              <p class="lead">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus porro consequuntur alias, commodi nemo enim aliquam ipsam obcaecati? Assumenda, ipsam?
              </p>
            </div>
        
            <div class="col mt-3">
              <div class="img-hover-zoom--brightness img">
              <img src="img/project1.png" alt="" width="500" class="image">
              <p class="lead mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br/>Quasi, error.</p>
              </div>
            </div>

            <div class="col mt-3">
              <div class="img-hover-zoom--brightness img">
              <img src="img/project2.png" alt="" width="500" class="image">
              <p class="lead mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br/>Quasi, error.</p>
              </div>
            </div>

            <div class="col mt-5">
              <div class="img-hover-zoom--brightness img">
              <img src="img/project3.png" alt="" width="500" class="image">
              <p class="lead mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br/>Quasi, error.</p>
              </div>
            </div>

            <div class="col mt-5">
              <div class="img-hover-zoom--brightness img">
              <img src="img/project4.png" alt="" width="500" class="image">
              <p class="lead mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br/>Quasi, error.</p>
              </div>
            </div>

        </div>
    </div>

    <!-- Close Project -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>
