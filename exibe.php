<?php
$conexao = mysqli_connect('127.0.0.1','root','','estudos');//Strig de conexão PHP
if ($conexao)
{
    

    $query = mysqli_query($conexao,'SELECT * FROM pessoa'); // exevulta a query
     
                  if($query)
                  {
                     while ($matiz = mysqli_fetch_assoc($query)) // Retorna uma array de 1 linha da consulta ao banco
                     {  
                       
                        $retorno = "
                        <div >
                        <p >Funcionario<?php echo $matiz['Id'];?></p>
                        <span>Nome: </span>
                        <span><?php echo $matiz['Nome'];?> </span>
                        <span>Cargo: </span>
                        <span><?php echo $matiz['Cargo'];?></span><br>
                        <span>Salario: </span>
                        <span><?php echo $matiz['Salario'];?></span>
                        </div> "
                
                        echo $retorno;
                        
             
                                 
                      }
                }
}
?>
