<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Servidor</title>
</head>

<body>
    <h1>Manipulação de string</h1>

    <h3>Aspas duplas "</h3>
    <ul>

        <li>são como a ` no JS</li>
        <li>com aspas eu poderia fazer` ${variavel}`</li>
        <li>operador de concatenação é o . no js é +</li>
        <li>Nas aspas " o PHP interpreta a string no ' não</li>
        <li>"PHP \u{1F418}" isso é interpretado</li>
    </ul>

    <div>Anotações</div>
    <ul>
        <li>const não há $ na frente, logo ele não é interpertrado.
            <br>const ESTADO = "RS";
            <br>se eu der um echo "moro no ESTADO"
            <br>o return vai ser "moro no ESTADO"
        </li>
        <li>precisaria fazer
            <br> echo "Moro no " . ESTADO
        </li>
    </ul>
    <lu>Escape sequences
        <li>\n Nova linha
            <br> echo "$lutadorNome \"Minotauro\" $lutadorSobrenome"
        </li>
        <li>\t Tabulação horizontal</li>
        <li>\\</li>
        <li>\$</li>
        <li>\u{}</li>
    </lu>

    <?php 
    $nome = "Eduardo";
    $sobrenome = "PHP \u{1F418}";
    const ESTADO = " RS";
    echo "Moro no " . ESTADO;
    $lutadorNome = "Rodrigo";
    $lutadorSobrenome = "Nogueira";
    echo "$lutadorNome \t \"Minotauro\" \t $lutadorSobrenome";
    ?>
</body>

</html>