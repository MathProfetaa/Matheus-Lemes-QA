<?php

// Obter os dados do formulário
$nome = $_GET['nome'];
$email = $_GET['email'];
$mensagem =$_GET['mensagem']

// Exibir os dados do formulário
echo "Nome: $nome";
echo "<br>";
echo "E-mail: $email";
echo "Mensagem: $mensagem";

?>