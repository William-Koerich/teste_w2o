<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_STRING);
$dataNascimento = filter_input(INPUT_POST, 'dataNascimento', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

// Transformar a data de nascimento em um array.
$explodedDate = explode("/", $dataNascimento);

// Inverte as posições do array.
$reverseDate = array_reverse($explodedDate);

// Junta o array com hífen para ser salvo da forma certa no banco de dados.
$normalizedDate = implode('-', $reverseDate);


$result_funcionario = "INSERT INTO funcionario (nome, telefone, email, data_nascimento) VALUES ('$nome', '$telefone', '$email', '$normalizedDate')";
$resultado_funcionario = mysqli_query($conn, $result_funcionario);
