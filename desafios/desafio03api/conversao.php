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
            //cotação do cliente
            $moeda = $_GET["din"] ?? "sem moeda";
            
            //Cotação vinda da API do BC
            $inicio = date("m-d-Y", strtotime("-7 days")); 
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra';
            $dados = json_decode(file_get_contents($url), true);

            //var_dump($dados);
            
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            
            //converão
             $conversao = $moeda / $cotacao;

            //formatação de moedas com internacionalização
            //Biblioteca intl (Internallization PHP)
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            
            echo "Seus " . numfmt_format_currency($padrao, $moeda, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $conversao, "USD");
            //jeito fácil echo "Seus R\$ " . number_format($moeda, 2, ",", ".") . " equivalem a U\$" . $conversao;
            echo "<br><strong>*Cotação vinda da API do BC de R$ " . $cotacao;
    ?>


        <button><a href="javascript:history.go(-1)">Voltar</a></button>
</main>
</body>

</html>