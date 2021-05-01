<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="./assets/styles.css" />
  </head>
  <body>
    <div class="container_header">
      <div id="blue_tint">
        <div id="hotel" class="bg_header"></div>
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
        <p id="summary">
          Book your stay and enjoy Luxury redefined at the most affordable
          rates.
        </p>
      </div>

      <a id="book_now" href="./booking.php">
        <div class="orange_container">
          <div class="button white-button large">Book Now</div>
        </div>
      </a>

      <div id="scroll">
        <p>Scroll</p>
        <a href="#sneak_peak">
          <img
            id="down"
            src="./assets/images/down.png"
            alt="arrow pointing down"
          />
        </a>
      </div>
    </div>

    <div id="mid">
      <div id="sneak_peak">
        <h4>All our room types are including complementary breakfast</h4>
      </div>

      <div class="container-main">
        <div class="luxury">
          <div class="luxury_text">
            <h2 class="bold">Luxury redefined</h2>
            <p>
              Our packages are designed to transport you into an environment
              made for leisure. Take your mind off the day-to-day of home life
              and find a private paradise for yourself.
            </p>

            <a id="explore" class="orange_container btn" href="./facilities.php">Explore</a>
          </div>
        </div>

        <!-- steven-ungermann-aRT5UCf2MYY-unsplash. (2020, June 13). Script Eden. https://scripteden.com/steven-ungermann-art5ucf2myy-unsplash/ -->
        <img class="bed" src="./assets/images/bed.jpg" alt="bed" />
      </div>

      <div class="container">
        <div class="luxury">
          <div class="luxury_text">
            <h2 class="bold">Leave your worries in the sand</h2>
            <p>
              We love life at the beach. Being close to the ocean with access to
              endless sandy beach ensures a relaxed state of mind. It seems like
              time stands still watching the ocean. EXPLORE our seasaide
              packages and pacific resorts
            </p>

            <a id="explore" class="orange_container btn" href="./facilities.php">Explore</a>
          </div>
        </div>

        <!-- NTA Group. (2019, October 3). andrew-ruiz-fmz-B9At9iQ-unsplash. NTA TravelSM - Experience The World. https://nta.travel/andrew-ruiz-fmz-b9at9iq-unsplash/ -->
        <img class="bed" src="./assets/images/beach.jpg" alt="beach" />
      </div>

      <div class="blue_box mx-auto"></div>
    </div>

    <?php require './assets/includes/footer.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
