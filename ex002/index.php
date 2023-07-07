<!doctype html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
<h1>Exemplo de PHP</h1>
<?php
date_default_timezone_set("America/Sao_Paulo");
echo "Hoje é dia " . date("D/M/Y");
echo "e a hora atual é " . date("G:i:s T"); //GMT -3
?>
</body>
</html>