<?php
require "./assets/includes/configuration.inc.php";
require "./assets/includes/db-configuration.inc.php";
?>

<?php
if (isset($_POST["email"])) {
  echo "<br>";
  $email = strip_tags($_POST["email"]);
 
  $email = filter_var($email, FILTER_SANITIZE_STRING);

  $mysqli = retrieveDatabaseConnection();

  $sql = "INSERT INTO WPEmails (email) VALUES (?)";
  $stmt = $mysqli->prepare($sql);
  $stmt->bind_param("s", $email);

  $success = $stmt->execute();


  $mysqli->close();
}

?>

<footer>
  <div id="info" class="text-center p-3 col-3">
    <h1 id="lux">LUXURY HOTELS</h1>
    <p class="mb-2">497 Evergreen Rd. Roseville, CA 95673</p>
    <p class="mb-2">+44 345 678 903</p>
    <p class="mb-2">luxury_hotels @gmail.com</p>
  </div>

  <div class="col-9">

    <div class="row">
      <div class="text-center col-6">
        <p class="mt-3">About Us</p>
        <p class="mt-3">Contact</p>
        <p class="mt-3">Terms & Conditions</p>
      </div>

      <div class="text-center col-6">
        <p class="mt-3">Facebook</p>
        <p class="mt-3">Twitter</p>
        <p class="mt-3">Instagram</p>
      </div>
    </div>

    <div class="col-12">
      <p class="mb-3 text-center">Subscribe to our newsletter</p>
      <form class="d-flex" id="contact-form" name="contact-form" action="" method="POST">
        <input class="email mb-3" type="email" id="email" name="email" required placeholder="Email Address">
        <input class="ok mb-3" type="submit" value="Ok">
      </form>
    </div>
  </div>

</footer>