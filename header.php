
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bus Booking</title>
	<!-- CSS only -->
<link href="css/bootstrap.min.css" rel="stylesheet" >
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!-- My own Stylesheet CDN Link -->
<link rel="stylesheet" href="css/stylebetween.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<style type="text/css">
	.menu a{
		text-align: center;
	}
	
</style>
<body>
<div class="container" style="background-color:#9e093b;">
		<nav class="navbar navbar-expand-md fixed-top  navbar-dark bg-dark">
		  <a class="navbar-brand text-white px-3 " href="#" style="font-size: 30px;">Brandname</a>
		  <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav float-right">
		    	<?php if(isset($_SESSION["name"]))
          {
            ?>
            <li class="nav-item ">
           <a class="nav-link text-white  fs-4" href="login.php">Login</a>
           </li>
           <?php }else{ ?>
      <li class="nav-item">
        <a class="nav-link text-white  fs-4 active" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white fs-4 " href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white fs-4 " href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white fs-4 " href="#">Contact</a>
      </li>
            <?php } ?>
    </ul>
		  </div>  
		</nav>
		</div>