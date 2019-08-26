<?php
$id = $_POST['id_procura'];

$conexao = mysqli_connect('127.0.0.1','root','','estudos'); //Strig de conexão PHP
if($conexao)
{
$query = mysqli_query($conexao, "DELETE FROM pessoa WHERE id = $id"); // Inserção no banco de dados, ultilizando real_query.
    
    if($query)
        {    
            echo "deletado com sucesso";
        }
    else 
        {
            echo "nada";
        }
}
?>