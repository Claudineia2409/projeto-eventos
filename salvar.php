<?php

include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$tipo = $_POST['tipo'];
$mensagem = $_POST['mensagem'];

$sqlInsert = "INSERT INTO pagina(nome, email, tipo, mensagem) VALUES('$nome', '$email', '$tipo', '$mensagem');";

$result = mysqli_query($conexao, $sqlInsert);

if(!$result){
    die("erro ao inserir no banco de dados");
}

header("location: index.php");