<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
      integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ=="
      crossorigin="anonymous"
    />
    <title>Teste W2O</title>
</head>
<body>
    <div id="content">
		<a href="listar_empresas.php">Empresas Cadastradas</a> |
		<a href="index.php">Cadastrar Empresas</a> |
		<a href="cadastro_funcionarios.php">Cadastrar Funcionários</a> |
		<a href="listar_funcionarios.php">Funcionários Cadastrados</a> |
        <div id="title">
            <h1>Cadastro de empresas</h1>
        </div>
        <br />

        <form class="ui form">
            <div class="field">
              <label>Razão Social:</label>
              <input type="text" name="companyName" placeholder="Razão social" required>
            </div>

            <div class="field">
              <label>CNPJ:</label>
              <input type="text" name="cnpj" placeholder="CNPJ" mask="99.999.999/9999-99" required>
            </div>

            <div class="field">
                <label>Telefone:</label>
                <input type="tel" name="telephone" placeholder="Telefone" mask="(00) 0 0000-0000" required>
            </div>

            <div class="field">
                <label>Email:</label>
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="field">
                <label>Endereço:</label>
                <input type="text" name="address" placeholder="Endereço" required>
            </div>

            <button class="ui button" type="submit">Cadastrar</button>
          </form>
    </div>
</body>
</html>

