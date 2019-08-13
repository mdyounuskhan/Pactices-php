<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Register</title>
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">IAWD - 1904</a>

    <?php
    if (isset($_SESSION['user_name'])) {
      ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="editprofile.php">Edit Profile <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="passwordchange.php">Password Change<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link disabled" href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>
      </div>
    </div>
    <?php
    }
    ?>

  </nav>