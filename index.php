<?php 
$etudiants = [
	[
		"num" => 1,
		"prenom" => "Cherif Diallo",
		"nom" => "Adresse",
		"numero" => 776579763,
		"image" => "images/p1.jpeg"
	],[
		"num" => 1,
		"prenom" => "Cherif Diallo",
		"nom" => "Adresse",
		"numero" => 776579763,
		"image" => "images/p2.jpeg"
	],[
		"num" => 1,
		"prenom" => "Cherif Diallo",
		"nom" => "Adresse",
		"numero" => 776579763,
	],[
		"num" => 1,
		"prenom" => "Cherif Diallo",
		"nom" => "Adresse",
		"numero" => 776579763,
	],[
		"num" => 1,
		"prenom" => "Cherif Diallo",
		"nom" => "Adresse",
		"numero" => 776579763,
	]
	,[
		"num" => 1,
		"prenom" => "Cherif Diallo",
		"nom" => "Adresse",
		"numero" => 776579763,
	],
];
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Ma page</title>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
 </head>
 <body>
 
 	<div class="container">
		<div class="row">
			<div class="col-lg-12 card">
				<table class="table">
					<thead>
						<tr>
							<th>Num</th>
							<th>prenom</th>
							<th>nom</th>
							<th>numero</th>
							<th>Avatar</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($etudiants as $key => $etudiant){ ?>
						<tr>
							<td><?php echo $etudiant['num']; ?></td>
							<td><?php echo $etudiant['prenom']; ?></td>
							<td><?php echo $etudiant['nom']; ?></td>
							<td><?php echo $etudiant['numero']; ?></td>
							<td><img src="<?php echo $etudiant['image']; ?>" width="70"></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
 </body>
 </html>











