<?php 

header('Content-Type:'."text/plain");
$ID = $_POST['id_procura'];

$conexao = mysqli_connect('127.0.0.1','root','','estudos'); //Strig de conexão PHP
if($conexao)
{
$query = mysqli_query($conexao, "SELECT * FROM pessoa where id = $ID"); // Inserção no banco de dados, ultilizando real_query.
    if($query)
    {    
        while ($matiz = mysqli_fetch_assoc($query))
        {

            echo json_encode($matiz);
            //echo $matiz['Nome'].$matiz['Salario'].$matiz['Cargo'];
        }
    }
    else 
    {
        echo "nada";
    }
}


?>