<?php
require_once 'vendor/autoload.php';

use  Jdev\Cacaalavra\SearchWord;

$searching = SearchWord::searchWord($argv[1]);

if(!isset($searching))
        die("Palavra ou termo não encontrado.");
        else
            print_r($searching);


