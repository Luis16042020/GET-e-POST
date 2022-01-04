<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Design_pagina.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>GET e POST</title>
</head>
<body>
    <div class = "w3-container w3-card w3-margin">
    <div class = "w3-cyan w3-card-2 w3-margin">
    <h1 class = "w3-center">Cadastro Confirmado com Sucesso!<h1>
    </div>
  
<h2>
<?php



$Nome = $_POST['txtNome'];
$Sobrenome = $_POST['txtSobrenome'];
$Email = $_POST['txtEmail'];
$Formacao = $_POST['txtFormacao'];
$UltimoEmprego = $_POST['txtEmprego'];


echo "Nome: " .$Nome. "<br>";
echo "Sobrenome: " .$Sobrenome. "<br>";
echo "Email: " .$Email. "<br>";
echo "Formação: " .$Formacao. "<br>";
echo "Descrição do ultimo emprego: " .$UltimoEmprego; 



?> 
<h2>
</div>    
 
</body>
</html>





  

