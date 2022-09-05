
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
        <h1>Teste de PHP  -  Teste 5 e 6</h1>
    </div>
</header>

<body>
    <div class="teste5e6">
        <h4>
        <?php
            require 'Teste5e6.php';
            echo "Tomando a data 29/03/2001 como entrada, temos: ";
            MyDate::toggle("29/03/2001");
        ?>
        </h4><b>
        <b><h4>
        <?php
            echo "\nTomando a data 1969-08-29 como entrada, temos: ";
            MyDate::toggle("1969-08-29");
        ?>
        </h4>
    </div>    
</body>

</html>
