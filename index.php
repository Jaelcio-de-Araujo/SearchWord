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
    <input type="text" name="text" placeholder="Digite o termo para pesquisa..." id="text">
    <input type="submit" value="BUSCAR ->" id="bot">

<?php
@$word = $_POST["text"];

$searching = SearchWord::searchWord($word);

if(empty($searching))
    die("Palavra ou termo não encontrada(o).");
else
    print_r($searching);
?>

</body>
</html>