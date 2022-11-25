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
    error_reporting(0);
    if(isset($_POST['bt-send']))
    {
        $word = filter_input(INPUT_POST,'text',FILTER_SANITIZE_SPECIAL_CHARS);
        try {
            $resposta = SearchWord::searchWord($word);
            if($resposta == NULL)
            {
                throw new Exception("Palavra não encontrada.", 1);
            }
            else
            {
                foreach ($resposta  as $resposta)
                {
                    echo "<pre>";
                    print_r($resposta);
                    echo "</pre>";
                }
            }
        }
        catch (Exception $e)
            {
                echo $e->getMessage();
            }

    }
    ?>


</body>
</html>