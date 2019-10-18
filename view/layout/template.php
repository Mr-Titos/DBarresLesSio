<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Les sales blagues des SIO</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= IMAGE ?>css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="<?= IMAGE ?>css/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?= IMAGE ?>css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?= IMAGE ?>css/agency.css" rel="stylesheet">
  <link href="<?= IMAGE ?>css/auteur.css" rel="stylesheet">

</head>

<body id="page-top">
  <!-- Navigation -->

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top row" id="mainNav" style="background:black;">
    <div class="container">      
      
        <ul class="navbar-nav text-uppercase ml-auto row text-center">
        <li class="nav-item col-xs-12 ">
            <a class="nav-link js-scroll-trigger" href="<?= WEBROOT.'accueil' ?>" >Accueil</a>
          </li>
          <li class="nav-item col-xs-12">
            <a class="nav-link js-scroll-trigger" href="<?= WEBROOT.'blague' ?>" >Blague</a>
          </li>
          
          <li class="nav-item col-xs-12">
            <a class="nav-link js-scroll-trigger" href="<?= WEBROOT.'apropos' ?>" >A propos</a>
          </li>
          <li class="nav-item col-xs-12">
            <a class="nav-link js-scroll-trigger" href="<?= WEBROOT.'equipe' ?>" >Equipe</a>
          </li>
          <li class="nav-item col-xs-12">
            <a class="nav-link js-scroll-trigger" href="
                <?php
                if(isset($_SESSION['auteur']))
                    echo WEBROOT.'seconnecter/deconnect' ;
                else
                    echo WEBROOT.'seconnecter' ;
                 ?>
       		">
            	<?php 
            	if(isset($_SESSION['auteur']) && !empty($_SESSION['auteur'])) {
            	      echo "Se d&eacute;connecter </a>"; 
            	?>
           
            	 <ul id="auteur" class="sous">
            		<li><a href="<?=WEBROOT.'seconnecter/modifier'?>">modifier</a></li>
            		<li><a href="<?=WEBROOT.'seconnecter/ajouterblague'?>">ajouter une blague</a></li>
            		<li><a href="<?=WEBROOT.'seconnecter/commander'?>">commander</a></li>
            		<li><a href="<?=WEBROOT.'seconnecter/facture'?>">facture</a></li>
            	</ul>
            	<?php
            	} else 
            	    echo "Se connecter </a>"; 
            	?>
           
          </li>
          <li class="nav-item col-xs-12">
            <a class="nav-link js-scroll-trigger" href="<?= WEBROOT.'panier' ?> ">Panier
               
                <span id="total" class="badge badge-light"><?php  if (isset($_SESSION['panier'])){ if($_SESSION['totalpanier']!=0) echo $_SESSION['totalpanier']; }?></span>
         
            </a>
          </li>
          <li class="nav-item col-xs-12">
            <a class="nav-link js-scroll-trigger" href="<?= WEBROOT.'contact' ?> ">Contact</a>
          </li>          
        </ul>
      </div>
   
  </nav>
 
  
<main role="main">

<?php 

    //var_dump($_SESSION); 
    //$_SESSION['test']==false;
    echo $content_for_layout 
?>
  
</main>

  <!-- Footer -->
  
  <footer class="footer" style="background:black">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4 col-xs-12">
          <span class="copyright" style="color:white">Copyright &copy; desbarreslessio.com</span>
        </div>
        <div class="col-md-4 col-xs-12">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 col-xs-12">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">BTS SIO</a>
            </li>
            <li class="list-inline-item">
              <a href="#">7, rue des archives - 53000 Laval</a>
            </li>
          </ul>
        </div>
      </div>
    </div>  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  
  <script src="<?= SCRIPT ?>panier.js"></script>
  
  </footer>

 
  


</body>

</html>
