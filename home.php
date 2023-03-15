<?php
  session_start();
  if (!isset($_SESSION["logged"]) || !$_SESSION["logged"]) {
    $_SESSION["triedToAccess"] = true;
    header('Location: index');
  }
  // echo "<pre>";
  // print_r($_SESSION);
  // echo "</pre>";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto Uninove</title>
    <link rel="stylesheet" href="styles/home.css">
    <link rel="icon" href="assets/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
  </head>
  <body>

    <header class="container">
      <h1>Projeto Uni23/1</h1>
      <nav>
        <ul>
          <li><a href="home">Home</a> <span style="left: -124px"></span> </li>
          <li><a href="index">Sign Up</a> <span style="left: -124px"></span> </li>
          <li><a href="#">Log out</a> <span style="left: -149px"></span> </li>
        </ul>
      </nav>
    </header>

    <main class="container">
      <div class="welcome-message">
        <h3>Welcome <i><?php echo $_SESSION["data"]["Name"] ?></i></h3>
        <p>Below is a list of your team's projects</p>
      </div>
      <div class="projects-box">
        <div class="project add-project">+</div>
      </div>
    </main>

    <footer class="container">
      <h5>@ 2023, h-queiroz Productions. All Rights Reserved</h5>
    </footer>

    <script type="text/javascript" src="scripts/jquery.js"></script> <!-- Jquery for Ajax Requistion -->
    <script type="text/javascript" src="scripts/home.js"></script>
  </body>
</html>
