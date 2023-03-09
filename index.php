<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto Uninove</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="icon" href="assets/icon.png">
  </head>
  <body>

    <!-- Background Video -->
    <div class="fullscreen-bg">
      <video muted loop autoplay>
        <source src="assets/bg-video.mp4" type="video/mp4">
      </video>
    </div>

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
        <h1>Welcome</h1>
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
  </body>
</html>
