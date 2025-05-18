<?php

//Configurações de credenciais
$server = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'apr';

//Conexão com banco de dados
$conn = new mysqli($server, $usuario, $senha, $banco);

//Verificar conexão
if($conn-> connect_error){
    die("Falha ao se comunicar com o banco de dados: ".$conn->connect_error);
}

?>