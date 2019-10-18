 <!-- Contact -->
  <section class="page-section" id="connect">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Se connecter</h2>
          
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 ">
          <form id="contactForm" name="sentMessage" method="POST" action="<?= WEBROOT.'seconnecter/connect' ?>" >
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="form-group">
                  <input class="form-control" id="login" name="login" type="text" placeholder="Votre login *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="mdp" name="mdp" type="text" placeholder="Votre mot de passe *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                
              <div class="clearfix"></div>
              <div class="col-lg-12 col-xs-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Se connecter</button>
              </div>
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>