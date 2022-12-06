<?php
namespace Jdev\Cacaalavra;

class SearchWord
{
    public static function searchWord($word)
    {
        $url = "https://api.dicionario-aberto.net/word/".$word."/";
        $response = file_get_contents($url);
        $response =  json_decode($response, true);
        return isset($response['word_id']) ? $response : null;
    }
}