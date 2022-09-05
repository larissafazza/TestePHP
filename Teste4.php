<!-- Utilizando a tabela "usuarios" já criada e a conexão via PDO, faça um script php que
ao ser executado liste os 5 primeiros registros da tabela, por página.  -->

<?php 
require 'Connection.php';

    $registros = "5"; 
    $pagina = $_GET['pagina'];
    $inicio = ($pagina - 1) * $registros;
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
        <h1>Teste de PHP  -  Teste 4</h1>
    </div>
</header>

<body>
    <div style="text-align:center;">
        <?php for($i=$inicio; $i <= $inicio+4;$i++): ?>
            <?php if($i==$amount){
                break;   
            }?>
            <h3> id = <?= $users[$i]->id ?>, nome = <?= $users[$i]->nome ?>, login = <?= $users[$i]->login ?></h3><b>
        <?php endfor; ?>



    </div>
<?php  
    $anterior = $pagina -1;
    $proximo = $pagina +1;
    if ($pagina>1) {
        echo " <a href='?pagina=$anterior'><- Anterior</a> ";
    }
    echo "|";
    if ($pagina<=$amount/5) {
        echo " <a href='?pagina=$proximo'>Próxima -></a>";
    }
?>
    

</body>

</html>
