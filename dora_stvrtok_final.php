<!DOCTYPE html>

<html lang="en">

<head>

  <title>Dora bus</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

  <link href="dora_stvrtok.css" rel="stylesheet" type="text/css"/>

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

  <div class="container"> 

<nav class="navbar navbar-default">

  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display    <a target="_blank" href="https://www.facebook.com/DoraBus-1334727099880570/">
	<img src="fb.png" width="20%" height="20%" style="margin-top:-7px;">   -->

    <a class="navbar-brand navbar-right" target="_blank" href="https://www.facebook.com/DoraBus-1334727099880570/">FACEBOOK</a>

    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

        <span class="sr-only">Toggle navigation</span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

      </button>

      <a class="navbar-brand" href="#"><img src="PNG.png" class="img-responsive" style="max-width:150px; 
						margin-top:-40px;"></a>

    </div>



    <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">

        <li class="active"><a href="#">O nas <span class="sr-only">(current)</span></a></li>

        <li><a href="#">Prihlasenie</a></li>

        <li><a href="#">Kontakt</a></li>

      </ul>

      

      

    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->

</nav>

</div>

  

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

  <button type="button">Vyhladat </button>

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







			<div class="footer-left">

                         

                         
				<a><img src="PNG.png" class="img-responsive" style="max-width:300px; 
						margin-top:-40px;"></a>
				<p class="footer-company-name" style = "margin-top:-50px;">Dora Bus &copy; 2016</p>
				<p class="footer-company-name" style = "margin-top:10px;"><b>dorabus@gmail.com</b></p>

        	

			</div>



			<div class="footer-center">



				<div>

					<i class="fa fa-map-marker"></i>

					<p><span>Starohajska 8</span> Bratislava</p>

				</div>



				<div>

					<i class="fa fa-phone"></i>

					<p>+1 23456</p>

				</div>

        

        

         <div class="footer-map">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2663.6446497893353!2d17.11812465094493!3d48.1170902604652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c89a8764dc399%3A0xdf39054c9f157512!2sStaroh%C3%A1jska+2900%2F8%2C+851+02+Petr%C5%BEalka!5e0!3m2!1ssk!2ssk!4v1479394622032" 

				width="200px" height="100px" frameborder="1" ></iframe>
        </div>





			</div>



			<div class="footer-right">



				<p class="footer-company-about">

					<span>O NAS</span>
					Najlepsi autobusovy dopravca IN DA WORLD.

				</p>



				
			</div>



		</footer>



</body>



</html>



