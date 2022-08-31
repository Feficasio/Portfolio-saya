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
    .typewriter .type {
      width: auto;
      text-align: justify;
      display: inline-block;
      overflow: hidden;
      border-right: 0.15em solid #fff;
      white-space: nowrap;
      margin: 0 auto;
      animation: typing 2.5s steps(100, end),
        blink-caret 0.75s step-end infinite alternate;
    }
    @keyframes typing {
      from {
        max-width: 0;
      }
      to {
        max-width: 100%;
      }
    }
    @keyframes blink-caret {
      from,
      to {
        border-color: transparent;
      }
      50% {
        border-color: #fff;
      }
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
                <a class="nav-link active" href="skill.php">My Skill</a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link" href="project.php">Project</a>
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

    <!-- Skill -->

  <div class="container text-center">
    <div class="row mt-5">
      <div class="col mt-5 px-4">
        <h2><b> My Skill</b></h2>
          <div class="typewriter">
            <div class="type">
              <p class="lead mt-4">Lorem ipsum dolor sit amet consectetur </br>adipisicing elit. Dignissimos obcaecati </br>dolor impedit corporis maxime. Eos </br>dignissimos blanditiis dolor vel non </br>incidunt commodi illum voluptatibus</br> assumenda quisquam iure, sint nulla </br></p>
            </div>
          </div>
      </div>
      <div class="col mt-5">
        <img src="img/gg.png" alt="garis" height="300">
      </div>
      <div class="col mt-5">
        <div class="container">
          <div class="row mt-5">
            <div class="col">
              <img src="img/html5.png" alt="garis" height="70">
            </div>
            <div class="col">
              <img src="img/css.png" alt="garis" height="70">
            </div>
            <div class="col mt-2">
              <img src="img/bootsrap.png" alt="garis" height="60">
            </div>
            <div class="col mt-5">
              <img src="img/tailwind.png" alt="garis" height="30">
            </div>
          </div> 
        </div>
      </div>

    </div>
  </div>

    <!-- Close Skill -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>
