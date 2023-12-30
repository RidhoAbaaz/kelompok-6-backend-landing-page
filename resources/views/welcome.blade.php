<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="preconnect" href="https://fonts.googleapis.com"/>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"rel="stylesheet/>
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"rel="stylesheet"integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"crossorigin="anonymous"/>

    </head>
    <body style="background-color: #86a789">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
              <img src="/assets/logo.png" alt="" style="width: 100px" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto gap-4 font-poppins">
                <li class="nav-item">
                  <a
                    class="nav-link active fw-medium"
                    aria-current="page"
                    href="#home"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#app">App</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#features">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#staff">Staff</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    
        <div class="container home pt-5">
          <div class="row" id="home">
            <div
              class="col-6 text-center"
              style="display: flex; align-items: center"
            >
              <div>
                <h1 class="fs-1 fw-bold font-poppins" style="color: white">
                  Everything You Need,<br />
                  Right Here!
                </h1>
                <h6 class="font-poppins" style="color: white">
                  Get tickets easily and find all the information you need at your
                  fingertips<br />for anyone, anywhere and anytime!
                </h6>
                <button class="btn btn-primary px-4 py-2 font-poppins">
                  <a class="nav-link" href="#app">Learn More</a>
                </button>
              </div>
            </div>
            <div class="col-6 text-center">
              <img src="/assets/hero.png" alt="" width="500px" />
            </div>
          </div>
        </div>
    
        <div class="container-fluid app pt-5">
          <div
            class="container text-center pt-5 pb-5"
            style="background-color: #e0e6e9"
          >
            <div>
              <h1 class="fs-1 fw-bold font-poppins pb-2" id="app">Our App</h1>
              <span class="circle">
                <img src="/assets/app.png" alt="" />
              </span>
              <h5 class="mt-3">
                Zoopedia is an application powered by Zoo!<br />
                as a platform for information and online ticket purchases.
              </h5>
            </div>
          </div>
        </div>
    
        <div class="container-fluid features">
          <div class="container text-center" style="background-color: #e0e6e9">
            <h1 class="fs-1 fw-bold font-poppins" id="features">How it Works</h1>
            <h5>Choose, add, pay and you get your ticket. As simple as that!</h5>
            <div class="row pt-3">
              <div class="col-md-4">
                <span class="circle"
                  ><i class="fa-solid fa-bag-shopping fa-3x"></i>
                  <h3 class="mt-5">Shop</h3>
                  <p>Select and add<br />the tickets.</p></span
                >
              </div>
              <div class="col-md-4">
                <span class="circle"
                  ><i class="fa-solid fa-cart-shopping fa-3x"></i>
                  <h3 class="mt-5">Cart</h3>
                  <p>Check the tickets and<br />make payment</p></span
                >
              </div>
              <div class="col-md-4">
                <span class="circle"
                  ><i class="fa-solid fa-ticket fa-3x"></i>
                  <h3 class="mt-5">Ticket</h3>
                  <p>The tickets will be saved<br />and displayed.</p></span
                >
              </div>
              <div class="container text-center pb-3">
                <div class="pt-5">
                  <span class="circle"
                    ><i class="fa-solid fa-book fa-3x"></i>
                    <h3 class="mt-5">Animals</h3>
                    <p>see and get to know the animals in the ZOO!</p></span
                  >
                </div>
              </div>
              <figure class="text-center">
                <blockquote class="blockquote">
                  <h5 style="color: black">
                    "In this amazing Zoo!, there is an extraordinary life.<br />
                    Zoo! is home to 25 animals with their own charm and
                    characteristics."
                  </h5>
                </blockquote>
              </figure>
            </div>
          </div>
        </div>
    
        <div class="container-fluid pt-5 pb-5">
          <div class="container font-poppins pt-5">
            <h1 class="fs-1 fw-bold text-center pb-3">What They Say?</h1>
            <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body text-center">
                    <h5 class="card-title">- Roy</h5>
                    <p class="card-text-center">
                      "Highly convenient! I love how Zoopedia makes ticket
                      purchasing so effortless. Moreover, the information regarding
                      zoo hours and special events is readily available. It's
                      incredibly helpful for planning my visit!"
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body text-center">
                    <h5 class="card-title">- Jack</h5>
                    <p class="card-text-center">
                      "An amazing app! I'm impressed by the user-friendly interface.
                      With just a few taps, I can get tickets for the whole family
                      and locate our favorite animals. It truly enhances the zoo
                      experience!"
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body text-center">
                    <h5 class="card-title">- Cong</h5>
                    <p class="card-text-center">
                      "Zoopedia makes visiting the zoo so enjoyable. Not only does
                      it allow me to skip the long queues, but I can also easily
                      access up-to-date information about events and special offers.
                      I highly recommend it!"
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
        <div class="container about pt-5 pb-5">
          <h1 class="fs-1 fw-bold font-poppins text-center pb-3" id="about">
            About
          </h1>
          <div class="row">
            <div class="text-center">
              <img src="/assets/logo.png" alt="" width="300px" />
            </div>
            <div class="text-center">
              <div>
                <h5 class="font-poppins pt-3" style="color: white">
                  An enchanting destination where the beauty of nature and the
                  diversity of living creatures come together.<br />
                  Since its establishment, Zoo! has been a place that showcases
                  natural wonders<br />and serves as a window opening to the world
                  of animals for thousands of visitors each year.
                </h5>
              </div>
            </div>
          </div>
        </div>
    
        <div class="container-fluid" style="background-color: white">
          <div class="container text-center pt-5 pb-5">
            <h1 class="fs-1 fw-bold font-poppins text-center" id="staff">
              Our Team
            </h1>
            <h5 class="pb-3" style="color: black">
              Behind the success of Zoopedia, there is a team with exceptional
              commitment.
            </h5>
            <div class="row tim pt-3 gx-4 gy-4 font-poppins">
              <div class="col-md-2 text-center tim">
                <img src="/assets/syahid.jpg" alt="" class="rounded-circle mb-3" />
                <h4>Syahid</h4>
                <p>3337220006</p>
              </div>
              <div class="col-md-2 text-center tim">
                <img src="/assets/ainun.jpg" alt="" class="rounded-circle mb-3" />
                <h4>Ainun</h4>
                <p>3337220010</p>
              </div>
              <div class="col-md-2 text-center tim">
                <img src="/assets/nur.jpg" alt="" class="rounded-circle mb-3" />
                <h4>Nur</h4>
                <p>3337220014</p>
              </div>
              <div class="col-md-2 text-center tim">
                <img src="/assets/dicky.JPG" alt="" class="rounded-circle mb-3" />
                <h4>Dicky</h4>
                <p>3337220015</p>
              </div>
              <div class="col-md-2 text-center tim">
                <img src="/assets/ridho.jpg" alt="" class="rounded-circle mb-3" />
                <h4>Ridho</h4>
                <p>3337220039</p>
              </div>
              <div class="col-md-2 text-center tim">
                <img src="/assets/dzaki.jpg" alt="" class="rounded-circle mb-3" />
                <h4>Dzaky</h4>
                <p>3337220043</p>
              </div>
              <div class="col-md-2 text-center tim">
                <img src="/assets/fina.jpg" alt="" class="rounded-circle mb-3" />
                <h4>Fina</h4>
                <p>3337220061</p>
              </div>
              <div class="col-md-2 text-center tim">
                <img
                  src="/assets/dalilah.jpeg"
                  alt=""
                  class="rounded-circle mb-3"
                />
                <h4>Dalilah</h4>
                <p>3337220070</p>
              </div>
              <div class="col-md-2 text-center tim">
                <img src="/assets/eliza.jpg" alt="" class="rounded-circle mb-3" />
                <h4>Eliza</h4>
                <p>3337220074</p>
              </div>
              <div class="col-md-2 text-center tim">
                <img src="/assets/raihan.jpg" alt="" class="rounded-circle mb-3" />
                <h4>Raihan</h4>
                <p>3337220076</p>
              </div>
              <div class="col-md-2 text-center tim">
                <img src="/assets/laveno.jpeg" alt="" class="rounded-circle mb-3" />
                <h4>Laveno</h4>
                <p>3337220077</p>
              </div>
              <div class="col-md-2 text-center tim">
                <img src="/assets/okta.jpg" alt="" class="rounded-circle mb-3" />
                <h4>Hikayati</h4>
                <p>3337220088</p>
              </div>
            </div>
          </div>
        </div>
    
        <div class="container-fluid footer pt-5" style="padding: 5%">
          <div class="container font-poppins">
            <div class="row">
              <div class="col-md-4 text-start">
                <p>Pemrograman Web</p>
                <p>UAS 2023</p>
              </div>
              <div class="col-md-4 text-center">
                <p>Zoopedia</p>
              </div>
              <div class="col-md-4 text-end">
                <img src="/assets/logo.png" alt="" width="100px" />
              </div>
            </div>
          </div>
        </div>
    
        <script
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
          crossorigin="anonymous"
        ></script>
      </body>
</html>
