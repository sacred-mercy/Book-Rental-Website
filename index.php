<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Icon -->
    <link rel="shortcut icon" href="Img/icon.png" type="image/x-icon" />

    <!-- Default CSS -->
    <link rel="stylesheet" href="css/Style.css" />
    <!-- Bootstrap CSS -->
    <link
      id="theme"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Font Awesome Fonts-->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
    />
    <!-- Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Default JS-->
    <script src="js/script.js"></script>
    <title>Home | Book Rental</title>
  </head>

  <body>
    <!--------------------------------------------------NAVIGATION BAR------------------------------------------------------------->
    <section id="#navbar">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
        <div class="container-fluid">
          <a
            class="navbar-brand img-fluid"
            style="line-height: 0% !important"
            href="index.php"
            ><img src="Img/logo.png" alt="logo" height="30"
          /></a>
          <button
            class="navbar-toggler"
            title="Menu"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mynavbar"
          >
            <span style="font-size: 1.8465rem; color: #fff">
              <i class="fas fa-bars"></i>
            </span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav navb me-auto">
              <li class="nav-item">
                <a id="#home" class="nav-link active" href="/index.php"
                  ><i class="fas fa-home"></i> Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/html/bookCategory.html"
                  >Book Categories</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/html/howItWork.html"
                  >How it works?</a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  >Contact Us</a
                >
                <ul class="dropdown-menu bg-dark">
                  <li>
                    <a
                      class="
                        dropdown-item-text
                        text-white-50 text-decoration-none
                      "
                      href="mailto:contact@bookrental.com?subject=Contact us"
                      ><i class="fas fa-envelope"></i> Email Us -
                      contact@bookrental.com</a
                    >
                  </li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a
                      class="
                        dropdown-item-text
                        text-white-50 text-decoration-none
                      "
                      href="tel:+911234567890"
                      ><i class="fas fa-phone"></i> Call Us - +911234567890</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="html/aboutUs.html">About Us</a>
              </li>
            </ul>

            <form class="d-flex" id="searchBar">
              <input
                class="form-control"
                type="text"
                placeholder="Search by Title or Author..."
              />
              <button
                title="Search"
                class="btn text-white search-btn me-1"
                type="submit"
              >
                <i class="fas fa-search"></i>
              </button>
            </form>

            <div class="login-margin flex-wrap">
              <span
                ><button
                  onclick="window.location.href='html/SignIn.php';"
                  type="button"
                  class="
                    btn-dark btn
                    me-2
                    btn-outline-light
                    login-btn
                    text-white
                  "
                >
                  <i class="fas fa-user-circle"></i
                  ><span style="margin-left: 4px">Login</span>
                </button>
              </span>
            </div>
          </div>
        </div>
      </nav>
    </section>

    <!--------------------------------------------------CAROUSEL------------------------------------------------------------------->

    <div
      id="myCarousel"
      class="carousel slide carousel-fade"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Img/carousel1.jpg" alt="" class="img-fluid" />
          <div class="container">
            <div class="carousel-caption text-start"></div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Img/carousel2.jpg" alt="" class="img-fluid" />

          <div class="container">
            <div class="carousel-caption text-end"></div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Img/carousel3.jpg" alt="" class="img-fluid" />

          <div class="carousel-caption text-start carousel-justify mt-5">
            <br /><br /><br />
            <p>Dear Readers,</p>
            <br />
            <p>
              Due to the disruptions caused by Covid-19 pandemic, our deliveries
              have been affected. We would like to inform you that due to
              various restrictions and precautions, there would be delays in
              servicing your request. We would request for your co-operation and
              support during this time.
            </p>
            <p>Team- Book Rental</p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#myCarousel"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#myCarousel"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!--------------------------------------------NEW ARRIVALS CONTAINER------------------------------------------------------->
    <div class="container mb-5 mt-5">
      <h2 class="fs-3 fw-bold">New Arrivals</h2>
      <hr />
      <div class="row gy-3">
        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
          <div class="card mt-3 shadow-sm product">
            <img
              id="card-img"
              src="Img/newArrival1.jpg"
              class="card-img-top img-fluid rounded"
              alt=""
            />
            <div class="overlay">
              <a href="" class="btn-lg text-decoration-none rent-btn">Rent</a>
            </div>
          </div>
          <p class="card-text text-uppercase text-break fw-bold text-center">
            One Arranged Murder
          </p>
        </div>

        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
          <div class="card mt-3 shadow-sm product">
            <img
              id="card-img"
              src="Img/newArrival2.jpg"
              class="card-img-top img-fluid rounded"
            />
            <div class="overlay">
              <a href="" class="btn-lg text-decoration-none rent-btn">Rent</a>
            </div>
          </div>
          <p class="card-text text-uppercase text-break fw-bold text-center">
            Raavan: Enemy of Aryavarta
          </p>
        </div>

        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
          <div class="card mt-3 shadow-sm product">
            <img
              id="card-img"
              src="Img/newArrival3.jpg"
              class="card-img-top img-fluid rounded"
            />
            <div class="overlay">
              <a href="" class="btn-lg text-decoration-none rent-btn">Rent</a>
            </div>
          </div>
          <p class="card-text text-uppercase text-break fw-bold text-center">
            It Ends With Us
          </p>
        </div>

        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
          <div class="card mt-3 shadow-sm product">
            <img
              id="card-img"
              src="Img/newArrival4.jpg"
              class="card-img-top img-fluid rounded"
            />
            <div class="overlay">
              <a href="" class="btn-lg text-decoration-none rent-btn">Rent</a>
            </div>
          </div>
          <p class="card-text text-uppercase text-break fw-bold text-center">
            Life's Amazing Secrets
          </p>
        </div>
      </div>
    </div>

    <!--------------------------------------------MOST VIEWED CONTAINER-------------------------------------------------------->
    <div class="container mb-5 mt-5">
      <h2 class="fs-2 fw-bold">Most Viewed</h2>
      <hr />
      <div class="row">
        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
          <div class="card mt-3 shadow-sm product">
            <img
              id="card-img"
              src="Img/mostViewed1.png"
              class="card-img-top img-fluid rounded"
            />
            <div class="overlay">
              <a href="" class="btn-lg text-decoration-none rent-btn">Rent</a>
            </div>
          </div>
          <p class="card-text text-uppercase text-break fw-bold text-center">
            Pride and Prejudice
          </p>
        </div>

        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
          <div class="card mt-3 shadow-sm product">
            <img
              id="card-img"
              src="Img/mostViewed2.png"
              class="card-img-top img-fluid rounded"
            />
            <div class="overlay">
              <a href="" class="btn-lg text-decoration-none rent-btn">Rent</a>
            </div>
          </div>
          <p class="card-text text-uppercase text-break fw-bold text-center">
            Rich Dad Poor Dad
          </p>
        </div>

        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
          <div class="card mt-3 shadow-sm product">
            <img
              id="card-img"
              src="Img/mostViewed3.jpg"
              class="card-img-top img-fluid rounded"
            />
            <div class="overlay">
              <a href="" class="btn-lg text-decoration-none rent-btn">Rent</a>
            </div>
          </div>
          <p class="card-text text-uppercase text-break fw-bold text-center">
            A Promised Land
          </p>
        </div>

        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
          <div class="card mt-3 shadow-sm product">
            <img
              id="card-img"
              src="Img/mostViewed4.jpg"
              class="card-img-top img-fluid rounded"
            />
            <div class="overlay">
              <a href="" class="btn-lg text-decoration-none rent-btn">Rent</a>
            </div>
          </div>
          <p class="card-text text-uppercase text-break fw-bold text-center">
            The Silent Patient
          </p>
        </div>
      </div>
    </div>

    <!------------------------------------------------------FOOTER----------------------------------------------------------------->
    <footer id="footer">
      <div class="container">
        <div class="copyright">
          © Copyright <strong><span>Book Rental</span></strong
          >. All Rights Reserved
        </div>
      </div>
    </footer>

    <!-------------------------------------------------SCROLL UP BUTTON------------------------------------------------------------>
    <div id="scrollBtn">
      <button onclick="topFunction()" id="ScrollUpBtn" title="Go to top">
        <span> <i class="fas fa-chevron-up text-white"></i></span>
      </button>
      <script>
        var mybutton = document.getElementById("ScrollUpBtn");

        window.onscroll = function () {
          scrollFunction();
        };

        function scrollFunction() {
          if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
          ) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }

        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
    </div>

    <!--------------------------------------------------DARK MODE BUTTON----------------------------------------------------------->
    <div id="dark-btn">
      <button onclick="DarkMode()" id="dark-btn" title="Toggle Light/Dark Mode">
        <span><i class="fas fa-adjust fa-lg text-white"></i></span>
      </button>

      <script>
        //Dark Mode
        function DarkMode() {
          var element = document.body;
          element.classList.toggle("dark-mode");
        }
      </script>
    </div>
  </body>
</html>