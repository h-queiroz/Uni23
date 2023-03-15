<?php
  session_start();
  if (isset($_SESSION["logged"]) && $_SESSION["logged"]) {
    header('Location: home');
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto Uninove - Login</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="icon" href="assets/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
  </head>
  <body>

    <!-- Background Video -->
    <div class="fullscreen-bg">
      <video muted loop autoplay>
        <source src="assets/bg-video.mp4" type="video/mp4">
      </video>
    </div>

    <header>
      <h1>Projeto Uni23/1</h1>
      <nav>
        <ul>
          <li><a href="home">Home</a> <span style="left: -124px"></span> </li>
          <li><a href="index">Sign Up</a> <span style="left: -124px"></span> </li>
        </ul>
      </nav>
    </header>

    <main>
      <!-- Requisition Waiting Loader -->
      <aside class="wait-request">
        <div class="loader">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
          <div class="bar4"></div>
          <div class="bar5"></div>
          <div class="bar6"></div>
          <div class="bar7"></div>
        </div>
      </aside>

      <!-- Login Section -->
      <section class="login">
        <h2>Welcome</h2>
        <h3>Login</h3>
        <form>
          <div class="input-box">
            <input type="text" name="email" spellcheck="false" required="required">
            <span>Email</span>
          </div>
          <div class="input-box">
            <input type="password" name="password" spellcheck="false" required="required">
            <span>Password</span>
          </div>
          <button type="submit">Login</button>
        </form>
      </section>
    </main>

    <script type="text/javascript" src="scripts/jquery.js"></script> <!-- Jquery for Ajax Requistion -->
    <script type="text/javascript" src="scripts/index.js"></script>
    <script type="text/javascript">
    console.log(typeof notification == "function");
    <?php if(isset($_SESSION["triedToAccess"]) && $_SESSION["triedToAccess"] == true){?>
      notification("triedToAccess");
      <?php
      $_SESSION["triedToAccess"] = false;
    }
    ?>
    </script>
  </body>
</html>
