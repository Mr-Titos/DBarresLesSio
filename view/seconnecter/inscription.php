<!-- Contact -->
  <section class="page-section" id="inscription">
    <div class="container">      
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <form id="InscriptionForm" name="InscriptionMessage" method="POST" action="<?=WEBROOT?>seconnecter/inscription" enctype="multipart/form-data" >
           <div class="row">
              
              <!-- pseudo -->
                <div class="form-group col-md-12 col-xs-12">
                  <input class="form-control" id="pseudo" name="pseudo" type="text" placeholder="Votre pseudo *" required="required" data-validation-required-message="svp entrez votre pseudo.">
                  <p class="help-block text-danger"></p>
                </div>
               <!-- mdp -->
                <div class="form-group col-md-12 col-xs-12">
                  <input class="form-control" id="mdp" name="mdp" type="password" placeholder="Votre mot de passe *" required="required" data-validation-required-message="svp entrez votre mot de passe.">
                  <p class="help-block text-danger"></p>
                </div>
               <!-- image -->
                <div class="form-group col-md-12 col-xs-12">
                <input type="hidden" name="MAX_FILE_SIZE" value="1024000">     
				<input class="form-group col-md-12 col-xs-12" type="file" name="images" id="image" accept=".png, .jpg, .jpeg .PNG"> 
                  <p class="help-block text-danger">Chargez une image de taille 100ko sous le format png, jpg, jpeg</p>
                </div>
               <!-- nom -->
                <div class="form-group col-md-12 col-xs-12">
                  <input class="form-control" id="nom" name="nom" type="text" placeholder="Votre nom *" required="required" data-validation-required-message="svp entrez votre nom.">
                  
                </div>
               <!-- prenom -->
                <div class="form-group col-md-12 col-xs-12">
                  <input class="form-control" id="prenom" name="prenom" type="text" placeholder="Votre pr&eacute;nom *" required="required" data-validation-required-message="svp entrez votre pr&eacute;nom.">
                  
                </div>
               <!-- rue -->
                <div class="form-group col-md-12 col-xs-12">
                  <input class="form-control" id="rue" name="rue" type="text" placeholder="Votre rue *" required="required" data-validation-required-message="svp entrez votre rue.">
                  
                </div>
               <!-- cp -->
                <div class="form-group col-md-2 col-xs-2">
                  <input class="form-control" pattern="[0-9]{5}" title="Entrez 5 nombres" id="cp" name="cp" type="text" placeholder="Votre C.P. *" required="required" data-validation-required-message="code postal." title="oops">
                 <p class="help-block text-danger" style="font-size:10px">5 chiffres uniquement</p>
                </div>
               <!-- ville -->
                <div class="form-group col-md-10 col-xs-10">
                  <input class="form-control" id="ville" type="text" name="ville" placeholder="Votre ville *" required="required" data-validation-required-message="svp entrez votre ville.">
                  
                </div>
               <!-- telephone -->
                <div class="form-group col-md-12 col-xs-12">
                  <input class="form-control" id="telephone" type="text" pattern="[0-9]{10}" title="Entrez les 10 chiffres de votre t&eacute;l&eacute;phone" name="telephone" placeholder="votre t&eacute;l&eacute;phone *" required="required" data-validation-required-message="svp entrez votre téléphone.">
                  <p class="help-block text-danger" style="font-size:10px">Le t&eacute;l&eacute;phone est sous 10 chiffres</p>
                </div>
               <!-- email -->
                <div class="form-group col-md-12 col-xs-12">
                  <input class="form-control" id="email" type="email" name="email" placeholder="votre email*" required="required" data-validation-required-message="svp entrez votre email.">
                  
                </div>
               <!-- description -->
                <div class="form-group col-md-12 col-xs-12">
                  <textarea class="form-control" id="desc" name="description" placeholder="Votre description *" required="required" data-validation-required-message="d&eacute;crivez vous."></textarea>
                  
                </div>
</div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="InscriptionSuccess"></div>
                <button id="InscriptionMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Envoyer</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>