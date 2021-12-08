<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>CONCERTIX</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-warning bg-warning fixed-top">
    <a class="navbar-brand" href="index.php">WELCOME TO ADMIN |<b> CONCERTIX</b></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-6 ml-auto">
      <li class="nav-item active">
        <a class="btn btn-dark mr-2" href="about.html">About</a>
      </li>
      <li class="nav-item active">
        <a class="btn btn-light mr-2" href="data-organizer.php">Event Organizer</a>
      </li>
      <li class="nav-item active">
        <a class="btn btn-dark mr-2" href="data-event.php">Data Events</a>
      </li>

      <div class="dropdown">
        <a class="btn btn-light dropdown-toggle mr-4" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          The Events
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="concert-ticket.html">Concert Tickets</a>
          <a class="dropdown-item" href="theatre-ticket.html">Theatre Tickets</a>
          <a class="dropdown-item" href="festival-ticket.html">Festival Tickets</a>
       </div>
     </div>

      <div class="icon ml-4 ml-auto">
          <h4>
            <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Message"></i>
            <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notification"></i>
            <span><a href="logout.php"><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign Out"></i></a></span>
          </h4>
      </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/concert1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="display-4">WELCOME TO THE<br><span class="font-weight-bold">CONCERTIX</h1></span> 
            <hr class="my-4">
            <p class="lead">We are the marketplace for tickets to live events. Prices are set by sellers and may be below or above face value.</p>
            <a class="btn btn-primary btn-dark" href="#" role="button">EXPLORE MORE</a>
            <div class="carousel-caption d-none d-md-block">
              <h5>Shawn Mendes: The Tour</h5>
              <p>Enjoy with Your Idol</p>
          </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/concert2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="display-4">WELCOME TO THE<br><span class="font-weight-bold">CONCERTIX</h1></span> 
            <hr class="my-4">
            <p class="lead">We are the marketplace for tickets to live events. Prices are set by sellers and may be below or above face value.</p>
            <hr class="my-4">
            <div class="carousel-caption d-none d-md-block">
              <h5>NCT 127 Tour: NEO CITY - The Origin</h5>
              <p>Enjoy with Your Idol</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/concert3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="display-4">WELCOME TO THE<br><span class="font-weight-bold">CONCERTIX</h1></span> 
            <hr class="my-4">
            <p class="lead">We are the marketplace for tickets to live events. Prices are set by sellers and may be below or above face value.</p>
            <hr class="my-4">
            <div class="carousel-caption d-none d-md-block">
               <h5>5 Seconds of Summer: Concert Tour</h5>
               <p>Enjoy with Your Idol</p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>

  <hr>
<!-- /.row -->

    <!-- Features Section -->
  
    <div class="row">
      <div class="col-lg-6">
        <br>
        <h2>The Concertix</h2>
        <p>The Concertix provides various tickets include:</p>
        <ul>
          <li>
            <strong>Concert Ticket</strong>
          </li>
          <li>Online Concert</li>
          <li>Theatre Ticket</li>
          <li>Festival Ticket</li>
          <li>All the features</li>
        </ul>
        <p>The Concertix was released in middle of 2020 which is a web ticket sales: especially for concert tickets for all artists around the world who will held concerts in Indonesia. This website helps fans to get tickets easily and quickly.</p>
      </div>
      <div class="col-lg-6">
        <h3 class="text-center font-weight-bold text-white">COMING SOON!</h3>
        <img class="img-fluid rounded" src="img/tiket.png" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
        <div class="col-md-8">
          <p>Feel free to contact us if you need any further information.</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="#">Call Us</a>
        </div>
    </div>

  </div>

  <!-- /.container -->

  <!-- Footer -->
  
   <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; The Concertix 2020</p>
    </div>
    <!-- /.container -->
  </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="admin.js">
  </body>
</html>