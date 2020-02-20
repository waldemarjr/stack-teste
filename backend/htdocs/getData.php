<?php
	require_once "dbconfig.php";
	
	$execStatement=true;

	try {
		$pdo = new PDO("mysql:host={$host};dbname={$dbname}", $user, $password);

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		//if ( isset($_GET['listClientes']) && $_GET['listClientes']==1 ){
			$query = "SELECT * FROM CLIENTES";
		//	$execStatement=true;
		//}

		if ( $execStatement ){
			if($statement = $pdo->prepare($query)){
				$statement->execute();

				$dataList = array();

				while($row=$statement->fetch(PDO::FETCH_ASSOC)){
					$dataList['clientes'][] = $row;	
				}
			
			echo json_encode($dataList);
			}
			
		}


	}
	catch (PDOException $e){
		die ("ERROR: failed to connect to the database service");
	}
	
	

?>
