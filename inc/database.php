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

function buscarImoveis($id = null, $limit = null, $infousuarioid = 0 ) {
  
	$database = open_database();
	$found = null;

	try {
		$usuariologado = ($_SESSION["UsuarioLogadoId"]) ? $_SESSION["UsuarioLogadoId"] : 0;

		$sql = "SELECT i.id, i.nome, endereco, preco, descricao, numero, complemento, bairro, estado, cidade, vagasid, banheirosid, tipoid, quartoid, foto, tamanho, ";
		$sql .= "t.Nome as tipo, b.nome as banheiros, q.nome as quartos, v.nome as vagas, case when iu.InfousuarioId > 0 then 1 else 0 end as favorito ";
		$sql .= "FROM imoveis i ";
		$sql .= "left join tipo t on i.tipoid = t.id ";
		$sql .= "left join banheiros b on i.banheirosid = b.id ";
		$sql .= "left join quartos q on i.quartoid = q.id ";
		$sql .= "left join vagas v on i.vagasid = v.id ";
		$sql .= "left join imovelusuario iu on iu.imovelId  = i.id and iu.InfousuarioId = " . $usuariologado;
		
		if ($id) {
	    	$sql .= " WHERE i.id = " . $id;
	    	// $result = $database->query($sql);
	    
			// if ($result->num_rows > 0) {
			// 	$found = $result->fetch_assoc();
			// }
	  	}
		
		if ($infousuarioid > 0) {
	    	$sql .= " WHERE i.InfousuarioId = " . $infousuarioid;
	    	// $result = $database->query($sql);
	    
			// if ($result->num_rows > 0) {
			// 	$found = $result->fetch_assoc();
			// }
	  	}
		
		if($limit > 0)
		{
			$sql .= " ORDER BY RAND() LIMIT " . $limit;
		}

		$result = $database->query($sql);
	
		if ($result->num_rows > 0) {
			$found = $result->fetch_all(MYSQLI_ASSOC);
		}
	} catch (Exception $e) {
		$_SESSION['message'] = $e->GetMessage();
		$_SESSION['type'] = 'danger';
  	}
	
	close_database($database);
	return $found;
}

function buscarImoveisFavoritos() {
  
	$database = open_database();
	$found = null;

	try {
		$usuariologado = ($_SESSION["UsuarioLogadoId"]) ? $_SESSION["UsuarioLogadoId"] : 0;

		$sql = "SELECT i.id, i.nome, endereco, preco, descricao, numero, complemento, bairro, estado, cidade, vagasid, banheirosid, tipoid, quartoid, foto, tamanho, ";
		$sql .= "t.Nome as tipo, b.nome as banheiros, q.nome as quartos, v.nome as vagas ";
		$sql .= "from imovelusuario iu ";
		$sql .= "inner join imoveis i on i.id = iu.imovelId ";
		$sql .= "left join tipo t on i.tipoid = t.id ";
		$sql .= "left join banheiros b on i.banheirosid = b.id ";
		$sql .= "left join quartos q on i.quartoid = q.id ";
		$sql .= "left join vagas v on i.vagasid = v.id ";
    	$sql .= " WHERE iu.InfousuarioId = " . $usuariologado;
		$result = $database->query($sql);
	
		if ($result->num_rows > 0) {
			$found = $result->fetch_all(MYSQLI_ASSOC);
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

		$uploaddir = ABSPATH . 'uploads\\';
		$uploadfile = $uploaddir . basename($_FILES['fotoimovel']['name']);

		if (move_uploaded_file($_FILES['fotoimovel']['tmp_name'], $uploadfile)) {
			$imovel['foto'] = basename($_FILES['fotoimovel']['name']);
		}

		save('imoveis', $imovel);
		echo "<script> window.location.replace('anuncios.php'); </script>";
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
		echo "Errormessage: " . $mysqli->error;
		$_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
		$_SESSION['type'] = 'danger';
	} 
	
	close_database($database);
}
	
function salvarUsuario() {


	if (!empty($_POST['infousuario'])) {
		$info = $_POST['infousuario'];
		save('infousuario', $info);
		echo "<script> window.location.replace('index.php'); </script>";
		exit();
	}

	
}

function salvarLogin() {


	if (!empty($_POST['login'])) {
		
		$log = $_POST['login'];
	     save('login', $log);
		echo "<script> window.location.replace('index.php'); </script>";
		exit();
	}

	
}

function EfetuarLogin($email, $senha ) {
  
	$database = open_database();
	$row = null;
	$user = null;

	$sql= "SELECT id, nome, sobrenome, email, senha ";
	$sql .= "FROM infousuario ";

	if ($email && $senha) {
		$sql .= "WHERE email = '" . $email . "' AND senha = '" . $senha . "'";

		$result = $database->query($sql);
		if ($result->num_rows > 0) {
			$row = $result->fetch_row();
			$user = new stdClass();
			$user->id = $row[0];
			$user->nome = $row[1];
			$user->sobrenome = $row[2];
		}
	}

	close_database($database);
	return $user;
}

function salvarfavorito($usuario, $imovel) {

	$database = open_database();
	
	$sql = "INSERT INTO imovelusuario(imovelId, InfousuarioId) VALUES " . "($imovel, $usuario);";

	try {
		$database->query($sql);
	
		$_SESSION['message'] = 'Registro cadastrado com sucesso.';
		$_SESSION['type'] = 'success';
	
	} catch (Exception $e) { 
		$_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
		$_SESSION['type'] = 'danger';
	} 
	
	close_database($database);
}

function removerfavorito($usuario, $imovel) {

	$database = open_database();
	
	$sql = "DELETE FROM imovelusuario WHERE imovelId = " . $imovel . " AND InfousuarioId = " .$usuario;

	try {
		$database->query($sql);
	
		$_SESSION['message'] = 'Registro removido com sucesso.';
		$_SESSION['type'] = 'success';
	
	} catch (Exception $e) { 
		$_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
		$_SESSION['type'] = 'danger';
	} 
	
	close_database($database);
}

?>
