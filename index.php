<?php
require_once 'vendor/autoload.php';

use  Jdev\Cacaalavra\SearchWord;

$searching = SearchWord::searchWord('Algodão');

print_r($searching);

