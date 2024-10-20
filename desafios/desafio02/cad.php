<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>

<header>
    <h1>Resultado Final!</h1>
</header>

<main>

    <body>
        <!-- as super globais são $_GET / $_POST / $_COOKIES -->
        <!-- $_REQUEST = uma junção do GET POST e COOKIES -->
        <!-- OPERADOR DE  NAOSEI O Q NULO = ?? -->
        <?php 
    // var_dump($_GET);  //$_GET = super global //$_POST //
    $numero = $_GET["numero"] ?? "sem número";
    $numeroAntecessor = $numero -1;
    $numeroSucessor = $numero +1;
    echo "O número escolhido foi o <strong>$numero</strong>";
    echo "<br> O antecessor é <strong>$numeroAntecessor</strong>";
    echo "<br> O sucessor é <strong>$numeroSucessor</strong>";
?>
        <p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>
</main>
</body>

</html>