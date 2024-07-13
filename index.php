<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- displays site properly based on user's device -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta name="description" content="Note Sharing Platform">
  <meta name="theme-color" content="#000000">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <script src="https://kit.fontawesome.com/5731f6d037.js" crossorigin="anonymous"></script>
  <title>Home Page</title>
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="grid-container">

    <!-- Logo -->
    <a href="#" class="col-2"><img src="images/logo.png" alt=" Logo" width="170px" height="60px"></a>

    <!-- Navigation Menu -->
    <ul class="nav-menu col-3">
      <li class="nav-item">
        <a href="#">Home</a>
      </li>
      <li class="nav-item">
        <a href="notes.php">Notes</a>
      </li>
      <li class="nav-item" id="resources">
        <a href="semester.php">Resources</a>
      </li>
      <li class="nav-item" id="resources">
        <a href="aboutus.php">About Us</a>
      </li>

      <!-- Buttons for mobile nav -->
      <li class="nav-item">
        <div id="nav-menu-btns">
          <a href="#">Login</a>
          <a href="user/signup.php" class="main-btns">Sign Up</a>
        </div>
      </li>
    </ul>

    <!-- Navigation Buttons -->
    <div class="nav-btns">
      <a href="user/signin.php">Login</a>
      <a href="user/signup.php" class="main-btns">Sign Up</a>
    </div>

    <!-- Hamburger -->
    <span class="hamburger"></span>
  </nav>

  <!-- Header -->
  <header class="grid-container">

     <!-- Header Image -->
     <div class="header-image col-6"></div>

    <!-- Header text -->
    <div class="header-text col-6">
      <h2>
        An Online Note sharing Platform
      </h2>
      <p class="header-desc">
        Make you preparation strong and good.Understand every hard topic using notes from here
      </p>
      <a href="#" class="main-btns">Get Started</a>
    </div>

  </header>

  <!-- Main -->
  <main>
    
     <div class="stats-bg">

      <!-- Shorten Link input -->
      <div class="grid-container form-result">

        <!-- Form Container -->
        <div class="form-container col-12">
          <form class="col-12" name="url_form" id="form" action="submit">
            <input type="url" name="url" id="url-input" placeholder="Drop your notename here..." class="">
            <div id="error"></div>
            <button class="main-btns" id="submit-url">Get what you Want</button>
          </form>
        </div>

      </div>

      <!-- Result Container -->
      <div class="result grid-container"></div>

      <!-- Stats-Container -->
      <div class="stats-container grid-container">

        <!-- Stats Heading -->
        <div class="stats-head col-12">
          <h2 class="stat-head">
           Features
          </h2>
          <p class="stat-head-desc">
            What you find here.We are developing from seed level to today.
          </p>
        </div>
  
        <!-- Statistics Columns Container -->
        <div class="stat-col-container col-12">
  
          <!-- Statistic Column: Brand Recognition -->
          <div class="stat-col">
            <div class="stat-col-img">
              <img src="images/icon-brand-recognition.svg" alt="" width="40px" height="40px">
            </div>
            <h3 class="stat-col-head">
              Notes of All Course
            </h3>
            <p class="stat-col-desc">
              Boost your brand recognition with each click. Generic links don’t 
              mean a thing. Branded links help instil confidence in your content.
            </p>
          </div>

          <hr>

          <!-- Statistic Column: Detailed Records -->
          <div class="stat-col" id="detailed-records">
            <div class="stat-col-img">
              <img src="images/icon-detailed-records.svg" alt="" width="40px" height="40px">
            </div>
            <h3 class="stat-col-head">
             Previous Question Solve
            </h3>
            <p class="stat-col-desc">
              Gain insights into who is clicking your links. Knowing when and where 
              people engage with your content helps inform better decisions.
            </p>
          </div>

          <hr>

          <!-- Statistic Column: Fully Customizable -->
          <div class="stat-col" id="customizable">
            <div class="stat-col-img">
              <img src="images/icon-fully-customizable.svg" alt="" width="40px" height="40px">
            </div>
            <h3 class="stat-col-head">
              Premium Access
            </h3>
            <p class="stat-col-desc">
              Improve brand awareness and content discoverability through customizable 
              links, supercharging audience engagement.
            </p>
          </div>
          
        </div>
  
      </div>

    </div>

  </main>
  
  <!-- Boost Container Background -->
  <div class="boost-bg">

    <section class="grid-container">
      <h2 class="col-12">Boost your preparation today</h2>
      <a href="#" class="main-btns col-12">Get Started</a>
    </section>

  </div>

  <!-- Footer -->
  <footer class="footer-bg">

    <div class="grid-container">

      <!-- Logo -->
      <a href="#" class="col-2">
        <h1>NoteStream </h1>
        <!--<img src="images/logo.png" alt="logo" id="logo" width="170px" height="60px">-->
      </a>

      <!-- Footer Navigation Links -->
      <div class="footer-nav-container col-6 grid-container">

        <!-- Footer Nav Column: Features -->
        <div class="footer-nav-col col-4">
          <h3 class="footer-nav-head">
            Features
          </h3>

          <a href="#">Get Premium Notes</a>
          <a href="#">Tutorial</a>
          <a href="#">Premium Access</a>
        </div>

        <!-- Footer Nav Column: Resources -->
        <div class="footer-nav-col col-4">
          <h3 class="footer-nav-head">
            Resources
          </h3>

          <a href="#">Students</a>
          <a href="#">Faculty</a>
          <a href="#">Support</a>
        </div>

        <!-- Footer Nav Column: Company -->
        <div class="footer-nav-col col-4">
          <h3 class="footer-nav-head">
            Features
          </h3>

          <a href="#">About</a>
          <a href="#">Our Team</a>
          <a href="#">Careers</a>
          <a href="#">Contact</a>
        </div>

      </div>

      <!-- Social Links -->
      <div class="social-links col-3">
        <a href="#"><img src="images/icon-facebook.svg" alt="Facebook Icon" width="30px" height="30px"></a>
        <a href="#"><img src="images/icon-twitter.svg" alt= "Twitter Icon" width="30px" height="30px"></a>
        <a href="#"><img src="images/icon-pinterest.svg" alt= "Pinterest Icon" width="30px" height="30px"></a>
        <a href="#"><img src="images/icon-instagram.svg" alt= "Instagram Icon" width="30px" height="30px"></a>
      </div>

    </div>
  </footer>
  
  
  
  
</body>
</html>