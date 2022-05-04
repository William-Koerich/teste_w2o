<?php
$servername = "localhost";
$database = "teste_w20";
$username = "root";
$password = "";
// Cria a conexão com o banco.
$connection = mysqli_connect($servername, $username, $password, $database);

// Verifica conexão.
if (!$connection) {
    die("Erro de conexão: " . mysqli_connect_error());
}