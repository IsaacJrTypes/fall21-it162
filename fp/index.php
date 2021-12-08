<!-- PHP Header Start -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/slideShow.css" />
    <link rel="stylesheet" href="css/frameHover.css" />
    <link rel="stylesheet" href="css/icon-font.css" />
    <!-- jQuary-->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <!-- Menu Maker Plugin -->
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
    <script src="js/navScript.js"></script>
    <title>Photography Services</title>
  </head>
  <body>
    <main>
      <!-- Start Header -->
      <header>
        <div class="logo-box">
          <h1><a href="#">Octavio Jimenez Photography</a></h1>
        </div>
        <nav id="cssmenu">
          <ul>
            <li>
              <a href="#">About</a>
              <ul>
                <li><a href="#">Services</a></li>
                <li><a href="#">Profile</a></li>
              </ul>
            </li>
            <li>
              <a href="#">Galleries</a>
              <ul>
                <li><a href="#">Collection</a></li>
                <li><a href="#">Shop</a></li>
              </ul>
            </li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </header>
      <!-- End Header -->
      <!-- End PHP header -->

      <!-- Start Image SlideShow -->

      <!-- Slideshow container -->
      <section class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img
            src="https://images.unsplash.com/photo-1638261127771-4d0201c4274e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80"
          />
          <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img
            src="https://images.unsplash.com/photo-1484627147104-f5197bcd6651?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
          />
          <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img
            src="https://images.unsplash.com/photo-1519904981063-b0cf448d479e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
          />
          <div class="text">Caption Three</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </section>

      <!-- The dots/circles -->
      <div class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>

      <!-- End Image SlideShow -->

      <!-- Start Service section -->
      <section id="service">
        <h2>Services</h2>
        <div class="container-card">
          <div class="card one">
            <i class="icon-basic-photo"></i>
            <h3>Portraits</h3>
            <div class="feature-list">
              <ul>
                <li><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p></li>
                <li><p>Lorem ipsum dolor sit amet consectetur.</p></li>
                <li><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, corrupti.</p></li>
              </ul>
            </div>
          </div>
          <div class="card two">
            <i class="icon-basic-calendar"></i>
            <h3>Special Events</h3>
            <div class="feature-list">
              <ul>
                <li><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p></li>
                <li><p>Lorem ipsum dolor sit amet consectetur.</p></li>
                <li><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, corrupti.</p></li>
              </ul>
            </div>
          </div>
          <div class="card three">
            <i class="icon-basic-cards-hearts"></i>
            <h3>Product Photography</h3>
            <div class="feature-list">
              <ul>
                <li><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p></li>
                <li><p>Lorem ipsum dolor sit amet consectetur.</p></li>
                <li><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, corrupti.</p></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- End Service section -->

      <!-- Start Shopping blurb -->
      <section class="frontpage-shopping">
        <div class="wrap-container-box">
          <div class="heading-shopping wrap-item">
            <h3>
              Beautiful landscapes
              <br />
              <p>at an</p>
              affordable price
            </h3>
          </div>
          <div class="frame-container wrap-item">
            <img src="images/wanderingWalk.jpg" />
            <div class="overlay">
              <div class="text-link"><a href="">Shop</a></div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Shopping blurb -->

      <!-- Start Footer -->
      <footer>
        <div class="flex-container">
          <div class="footer-link">
            <p class="social">Follow</p>

            <div class="link">
              <a
                href="https://www.instagram.com/octavioj/"
                title="Link to Instagram"
                target="_blank"
              >
                <img src="images/icon-instagram.png" alt="instagram icon" />
              </a>
            </div>
          </div>
          <div class="footer-link">
            <p class="contact"><a href="contact.php">Contact</a></p>
          </div>
          <div class="footer-link">
            <p class="copyright">
              <small>
                &copy; 2021 by
                <a href="contact.php">
                  Isaac Jimenez,
                  <br />
                </a>
                All Rights Reserved
                <br />
                ~
                <a
                  href="https://validator.w3.org/check/referer"
                  target="_blank"
                >
                  Valid HTML
                </a>
                ~
                <a
                  href="https://jigsaw.w3.org/css-validator/check?uri=referer"
                  target="_blank"
                >
                  Valid CSS
                </a>
                <br />
                <a href="disclaimer.html">Disclaimer</a>
              </small>
            </p>
          </div>
        </div>
      </footer>
      <!-- END Footer -->
    </main>
    <script src="js/slideShow.js"></script>
  </body>
</html>
