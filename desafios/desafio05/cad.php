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
        <?php 
        


        // var_dump($_GET);  //$_GET = super global //$_POST //
        $numero = $_GET["numero"] ?? "sem número";
        // Separar a parte antes e depois da vírgula
        //list($parte_inteira, $parte_decimal) = explode('.', $numero);

        $int = (int) $numero;
        $fra = $numero - $int;

        

        echo "Analisando o número real <strong>$numero</strong> informado pelo usuário:
            <ul><li>A parte inteiro do número é <strong>" . number_format($int, 0, ",", ".") . "</strong></li>
            <li>A parte fracionária do número é <strong>" . number_format($fra, 3, ",", ".") . "</strong></li></ul>";

?>
        <p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>
</main>
</body>

</html>