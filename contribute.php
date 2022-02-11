<!DOCTYPE html>
<html lang="en">
<head>

    <link rel='icon' href='logo.png'>
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

    <title>Contribute | Anime Love</title>

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
    
              <!-- <div class='row p-4 '> -->
    
                <!-- Page message -->
                <div class='form-group p-5 contactus'>
                  <h1>Contact Us | We value you!</h1>
                </div>

                <!-- Form area -->
                <div class='col-lg-6 offset-lg-3 justify-content-center d-flex'>
                    
                  
                    <div class='col-lg-12 bg-light p-5 formdiv'>
        
                            <!-- <form class='form-check' action='userdetails.php' method="post"> -->
                            <form class='form-check' action='userdetails.php' method="post" target="_blank">        

                                <div class="form-group">
                                    <label>Tell us how can you contribute</label>
                                    <textarea rows='5' cols='40' name='contribute' <?php echo isset($_POST['contribute']) ? $_POST['contribute'] : '' ?> class='form-control' placeholder="e.g. I know japanese and have cleared the JLPT N5 exam so, I am able to do basic translations. If you want to publish content from japanese sources, I can be useful to you."></textarea>
                                </div>

                                <!-- <button type='submit' value="Submit" class='btn btn-primary w-50'>Proceed for details</button> -->

                            <!-- </form> -->
                    
                    <!-- </div> -->

                    <!-- <div class=' bg-light p-5 formdiv'> -->
        
                            

                                <div class='form-group'>
                                    <label>Name</label>
                                    <input type="text" name='inputName' value='' id='inputName' class='form-control' <?php echo isset($_POST['inputName']) ? $_POST['inputName'] : '' ?> placeholder="e.g. Keegan Michael Key">
                                </div>
                                
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type='email' name='usermail' value='' id='usermail' class='form-control' <?php echo isset($_POST['usermail']) ? $_POST['usermail'] : '' ?> placeholder="e.g. keyandpeele@comedycentral.com"/>
                                </div>
                                    <hr>

                                <div class='form-group'>
                                    <label>Mobile No.</label>
                                    <input type='text' id='inputccode' value='' class='form-control' placeholder="e.g. 91 (for India)"><br/>
                                    <input type='text' id='inputmobile' value='' name='mobnum' class='form-control' <?php echo isset($_POST['mobnum']) ? $_POST['mobnum'] : '' ?> placeholder="e.g. 0000 111 222">
                                    <div class='btn btn-primary mt-2' onclick="checknum()">Verify Number</div>
                                    <div id='showstatus'></div>
                                </div>

                                    <hr>
                                <div class='form-group'>
                                    <label>Occupation</label>
                                    <input type='text' name='occupation' class='form-control' <?php echo isset($_POST['occupation']) ? $_POST['occupation'] : '' ?> placeholder="e.g. Comedian at Comedy Central">
                                </div>

                                <button type='submit' value="Submit" class='btn btn-primary w-50 mt-5'>Submit details</button>

                            
                    </form>
                    </div>
                  
                </div>
              <!-- </div> -->
    
            </div>

    </div>
          
</div>

<!-- -------------------------------------------------------------------------------- -->
<script src='phonenum.js'></script>
</body>
</html>