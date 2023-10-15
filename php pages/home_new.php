<!DOCTYPE html>
//test
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resumatic</title>
    <link rel="stylesheet" href="../css pages/home_new.css">
    <script src="../custom-scripts.js" defer></script>
  </head>
  <body>
    <main>
      <!-- Header Start -->
      <header>
        <nav class="nav container">
          <h2 class="nav_logo"><a href="#">Resumatic</a></h2>

          <ul class="menu_items">
            <img src="images/times.svg" alt="timesicon" id="menu_toggle" />
            <li><a href="../php pages/home_new.php" class="nav_link">Home</a></li>
            <li><a href="../Templates/resume2.php" class="nav_link">Create</a></li>
            <!-- <li><a href="#" class="nav_link">Resources</a></li>
            <li><a href="#" class="nav_link">Templates</a></li> -->
            
            <?php
    session_start();
    if (isset($_SESSION['user_id'])) {
        // User is logged in, show a logout button
        echo '<a href="../php pages/logout.php"><button class="nav-button">Logout</button></a>';
    } else {
        // User is not logged in, show a login button
        echo '<a href="../php pages/index.php"><button class="nav-button">Login</button></a>';
    }
    ?>
          </ul>
          <img src="images/bars.svg" alt="timesicon" id="menu_toggle" />
        </nav>
      </header>
      <!-- Header End -->

      <!-- Hero Start -->
      <section class="hero">
        <div class="row container">
          <div class="column">
            <h2>A quick and easy online Resume builder</h2>
            <p>Resumatic, the innovative online resume builder, beckons you to simply share your qualifications and personal details. In response, it crafts your professional journey into the latest and 
            most stylish resume templates, delivering an exceptional representation of your story.</p>
            <a href="../Templates/resume2.php">
            <div class="buttons">
              <button class="btn">Start Creating</button>
            </div>
          </div>
          <div class="column">
            <img src="../images/resumatic.png" alt=" " class="hero_img" style="height:250px; padding-bottom: 60px; "  >
          </div>
        </div>
        <img src="../images/bg-bottom-hero.png" alt="" class="curveImg" />
      </section>
      <!-- Hero End-->
    </main>

    <script>
      const header = document.querySelector("header");
      const menuToggler = document.querySelectorAll("#menu_toggle");

      menuToggler.forEach(toggler => {
        toggler.addEventListener("click", () => header.classList.toggle("showMenu"));
      });
    </script>
  </body>
</html>