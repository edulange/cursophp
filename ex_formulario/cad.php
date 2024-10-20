<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<header>
    <h1>Resultado</h1>
</header>

<main>

    <body>
        <!-- as super globais são $_GET / $_POST / $_COOKIES -->
        <!-- $_REQUEST = uma junção do GET POST e COOKIES -->
        <!-- OPERADOR DE  NAOSEI O Q NULO = ?? -->
        <?php 
    // var_dump($_GET);  //$_GET = super global //$_POST //
    $nome = $_GET["nome"] ?? "sem nome";
    $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
    echo "<p>É um prazer te conhecer <strong>$nome $sobrenome</strong>!</p>"
?>
        <p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>
</main>
</body>

</html>