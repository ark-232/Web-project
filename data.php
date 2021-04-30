<!doctype html>
<html lang="en">

<head>
    <title>DATA ~ WEB PROJECT</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <?php
    $mysqli = retrieveDatabaseConnection();

    $sql = "SELECT * FROM WPEmails";
    $result = $mysqli->query($sql);

    $numberOfRows = $result->num_rows;

    if ($numberOfRows > 0) {

        while ($row = $result->fetch_assoc()) {
            echo "
        <div class='card bg-light w-50 mx-auto my-4 p-4'>
          <p>Email: {$row['email']}</p>
        </div>
        ";
        }
    }

    $sql2 = "SELECT * FROM WPContact";
    $result2 = $mysqli->query($sql2);

    $numberOfRows2 = $result2->num_rows;

    if ($numberOfRow2 > 0) {

        while ($row = $result2->fetch_assoc()) {
            echo "
        <div class='card bg-light w-50 mx-auto my-4 p-4'>
          <p>Email: {$row['email']}</p>
          <p>Name: {$row['name']}</p>
          <p>Message: {$row['message']}</p>
          <p>Date: {$row['date']}</p>
        </div>
        ";
        }
    }

    $mysqli->close();
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>