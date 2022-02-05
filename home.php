<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Axios CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>

    <script src="https://kit.fontawesome.com/11bfc88179.js" crossorigin="anonymous"></script>
    <!-- Google translate -->
    <!-- <script type="text/javascript" 
      src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <script type="text/javascript">

      function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
      } -->

    </script>

    <title>Anime Love</title>

    <style>
      <?php include "app.css"?>
    </style>
    <!-- <link rel='stylesheet' href="/app.css"> -->
    <script>
      <?php include "app.js"?>
    </script>

    <!-- <script>
      function clear(){
          console.log("Start");
          document.getElementById('getInput').value = '';
          console.log("End");
        }
    </script> -->
</head>
<body>
<!-- -------------------------------------------------------------------------------- -->

<div class="App">
    
    <!-- Navbar Start---------------------------------------------------------------- -->
            <nav class="navbar navbar-expand-md navbar-dark sticky-top">
    
              <!-- Brand  -->
              <a class="navbar-brand" href="home.php"><i class="fab fa-autoprefixer">nimeL</i><i class="far fa-heart"></i>ve</a>
    
              <!-- Toggler/collapsibe Button -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
    
              <!-- Navbar links -->
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  
    
                  <li class="nav-item">
                    <a class="nav-link" href="contribute.php">Contribute</a>
                  </li>
    
                  <li class="nav-item">
                    <a class="nav-link" href="fav.php">My Favorites</a>
                  </li>
    
                  <li class='nav-item'>
    
                    <form class="form-inline d-flex justify-content-center">
    
                      <div class='input-group'>
    
                        <input class="form-control" type="search" id='getInput' placeholder="Search"/>
                        <div class='input-group-append'>

                          <!-- <div onclick="clear()" class='btn btn-danger'>Clear</div> -->

                        </div>
    
                        <div class="btn btn-success ml-2" onclick="display()">Search Anime</div>
                      </div>
                      
                          
                    </form>
    
                  </li>
    
                </ul>
              </div>
            </nav> 
    <!-- Navbar End---------------------card------------------------------------------- -->
    <div class='cover'>
            <div class='container-fluid'>
    
            <!-- Page message -->
            <!-- <div class="form-group p-5 contactus">
                  <h3>It's all about <i class="fab fa-autoprefixer">nime!</i></h3>
            </div> -->

              <div class='row p-5 mainbg srccard'>

                <!-- Card area -->
                <div class='col-md-8 offset-md-2 bg-light p-5'>
    
                     <div class='justify-content-center d-flex'>

                     <!-- Search Result table -->
                      <div class='scrollDiv' id="card">
        
                      </div>

                    </div>

                </div>
    
              </div>
    
            </div>
          
        </div>
  </div>

</body>
</html>