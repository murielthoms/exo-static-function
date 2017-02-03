<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<table class="ui celled table">
		<thead>
			<th>Id</th>
			<th>Couleur</th>
			<th>Pointure</th>
			<th>Description</th>
			<th>Température de lavage</th>
			<th>Date de lavage</th>

		</thead>
		<?php foreach ($detail as $value ) :?>
			<tr>
				<td><?= $value['id'];?></td>
				<td><?= $value['couleur'];?></td>
				<td><?= $value['pointure'];?></td>
				<td><?= $value['description'];?></td>
				<td><?= $value['temp_lavage'];?></td>
				<td><?= $value['date_lavage'];?></td>
			</tr>
		<?php endforeach ?>
	</table>

</body>
</html>
