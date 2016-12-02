<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd"

<html>
<head>
  <meta charset="utf-8">
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>DORA Bus</title>
<link href="dora.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>


<body>
     <div class="container">
<nav class="navbar rudolf navbar-inverse">
 
    <div class="navbar-header">
      <a class="navbar-brand" href="#">DoraBus</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">O nas <span class="caret"></span></a>
      </li>
      <li><a href="#">Prihlasenie/Registracia</a></li>
      <li><a href="#">Kontakt</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <a target="_blank" href="https://www.facebook.com/DoraBus-1334727099880570/"><img src="fb.png" width="2%" height="2%"> </a>

      </ul>
  </div>
</nav>
  

<div id="main" style="width: 1000px; margin: 0 auto;">
  <div id="logo" style="float:left;">
    <img src="logo.png" width="100" height="70">
  </div>
 

  <div id="fotky" style="clear:left; padding-top: 50px;">    <img src="Vieden.jpg" width="230" height="150">    <img src="Praha.jpg" width="230" height="150">   <img src="Paris.jpg" width="230" height="150">  <img src="Varsava.png" width="230" height="150">     
 
  
  
  </div>
  <div id="veci" style="clear:left; margin-top: 50px; border: 2px solid;">
  <form action="vyhladaj">
  <div style="margin:20px;">
    <div style="float:left; margin-left: 15px; margin-right: 15px;">
    
     <p><b>Odkial - Kam </b></p>
  <select name="abc" >
    <?php
    Include('conect.php');
    $sql = "SELECT Odkialkam, Kam FROM Cesty ";
    $result= mysql_query($sql);
    while ($row = mysql_fetch_array($result)) {
      # co
     ?>

   <option>  <?php echo $row['Odkialkam']; ?> </option>

  <?php } ?>
 </select> 
    </div>
    <div>      
    Odchod:
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
  <div id="novinky" style="clear:left; padding-top: 50px;"><img src="Vieden.jpg" width="230" height="150">    <img src="Praha.jpg" width="230" height="150">  <img src="Paris.jpg" width="230" height="150"> <img src="Varsava.png" width="230" height="150"> </div>             
<div>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d52568404.543650106!2d-27.53083998492805!3d36.4691357414528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssk!2ssk!4v1478807105960" 
				width="50%" height="50%" frameborder="0" style="border-radius:5%" allowfullscreen></iframe>
</div>
</div>
</body>                                  
</html>                   