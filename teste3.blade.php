
<?php require 'Connection.php';?>
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
        <h1>Teste de PHP  -  Teste 3</h1>
    </div>
</header>

<body>
    <div class="basics">

        <form method="get" name="form" action="Teste3.php">
            <select id="user-select" name="userid" placeholder="Selecione o usuário">
                <option value="Disabled">Selecione o usuário</option>
                    <?php foreach($users as $user): ?>
                    <option value="<?= $user->id; ?>"><?= $user->nome; ?></option>
                    <?php endforeach; ?>

            </select>
            <input id="teste2button" class="btn btn-info" type="submit" value="Procurar usuário">
        </form>

    </div>    
</body>

</html>
