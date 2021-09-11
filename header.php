
<!--DOCTYPE HTML -->
<HTML>
<HEAD>
    <meta charset="UTF-8">
    <TITLE> Welcome to my website </TITLE>
    <!--for carousel-->
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!--bootstrap -->
    <link rel="stylesheet" href="css/all.min.css"> <!--fontawesome -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet"> <!--Google Font -->
    <link rel="stylesheet" href="css/style.css">

</HEAD>
<BODY>

    <section id="Home">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top ">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">Delhi</a>
              <span class="navbar-text"> Dildaar Dilli </span>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav custom-nav " >
                  <li class="nav-item custom-nav-item"> <a href="#Home" class ="nav-link">Home</a></li> &nbsp; &nbsp;
                  <li class="nav-item custom-nav-item"> <a href="#travel" class ="nav-link">Travel</a></li> &nbsp; &nbsp;
                  <li class="nav-item custom-nav-item"> <a href="#food" class ="nav-link">Cuisine</a></li> &nbsp; &nbsp;
                  <li class="nav-item custom-nav-item"> <a href="#entertainments" class ="nav-link">Entertainment</a></li> &nbsp; &nbsp;
                  <li class="nav-item custom-nav-item"> <a href="#contacts" class ="nav-link">Reservation</a></li>
              

                  <?php
                  session_start();
                  if(isset($_SESSION['is_login'])){
                    echo '<li class="nav-item custom-nav-item"> <a href="#profile" class ="nav-link">Profile</a></li> &nbsp; &nbsp;
                    <li class="nav-item custom-nav-item"> <a href="#logout" class ="nav-link">Logout</a></li> &nbsp; &nbsp;';
                  }else{
                    echo'  <li class="nav-item custom-nav-item"> <a href="" class ="nav-link " data-bs-toggle="modal" data-bs-target="#exampleModal">Sign in</a></li>
                    <li class="nav-item custom-nav-item"> <a href="" class ="nav-link"data-bs-toggle="modal" data-bs-target="#registerexampleModal">Sign Up</a></li>';
                  }

                  ?>
        

                  
                  <li class=" nav-item custom-nav-item text-white social-hover"> <a href="" class="nav-link"><i class="fab fa-twitter"> </i>  </a></li>
                  <li class=" nav-item custom-nav-item text-white social-hover"> <a href="" class="nav-link"><i class="fab fa-facebook"> </i>  </a></li>
                  <li class=" nav-item custom-nav-item text-white social-hover"> <a href="" class="nav-link"><i class="fab fa-instagram"> </i>  </a></li>
                </div>
                
              </ul>
              </div>
            </div>
          </nav>

        </header>