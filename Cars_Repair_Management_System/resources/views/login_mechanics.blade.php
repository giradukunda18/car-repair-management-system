<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Repair Management System/Sign In</title> 
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<body> 
<?php
    include(app_path()."/../resources/views/navbar_mechanics_login.blade.php");
    ?>
   
    
    <br>
    <div class="container"> 
     <div class="row">
       <div class="col-md-3"></div>
        <div class="col-md-6"> 
          <?php //echo $msg; ?><br><br><br><br>
            <div class="page-header">
                <h1 style="text-align: center;">Mechanic Login</h1>      
          </div> 
            <form class="form-horizontal animated bounce" action="" method="post"> 
            @csrf
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="username" type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <br>
                
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <br> 
                
                <div class="input-group">
                  <button type="submit" name="submit" class="btn btn-success">Log in</button>
                  
                </div>

              </form>   
        </div> 
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    
    <br><br><br><br><br><br><br><br>
    <div>
        <footer style="background-color: #2f2f2f;
        margin-top:17b 0px;
          color: #fff; padding-top: 50px;

          padding-bottom: 20px;" class="container-fluid text-center">
                <p>All rights reserved by 18RP01360 & 18RP01048</p> 
        </footer>
        
        
        
        
    
    
    
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".parallax");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
    </script>    
  
  
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>
      
</body>
</html>