<?php
require_once 'vendor/autoload.php';
use  Jdev\Cacaalavra\SearchWord;
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Search Word</title>
</head>
<body>
<form method="post" action="#">
    <input type="text" name="text" placeholder="Digite o termo para pesquisa..." id="text" required>
    <input type="submit" value="BUSCAR" id="bot" name="bt-send">

    <?php

        $word = filter_input(INPUT_POST,'text',FILTER_SANITIZE_SPECIAL_CHARS);
        $resposta = SearchWord::searchWord($word);

        print_r($resposta);

    ?>


</body>
</html>