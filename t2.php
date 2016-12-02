<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dora bus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <link href="dora1.css" rel="stylesheet" type="text/css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"/></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"/></script>
  <style>
  
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }
  }
  </style>
</head>
<body>

<div class="container text-center">
<div class="row">

    <div class="col-sm-12">
      <img src="hore3.png" class="img-responsive" style="width:100%" alt="Image">
    </div>
     </div>
    </div>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="PNG.png" style="width:80px; 
            height:80px;">
      </a>
    </div>
  </div>
</nav>
<nav class="navbar navbar-default">
  <div class="container">
    <ul class="nav navbar-nav">
	<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" 
            data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"><img src="PNG.png" class="img-responsive" style="max-width:150px; 
						margin-top:-40px;"></a>
</div>
      <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">O nas</a></li>
        <li><a href="#">Prihlasenie/Registracia</a></li> 
        <li><a href="#">Kontakt</a></li> 
        <li><a target="_blank" href="https://www.facebook.com/DoraBus-1334727099880570/"><img src="fb.png" width="20%" height="20%" style="margin-top:-7px;"> </a></li>
        </ul>
    </div>
</nav>
  
<div class="container text-center">
<div class="row">

<div class="row">
 <div class="col-sm-12"><h3></h3>
 </div> 

 </div>

    <div class="col-sm-4">
      <img src="Vieden.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Vieden</p>
    </div>
    <div class="col-sm-4">
      <img src="london.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Londyn</p>
    </div>
    <div class="col-sm-4">
      <img src="Krakow.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Krakow</p>
    </div>
    </div>
	
	 </div>
	 
  <div class="container text-center">
  <div class="panel panel-primary">
      <div class="panel-heading">Vyhladat spojenie:</div>
      <div class="panel-body"><div class="col-sm-1.5"> <select name="abc" >
    <?php
    Include('connect.php');
    $sql = "SELECT Odkialkam, Kam FROM Cesty ";
    $result= mysql_query($sql);
    while ($row = mysql_fetch_array($result)) {
      # co
     ?>

   <option>  <?php echo $row['Odkialkam']; ?> </option>

  <?php } ?>
 </select> <div class="col-sm-3">Odkial - Kam: 
 </div></div>
 
 <div>      
   Datum:
      <input type="date" name="datum">   
    </div>
	
	<div style="margin:15px; margin-left:15px">
	<form action="vyhladaj">
    <id="button" style="float:right; size:50px;">
  <button type="button">VyhÄ¾adaj </button>
   </div>
   </form>
 </div>
	  
    </div>
	</div>
  
  

	  
<div class="container text-center">
<div class="row">

<div class="row">
 <div class="col-sm-12"><h3></h3>
 </div> 

 </div>

    <div class="col-sm-4">
      <img src="praha1.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Praha</p>
    </div>
    <div class="col-sm-4">
      <img src="paris1.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Pariz</p>
    </div>
    <div class="col-sm-4">
      <img src="rim1.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Rim</p>
    </div>
    </div>
	
	 </div>
	 
<footer class="footer-distributed">


 </div>
			<div class="footer-left">
                         
                         
				<h3>Company<span>logo</span></h3>

				<p class="footer-company-name">Dora Bus &copy; 2016</p>
        	<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:dorabus@gmail.com">dorabus@gmail.com</a></p>
				</div>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Starohájska 8</span> Bratislava</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 23456</p>
				</div>
        
        
         <div>
        <iframe src="https://www.google.com/maps/place/Staroh%C3%A1jska+2900%2F8,+851+02+Petr%C5%BEalka,+Slovensko/@48.1170867,17.11813,17z/data=!3m1!4b1!4m5!3m4!1s0x476c89a8764dc399:0xdf39054c9f157512!8m2!3d48.1170867!4d17.1203187?hl=sk-SK" 
				width="40%" height="40%" frameborder="1" style="border-radius:5%"></iframe>
        </div>


			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>O nás</span>
					Najlepsi autobusovy dopravca IN DA WORLD.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>

</body>

</html>

