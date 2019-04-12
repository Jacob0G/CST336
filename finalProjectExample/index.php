


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <title>Book Page</title>
        
    </head>
    <body class = 'bg-dark'>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="http://csumb.edu">CSUMB</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href='index.php' id='home'>
                    <i class="fas fa-home"></i>
                    Home<span class="sr-only">(current)</span> </a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="catalog.php" id = 'catalog'>
                    <i class="fas fa-book"></i>
                    Catalog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="adminLogin.php" id = 'login'>
                    <i class="fas fa-sign-in-alt"></i>
                    Login</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="about.php" id = 'about'>
                    <i class="fas fa-info-circle"></i>
                    About Us</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href='scart.php'>
                        <i class="fas fa-shopping-cart"></i>
                        Cart: 0 </a></li>
                    </a>
                </li>
            </ul>
          </div>
        </nav>
</div>
        <div class="jumbotron jumbotron-fluid bg-dark">
            <div class='text-center'>
                <div class="container">
                    <h1 class="display-1 text-dark">Otter Bookstore</h1>
                    <p class="lead">“The more that you read, the more things you will know. The more that you learn, the more places you'll go.”</p>
                </div>
            </div>
        </div>
    <div class='container'>
        <!-- Add Carousel here -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
           
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-inline w-40" src="https://images-na.ssl-images-amazon.com/images/I/51C9zeyCMCL._SX340_BO1,204,203,200_.jpg" alt="First slide">
            </div>
                          <div class="carousel-item">
                <img class="d-inline w-40 " src="https://images-na.ssl-images-amazon.com/images/I/51BXPzy1rpL._SX322_BO1,204,203,200_.jpg" alt = "First Slide">
              </div>
                          <div class="carousel-item">
                <img class="d-inline w-40 " src="https://images-na.ssl-images-amazon.com/images/I/512duVU966L._SX322_BO1,204,203,200_.jpg" alt = "First Slide">
              </div>
                          <div class="carousel-item">
                <img class="d-inline w-40 " src="https://images-na.ssl-images-amazon.com/images/I/5128ATd9dSL._SX418_BO1,204,203,200_.jpg" alt = "First Slide">
              </div>
                          <div class="carousel-item">
                <img class="d-inline w-40 " src="https://vignette.wikia.nocookie.net/goosebumps/images/6/65/Welcome_to_Camp_Nightmare_%28Cover%29.jpg/revision/latest/scale-to-width-down/210?cb=20170511014832" alt = "First Slide">
              </div>
                          <div class="carousel-item">
                <img class="d-inline w-40 " src="https://vignette.wikia.nocookie.net/goosebumps/images/0/0c/Stay_Out_of_the_Basement_%28Cover%29.jpg/revision/latest/scale-to-width-down/210?cb=20160705013444" alt = "First Slide">
              </div>
                      </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <br>
            <a href="catalog.php"  class="btn btn-outline-secondary" role="button" id="catalogButton" aria-pressed="true"> Check Catalog Now! </a>
        <br>
          <div class='text-center'>
    <hr>
    <strong>Disclaimer:</strong> All information in this website is fictitious. <br />
    The information on the website is used for academic purposes.<br />
    &copy;2018 Eli A. Manzo
    </div>    </div>
    </body>

</html>