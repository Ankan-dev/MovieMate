<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
</head>

<body>

    <nav>
        <div id="logo-container">
            <img src="./assets/Logo.png" alt="Logo" id="logo" />
        </div>


        <!--Mobile design starts-->
        <button id="menu-button">
            <img src="./assets/menu.png" alt="menu" id="menu-icon" />
        </button>

        <div id="mobile-menu">
            <ul id="mobile-menu-list">
                <li><a href="#">Home</a></li>
                <li><a href="./public/Films.html">Films</a></li>
                <li><a href="./public/Your_ticket.html">Your Tickets</a></li>
                <li><a href="./public/Recently_watched.html">Recently Watched</a></li>

                <button id="login">Login</button>

                <p id="close-menu">Close</p>
            </ul>
        </div>




        <!--Mobile design ends-->

        <!--Tab and desktop design starts-->

        <div id="menu-list-container">
            <ul id="menu-list">
                <li><a href="#">Home</a></li>
                <li><a href="./public/Films.html">Films</a></li>
                <li><a href="./public/Your_ticket.html">Your Tickets</a></li>
                <li><a href="./public/Recently_watched.html">Recently Watched</a></li>
            </ul>
        </div>
        <div id="authentication">
            <p id="user-name" style="display: none;">Username</p>
            <button id="login">Login</button>
        </div>
        <!--Tab and desktop design ends-->
    </nav>

    <!--carousel starts-->
    <div id="carousel" style="height: 30vw; overflow-y: hidden;">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./assets/bb2.jpeg" class="d-block w-100" alt="..." >
              </div>
              <div class="carousel-item">
                <img src="./assets/singham.jpeg" class="d-block w-100" alt="..." >
              </div>
              <div class="carousel-item">
                <img src="./assets/Bhulbhulaiya.jpeg" class="d-block w-100" alt="..." >
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
<!--carousel ends-->

<!--Location form start-->

<div id="location-container">
    <form>
        <label>Your Location</label>
        <p>Choose your city, set the stage for unforgettable movie moments.
            From cozy corners to bustling hubs, we've got your location covered.
            Let the magic of cinema find you—right where you are!</p>
        <select id="select_location">
            <option value="Durgapur">Durgapur</option>
            <option value="Haldia">Haldia</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Bankura">Bankura</option>
            <option value="Bardhaman">Bardhaman</option>
        </select>
    </form>
</div>


<!--Location form ends-->


    <div id="recent-movies">
        <div class="card" style="width: 18rem;">
            <img src="./assets/Singham-Again-thumbnail.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="./assets/bhool bhulaiya-3-thumbnail.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="./assets/animal-thumbnail.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="./assets/3-idiots-thumbnail.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>


    </div>

    <footer>
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-6 col-lg-3 about-footer">
                        <h3>Lorem Ipsum dummy text </h3>
                        <ul>
                            <li><a href="tel:(010) 1234 4321"><i class="fas fa-phone fa-flip-horizontal"></i>(010) 1234 4321</a></li>
                            <li><i class="fas fa-map-marker-alt"></i>
                                1 / 105 Bay Lights,
                                <br/>Lorem Ipsum,
                                <br/>LIC 3201
                            </li>
                        </ul>
                        <a href="" class="btn red-btn">Book Now</a>
                    </div>
                    <div class="col-md-6 col-lg-2 page-more-info">
                        <div class="footer-title">
                            <h4>Page links</h4>
                        </div>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Testimonial</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
    
                    <div class="col-md-6 col-lg-3 page-more-info">
                        <div class="footer-title">
                            <h4>More Info</h4>
                        </div>
                        <ul>
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Dolor sit amet</a></li>
                            <li><a href="#">Consectetur Adipisicing </a></li>
                            <li><a href="#">Ed do eiusmod tempor incididunt</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-4 open-hours">
                        <div class="footer-title">
                            <h4>Open hours</h4>
                            <ul class="footer-social">
                                <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
    
                            </ul>
                        </div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><i class="far fa-clock"></i>Monday Thursday</td>
                                    <td>9:00am - 5:00pm</td>
                                </tr>
                                <tr>
                                    <td><i class="far fa-clock"></i>Friday</td>
                                    <td>9:00am - 4:00pm</td>
                                </tr>
                                <tr>
                                    <td><i class="far fa-clock"></i>Sturday</td>
                                    <td>9:00am - 1:30pm</td>
                                </tr>
                                <tr>
                                    <td><i class="far fa-clock"></i>Sunday</td>
                                    <td>9:30am - 12:00pm</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <div class="footer-logo">
    
                        <table>
                            <tbody>
                                <tr>
                                    <td><img src="https://i.ibb.co/vxc577d/dummy-logo3.jpg"></td>
                                    <td><img src="https://i.ibb.co/vxc577d/dummy-logo3.jpg"></td>
                                    <td><img src="https://i.ibb.co/vxc577d/dummy-logo3.jpg"></td>
                                    <td><img src="https://i.ibb.co/vxc577d/dummy-logo3.jpg"></td>
                                    <td><img src="https://i.ibb.co/vxc577d/dummy-logo3.jpg"></td>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="">Privacy policy</a>
                    </div>
                    <div class="col-sm-8">
                        <p>Lorem ipsum dolor sit amet @ 2019 All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./scripts/home.js"></script>
</body>

</html>