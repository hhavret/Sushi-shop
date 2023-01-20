<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	

</head>
<body>
	<?php
	// Obtenez les 4 produits récemment ajoutés 
	$stmt = $pdo->prepare('SELECT * FROM produits');
	$stmt->execute();
	$recently_added_produits = $stmt->fetchAll(PDO::FETCH_ASSOC);?>	
	

    	<?=template_header('Home')?>
	<div class="featured">
	    <h2 style="color:crimson
		;">Restaurant</h2>
<style>
.featured{
  background-color:#df2744;
}
</style>
	    <p style="color:red;">Sushi Shop</p>
	</div>
	<div class="recentlyadded content-wrapper">
	    <h2>Produit récement ajouté</h2>
	    <div class="produits" width="100%"><table style="margin: auto;"><tr>
	        <?php foreach ($recently_added_produits as $produit): ?>
	        <td><a href="index.php?page=produit&id=<?=$produit['id']?>" class="produit">            <img src="imgs/<?=$produit['img']?>" width="150" height="150" alt="<?=$produit['nom']?>"><br>
	            <span    style="color:crimson;" class="name"><?=$produit['nom']?></span><br>
	            <span class="price">
	                &euro;<?=$produit['prix']?>
	                <?php if ($produit['prix_Réel'] > 0): ?>
	                <span class="prix_Réel">&euro;<?=$produit['prix_Réel']?></span>                <?php endif; ?>
	            </span>
	        </a></td>
	        <?php endforeach; ?>
	               </tr></table>
	    </div></div>
	<?=template_footer()?>
</body>
</html>