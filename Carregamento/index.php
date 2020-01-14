<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Carregamento sob demanda com AJAX</title>
	</head>
	<body>
		<table border = "black solid 1">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>E-mail</th>
					<th>Password</th>
				</tr>
			</thead>
			<tbody id = "TableOfData">
				<!--Carrega os registro do ajax -->
			</tbody>
		</table>
		
		<button type="button" class="carregar-mais">Carregar mais</button>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="js/user_ajax.js"></script>
	</body>
</html>
	