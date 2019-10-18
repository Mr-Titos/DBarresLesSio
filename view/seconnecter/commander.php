 <!-- Commander -->
  <section class="page-section" id="commander">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
			<h1>Recapitulatif de votre commande</h1>
			<br> <br>
<?php 
$count = 0;
foreach($cmde['mescommandes'] as $ligne => $prop){
	$aff = $prop->id_blague;
	$aff2 = $prop ->px_blague;
	$count  = $count + $aff2;
	echo "Blague n° ${aff} - ${aff2}€";
	echo '<br>';
}
echo "<br>"; echo "Total : ${count}€"; echo "<br>";

if(!isset($commande['resultat']))
{

?>
<br> <br> <br>
<form id="CBform" name="CBformulaire" method="POST" >
   <div class="row">
		<div class="form-group col-md-2 col-xs-2"> </div>
		
		<div class="form-group col-md-8 col-xs-8">
			<p>Numero de carte</p>
		  <input class="form-control" type="text" placeholder="Numero de CB" required="required" data-validation-required-message="Veuillez entrez un numéro valide">
		</div>
		
		<div class="form-group col-md-2 col-xs-2"> </div>
	</div>
	
	<div class="row">
		<div class="form-group col-md-2 col-xs-2"> </div>
		
		<div class="form-group col-md-4 col-xs-4">
		<p>Date d'expiration</p>
		  <input class="form-control" type="text" placeholder="09/21" required="required" data-validation-required-message="Date non valide">
		</div>
		
		<div class="form-group col-md-4 col-xs-4">
		<p>Cryptogramme</p>
		  <input class="form-control" type="text" placeholder="059" required="required" data-validation-required-message="Cryptogramme non valide">
		</div>
		
		<div class="form-group col-md-2 col-xs-2"> </div>
	</div>
	
	<div class="row">
		<div class="form-group col-md-12 col-xs-12"> 
			<a href="<?=WEBROOT."seconnecter/commanderfinaliser"?>">
				<button type="button" style="margin:20px" >
						PAYER 
				</button>
			</a>
		</div>
	</div>
</form>

<?php 
}else{
    echo $commande['resultat'];
    //var_dump();
}
?>
</div>
</div>
</div>
</section>