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
            <h1>Cadastro de Funcionários</h1>
        </div>
        <br />

        <form class="ui form">
            <div class="field">
              <label>Nome completo:</label>
              <input type="text" name="name" placeholder="Nome completo" required>
            </div>

            <div class="field">
                <label>Telefone:</label>
                <input type="tel" name="telephone" placeholder="Telefone" mask="(00) 0 0000-0000">
            </div>

            <div class="field">
                <label>Email:</label>
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="field">
                <label>Data de nascimento:</label>
                <input type="date" name="dataNascimento" placeholder="Data de nascimento">
            </div>

            <button class="ui button" type="submit">Cadastrar</button>
          </form>
    </div>
</body>
</html>

