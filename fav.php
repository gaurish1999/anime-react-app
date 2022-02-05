<!DOCTYPE html>
<html lang="en">
<head>

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

    <title>Favorites | Anime Love</title>

    <style>
      <?php include "app.css"?>
    </style>
   
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
    
    <div class="cover">
            <div class='container-fluid'>
    
              <div class='row p-4 '>
    
                <!-- Form area -->
                <div class='col-md-4 offset-md-4 bg-light p-5 formdiv'>
    
                        <form class='form-check' action='favdb.php' method="post">
                            
                            <h3>Enter which <i class="fab fa-autoprefixer">nime you L</i><i class="far fa-heart"></i>ve & it will be saved in the database!</h3>
                            <hr>

                            <div class="form-group">
                                <label>Show title</label>
                                <input type='text' name='showtitle' class='form-control' placeholder="e.g. Demon Slayer"/>
                            </div>

                            <div class='form-group'>
                                <label>Version: </label>
                                <select id='version' name='version'>
                                    <option value='Japanese Sub'>Japanese Sub</option>
                                    <option value='English Dub'>English Dub</option>
                                    <option value='Both JP & ENG'>Both JP & ENG</option>
                                </select>
                            </div>

                            <button type='submit' value="Submit" class='btn btn-primary w-50'>Add</button>

                        </form>
                  
                </div>
    
              </div>
    
            </div>

    </div>
          
</div>

<!-- -------------------------------------------------------------------------------- -->
</body>
</html>