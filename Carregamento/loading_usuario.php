<?php
	include_once("conection.php");
	
	//sleep(2);
	
	$inicio = $_POST['min'];
	$max = $_POST['max'];

	$query = "SELECT * FROM users";
	$result_users_cont = mysqli_query($conn,$query);
	$resultado = mysqli_num_rows($result_users_cont);
	$resuldData = "SELECT * FROM users LIMIT $inicio, $max";
	$result_users = mysqli_query($conn, 	$resuldData);
	
	if($resultado > 0 ){
		while($row_user = mysqli_fetch_assoc($result_users)){
			echo '<tr>
			<td>'.$row_user['id'].'</td>
			<td>'.$row_user['name'].'</td>
			<td>'.$row_user['email'].'</td>
			<td>'.$row_user['password'].'</td>
			</tr>';
		}
	}
	