<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Log In</title>
<?php include"view/src/index.php";?>
<link rel="stylesheet" type="text/css" href="view/src/css/login.css">
<link rel="stylesheet" type="text/css" href="view/src/css/backgrounds.css">
</head>
<body>
<div class="container" >  
<div class="col-lg-4 col-md-3 col-sm-2"></div>
<div class="col-lg-4 col-md-6 col-sm-8">
<div class="row loginbox">                    
<div class="col-lg-12">
<span class="singtext" >Log In</span>   
</div>
<form method="POST" action="model/login/index.php">
<div class="col-lg-12 col-md-12 col-sm-12">
<input class="form-control" type="text" id="usuario" name="usuario" placeholder="Nick" required autofocus> 
</div>
<div class="col-lg-12  col-md-12 col-sm-12">
<input class="form-control" type="password" id="contra" name="contra" placeholder="Password" >
</div>
<div class="col-lg-12  col-md-12 col-sm-12">
<button type="submit" class="btn submitButton ">Entrar</button>
</div>                     
</form>
</div>
<div class="row forGotPassword">
<a href="#" >Forgot Username / Password? </a> 
</div>
<br>                
<br>
<footer  class="footer">                
<a href='#'>Terms of use</a> | 
<a href='#'>Privacy Policy</a> | 
<a href='#'>Contact us</a> | 
<a href='#'>Feedback</a> 
<p >©2016   Company All rights reserved </p>                 
</footer> <!--footer Section ends-->

</div>
<div class="col-lg-4 col-md-3 col-sm-2"></div>
</div>
</body>
</html>