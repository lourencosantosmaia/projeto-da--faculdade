<?php
$host = "localhost"; // nome do servidor
$usuario = "root"; // nome de usuário do banco de dados
$senha = ""; // senha do banco de dados
$database = "santo_biquini"; // nome do banco de dados

// Criando conexão
$conexao = new mysqli($host, $usuario, $senha, $database);

// Verificando a conexão
if ($conexao ->connect_errno) {
    echo "Erro de coexão com banco de dados";
}

else{
    echo "Conexão efetuada com sucesso";
}

?>
