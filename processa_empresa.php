<?php
session_start();
include_once("conexao.php");

$razaoSocial = filter_input(INPUT_POST, 'companyName', FILTER_SANITIZE_STRING);
$cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


$result_empresa = "INSERT INTO empresa (nome, cnpj, telefone, email, endereco) VALUES ('$razaoSocial', '$cnpj', '$telefone', '$email', '$endereco')";
$resultado_empresa = mysqli_query($conn, $result_empresa);
