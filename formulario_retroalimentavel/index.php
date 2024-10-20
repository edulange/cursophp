<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retroformulário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        //capturando os dados do formulário retroalimentável
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
        <?php 
                echo "bom dia!";
            ?>
        <?="Boa noite!" //isso é a shorttag pra quando tiver apenas um echo dentro do php?>
    </main>

    <section id="resultado">
        <h2>Resultado da soma</h2>
        <?php 
            $resultado = $valor1 + $valor2 ?? 0;
            echo "<p> A soma do $valor1 e $valor2 é igual a <strong>$resultado</strong>";    
        ?>
    </section>
</body>

</html>