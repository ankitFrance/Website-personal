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