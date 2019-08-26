<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./layout.css" type="text/css" >
    <title>Estudos</title>
</head>
<body>
    <div>

        <form id="form" method="POST" name="formulario-envio">
            <label>Nome</label>    
            <input name="Nome" type="text" placeholder="Digite seu nome"/> 
            <label>Cargo</label>    
            <input name="Cargo" type="text" placeholder="Digite seu cargo" /> 
            <label>Sálario</label>
            <input name="Salario" type="text" placeholder="Digite seu salario"/>
            
            
            <button type="submit">Enviar Dados</button>
        </form>
        
    </div>
    <div class="container-alert">
        <div id="div-foi" class="alert">
            <p>...</p>
        </div>
    </div>
    <?php
$conexao = mysqli_connect('127.0.0.1','root','','estudos');//Strig de conexão PHP
if ($conexao)
{
    

    $query = mysqli_query($conexao,'SELECT * FROM pessoa'); // exevulta a query

}
?>

    <h1>Dados Obtidos</h1>
        <section class="container flex">

            
                
                <?php 
                  if($query)
                  {
                     while ($matiz = mysqli_fetch_assoc($query)) // Retorna uma array de 1 linha da consulta ao banco
                    {  
    
                
                ?>
                        <div class="caixa">
                                <p class="titulo">Funcionario<?php echo $matiz['Id'];?></p>
                                <span>Nome: </span>
                                <span><?php echo $matiz['Nome'];?> </span>
                                <span>Cargo: </span>
                                <span><?php echo $matiz['Cargo'];?></span><br>
                                <span>Salario: </span>
                                <span><?php echo $matiz['Salario'];?></span>
                        </div>
             <?php
                                 
                     }
                   }
          ?>
            <div class="caixa">
                
                    <div>
                        <p class="titulo">Funcionario 1</p>
                        <span>Nome: </span>
                        <span>Renan Brickes</span>
                        <span>Cargo: </span>
                        <span>Professor</span><br>
                        <span>Salario: </span>
                        <span>1.200</span>
                    </div>

            </div>

        </section>

        <section>
            
            <h1>Alterar Dados</h1>
            <form id="form_altera" class="form" method="POST">
                <span>Id de Pesquisa</span>
                <input name="id_procura" placeholder="Insira o ID de procura"/>
                <button id="botao">Buscar</button>
            </form>
            <form id ="form-result" class="form" method="POST">
            <div >
                <label>ID</label>    
                <input name="IdReturn" type="text" valeu=""/>
                <label>Nome</label>    
                <input name="NomeReturn" type="text" valeu=""/> 
                <label>Cargo</label>    
                <input name="CargoReturn" type="text" valeu="" /> 
                <label>Sálario</label>
                <input name="SalarioReturn" type="text" valeu=""/>
                <button id="botaoMudar">Modificar</button>
                <button id="botaoExcluir" type="submit" >Excluir</button>

            </div>
        </form>
            


        </section>

        <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="./scripts.js"></script>        
</body>
</html>