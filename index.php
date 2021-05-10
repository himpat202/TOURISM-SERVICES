<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>


  <nav class=" navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">TOURISM AGENCY</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact_form">Contact Form</a>
          </li>

        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
      <li data-target="#demo" data-slide-to="4"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/pl.jpg" alt="Hawa Mahal" width="1100" height="500">
        <div class="carousel-caption">

          <h3> <b>Hawa Mahal </b></h3>

          <p>We had such a great time in Hawa Mahal</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/pl1.jpg" alt="Jal Mahal" width="1100" height="500">
        <div class="carousel-caption">
          <h3><b> Jal Mahal</b></h3>
          <p>Wow water palace of jaipur!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/party3.jpg" alt="party" width="1100" height="500">
        <div class="carousel-caption">

          <h3><b>Club house</b></h3>
          <p>We love the club</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/rt.jpg" alt="party" width="1100" height="500">
        <div class="carousel-caption">

          <h3> <b>Cool restaurant</b></h3>

          <p>We love the restaurant</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/rt1.jpg" alt="party" width="1100" height="500">
        <div class="carousel-caption">

          <h3><b>Cool night party</b></h3>

          <p>Awesome party</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <div class="py-5">
    <h2 class="text-center">ABOUT US</h2>
  </div>

  <div class="content">
    <section class="my-5">

      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-10">
            <img src="img/work.jpg" class="img-fluid aboutimg">
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <h2 class="fonts"><b>Himanshu Pathak [Senior Manager]</b></h2>
            <p class="py-3 tool"> We would like to present you the awesome services given by himpat services company<br>
              we arrange bus and cab services for your travelling in Jaipur. <br>
              we arrange hotel facilities for new as well as existing tourists coming to Jaipur<br>
              we also provide tourist guide at cheap prices for longer time<br>
            </p>

          </div>
        </div>
      </div>
    </section>

    <section class="my-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-10">
            <img src="img/work1.jpeg" class="img-fluid aboutimg">
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <h2 class="fonts"><b>Ayush Kumar Singh [General Manager]</b></h2>
            <p class="py-3 tool"> We would like to present you the awesome services given by himpat services company<br>
              We are here to provide you the comfort and safety on your visit to jaipur <br>

            </p>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="center">
    <h4 class="clr"> YOU JUST HAVE TO FILL THE FORM BELOW </h4>
    <a href="#contact_form" class="btn btn-success "> Contact form</a>
  </div>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">OUR SERVICES</h2>
    </div>
    <div class="container">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img class="card-img-top" src="img/buspic.jpg" alt="Card image" style="width: 200%;">
              <div class="card-body">
                <h4 class="card-title">BUS SERVICES</h4>
                <p class="card-text">Our buses are very neat and clean for travelling.</p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img class="card-img-top" src="img/cab.jpg" alt="Card image" style="width: 200%;">
              <div class="card-body">
                <h4 class="card-title">CAB SERVICES</h4>
                <p class="card-text"> Yet cabs are cheap and more comfortable for travel.</p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img class="card-img-top" src="img/hotel.jpg" alt="Card image" style="width: 200%;">
              <div class="card-body">
                <h4 class="card-title">HOTEL SERVICES</h4>
                <p class="card-text">Hotel booking is available 24x7 .</p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">GALLERY</h2>
    </div>
    <div class="container-fluid">
      <div class="row" class="per">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/party.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/party1.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/tourguide.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/ft.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/gym.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/food.jpg" class="img-fluid pb-4">
        </div>

      </div>
    </div>
  </section>
  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center" id="contact_form"> CONTACT FORM</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post" name="index" onsubmit="return FormValidate()">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="user" autocomplete="off" class="form-control" placeholder="Full Name">
        </div>
        <div class="form-group">
          <label>Email-id</label>
          <input type="email" name="email" autocomplete="off" class="form-control" placeholder="eg. abc@gmail.com">
        </div>
        <div class="form-group">
          <label>Mobile Number</label>
          <input type=" text" name="mobile" autocomplete="off" class="form-control"
            placeholder="10 digit mobile number">
        </div>
        <div class="form-group">
          <label>Type of service</label>
          <input type="text" name="service" autocomplete="off" class="form-control" placeholder="BUS/CAB/HOTEL/OTHER">

        </div>
        <div class="form-group">
          <label>Booking Date</label>
          <input type="date" name="booking_date" autocomplete="off" class="form-control">
        </div>


        <button type="submit" onclick="myFunction()" class="btn3d btn btn-success btn-lg"><span class="glyphicon glyphicon-cloud"></span> SUBMIT</button></button>
      </form>
    </div>
  </section>
  <footer class="bg-dark p-3 text-white text-center">
    <p>himpat services company</p>
    <p> Address: 91/2C, 3rd floor,raja gali,Jaipur</p>
  </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"
    integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ=="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.js"></script>
  <script src="script.js"></script>

</body>

</html>