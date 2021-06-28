
<?php include 'inc/database.php'; 
session_start();

$consulta="SELECT id,nome,endereco,preco,descricao FROM imoveis";
$con= mysqli_query($conn, $consulta);


?>
<html>
	<head>
<meta charset="utf8">

</head>
<body>
    <table>
        <tr>
            <td> id </td>
            <td> nome </td>
            <td>endereco</td>
            <td>preco</td>
            <td>descricao </td>
</tr>
<?php while ($Dado= $con->fetch_array()){?>
<tr>
    <td><?php echo $dado ["id"]; ?></td>
    <td><?php echo $dado ["nome"]; ?></td>
    <td><?php echo $dado ["endereco"]; ?></td>
    <td><?php echo $dado ["preco"]; ?></td>
    <td><?php echo $dado ["descricao"]; ?></td>

}
</tr>
<?php } ?>
</table>
</body>
</html>

