<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumatic</title>
    <link rel="stylesheet" href="../css pages/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <div class="header">
        <h2>Resumatic</h2>
        <nav class="nav-block">
            <!-- <a href=""class="nav-contents"><img src="images/resumatic - logo.png" alt="" class="img-logo" ></a> -->

            <a href="../php pages/home.php" class="nav-contents">Home</a>
            <a href="../php pages/resume.php" class="nav-contents">Create</a>
            <a href="" class="nav-contents">Resources</a>
            <a href="" class="nav-contents">Templates</a>


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

        </nav>
    </div>

    <div class="wrapper">
        <div class="box1">
            <img src="../images/resumatic.png" alt="" class="logo-image">
            <h3 class="title-explain">A Quick and easy online Resume builder</h3>
            <p class="detailed-explain">Resumatic, the innovative online resume builder, beckons you to simply share your qualifications and personal details. In response, it crafts your professional journey into the latest and
                most stylish resume templates, delivering an exceptional representation of your story.</p>
            <a href="../Templates/resume2.php">
                <button class="wrapper-button">Start Creating</button>
            </a>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>