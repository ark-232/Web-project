<?php 
    require './assets/includes/configuration.inc.php'; 
?>
<!doctype html>
<html lang="en">

<head>
  <title>Booking</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="./assets/styles.css">

</head>

<body>

  <div class="container_header">

    <div id="blue_tint">
      <div id="booking" class="bg_header">

      </div>
    </div>

    <div id="logo">
      <h2><b>OpenSky</b></h2>
      <p>Agency</p>
    </div>


    <?php require './assets/includes/navbar.php' ?>

    <div class="text">
      <p class="big_text">WELCOME TO</p>
      <h1 id="OpenSky">OpenSky</h1>
      <h2 id="letter_spacing" class="big_text">Agency</h2>
      <p id="summary">Book your stay and enjoy Luxury
        redefined at the most affordable rates.
      </p>
    </div>

    <a id="book_now" href="./booking.html">
      <div class="orange_container">
        <div class="button white-button large ">Book Now</div>
      </div>
    </a>

    <div id="scroll">
      <p>Scroll</p>
      <a href="#sneak_peak">
        <img id="down" src="./assets/images/down.png" alt="arrow pointing down">
      </a>
    </div>

  </div>

  <div id="mid">

    <div id="sneak_peak">
      <h4 class="bold col-12 pb-4">ROOMS AND RATES</h4>

      <div class="row d-flex mx-0 mb-5 align-items-center">

        <div class="black col-6">
          <p class="text-center mb-0"><b>Selected Location:</b></p>
          <p class="text-center">Hotel 100, New York, USA</p>
        </div>


        <div class="col-6 text-center">
          <a class="px-0" href="#">Change location</a>
        </div>
      </div>

    </div>



    <div class="container">
      <div class="outline">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <!-- A. (2020, March 26). devon-janse-van-rensburg-_WEDFTZV0qU-unsplash | NAP, Producent materacy. NAP, Producent materacy |. https://www.napkomfort.pl/ile-kalorii-mozesz-spalic-podczas-snu/devon-janse-van-rensburg-_wedftzv0qu-unsplash-2/ -->
              <img src="./assets/images/booked_bedroom.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>

        <div class="d-flex blue justify-content-center">
          <h4 class="white text-center col-8 py-3"><b>SINGLE ROOM</b></h4>

          <div id="price" class="orange_container">
            <div>$147 Avg/night</div>
          </div>

        </div>

        <div class="orange_circle_container d-flex align-items-center">
          <button type="button" class="btn btn-primary text-center addtocart">Add to Cart</button>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="outline">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <!-- Champs, M. (2019, August 24). white bed comforter. Unsplash. https://unsplash.com/photos/Id2IIl1jOB0/info -->
              <img src="./assets/images/double_bedroom.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>

        <div class="d-flex blue justify-content-center">
          <h4 class="white text-center col-8 py-3"><b>DOUBLE ROOM</b></h4>

          <div id="price" class="orange_container">
            <div>$155 Avg/night</div>
          </div>

        </div>

        <div class="orange_circle_container d-flex align-items-center">
          <button type="button" class="btn btn-primary text-center addtocart">Add to Cart</button>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="outline">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <!-- Kleber, F. (2020, April 2). gray bed with white pillows. Unsplash. https://unsplash.com/photos/gTbaxaVLvsg/info -->
              <img src="./assets/images/twin_room.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>

        <div class="d-flex blue justify-content-center">
          <h4 class="white text-center col-8 py-3"><b>TWIN ROOM</b></h4>

          <div id="price" class="orange_container">
            <div>$155 Avg/night</div>
          </div>

        </div>

        <div class="orange_circle_container d-flex align-items-center">
          <button type="button" class="btn btn-primary text-center addtocart">Add to Cart</button>

        </div>
      </div>
    </div>

  </div>

  <div class="blue_box mx-auto">
  </div>

  </div>
  <?php
  require './assets/includes/footer.php'
  ?>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>