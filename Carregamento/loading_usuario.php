<?php
	include_once("conection.php");
	
	//sleep(2);
	
	$inicio = $_POST['min'];
	$max = $_POST['max'];

	$query = "SELECT * FROM users";
	$result_usuario_cont = mysqli_query($conn,$query);
	$resultado = mysqli_num_rows($result_usuario_cont);
	$resuldData = "SELECT * FROM users LIMIT $inicio, $max";
	$result_usuario = mysqli_query($conn, 	$resuldData);
	
	if($resultado > 0 ){
		while($row_usuario = mysqli_fetch_assoc($result_usuario)){
			echo '<tr>
			<td>'.$row_usuario['id'].'</td>
			<td>'.$row_usuario['name'].'</td>
			<td>'.$row_usuario['email'].'</td>
			<td>'.$row_usuario['password'].'</td>
			</tr>';
		}
	}
	