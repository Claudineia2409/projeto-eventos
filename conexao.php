<?php


$servidor  = 'localhost:3309';
$usuario = 'root';
$senha = 'root';
$bd = 'projeto';

$conexao = mysqli_connect ($servidor, $usuario, $senha, $bd);

if (!$conexao){
    die('falha ao conectar:' . mysqli_connect_error());
}