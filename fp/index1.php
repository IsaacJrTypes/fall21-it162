<?php include 'includes/header.php'; ?>
      <!-- Start Image SlideShow -->

      <!-- Slideshow container -->
      <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img
            src="https://images.unsplash.com/photo-1638261127771-4d0201c4274e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80"
            alt="senic view of mountain"
          />
          <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img
            src="https://images.unsplash.com/photo-1484627147104-f5197bcd6651?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
            alt="girl staring into sunrise"
          />
          <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img
            src="https://images.unsplash.com/photo-1519904981063-b0cf448d479e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
            alt="hiker stearing at mountains"
          />
          <div class="text">Caption Three</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>

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
                <li>
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  </p>
                </li>
                <li><p>Lorem ipsum dolor sit amet consectetur.</p></li>
                <li>
                  <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Labore, corrupti.
                  </p>
                </li>
              </ul>
            </div>
          </div>
          <div class="card two">
            <i class="icon-basic-calendar"></i>
            <h3>Special Events</h3>
            <div class="feature-list">
              <ul>
                <li>
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  </p>
                </li>
                <li><p>Lorem ipsum dolor sit amet consectetur.</p></li>
                <li>
                  <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Labore, corrupti.
                  </p>
                </li>
              </ul>
            </div>
          </div>
          <div class="card three">
            <i class="icon-basic-cards-hearts"></i>
            <h3>Product Photography</h3>
            <div class="feature-list">
              <ul>
                <li>
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  </p>
                </li>
                <li><p>Lorem ipsum dolor sit amet consectetur.</p></li>
                <li>
                  <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Labore, corrupti.
                  </p>
                </li>
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
              <span>at an</span>
              affordable price
            </h3>
          </div>
          <div class="frame-container wrap-item">
            <img src="images/wanderingWalk.jpg" alt="guy hiking on a trail" />
            <div class="overlay">
              <div class="text-link"><a href="">Shop</a></div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Shopping blurb -->
      <?php include 'includes/footer.php'; ?>
     