<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
<h1>Teste de tipos primitivos</h1>
<?php
// 0x = hexadecimal
$num = 0x1A;
echo "O valor da variável é $num <br>";

// 0b = binário
$num = 0b1011;
echo "O valor da variável é $num <br>";

// 0 = octal
$num = 010;
echo "O valor da variável é $num <br>";
echo "<br>";
echo "vardump: <br>";

$valor = 300;
var_dump($valor);
$valor = 45.2;
var_dump($valor);
$valor = true;
var_dump($valor);
$valor = "Tieli";
var_dump($valor);
echo "<br>";
echo "<br>";

echo "3e2 <br>"; // 3 x 10²
//    $num = 3e2;
//    var_dump($num);
//    $num = (integer) 3e2;
//    var_dump($num);
$num = (string) 3e2;
var_dump($num);
echo "<br>";
echo "<br>";

//variável bool vem vazia quando falso em echo/print
$casado = false;
echo "Casado é $casado<br>";
var_dump($casado);
echo "<br>";
echo "<br>";

//variável bool é = 1 ou qualquer outro valor que não seja false quando true em echo/print
$casado = true;
echo "Casado é $casado<br>";
var_dump($casado);
echo "<br>";
echo "<br>";

$vet = [6, 6.5, "Tieli", 3, false];
var_dump($vet);
echo "<br>";
echo "<br>";

class Pessoa {
    private string $nome;
    private string $sobrenome;
}

$p = new Pessoa;
var_dump($p);
?>
</body>
</html>