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
    include(app_path()."/../resources/views/navbar.blade.php");
    ?>
 <br>
  
  
   <div class="container"> 
     <div class="row">
       
        <div class="page-header">
            <h1 style="text-align: center;">New Customer Form</h1>
            <?php //echo $msg; ?>
                              
                  
      
      </div> 
      <div class="input-group">
<table border="1" align="center"width="1000">
<tr>
<span class="input-group-addon"><th>id</th><th>firstname</th><th>lastname</th><th>address</th><th>mobile</th></span>
</tr>

@foreach($users as $user)
<tr>
<td>{{$user->id}}</td>
<td>{{$user->fname}}</td>
<td>{{$user->lname}}</td>
<td>{{$user->address}}</td>
<td>{{$user->mobile}}</td>
</tr>
@endforeach

</table>

</div>  
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    
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
</body>
</html>