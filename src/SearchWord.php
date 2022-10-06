<?php
namespace Jdev\Cacaalavra;

class SearchWord
{
    public static function searchWord($word)
    {
        $url = "https://significado.herokuapp.com/v2/".$word."/";
        $response = file_get_contents($url);
        $response =  json_decode($response, true);
        return $response;
    }
}