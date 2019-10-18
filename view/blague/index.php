 <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="blague">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Les blagues</h2>
          <h3 class="section-subheading text-muted">D&eacute;couvrez nos blagues!!</h3>
        </div>
      </div>
      
      <div class="row">
      
      <!-- Demarrage de la boucle -->
      <?php  foreach($variable['categorie'] as $ligne ){ 
     
      ?>
          
        <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item cadre">
          <a class="portfolio-link" data-toggle="modal" href="<?= WEBROOT.'blague/detail/'.$ligne->id_categorie ?>">
            
            <img class="img-fluid" src="<?= IMAGE ?>img/portfolio/<?= $ligne->img_illustration?>" alt="<?= $ligne->lib_categorie ?>">
          </a>
          <div class="portfolio-caption">
            <h4><?= $ligne->lib_categorie ?></h4>
            
          </div>
        </div>
     <?php  
     
      } ?>
     <!-- fin de la boucle -->
        
        
      </div>
    </div>
  </section>