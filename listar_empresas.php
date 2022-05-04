<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
            integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ=="
            crossorigin="anonymous"
        />
		<title>Teste W2O</title>		
	</head>
	<body>
        <a href="listar_empresas.php">Empresas Cadastradas</a> |
		<a href="index.php">Cadastrar Empresas</a> |
		<a href="cadastro_funcionarios.php">Cadastrar Funcionários</a> |
		<a href="listar_funcionarios.php">Funcionários Cadastrados</a> |
		<h1>Empresas Cadastradas</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		$result_empresa = "SELECT * FROM empresa";
		$resultado_empresa = mysqli_query($conn, $result_empresa);
        ?>
        <table class="ui celled table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Razão Social</th>
                    <th>CNPJ</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Endereço</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?
                        while($row_empresa = mysqli_fetch_assoc($resultado_empresa)){
                            echo "<td>Id</td>" . $row_empresa['id'];
                            echo "<td>Razão Social</td> " . $row_empresa['nome'];
                            echo "<td>CNPJ</td> " . $row_empresa['cnpj'];
                            echo "<td>Telefone</td> " . $row_empresa['telefone'];
                            echo "<td>Email</td> " . $row_empresa['email'];
                            echo "<td>Endereço</td> " . $row_empresa['endereco'];
                        }
                    
                    ?>
                </tr>
            </tbody>
        </table>
	</body>
</html>