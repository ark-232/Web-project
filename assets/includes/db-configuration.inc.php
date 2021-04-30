<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $user = "eao2935"; // SOLACE: RITUSERNAME
  $password = "Matteroffact8+properly"; // SOLACE: PASSWORD from .my.cnf
  $db = "eao2935"; // SOLACE: RITUSERNAME
  $host = "localhost"; // Always stays the same
  $port = 8889; // No need for SOLACE!

  function retrieveDatabaseConnection() {
    global $user, $password, $db, $host, $port;

    // For SOLACE remove $port and for MAMP $port is needed
    $mysqli = new mysqli($host, $user, $password, $db);

    if(!$mysqli) {
      $errorMessage = "ERROR {$mysqli->connect_error}";
      exit($errorMessage);
    }

    return $mysqli;
  }

?>