<?php



mysqli_report(MYSQLI_REPORT_STRICT);

function open_database() {
	try {
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if (!$conn->set_charset("utf8mb4")) {
			printf("Error loading character set utf8mb4: %s\n", $conn->error);
			exit();
		}

		return $conn;
	} catch (Exception $e) {
		echo $e->getMessage();
		return null;
	}
}

function close_database($conn) {
	try {
		mysqli_close($conn);
	} catch (Exception $e) {
		echo $e->getMessage();
	}
}

function find( $table = null, $id = null ) {
  
	$database = open_database();
	$found = null;

	try {
	  if ($id) {
	    $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
	    $result = $database->query($sql);
	    
	    if ($result->num_rows > 0) {
	      $found = $result->fetch_assoc();
	    }
	    
	  } else {
	    
	    $sql = "SELECT * FROM " . $table;
	    $result = $database->query($sql);
	    
	    if ($result->num_rows > 0) {
	      $found = $result->fetch_all(MYSQLI_ASSOC);
        
        /* Metodo alternativo
        $found = array();

        while ($row = $result->fetch_assoc()) {
          array_push($found, $row);
        } */
	    }
	  }
	} catch (Exception $e) {
	  $_SESSION['message'] = $e->GetMessage();
	  $_SESSION['type'] = 'danger';
  }
	
	close_database($database);
	return $found;
}

function find_all( $table ) {
	return find($table);
}

function buscarImoveis($id = null ) {
  
	$database = open_database();
	$found = null;



	try {
		$sql = "SELECT i.id, i.nome, endereco, preco, descricao, numero, complemento, bairro, estado, cidade, vagasid, banheirosid, tipoid, quartoid, foto, tamanho, t.Nome as tipo, b.nome as banheiros, q.nome as quartos, v.nome as vagas ";
		$sql .= "FROM imoveis i ";
		$sql .= "left join tipo t on i.tipoid = t.id ";
		$sql .= "left join banheiros b on i.banheirosid = b.id ";
		$sql .= "left join quartos q on i.quartoid = q.id ";
		$sql .= "left join vagas v on i.vagasid = v.id ";
		
		if ($id) {
	    	$sql .= " WHERE id = " . $id;
	    	$result = $database->query($sql);
	    
			if ($result->num_rows > 0) {
				$found = $result->fetch_assoc();
			}
	  	} else {
	    	$result = $database->query($sql);
	    
			if ($result->num_rows > 0) {
				$found = $result->fetch_all(MYSQLI_ASSOC);
	    	}
	  	}
	} catch (Exception $e) {
	  $_SESSION['message'] = $e->GetMessage();
	  $_SESSION['type'] = 'danger';
  	}
	
	close_database($database);
	return $found;
}

	function salvarimovel(){
		if (!empty($_POST['imovel'])) {
			$imovel = $_POST['imovel'];
			save('imoveis', $imovel);
			echo "<script> window.location.replace('index.php'); </script>";
			exit();
		}
	}
	function save($table = null, $data = null) {

		$database = open_database();
	  
		$columns = null;
		$values = null;
	  
		//print_r($data);
	  
		foreach ($data as $key => $value) {
		  $columns .= trim($key, "'") . ",";
		  $values .= "'$value',";
		}
	  
		// remove a ultima virgula
		$columns = rtrim($columns, ',');
		$values = rtrim($values, ',');
		
		$sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";

		try {
		  $database->query($sql);
		
		  $_SESSION['message'] = 'Registro cadastrado com sucesso.';
		  $_SESSION['type'] = 'success';
		
		} catch (Exception $e) { 
			printf("Errormessage: %s\n", $mysqli->error);
		  	$_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
		  	$_SESSION['type'] = 'danger';
		} 
	  
		close_database($database);
	  }
	

?>
	  



	 
