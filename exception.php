<?php


try
{
    //VERIFICA SE O NUMERO FOI DEFINIDO.
    if(empty($_GET['numero']))
    {
        throw new \Exception('Número não definido.');
    }
    //VERIFICA SE É NUMERO.
    if(!is_numeric($_GET['numero']))
    {
        throw new Exception('Valor não é número.');
    }
    echo $_GET['numero'];
}
catch (\Exception $e)
{
    echo $e ->getMessage();
}
