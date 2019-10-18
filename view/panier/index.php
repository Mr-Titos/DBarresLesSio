 
    
 <section class="page-section" id="panier">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12 text-center">
        <?php if(isset($_SESSION['panier']) && $_SESSION['totalpanier']!=0)
        {?>
        <fieldset>
    		<legend>Notre panier</legend>
        <table id="panier" style="width:90%">
        
        <tr><th>N&ordm;</th><th>Titre</th><th colspan="2">prix</th><th>Supprimer</th></tr>
        	<?php 
        	$totalprix=0.0;
            foreach($variable['produit'] as $ligne)
            {
                $totalprix+=$ligne->px_blague;
            ?>
        <tr id="lignepanier<?= $ligne->id_blague?>"><td><?= $ligne->id_blague?></td><td><?= $ligne->titre_blague?></td><td class="prix text-right" style="border-left:none"><?= $px=($ligne->px_blague!=null)?$ligne->px_blague:0 ?></td><td class="text-left" > &euro;</td>
        	<td>
        		<button type="button" style="margin:10px" onclick="effacerpanier('lignepanier<?= $ligne->id_blague?>','<?= WEBROOT."panier/supprimerdupanier/".$ligne->id_blague ?>', '<?= WEBROOT."panier/total" ?>')">
          			[ - ]
        		</button>
        	</td>
        </tr>
            <?php 
            }
            ?>
            <tr class="ligne_total"><td class="ligne_total text-right" id="total_prix3"  colspan=2 >Total </td><td id="total_prix1" class="text-right"><?= $totalprix ?></td> <td class="text-left" id="total_prix2" > &euro;</td><td style="border:none"></td></tr>
        </table>
        </fieldset>
        </div>
        
         <div class="col-xs-12 col-md-12 col-lg-12 text-left">
         <?php if(isset($_SESSION['auteur']) && isset($_SESSION['totalpanier'])){
            if($_SESSION['totalpanier'] !=0){         
       		echo "<a href='".WEBROOT."seconnecter/commander'>";
            }
            }else{
             echo "<a href='".WEBROOT."seconnecter' >";
            }            
            ?>
            <button type="button" style="margin:20px" >
          			COMMANDER 
        	</button>
        	</a>
       	</div>
        <?php 
        }else{
            echo "Le panier est vide";
        }
        
        
        ?>
        
        
       	
       </div>
    </div>
</section>