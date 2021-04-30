<?php
$pages = array(
  "./index.php" => "Home",
  "./facilities.php" => "Facilities",
  "./booking.php" => "Bookings",
  "./contact.php" => "Contact-Us",
  "./cart.php" => "Cart",

);

function isActive($linkUrl)
{
  $currentUrl = $_SERVER["REQUEST_URI"];
  $currentUrl = ltrim($currentUrl, $currentUrl[0]);
  return $currentUrl === $linkUrl ? 'active' : '';
}
?>


<nav class="navbar navbar-expand-md bg-dark navbar-dark flex-row-reverse">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">

      <?php
      foreach ($pages as $url => $title) {
        $isActive = isActive($url);

        $link = "
                    <li class='nav-item'>
              <a id='main' class='nav-link' href='$url'>$title</a>
            </li>";


        echo $link;
      }
      ?>

    </ul>
  </div>
</nav>