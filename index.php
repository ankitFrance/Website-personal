
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
                    echo '<li class="nav-item custom-nav-item"> <a href="myprofile.php" class ="nav-link">Profile</a></li> &nbsp; &nbsp;
                    <li class="nav-item custom-nav-item"> <a href="logout.php" class ="nav-link" id="logout">Logout</a></li> &nbsp; &nbsp;';
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
       


<!--Start video background -->
<div class="container-fluid remove-vid-marg">
    <div class ="vid-parent">
        <video playsinline autoplay muted loop>
            <source src="images/delhivideo.mp4">
        </video>
        <div class="vid-overlay"></div>
                                  
    </div>
    <div class ="vid-content">
        <h1 class="my-content"> Welcome to Delhi</h1>
        <small class="my-content"> Explore the City </small> <br><br>

        <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter"> Get Started </a>
        

</button>
    </div>
</div>




    </section >
<!--/////////////////////////////////////////////////////////////////////////////-->
    <section id="travel">
      <div class="forhiding"></div> <h1> </h1>    </div>
  <div id="headingtour">    <h1> Explore the Places  </h1>    </div>
        
     
    <div id ="smallheadingtour">  <h3 class="text-muted">Come To Life.</h3> </div>

    <br>


    <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <div class="card" style="width: 18rem;">
            <img src="images/iskon.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Iskcon Temple</h5>
            <p class="card-text">ISKCON stands for the International Society for Krishna Consciousness. attracts visitors in lakhs, annually. International Society for Krishna Consciousness. attracts visitors for Krishna Consciousness</p>
            <a href="#" class="btn btn-primary">EXPLORE</a>
          </div>
        </div>
      </div>
      </div>



      <div class="col-sm-3">
        <div class="card">
          <div class="card" style="width: 18rem;">
            <img src="images/humayun.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Humayun's Tomb</h5>
            <p class="card-text">Humayun's tomb (Hindustani or Urdu: Maqbara-i Humayun) is the tomb of the Mughal Emperor Humayun in Delhi, India. The tomb was commissioned by Humayun's first wife .</p>
            <a href="#" class="btn btn-primary">EXPLORE</a>
          </div>
        </div>
      </div>
      </div>



      <div class="col-sm-3">
        <div class="card">
          <div class="card" style="width: 18rem;">
            <img src="images/lodi.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Lodi's Tomb</h5>
            <p class="card-text">The old Lady Willington Park, now known as Lodhi Garden, is dotted with monuments of Sayyid and Lodhi Periods, which include tombs mosques, and bridges  Willington Park, now known as Lodhi Garden.</p>
            <a href="#" class="btn btn-primary">EXPLORE</a>
          </div>
        </div>
      </div>
      </div>



      <div class="col-sm-3">
        <div class="card">
          <div class="card" style="width: 18rem;">
            <img src="images/jantar.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Jantar Mantar</h5>
            <p class="card-text">Jantar Mantar (Yantra - instruments, mantra - formulae) was constructed in 1724. Maharaja Jai Singh of Jaipur who built this observatory went on to build other observatories in Ujjain.</p>
            <a href="#" class="btn btn-primary">EXPLORE</a>
          </div>
        </div>
      </div>
      </div>
    </div>
<br>

    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <div class="card" style="width: 18rem;">
            <img src="images/minaar.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Qutab Minar</h5>
            <p class="card-text">Qutab Minar is a soaring, 73 m-high tower of victory, built in 1193 by Qutab-ud-din Aibak immediately after the defeat of Delhi's last Hindu kingdom..</p>
            <a href="#" class="btn btn-primary">EXPLORE</a>
          </div>
        </div>
      </div>
      </div>


      <div class="col-sm-3">
        <div class="card">
          <div class="card" style="width: 18rem;">
            <img src="images/inaa.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"> Dilli Haat INA</h5>
            <p class="card-text">The craftsmen who are registered with D.C.Handicrafts are the ones who are eligible to find a place here. registered with D.C.Handicrafts</p>
            <a href="#" class="btn btn-primary">EXPLORE</a>
          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-3">
      <div class="card">
        <div class="card" style="width: 18rem;">
          <img src="images/jama.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Jama Masjid</h5>
          <p class="card-text">This great mosque of Old Delhi is the largest in India, with a courtyard capable of holding 25,000 devotees. It was begun in 1644 and ended up being.</p>
          <a href="#" class="btn btn-primary">EXPLORE</a>
        </div>
      </div>
    </div>
  </div>


  <div class="col-sm-3">
    <div class="card">
      <div class="card" style="width: 18rem;">
        <img src="images/gate.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">India Gate</h5>
        <p class="card-text">The India Gate (formerly known as the All India War Memorial) is a war memorial located astride the Rajpath, on the eastern edge of the "ceremonial axis" of New Delhi.</p>
        <a href="#" class="btn btn-primary">EXPLORE</a>
      </div>
    </div>
  </div>
</div>
 </div>
    </div>
  





       <!--end of Tourism section -->
    </section>





    <section id ="food"> 
      <div class="forhiding"></div> <h1> </h1>    </div>

        <div id="headingfood">    <h1> Explore the cuisine  </h1>    </div>
        
     
        <div id ="smallheading">  <h3 class="text-muted">To spice up your life</h3> </div>

        <div class="container">
            <p>Delhi is undeniably one of the best places in India to enjoy delicious fare, be it local, international or cuisines from other parts of the country. The eating scene reflects the capital's melting pot image with people from all over the country and the world setting up shop to woo palates of citizens and visitors alike. These dishes we tried are just a selection of the delights that Delhi has in store for you. Not sure where to go? No worries. Because now you know!
                Source- <strong> Indiatimes.com</strong>
            </p>
        </div>
            
       

        <div class="container">

           <div class="row">
               <div class="col-md-4">
                   <div class="card text-center " style="width: 18rem;">
                       <img src="images/a.jpg" class="card-img-top" alt="a">
                       <div class="card-body">
                       <h5 class="card-title">Kebabs and Rolls</h5>
                       <p class="card-text">Kebabs consist of cut up or ground meat, sometimes with vegetables, and various other accompaniments according to the specific recipe. </p>
                       <a href="#" class="btn btn-warning">Explore</a>
                       </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="images/b.jpg" class="card-img-top" alt="a">
                        <div class="card-body">
                        <h5 class="card-title">Chaat</h5>
                        <p class="card-text">The chaat variants are all based on fried dough, with various other ingredients. The original chaat is a mixture of potato pieces, crisp fried </p>
                        <a href="#" class="btn btn-warning">Explore</a>
                        </div>
                     </div>
                 </div>

                 <div class="col-md-4">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="images/c.jpg" class="card-img-top" alt="a">
                        <div class="card-body">
                        <h5 class="card-title">Paranthas</h5>
                        <p class="card-text">Parathas are one of the most popular unleavened flatbreads in the Indian Subcontinent, made by baking or cooking whole wheat  </p>
                        <a href="#" class="btn btn-warning">Explore</a>
                        </div>
                     </div>
                 </div>


       <div class="col-md-4 formargin">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="images/d.jpg" class="card-img-top" alt="a">
                        <div class="card-body">
                        <h5 class="card-title">Biryani</h5>
                        <p class="card-text"> In North India, different varieties of biryani developed in the Muslim centres of Delhi.</p>
                        <a href="#" class="btn btn-warning">Explore</a>
                        </div>
                     </div>
                 </div>

                 <div class="col-md-4 formargin">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="images/e.jpg" class="card-img-top" alt="a">
                        <div class="card-body">
                        <h5 class="card-title">Shawarma</h5>
                        <p class="card-text">Shawarma is prepared from thin cuts of seasoned marinated lamb, mutton, veal, beef, chicken.</p>
                        <a href="#" class="btn btn-warning">Explore</a>
                        </div>
                     </div>
                 </div>

                 <div class="col-md-4 formargin">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="images/b.jpg" class="card-img-top" alt="a">
                        <div class="card-body">
                        <h5 class="card-title">Momos</h5>
                        <p class="card-text">A simple white-flour-and-water dough is generally preferred to make the outer momo covering.</p>
                        <a href="#" class="btn btn-warning">Explore</a>
                        </div>
                     </div>
                 </div>


            </div>
        </div>

          </section>        

  

<!--End of food section -->


<!--start of entertainment section-->
<section id="entertainments">
  <div class="forhiding"></div> <h1> </h1>    </div>
<div id="headingent">    <h1> Entertainment </h1>    </div>
        
     
<div id ="smallheadingent">  <h3 class="text-muted">The total package</h3> </div>




 




<!--side bars-->

<div class="container">

  <div class="row">
      <div class="col-md-4">
            <ul class="list-group">
                 <li class="list-group-item active list-group-item-action" aria-current="true">ENTERTAINMENT</li>
                 <a href ="" class="list-group-item list-group-item-action">Museuems in Delhi</a>
                 <a href ="" class="list-group-item list-group-item-action">Movie Theatres</a>
                 <a href ="" class="list-group-item list-group-item-action">Theaters and Auditorium</a>
                 <a href ="" class="list-group-item list-group-item-action">Pubs and Discotheques</a>
                 <a href ="" class="list-group-item list-group-item-action">Art Galleries</a>
                 <a href ="" class="list-group-item list-group-item-action">Adventure Sports</a>
                 <a href ="" class="list-group-item list-group-item-action">Golf in Delhim</a>
                 <a href ="" class="list-group-item list-group-item-action">Parks in Delhi</a>
                 <a href ="" class="list-group-item list-group-item-action">Photo gallery</a>
                 <a href ="" class="list-group-item list-group-item-action">Children's Entertainment</a>

                
            </ul>
      </div>
      <!--image of entertainment section-->
                  <div class="col-md-8">
                      <img src="images/ent.jpg" alt="courses"
                       style="height:200px; width:100%; object-fit:cover; box-shadow:10px;"/>

                   

                  
                    <p style="text-align: justify;"> Delhi has always been a vibrant city with a cosmopolitan culture which is reflected in every aspect of life. Delhi has plenty of entertainment spots to choose from. Entertainment Places like cinema halls, pubs, hotels and recreational centers are open on all weekends. It has world class multiplexes like the PVR, Big Cinema, Fun Cinema, DT Cinema etc. Night life in Delhi consists of clubs, bars, restaurants, etc., where you get a world class ambience with quality service.

                      Auditoriums in Delhi host cultural and recreational concerts all through the year which are seen with great interest by the people of Delhi. Live concerts and dramas take place on a regular basis which adds to the entertainment aspect of the city. With the development of elegant malls and shopping complexes in Delhi, you have the option of shopping and dining under of a single roof. These shopping malls cater to a variety of needs by providing services ranging from restaurants, swanky showrooms, cheap grocery stores, play stations and much more. SOURCE-delhitourism.gov.in</p>

                 </div>
<!--En of image of entertainment section-->
   </div>
  </div>

  <!--side bars ending-->
</section>


<!-- end of entertainment section -->



<!--Start of contact section -->

<section id="contacts">
  <div class="forhiding"></div> <h1> </h1>    </div>

  <div id="headingcontact">    <h1> Contact Us </h1>    </div>
        
     
        <div id ="smallheadingcontact">  <h3 class="text-muted">We'll reach out ASAP</h3> </div>


  <div class="container">
    <div class="row">
      <div class="col-md-8 ">

  <form>
    <div class="form-group">
      <label for="exampleFormControlInput1"><strong>E-mail address</strong> </label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <br>
  
    <div class="form-group">
      <label for="exampleFormControlSelect2"><strong>Select the Category</strong> </label>
      <select multiple class="form-control" id="exampleFormControlSelect2">
        <option>Entertainment</option>
        <option>Upcoming events</option>
        <option>Food ordering</option>
        <option>Reservation</option>
        <option>Administrative procedures</option>
      </select>
    </div>
    <br>
    <div class="form-group">
      <label for="exampleFormControlTextarea1"><strong>Your Query</strong> </label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-warning mb-2">Submit</button>
  </form>

      </div>




      <div class="col-md-4 towhite">
        <div id="mydetails">
          <h5 class="">Plan a trip</h5>
          <p id="atext"> Planning a trip is a lot of fun and making 
             an itinerary is only a part of the 
              planning. In a city full of wonders 
               such as Delhi, an itinerary can go 
                a long way in ensuring that you have 
                 enough time to explore its grand sights 
                  and hidden corners. In this section,  
                  we have put together a day-by-day guide 
                   to offer you some suggestions on  
                   how to spend your day(s) in Delhi.

            Depending on the number of days you have  
            to explore the capital city, we have chalked 
             out some itineraries for you.  
             we have put together a day-by-day guide 
                   to offer you some suggestions on  
                   how to spend your day(s) in Delhi.
             
          </p>
          <button type="submit" class="btn btn-warning mb-2 ">Plan</button>
          </div>
      </div>

    </div>
  </div>


</section>
<br>

<!--End of contact section

-->




<!--Footer start-->




<footer class="bg-dark text-center text-white">
 
  <div class="container p-4 pb-0">
 
    <section class="">
      <form action="">
      
        
        <div class="row d-flex justify-content-center">
         
          
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
         
          

         
          
          <div class="col-md-5 col-12">
          
            
            <div class="form-outline form-white mb-4">
              
               <input type="email" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2">Email address</label>
            </div>
          </div>
          
          

       
          
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
         
          
        </div>
     
        
      </form>
    </section>
  
    
  </div>
 
  
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="">Ankit Kumar</a>
  </div>

  
  <!-- Copyright -->
</footer>






<!-- footer end-->

<!-- Button trigger modal -->


<!-- Modal for login-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="loginserver.php">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> <i class="fas fa-envelope"></i>Email address</label>
            <input type="email" name= "logemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> <i class="fas fa-key"></i>Password</label>
            <input type="password" name="logpassword" class="form-control" id="exampleInputPassword1">
          </div>
          
          
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submission">Login</button>
      </div>
    </div>
  </div>
</div>
</form>

<!--modal login end-->

<!--modal registration start-->

<div class="modal fade" id="registerexampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registration Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!------------------------------------------------------------------------->
         <!------------------------------------------------------------------------->
        <form method="post" action="server.php">
      
        
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Choose Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="Rusername"aria-describedby="emailHelp">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> <i class="fas fa-envelope"></i>Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="Remail" aria-describedby="emailHelp">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> <i class="fas fa-key"></i>Choose Password</label>
            <input type="password" class="form-control" name="Rpassword" id="exampleInputPassword1">
          </div>
          
          
       
      </div>
      <div class="modal-footer">
        <small id= "status"> </small>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="reg_user">Sign up</button>
      </div>
    </div>
  </div>
</div>
</form>
<!------------------------------------------------------------------------->
<!------------------------------------------------------------------------->

<!--modal registration end-->
  

   




    <script src="js/jquery.min.js"></script>  <!--bootstrap -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>    <!--font awesome -->


</BODY>
</HTML>