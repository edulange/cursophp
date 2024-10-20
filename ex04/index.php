<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Servidor</title>
</head>

<body>
    <h1>Exemplo de PHP</h1>

    <div>
        php é uma linguagem fracamente tipada
        ou seja os tipos são bem dinâmicos
        como o JS.
    </div>
    <h2>Existem 3 tipos primitivos</h2>
    <h3>Escalares</h3>
    <ul>
        <li>String</li>
        <li>int ou integer</li>
        <li>float, double ou real (real deixou de existir no 7.4)</li>
        <li>Boolean</li>
    </ul>
    <?php 
       $var1 = "RJ"; //string
       $var2 = 3.1415; //float ou double
       $var3 = 17; //int
       $var4 = true; //boolean ou bool
       $var5 = ""; //string
       $var6 = -19; //int
       $var7 = "false"; //string
       $var8 = 0x1A; //int (da base hexadecimal)
       $var9 = 3e2; //float (3 x 10²)
       $var10 = "1024"; //string 

       $varForçando = (integer) 3e2; //coerção, força o tipo
       $stringToNum = (integer) "200";
       $v = 300;
       var_dump($varForçando); //testar o tipo primitivo
       var_dump($stringToNum); //testar o tipo primitivo

       
       $teste = [6, 2.34556, "Eduado", 2, false];
       var_dump($teste);
       
    ?>
    <span>No php o true = 1 e false = 0
        então se eu der um echo $variavel (que for false) vai aparecer vazio
    </span>

    <h2>Os outros dois tipos primitivos:</h2>
    <h3>Compostos</h3>
    <span>Array</span>
    <span>Object</span>
    <h3>Especiais</h3>
    <span>null</span>
    <span>Resource</span>
    <span>Callable</span>
    <span>mixed</span>
</body>

</html>