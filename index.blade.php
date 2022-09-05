
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
        <h1>Teste de PHP para Processo Seletivo</h1>
    </div>
</header>

<body>
    <div class="basics">
        <a href="Teste1.php"><button type="button" class="btn btn-primary">Teste 1</button></a>

        <form method="get" name="form" action="Teste2.php">
            <input id="date" type="hidden" name="data">
            <input id="teste2button" class="btn btn-secondary" type="submit" value="Teste 2">
        </form>

        <a href="teste3.blade.php"><button type="button" class="btn btn-info">Teste 3</button></a>

        <form method="get" name="form" action="Teste4.php">
            <input type="hidden" value="1" name="pagina">
            <input class="btn btn-warning" type="submit" value="Teste 4">
        </form>

        <a href="Teste5e6.blade.php"><button type="button" class="btn btn-success">Teste 5</button></a>

        <a href="teste5e6.blade.php"><button type="button" class="btn btn-secondary">Teste 6</button></a>

    </div>    
</body>

</html>


<script>
    document.getElementById("teste2button").addEventListener("click", (e) => {
        const date = Date.now();
        const today = new Date(date);        
        dia  = today.getDate().toString().padStart(2, '0'),
        mes  = (today.getMonth()+1).toString().padStart(2, '0'),
        ano  = today.getFullYear();
        document.getElementById("date").value = dia + "/" + mes + "/" + ano;

    });
</script>