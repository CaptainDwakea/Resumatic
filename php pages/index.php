<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Resumatic Login Page</title>
    <link rel="stylesheet" href="../css pages/login.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<!--<div class="header">
            <h2>Resumatic</h2>
        <nav class="nav-block">
            <!-- <a href=""class="nav-contents"><img src="images/resumatic - logo.png" alt="" class="img-logo" ></a> 
            <a href="../php pages/home.php" class="nav-contents">Home</a>
            <a href="../php pages/resume.php" class="nav-contents">Create</a>
            <a href="" class="nav-contents">Resources</a>
            <a href="" class="nav-contents">Templates</a>
        </nav>
    </div>-->

  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img class= "img" src="../images/front.jpeg" alt="">
        <div class="text">
          <span class="text-1">An Online Resume Builder <br>To help you create a Professional looking Resume<br>Quickly and Easily</span>
          <span class="text-2">Let's start building your resume</span>
        </div>
      </div>
      <div class="back">
        <img class="backimg" src="../images/back.jpeg" alt="">
        
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
			<form action="login.php" method="post">
            <div class="title">Login</div>
          <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="uname" placeholder="Enter your Username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Login">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
        <form action="signup-check.php" method="POST">
        <div class="title">Signup</div>
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Enter your Name" required>
              </div>
              <div class="input-box">
              <i class="fas fa-user"></i>
                <input type="text" name="uname" placeholder="Enter your Username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="text" name="password" placeholder="Enter your Password" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="re_password"  placeholder="Re-Enter your Password" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Signup">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>