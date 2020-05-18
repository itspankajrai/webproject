<!DOCTYPE html>
<html>
    <head>
        <title>Index of Website</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&display=swap" rel="stylesheet">

    </head>
<body>

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">LOGO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>

      <div class="collapse navbar-collapse  justify-content-center " id="navbarSupportedContent">
        <ul class="navbar-nav text-center ml-auto ">
          <li class="nav-item active  mx-4">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item  mx-4">
            <a class="nav-link" href="about.php">About US</a>
          </li>
          <li class="nav-item  mx-4">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item  mx-4">
            <a class="nav-link" href="#">Contact US</a>
          </li>


        </ul>
      </div>

    </div>
  </nav>
<div class="container-fluid slide">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
          <img src="images/1.jpg" alt="image1" class="d-block w-100">
          <div class="container">
          <div class="carousel-caption text-left">
            <h1>WEB DEVELOPMENT</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

          </div>
        </div>
    </div>
    <div class="carousel-item">
        <img src="images/2.jpg" alt="image2"  class="d-block w-100">
        <div class="container">
          <div class="carousel-caption">
            <h1>UX/UI.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

          </div>
        </div>
    </div>
    <div class="carousel-item" >
        <img src="images/3.jpg" alt="image3"  class="d-block w-100 h-90">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>WEB SECURITY</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

          </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</div>


  <div class="footer">
    <footer class="bg-dark py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="accordion w-100 d-lg-flex" id="accordion">
                <div class="col-lg-4 col-md-12">
                  <a href="#one" data-toggle="collapse"
                    class="h5 text-uppercase text-white nav-link p-0 d-block d-lg-none d-xl-none">Useful Links</a>

                  <div class="h5 text-uppercase text-white p-0 d-none d-lg-block d-xl-block">
                    Our Company
                  </div>

                  <div class="collapse text-white d-lg-flex"
                    id="one"
                    data-parent="#accordion">
                    <ul class="list-unstyled">
                      <li>
                        <a href="#" class="nav-link p-0 text-white">Our Team</a>
                      </li>
                      <li>
                        <a href="#" class="nav-link p-0 text-white">Contact</a>
                      </li>
                      <li>
                        <a href="#" class="nav-link p-0 text-white">About</a>
                      </li>
                      <li>
                        <a href="#" class="nav-link p-0 text-white">Services</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12">
                  <a
                    href="#two"
                    data-toggle="collapse"
                    class="h5 text-uppercase text-white nav-link p-0 d-block d-lg-none d-xl-none"
                    >Two</a
                  >
                  <div
                    class="h5 text-uppercase text-white p-0 d-none d-lg-block d-xl-block"
                  >
                    Description
                  </div>
                  <div
                    class="collapse text-white d-lg-flex"
                    id="two"
                    data-parent="#accordion">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Itaque ratione quis doloribus, numquam ipsam voluptatibus
                    quia harum molestiae officia dolorum deserunt nihil soluta
                    dignissimos quibusdam cum nulla, similique illum. Rerum.
                  </div>
                </div>
                <div class="col-lg-4 col-md-12">
                  <a
                    href="#three"
                    data-toggle="collapse"
                    class="h5 text-uppercase text-white nav-link p-0 d-block d-lg-none d-xl-none"
                    >Three</a
                  >
                  <div
                    class="h5 text-uppercase text-white p-0 d-none d-lg-block d-xl-block"
                  >
                    SOCIAL MEDIA
                  </div>
                  <div
                    class="collapse text-white d-lg-flex"
                    id="three"
                    data-parent="#accordion"
                  >
                    <div class="d-flex w-100 justify-content-between">
                      <a href="#" class="icon"
                        ><i class="fab fa-facebook"></i
                      ></a>
                      <a href="#" class="icon"
                        ><i class="fab fa-twitter"></i
                      ></a>
                      <a href="#" class="icon"
                        ><i class="fab fa-instagram"></i
                      ></a>
                      <a href="#" class="icon"
                        ><i class="fab fa-youtube"></i
                      ></a>
                      <a href="#" class="icon"
                        ><i class="fab fa-linkedin"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="container-fluid">
      <div class="row bg-danger">
        <div class="col-md-12">
          <div class="d-flex justify-content-center align-items-center">
            <span class="p-3 text-white">WEBPROJECT &copy; Copyright 2019</span>
          </div>
        </div>
      </div>
    </div>
  </div>























<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
