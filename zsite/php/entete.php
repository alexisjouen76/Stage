<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl">
  <head>
  	<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="language" content="" />
	<meta name="robots" content="all, index, follow" />
	<meta name="generator" content="" />
	<meta name="keywords" content="" />
	<meta name="description" content="">
    <meta name="author" content="">
    

    <title>Instytut Elektroenergetyki Politechniki Warszawskiej</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/offcanvas.css" rel="stylesheet">
    <link href="../css/carousel.css" rel="stylesheet">
    <link href="../css/style.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../engine1/style.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />

	<link rel="icon" href="../images/icons/pw.png" type="image/x-icon" media="screen" />
 	<link rel="shortcut icon" href="../images/icons/pw.png" type="image/x-icon" media="screen" />
	
	<script type="text/javascript" src="../engine1/jquery.js"></script>
	<script src="../../../assets/js/ie-emulation-modes-warning.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery.lightbox.js"></script>
	<script type="text/javascript" src="../js/easySlider.js"></script>
	<script type="text/javascript" src="../js/js.js"></script>
	<script type="text/javascript" src="../js/swfobject.js"></script>
	<script type="text/javascript" src="../js/menu.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">
			function initialiser() {
				var latlng = new google.maps.LatLng(52.2213684,21.0080166,17);
				//objet contenant des propriétés avec des identificateurs prédéfinis dans Google Maps permettant
				//de définir des options d'affichage de notre carte
				var options = {
					center: latlng,
					zoom: 17,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				//constructeur de la carte qui prend en paramêtre le conteneur HTML
				//dans lequel la carte doit s'afficher et les options
				var carte = new google.maps.Map(document.getElementById("carte"), options);
			}
		</script>
 	<script type="text/javascript" src="../js/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>

 <!-- ------------- ----------------------------------------------------- ------------------ -------------------------------------------->
 </head>
 <body onload="initialiser()">
   <div class="test2" style="background:url(../images/bg3.jpg) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
</style>
    
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
		
		<button type="button" class="navbar-toggle dropdown-login" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                     <span class="glyphicon glyphicon-user" class="icon-arrow-right" alt ="connexion"></span>
                 <div class="form-login">
                   <form action="">
                       <label for="name">Nom</label><input type="text">
                       <label for="pwd">Mot de passe</label><input type="password">
                       <input type="submit" value="se connecter">
                    </form>
           </div> <!-- form-login -->
        </button>
		
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  
          <a class="navbar-brand " href="#"><img id="imglogo" src="../images/logo.png "/></a>
        </div>
         
        <div id="navbar" class="collapse navbar-collapse">
        
		<ul class="nav navbar-nav">
           <li class="dropdown">             
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Institut<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="article_page.php">pracovnicy</a></li>
                </ul>
           </li>
           <li class="dropdown">
                 
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >Dydaktyka<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li ><a href="article_page.php">harmonogram</a></li>
                    <li><a href="article_page.php">Plan Zajec, Konsultacje</a></li>
                  </ul>
              </li>
            
             <li class="dropdown">
                 
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dzialalnosc naukowa<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="article_page.php">Raporty roczne</a></li>
                  </ul>
              </li>
             <li class="dropdown">
                 
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Inne informacje <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                   
                    <li class="dropdown-header">University</li>
                    <li><a href="article_page.php">scasopisma</a></li>
                    <li><a href="article_page.php">zagranisczne</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">profesor</li>
                    <li><a href="article_page.php">e-mail lista</a></li>
                    <li><a href="article_page.php">Inny</a></li>
                   
                   </ul> 
                    
        
              </li>
              
               
        </ul>
        <ul class="nav navbar-right navbar-nav">
            <li class="dropdown">
                 
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">język<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                   
                        <li><a href="#"><img src="../images/fr.jpg"/>&nbsp;Français</a></li>
                      <li><a href="#"><img src="../images/en.jpg"/>&nbsp;English</a></li>
                      <li><a href="#"><img src="../images/pl.jpg"/>&nbsp;Polski</a></li>
                   
                   </ul> 
        
              </li>
               <li>
               <!-- ******************** CE QUE J'AI MODIFIEE ************************ -->
                <a href="#" class="dropdown-toggle dropdown-login" id="buttonlogin" data-toggle="dropdown" role="button" aria-expanded="false">
                     <span class="glyphicon glyphicon-user" class="icon-arrow-right" alt ="connexion"></span>
                </a>
               <div class="form-login">
                   <form action="">
                       <label for="name">Nom</label><input type="text">
                       <label for="pwd">Mot de passe</label><input type="password">
                       <input type="submit" value="se connecter">
                    </form>
           </div> <!-- form-login -->
            </li>
        </ul>
            
        </div><!-- /.nav-collapse -->
        
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
 
 
     <div class="container">

      <div id="menub">
	      <a href ="article_page.php"><button type="button" class="btn btn-default btn-sm" >
  <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Mail
</button></a>
             
            <a href ="article_page.php"> <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Biblioteka
</button></a>
             
                <a href ="article_page.php"> <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-record" aria-hidden="true"></span> Wydzial Electryczny
</button></a>
             
                <a href ="article_page.php"> <button type="button" class="btn btn-default btn-sm">
  <span class="glyphicon glyphicon-record" aria-hidden="true"></span> Politechnica
</button></a>

<ul class="nav nav-pills pull-right" id="recherche">
 <li>
 <form role="search">
          <input type="text" class="form-control" placeholder="wyszukiwanie informacji">
		
</form>
 </li>       
	 
 <li>
 <button type="submit" class="btn btn-default" >szukaj</button>
      </li>       
			 </ul>
			 </div>
