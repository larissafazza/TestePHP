<!-- Este arquivo faz a conexão com o banco de dados criado. E procura o usuario referente ao parâmetro passado pela url -->

<?php
require 'Connection.php';

$id = $_GET['userid'];
$user = $users[$id];


?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Teste PHP</title>
  <link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<header class="banner">
    <div>
        <h1>Teste de PHP  -  Teste 3 - Encontrando o Usuário de id <?= $_GET['userid']; ?> </h1>
    </div>
</header>

<body>
    <div class="basics">
        <b><h3>Id do Usuário = <?= $user->id; ?></h3><b>
        <h3>Nome = <?= $user->nome; ?></h3><b>
        <h3>Login = <?= $user->login; ?></h3><b>
        <h3>Senha = <?= $user->senha; ?></h3>
    </div>    
</body>

</html>
