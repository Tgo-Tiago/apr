<?php
require_once 'config.php';

// Pegando os dados vindo do formulário
$nome        = $_POST['nome'];
$area        = $_POST['area'];
$atividade   = $_POST['atividade'];
$data_atual  = $_POST['data_atual'];
$hora_atual  = $_POST['hora_atual'];

// Convertendo os valores corretamente para inteiros
$matricula   = isset($_POST['matricula']) ? (int) $_POST['matricula'] : 0;
$sinto_bem   = isset($_POST['sinto_bem']) ? (int) $_POST['sinto_bem'] : 0;
$onde_estou  = isset($_POST['onde_estou']) ? (int) $_POST['onde_estou'] : 0;
$afetado     = isset($_POST['afetado']) ? (int) $_POST['afetado'] : 0;

// Preparar comando para tabela
$smtp = $conn->prepare("INSERT INTO registro (nome, area, atividade, matricula, data_atual, hora_atual, sinto_bem, onde_estou, afetado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

$smtp->bind_param("sssissiii", $nome, $area, $atividade, $matricula, $data_atual, $hora_atual, $sinto_bem, $onde_estou, $afetado);

// Se executar corretamente
if ($smtp->execute()) {
    echo "APR enviada com sucesso!";
} else {
    echo "Erro no envio da APR: " . $smtp->error;
}

// Encerrar conexões
$smtp->close();
$conn->close();
?>
