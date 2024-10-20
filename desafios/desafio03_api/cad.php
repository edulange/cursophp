<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>

<header>
    <h1>Conversor de Moedas v1.0</h1>
</header>

<main>

    <body>

        <?php 
$url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='10-10-2024'&@dataFinalCotacao='10-25-2024'&\$top=100&\$format=text/html";

//faz a requisição GET
$response = file_get_contents($url);

echo $response;
$moeda = $_GET["moeda"] ?? "sem moeda";
    const COTACAO = 5.69;
    $moedaFloat = floatval($moeda); // Converte para um valor numérico
    $conversao = $moedaFloat * COTACAO;
    echo "Seus <i>$moeda</i> equivalem a <strong>U$ $conversao</strong>";
    echo "<br><strong>* Cotação fixa de R$ " . COTACAO . " </strong>informada diretamente no código."
    ?>
        <button><a href="javascript:history.go(-1)">Voltar</a></button>
</main>
</body>

</html>