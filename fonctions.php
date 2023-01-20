	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
			<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		
	</body>
	</html>
	<?php
	session_start();
	function pdo_connect_mysql(){
	    // Mettez à jour les détails ci-dessous avec les données de votre base de données MySQL.
	    $DATABASE_HOST = 'localhost';
	    $DATABASE_USER = 'root';
	    $DATABASE_PASS = '';
	    $DATABASE_NAME = 'shoppingpanier';
	    try {
	 return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
	    } catch (PDOException $exception) {

	    exit("Echec de la connexion à la base de données !");
	    }
	}
	// Template de l'entete de notre page, vous pouvez le personnaliser.
	function template_header($title) {
	// Obtenez le nombre de produits dans le panier, il sera affiché dans l'en-tête.
	$num_items_in_panier = isset($_SESSION['panier'])? count($_SESSION['panier']) : 0;
	echo <<<EOT
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>$title</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

	</head>
	<body>
	<header>
	<div class="Acceuiletproduit">

	<h1> <a style="color: crimson"> Restaurant japonais</h1>
	   <nav>
	   <a href="index.php"  <a style="color: crimson"><tite="accueil"><i class="fas fa-home"></i> Accueil </a>
	   <a href="index.php?page=produits"  <a style="color: crimson"><title="page des produits">produits</a>
	</nav>
	<div class="link-icons">
	   <a href="index.php?page=panier" title="panier d'achat"><i class="fas fa-shopping-panier">&nbsp;</i><spanstyle="color:#f00;background:#fff; border:solid 0.5px"> $num_items_in_panier</span></a>
	                </div>
	            </div>
				</div>
	        </header>
	        <main>
	EOT;
	}
	// Template pied de page
	function template_footer() {
	$year = date('Y');
	echo <<<EOT
	        </main>
	        <footer>


	            </div>
	        </footer>
	    </body>
	</html>
	EOT;
	}
	?>
	
	