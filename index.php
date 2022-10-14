<?php
require_once 'vendor/autoload.php';

use  Jdev\Cacaalavra\SearchWord;

$searching = SearchWord::searchWord('Algodão');

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscar palavras</title>
</head>
<body>
    <input type="text" placeholder="Digite uma palavra para buscar">
    <input type="submit" value="Buscar">    
</body>
</html>
