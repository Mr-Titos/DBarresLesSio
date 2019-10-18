<section class="bg-light page-section" id="blague_detail">
    <div class="container">
    	<div class="row">
		<?php 
        foreach($variable['produit'] as $ligne){
        ?>
			<div class="selection col-md-4 col-lg-4 col-sm-4 col-xs-12" onclick="fonctionpanier('<?= WEBROOT."panier/mettreaupanier/".$ligne->id_blague ?>')" >
                <article>
                    <h2 class="text-center"><?= $ligne->titre_blague ?></h2>
                    <p class="text-center"><img class="img-fluid" src="<?= IMAGE ?>img/illustration/<?= $ligne->img_illustration?>" alt="<?= $ligne->titre_blague ?>" /></p>
                    <p><?= $ligne->desc_blague ?></p>
                    <p class="text-center"><span class="badge badge-warning" style="font-size:12px"><?= $px=($ligne->px_blague!=null)?$ligne->px_blague:0 ?> &euro; </span></p>
                    <p class="text-center"><span class="blague_auteur" > <?= $ligne->pseudo_auteur ?></span></p>
                </article>
			</div><br>
		<?php } ?>
		</div>
	</div>
</section>