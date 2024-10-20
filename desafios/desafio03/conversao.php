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
    //variável do cliente
    $moeda = $_GET["moeda"] ?? "sem moeda";
    
    //Cotação
    const COTACAO = 5.69;
    $moedaFloat = floatval($moeda); // Converte para um valor numérico
    //converão
    $conversao = $moedaFloat / COTACAO;

    //formatação de moedas com internacionalização
    //Biblioteca intl (Internallization PHP)
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    
    
    echo "Seus " . numfmt_format_currency($padrao, $moeda, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $conversao, "USD");
    //jeito fácil echo "Seus R\$ " . number_format($moeda, 2, ",", ".") . " equivalem a U\$" . $conversao;
    echo "<br><strong>* Cotação fixa de R$ " . COTACAO . " </strong>informada diretamente no código."
    ?>


        <button><a href="javascript:history.go(-1)">Voltar</a></button>
</main>
</body>

</html>