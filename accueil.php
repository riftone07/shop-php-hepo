<?php 
$produits = array(
	array(
		"numero" => 1,
		"nom" => "Tenue Traditionnelle",
		"prix" => 50000,
		"categorie" => "Mode Homme"
	),
	array(
		"numero" => 2,
		"nom" => "Costume Africain",
		"prix" => 50000,
		"categorie" => "Mode Homme"
	),
	array(
		"numero" => 3,
		"nom" => "Robe",
		"prix" => 5000,
		"categorie" => "Mode Femme"
	),
	array(
		"numero" => 4,
		"nom" => "Tenue Africain",
		"prix" => 50000,
		"categorie" => "Mode Femme"
	)
);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ma boutique</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">

			<div class="col-lg-12 card">
				<div class="card-header">
					Liste des produits
				</div>
				<div class="card-body">

					<table class="table">
						<thead>
							<tr>
								<th>Num</th>
								<th>Nom Produit</th>
								<th>Prix</th>
								<th>Categorie</th>
							</tr>
						</thead>
						<tbody>
					<?php foreach($produits as $produit){ ?>
							<tr>
								<td><?php echo $produit['numero'] ?></td>
								<td><?php echo $produit['nom'] ?></td>
								<td><?php echo $produit['prix'] ?></td>
								<td><?php echo $produit['categorie'] ?></td>
							</tr>
					<?php } ?>	
						</tbody>
					</table>


				</div>
			</div>
		</div>
	</div>
</body>
</html>