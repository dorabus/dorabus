<!DOCTYPE html>

<html lang="en">

<head>

<title>Spojenia</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

  <link href="dora1.css" rel="stylesheet" type="text/css"/>

  <link href="bootstrap-social.css" rel="stylesheet" type="text/css"/>

  <link href="font-awesome.css" rel="stylesheet" type="text/css"/>

  <link href="font-awesome.min.css" rel="stylesheet"/>

  <link href="bootstrap-social.less.css" rel="stylesheet" type="text/css"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"/></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"/></script>

  <script src="https://use.fontawesome.com/9bf1632ec2.js"></script>

</head>

<body>



<div class="container">

  <div class="row">

    <div class="col-sm-12">

      <img src="hore3.png" class="img-responsive" style="width:100%" alt="Image">

    </div>

  </div>

  <div class="row">

        <nav class="navbar navbar-default obly">

  <div class="container-fluid">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

        <span class="sr-only">Toggle navigation</span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

      </button>

        <a class="navbar-brand" href="index.php" href="#"><img src="png4.png" alt="logonavbar" class="navlogo" style="width:95px;  max-height:70px;

						margin-top:-12px;"></a>

    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">

        <li><a href="index.php" href="#">Vzh�adanie spojenia</a></li>


        <li><a href="kontakt.php" href="#">Kontakt</a></li>

        <li><a href="o_nas.php" href="#">O nas</a></li>

      </ul>

      <ul class="nav navbar-nav navbar-right">

       <li> <a class="navbar-brand navbar-right" target="_blank" href="https://www.facebook.com/DoraBus-1334727099880570/"><img src="fb.png" style="width:30px;  height:30px;

						margin-top:-5px; margin-left:-25px;"></a> </li>

      </ul>

    </div>

  </div>

</nav>

</div>







  <div><h2>Vyhľadané spojenia</h2></div>

 

  <?php

include("connect.php");

$prem1 = $_POST["abc"];

$prem2 = $_POST['abc2'];





$sql = "SELECT * FROM Zajazdy WHERE  Trat = '".$prem1."' AND Kedy = '".$prem2."'";

$result = mysql_query($sql);

$row = mysql_fetch_array($result);



if($prem2 == $row['Kedy']) {    

     echo '<font size="4"'." face='Arial'>";

	   echo  "Zájad: " .$row['Trat']."<br>";

     echo    " Dátum: " .$row['Kedy']. "<br> ";

     echo " " .$row['Popos']. "<br> " ;

     echo "Cena: " .$row['Cena']. " Eur "."<br> " ;

      /*

      echo '<form action="index.php" method="POST">';

      echo '<input type="submit" class="btn btn-warning" value="SPAŤ" ';

      echo '</form>';

     echo '<form action="objednat.php" method="POST">'.'<input type="submit" class="btn btn-warning" value="OBJEDNAŤ">';  */

    echo '<font size="2"'." face='Arial'>"; 

    }

    else { 

    echo '<font size="4"'." face='Arial'>";

    echo "Ľutujeme, ale vo Vami zvolenom termíne nie je žiadna cesta do vybranej destinácie. ". "<br>" ;

    /*echo '<form action="index.php" method="POST">';

    echo '<input type="submit" class="btn btn-warning" value="SPAŤ">';  */                          

    echo '<font size="2"'." face='Arial'>"; 

    }

?>

   

     <div class="row">

        <div class="col-md-1"> 

       <form action="index.php" method="POST">

       <button type="submit" class="btn btn-warning"> SPAŤ</button>

       </form>  </div>

         <div class="col-md-11">

          <form action="objednat.php" method="POST">

       <button type="submit" class="btn btn-warning"> OBJEDNAŤ</button>

       </form> </div>

       </div>

    <br>

    

    

  

      <hr>

      <div class="row">

        <div class="col-md-4">

         <p><img src="PNG.png" alt="logonavbar" class="navlogo" style="width:165px;  height:100px;

						margin-left:-25px;"></p>

          <h4>Kontakt: </h4>

          <p>+512168651</p>

          <p>dorabus@gmail.com</p>

      

  </a>

        </div>

        <div class="col-md-4">

          <iframe width="370 " height="246" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2663.6446497893353!2d17.11812465094493!3d48.1170902604652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c89a8764dc399%3A0xdf39054c9f157512!2sStaroh%C3%A1jska+2900%2F8%2C+851+02+Petr%C5%BEalka!5e0!3m2!1ssk!2ssk!4v1479394622032" allowfullscreen></iframe>

        </div>

        <div class="col-md-4">

          <h4 class="red" align="middle";><b>Otváracie hodiny:</b></h4>

      <p class="grey2" align="middle";>  PO: 8:00 - 20:00</p>

      <p class="grey2" align="middle";>  UT: 8:00 - 20:00</p>

        <p class="grey2" align="middle";>  ST: 8:00 - 20:00</p>

      <p class="grey2" align="middle";>  ŠT: 8:00 - 20:00</p>

        <p class="grey2" align="middle";>  PI: 8:00 - 20:00</p>

           <p class="grey2" align="middle";>  SO: Zatvorene</p>

           <p class="grey2" align="middle";>  NE: Zatvorene</p>

           



        </div>

      </div>

      <script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-88354099-1', 'auto');

  ga('send', 'pageview');



</script>

</div>



</body>



</html>