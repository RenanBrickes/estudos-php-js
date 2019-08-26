<?php 
$nome = $_POST['Nome']; 
$cargo = $_POST['Cargo'];   // Variaveis POST
$salario = $_POST['Salario'];

$conexao = mysqli_connect('127.0.0.1','root','','estudos'); //Strig de conexão PHP
    if($conexao)
    {
    $query = mysqli_query($conexao, "INSERT INTO pessoa(Nome,Cargo,Salario) VALUES ('$nome', '$cargo', '$salario')"); // Inserção no banco de dados, ultilizando real_query.
        if($query)
        {
            echo "Inserido com sucesso !"; 
        }
    }

?>