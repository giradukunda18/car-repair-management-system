<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Repair Management System</title> 
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
  
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css">
</head>
<body>  
<?php
    include(app_path()."/../resources/views/navbar_customer.blade.php");
    ?>
 <br>
  
  
   <div class="container"> 
     <div class="row">
       
        <div class="page-header">
        <br><br><br>
            <h1 style="text-align: center;">Customer request </h1>
            <?php //echo $msg; ?>
                              
                  
      
      </div> 
       <div class="col-md-3">
         
       </div>
        <div class="col-md-6 animated bounceIn"> 
          
           
        
                
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >
            @csrf
                <div class="input-group">
                  <span class="input-group-addon"><b>vehicle Name</b></span>
                  <input id="drname" type="text" class="form-control" name="vname" placeholder="vehicle Name">
                </div>
                <br> 
                
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Plate Number</b></span>
                  <input id="drname" type="text" class="form-control" name="pnumber" placeholder="Ex:RAA001A">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><b>Vehicle Model</b></span>
                  <input id="drjoin" type="text" class="form-control" name="model" placeholder="Vehicle Model">
                </div>
                <br>

                 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>problem Description</b></span>
                  <textarea height="40px" width="20" name="problem" placeholder="vehicle problems Descriptio"></textarea>
                </div>
                <br> 

               
                 
            
                <div class="input-group">
                  <input type="submit" name="submit" value="Request" class="btn btn-success">
                  
                </div>
              </form>   
        </div>  
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    <br> <br> <br> 
    <div>
        <footer style="background-color: #2f2f2f;
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