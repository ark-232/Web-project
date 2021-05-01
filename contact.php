<?php
require "./assets/includes/configuration.inc.php";
?>



<!doctype html>
<html lang="en">

<head>
  <title>Contact</title>
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
      <div id="contact">

      </div>
    </div>

    <div id="logo">
      <h2><b>OpenSky</b></h2>
      <p>Agency</p>
    </div>


    <?php require './assets/includes/navbar.php' ?>
    <?php
if (isset($_POST["email"])) {
  echo "<br>";
  $email = strip_tags($_POST["email"]);
  $name = strip_tags($_POST["name"]);
  $message = strip_tags($_POST["message"]);

  $email = filter_var($email, FILTER_SANITIZE_STRING);
  $name = filter_var($name, FILTER_SANITIZE_STRING);
  $message = filter_var($message, FILTER_SANITIZE_STRING);
  $date = filter_var(date("Y/m/d"), FILTER_SANITIZE_STRING);

  $mysqli = retrieveDatabaseConnection();

  $sql = "INSERT INTO WPContact (email, name, message, date) VALUES (?,?,?,?)";
  $stmt = $mysqli->prepare($sql);
  $stmt->bind_param("ssss", $email, $name, $message, $date);

  $success = $stmt->execute();

  $mysqli->close();
}

?>
    <div id="text_header">
      <h2><b>CONTACT-US</b></h2>
    </div>

  </div>

  <div id="mid">

    <div id="sneak_peak">

      <div class="here_for_you pb-0">

        <h3 class="bold pb-0">WE ARE HERE FOR YOU</h3>

        <p class=>At Luxury Hotels, we take our customers seriously. Do you have any enquiries, compaints or requests,
          please forward it to our support desk and we will get back to you as soon as possible.</p>
        <div class="contact-form">
          <form class="contact" name="contactForm" onsubmit="return validateContact()" action='contact.php' method='POST'>
            <div class="form-group">
              <label for="email">Email address</label>
              <input required type="email" name='email' class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="name">Name</label>
              <input required type="text" name='name' class="form-control" id="name" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea required class="form-control" id="message" name='message' rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
          </form>
        </div>
      </div>
    </div>

  </div>


  </div>

  <div class="blue_box mx-auto">
  </div>

  </div>

  <?php require './assets/includes/footer.php' ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>